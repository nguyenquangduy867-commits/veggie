<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
   use App\Models\Order;
   use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

   

class OrderController extends Controller
{


public function showOrder($id)
{

 $order = Order::with(['orderItems.product','user','shippingAddress','payment'])->findOrFail($id);


$userId = auth()->id();


return view('clients.pages.order-detail', compact('order'));

}
public function cancel($id)
{
    $order = Order::where('id', $id)
        ->where('user_id', auth()->id())
        ->where('status', 'pending')
        ->firstOrFail();

    // Hoàn lại số lượng sản phẩm về kho
    foreach ($order->orderItems as $item) {
        $item->product->increment('stock', $item->quantity);
    }

    // Cập nhật trạng thái đơn hàng
    $order->update(['status' => 'canceled']);

    return redirect()->back()->with('success', 'Đơn hàng đã được hủy thành công và sản phẩm được hoàn kho.');
}

public function received($id): RedirectResponse
{
    // Tìm đơn hàng theo id, user hiện tại và status = 'processing'
    $order = Order::where('id', $id)
        ->where('user_id', Auth::id())
        ->where('status', 'processing')
        ->firstOrFail(); // nếu không tìm thấy sẽ throw 404

    // Cập nhật trạng thái đơn hàng thành 'completed'
    $order->update([
        'status' => 'completed'
    ]);

    // Redirect về trang trước với thông báo thành công
    return redirect()->back()->with('success', 'Xác nhận thành công. Bạn có thể đánh giá đơn hàng này!');
}
}
