@extends('layouts.client')

@section('title', 'Đăng nhập')

@section('breadcrumb', 'Đăng nhập')

@section('content') 

        <!-- LOGIN AREA START -->
        <div class="ltn__login-area pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title">Đăng nhập <br>Vào tài khoản của bạn</h1>
                            <p>Vui lòng đăng nhập thông tin đăng nhập của bạn để truy cập tài khoản và bắt đầu mua sản phẩm tươi sống.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="account-login-inner">
                            <form action="#" class="ltn__form-box contact-form-box" method="POST" id="login-form">
                                @csrf

                                <input type="email" name="email" placeholder="Email*" required>
                                @error('email')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <input type="password" name="password" placeholder="Mật khẩu*" required>
                                 @error('password')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="btn-wrapper mt-0">
                                    <button class="theme-btn-1 btn btn-block" type="submit">Đăng nhập</button>
                                </div>
                                <div class="go-to-btn mt-20">
                                    <a href="{{ route('password.request') }}"><small>Bạn quên mật khẩu?</small></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-create text-center pt-50">
                            <h4>Chưa có tài khoản?</h4>
                            <p>Thêm sản phẩm vào danh sách yêu thích, nhận gợi ý cá nhân hóa,xem nhanh hơn, theo dõi đơn hàng và đăng ký tài khoản.</p>
                            <div class="btn-wrapper">
                                <a href="{{route('register') }}" class="theme-btn-1 btn black-btn">Tạo tài khoản</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN AREA END -->

    
@endsection
