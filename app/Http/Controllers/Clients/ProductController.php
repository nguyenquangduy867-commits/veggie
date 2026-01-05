<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Models\OrderItem;
use App\Models\Review;

use Illuminate\Http\JsonResponse;
class ProductController extends Controller
{
    public function index(): View
{
    $categories = Category::with('products')->get();
    $products = Product::with('firstImage')->where('status', 'in_stock')->paginate(9);

    return view('clients.pages.products', compact('categories', 'products'));
}

public function filter(Request $request)
{
    $query = Product::query();

    // Filter category nếu có
    if ($request->has('category_id') && $request->category_id != '') 
        {
        $query->where('category_id', $request->category_id);
    }

    // Filter price nếu có
    if ($request->has('min_price') && $request->has('max_price')) 
        {
        $query->whereBetween('price', [ $request->min_price, $request->max_price ]);
    }

    // Filter SortBy nếu có
    if ($request->has('sort_by')) {
        switch ($request->sort_by) {
            case 'price_asc':   // Giá thấp → cao
                $query->orderBy('price', 'asc');
                break;

            case 'price_desc':  // Giá cao → thấp
                $query->orderBy('price', 'desc');
                break;

            case 'latest':      // Hàng mới về
                $query->orderBy('created_at', 'desc');
                break;

            default:            // Mặc định
                $query->orderBy('id', 'desc');
                break;
        }
    }
    $products = $query->paginate(9);



    return response()->json([
        'products' => view('clients.components.products_grid', compact('products'))->render(),
        'pagination' => $products->links('clients.components.pagination.pagination_custom')->render()

    ]);
}
    public function detail( $slug)
{
    $product = Product::with(['category', 'images','reviews.user'])->where('slug', $slug) ->firstOrFail();

// Get related products (same category, exclude current product)
    $relatedProducts = Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->limit(6)
    ->get();

    $averageRating = round($product->reviews()->avg('rating'), 1);


    $hasPurchased = false;
    $hasReviewed  = false;

if (Auth::check()) {
    $user = Auth::user();

    // Kiểm tra đã mua sản phẩm (đơn hàng completed)
    $hasPurchased = OrderItem::whereHas('order', function (Builder $query) use ($user) {
        $query->where('user_id', $user->id)
              ->where('status', 'completed');
    })
    ->where('product_id', $product->id)
    ->exists();

    // Kiểm tra đã review chưa
    $hasReviewed = Review::where('user_id', $user->id)
                         ->where('product_id', $product->id)
                         ->exists();
}

    return view('clients.pages.product-detail', compact('product','relatedProducts','hasPurchased',
    'hasReviewed','averageRating')); 
}

}
