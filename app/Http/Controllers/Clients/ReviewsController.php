<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

use App\Models\Review;

class ReviewsController extends Controller
{
    public function index(Product $product)
{
    return view(
        'clients.components.includes.review-list',
        compact('product')
    )->render();
}
    public function createReview(Request $request)
{
    // Validate dữ liệu gửi lên
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'rating'     => 'required|integer|min:1|max:5',
        'comment'    => 'nullable|string',
    ]);

    // Tạo review mới
    $review = new Review();
    $review->user_id    = Auth::id();
    $review->product_id = $request->product_id;
    $review->rating     = $request->rating;
    $review->comment    = $request->comment;
    $review->save();

    // Trả về JSON
    return response()->json([
        'status'  => true,
        'message' => 'Đánh giá đã được gửi!',
    ], 200);
}
}
