@extends('layouts.client_home')

@section('title', 'Trang chủ')

@section('content') 



        <!-- SLIDER AREA START (slider-3) -->
        <div class="ltn__slider-area ltn__slider-3  section-bg-1">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-3-normal bg-image"
                    data-bg="{{ asset('assets/clients/img/slider/13.jpg') }}">
                    <div class="ltn__slide-item-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                                    href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&amp;showinfo=0"
                                                    data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <h6 class="slide-sub-title animated"><img src="{{ asset('assets/clients/img/icons/icon-img/1.png')}}"
                                                    alt="#"> Rau củ tươi ngon mỗi ngày</h6>
                                            <h1 class="slide-title animated ">Trải nghiệm hương vị <br> tự nhiên từ nông trại</h1>
                                            <div class="slide-brief animated">
                                                <p>Chúng tôi mang đến những loại rau củ tươi sạch, an toàn, giàu dinh dưỡng, trực tiếp từ nông trại đến bàn ăn của bạn .</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{ route("product.index") }}"
                                                    class="theme-btn-1 btn btn-effect-1 text-uppercase">Khám phá ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-3-normal bg-image"
                    data-bg="{{ asset('assets/clients/img/slider/14.jpg')}}">
                    <div class="ltn__slide-item-inner  text-right text-end">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title ltn__secondary-color animated">// Rau tươi & hữu cơ</h6>
                                            <h1 class="slide-title animated ">Ngon & Lành mạnh <br> Thực phẩm hữu cơ</h1>
                                            <div class="slide-brief animated">
                                                <p>Chúng tôi cung cấp sản phẩm chất lượng, tươi ngon và an toàn cho sức khỏe. Hãy trải nghiệm ngay hôm nay.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{ route("product.index") }}"
                                                    class="theme-btn-1 btn btn-effect-1 text-uppercase">Khám phá sản phẩm</a>
                                                <a href="{{ route("about") }}" class="btn btn-transparent btn-effect-3">Tìm hiểu thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <!-- BANNER AREA START -->
        <div class="ltn__banner-area mt-120 mb-90">
            <div class="container">
                <div class="row ltn__custom-gutter--- justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/13.png')}}" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/14.png')}}" alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/15.png')}}" alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER AREA END -->


        <!-- CATEGORY AREA START -->
        <div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-115 pb-90"
            data-bg="{{ asset('assets/clients/img/bg/5.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title white-color">Danh mục</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__category-slider-active slick-arrow-1">
                    @foreach ($categories as $category)
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-3 text-center">
                            <div class="ltn__category-item-img">
                                <a>
                                    <img src="{{ asset('storage/'.$category->image)}}" alt="{{ $category->name }}">
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h5><a href="shop.html">{{ $category->name }}</a></h5>
                                <h6>({{ $category->products->count() }} sản phẩm)</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- CATEGORY AREA END -->

     <!-- PRODUCT TAB AREA START (product-item-3) -->
<div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Sản Phẩm</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                    <div class="nav">
                        @foreach ($categories as $index => $category)
                            <a class="{{ $index == 0 ? 'active show' : '' }}" 
                               data-bs-toggle="tab" 
                               href="#tab_{{ $category->id }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="tab-content">
                    @foreach ($categories as $index => $category)
                        <div class="tab-pane fade {{ $index == 0 ? 'active show' : '' }}" 
                             id="tab_{{ $category->id }}">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    @foreach ($category->products as $product)
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{ $product->image_url }}" 
                                                             alt="{{ $product->name }}">
                                                    </a>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Xem Nhanh" 
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#quick_view_modal-{{ $product->id }}">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Thêm vào giỏ hàng" 
                                                                   class="add-to-cart-btn" 
                                                                   data-id="{{ $product->id }}">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Yêu thích" 
                                                                   class="add-to-wishlist"
                                                                   data-id="{{ $product->id }}">
                                                                    <i class="far fa-heart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        @include('clients.components.includes.rating', [
                                                            'product' => $product
                                                        ])
                                                    </div>
                                                    <h2 class="product-title">
                                                        <a href="#">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h2>
                                                    <div class="product-price">
                                                        <span>{{ number_format($product->price, 0, ',', '.') }} VNĐ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT TAB AREA END -->

<!-- Include modals for all products -->
@foreach ($categories as $category)
    @foreach ($category->products as $product)
        @include('clients.components.includes.include-modals', ['product' => $product])
    @endforeach
@endforeach

        <!-- COUNTER UP AREA START -->
        <div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="{{ asset('assets/clients/img/bg/5.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/2.png')}}" alt="#"> </div>
                            <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Active Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/3.png')}}" alt="#"> </div>
                            <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                    class="counterUp-icon">+</span> </h1>
                            <h6>Cup Of Coffee</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/4.png')}}" alt="#"> </div>
                            <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Get Rewards</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/5.png')}}" alt="#"> </div>
                            <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Country Cover</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA END -->

      <!-- PRODUCT AREA START (BEST SELLING) -->
<div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Sản phẩm bán chạy</h1>
                </div>
            </div>
        </div>

        <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
            @foreach ($bestSellingProducts as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-left">

                        {{-- IMAGE --}}
                        <div class="product-img">
                            <a href="{{ route('product.detail', $product->slug) }}">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                            </a>

            

                            {{-- ACTION --}}
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" title="Xem nhanh"
                                           data-bs-toggle="modal"
                                           data-bs-target="#quick_view_modal-{{ $product->id }}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)"
                                           class="add-to-cart-btn"
                                           data-id="{{ $product->id }}"
                                           title="Thêm vào giỏ hàng">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" title="Yêu thích"
                                           data-bs-toggle="modal"
                                           data-bs-target="#liton_wishlist_modal-{{ $product->id }}">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- INFO --}}
                        <div class="product-info">
                            <div class="product-ratting">
                                @include('clients.components.includes.rating', [
                                    'product' => $product
                                ])
                            </div>

                            <h2 class="product-title">
                                <a href="{{ route('product.detail', $product->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h2>

                            <div class="product-price">
                                <span>{{ number_format($product->price, 0, ',', '.') }} VNĐ</span>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->


        <!-- CALL TO ACTION START (call-to-action-4) -->
        <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bg="{{ asset('assets/clients/img/bg/6.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-to-action-inner call-to-action-inner-4 text-center">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color">// Bất kì câu hỏi nào bạn có //</h6>
                                <h1 class="section-title white-color">897-876-987-90</h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="tel:+123456789" class="theme-btn-1 btn btn-effect-1">GỌI ĐIỆN</a>
                                <a href="contact.html" class="btn btn-transparent btn-effect-4 white-color">LIÊN HỆ
                                    US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__call-to-4-img-1">
                <img src="{{ asset('assets/clients/img/bg/12.png')}}" alt="#">
            </div>
            <div class="ltn__call-to-4-img-2">
                <img src="{{ asset('assets/clients/img/bg/11.png')}}" alt="#">s
            </div>
        </div>
        <!-- CALL TO ACTION END -->


    
    
@endsection

