@extends('layouts.client')

@section('title', 'Tìm kiếm')

@section('breadcrumb', 'Tìm kiếm')

@section('content') 

        <!-- PRODUCT DETAILS AREA START -->
        <div class="ltn__product-area ltn__product-gutter mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_product_grid">
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container-fluid px-5">
        <div class="row g-4">

            @foreach ($products as $product)
            <div class="col-6 col-md-4 col-xl-3">
                <div class="ltn__product-item ltn__product-item-3 text-center">

                    <div class="product-img">
                        <a href="{{ route('product.detail',$product->slug) }}">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        </a>
                    </div>

                    <div class="product-info">
                        <div class="product-ratting">
                            @include('clients.components.includes.rating', ['product'=>$product])
                        </div>

                        <h2 class="product-title">
                            <a href="{{ route('product.detail',$product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h2>

                        <div class="product-price">
                            <span>{{ number_format($product->price,0,',',',') }} VNĐ</span>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT DETAILS AREA END -->

    
@endsection
