<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $addresses = ShippingAddress::where('user_id', $user->id)->get();
    $defaultAddress = $addresses->where('default', 1)->first();

    if ($addresses->isEmpty() || is_null($defaultAddress)) {
        toastr()->error('Vui lòng thêm địa chỉ giao hàng!');
        return redirect()->route('account');
    }

    $cartItems = CartItem::where('user_id', $user->id)->with('product')->get();
    $totalPrice = $cartItems->sum(fn ($item) => $item->quantity * $item->product->price );
    return view('clients.pages.checkout', compact(
        'addresses',
        'defaultAddress',
        'cartItems',
        'totalPrice'
    ));

}

    public function getAddress(Request $request)
    {
        $address = ShippingAddress::where('id', $request->address_id)
            ->where('user_id', Auth::id())
            ->first();

        if (!$address) {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy địa chỉ!'
            ]);
        }

        return response()->json([
            'success' => true,
            'address' => $address
        ]);
    }

    public function placeOrder(Request $request)
{
    $user = Auth::user();
    $cartItems = CartItem::where('user_id', $user->id)
        ->get();

    if ($cartItems->isEmpty()) {
        return redirect()
            ->route('cart')
            ->with('error', 'Giỏ hàng trống!');
    }

    DB::beginTransaction();

    try {


        // Create order
        $order = new Order();
        $order->user_id = $user->id;
        $order->shipping_address_id = $request->address_id;
        $order->total_price = $cartItems->sum(fn ($item) => $item->quantity * $item->product->price) + 25000;
        $order->status = 'pending';
        $order->save();

        // Create order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $item->product_id,
                'quantity'   => $item->quantity,
                'price'      => $item->product->price,
            ]);

            $product = $item->product;

            if ($product->stock < $item->quantity) {
                throw new \Exception("Sản phẩm {$product->name} không đủ hàng trong kho.");
            }

            // Trừ số lượng
            $product->stock -= $item->quantity;
            $product->save();

        }

        // Create payment 
        Payment::create([
                'order_id'       => $order->id,
                'payment_method' => $request->payment_method,
                'amount'         => $order->total_price,
                'status'         => 'pending',
                'paid_at'        => null,
            ]);

            // Delete cart items after order
            CartItem::where('user_id', $user->id)->delete();

            DB::commit();

            toastr()->success('Đặt hàng thành công!');
            return redirect()->route('account');

        } catch (\Exception $e) {
            Log::error('Lỗi đặt hàng: ' . $e->getMessage());
            DB::rollBack();

            toastr()->error('Có lỗi xảy ra, vui lòng thử lại!');
            return redirect()->route('checkout');
        }
        }


}
