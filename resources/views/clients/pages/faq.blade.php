@extends('layouts.client')

@section('title', 'FAQ')

@section('breadcrumb', 'Những Câu Hỏi Thường Gặp')

@section('content') 

        <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
        <div class="ltn__faq-area mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ltn__faq-inner ltn__faq-inner-2">
                            <div id="accordion_2">
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-1" aria-expanded="false">
                                        Hướng dẫn mua hàng
                                    </h6>
                                    <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp những sản phẩm được chọn lọc kỹ lưỡng, mang đến trải nghiệm mua sắm tốt nhất cho khách hàng. Mỗi sản phẩm đều được đảm bảo nguồn gốc rõ ràng và được chăm sóc tỉ mỉ từ quy trình trồng trọt, thu hoạch đến đóng gói.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                        aria-expanded="true">
                                        Làm thế nào để hoàn tiền đơn hàng?
                                    </h6>
                                    <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <div class="ltn__video-img alignleft">
                                                <img src="{{  asset('assets/clients/img/bg/17.jpg')}}" alt="video popup bg image">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                                    href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                                    data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp các sản phẩm được chọn lọc kỹ lưỡng. Mỗi sản phẩm được chăm sóc tỉ mỉ từ khâu trồng trọt, thu hoạch đến đóng gói, nhằm mang đến trải nghiệm mua sắm tốt nhất và sự hài lòng tuyệt đối cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-3" aria-expanded="false">
                                        Là người dùng mới? Bắt đầu như thế nào?
                                    </h6>
                                    <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp các sản phẩm được chọn lọc kỹ lưỡng. Mỗi sản phẩm được chăm sóc tỉ mỉ từ khâu trồng trọt, thu hoạch đến đóng gói, nhằm mang đến trải nghiệm mua sắm tốt nhất và sự hài lòng tuyệt đối cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-4" aria-expanded="false">
                                        Chính sách đổi trả & hoàn tiền
                                    </h6>
                                    <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp các sản phẩm được chọn lọc kỹ lưỡng. Mỗi sản phẩm được chăm sóc tỉ mỉ từ khâu trồng trọt, thu hoạch đến đóng gói, nhằm mang đến trải nghiệm mua sắm tốt nhất và sự hài lòng tuyệt đối cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-5" aria-expanded="false">
                                        Thông tin cá nhân của bạn có được bảo mật không?
                                    </h6>
                                    <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp những sản phẩm được chọn lọc kỹ lưỡng. Mỗi sản phẩm được chăm sóc tỉ mỉ từ khâu trồng trọt, thu hoạch đến đóng gói, nhằm mang đến trải nghiệm mua sắm tốt nhất và sự hài lòng tuyệt đối cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-6" aria-expanded="false">
                                        Mã giảm giá bạn nhập không sử dụng được
                                    </h6>
                                    <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp những sản phẩm được chọn lọc kỹ lưỡng. Mỗi sản phẩm được chăm sóc tỉ mỉ từ khâu trồng trọt, thu hoạch đến đóng gói, nhằm mang đến trải nghiệm mua sắm tốt nhất và sự hài lòng tuyệt đối cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-7" aria-expanded="false">
                                        Làm sao để thanh toán bằng thẻ tín dụng?
                                    </h6>
                                    <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Với cam kết về chất lượng và an toàn, chúng tôi cung cấp những sản phẩm được chọn lọc kỹ lưỡng. Mỗi sản phẩm được chăm sóc tỉ mỉ từ khâu trồng trọt, thu hoạch đến đóng gói, nhằm mang đến trải nghiệm mua sắm tốt nhất và sự hài lòng tuyệt đối cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="need-support text-center mt-100">
                                <h2>Hãy liên hệ hỗ trợ mọi lúc, 24/7 nếu bạn cần giúp đỡ:</h2>
                                <div class="btn-wrapper mb-30">
                                    <a href="{{ route("contact.index") }}" class="theme-btn-1 btn">Liên hệ ngay</a>
                                </div>
                                <h3><i class="fas fa-phone"></i> +0965-518-300</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar-area ltn__right-sidebar">
                            <!-- Newsletter Widget -->
                            <div class="widget ltn__search-widget ltn__newsletter-widget">
                                <h6 class="ltn__widget-sub-title">// Đăng kí</h6>
                                <h4 class="ltn__widget-title">Nhận tin tức mới nhất</h4>
                                <form action="#">
                                    <input type="text" name="search" placeholder="Tìm kiếm">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                                <div class="ltn__newsletter-bg-icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                            </div>
                            <!-- Banner Widget -->
                            <div class="widget ltn__banner-widget">
                                <a href="shop.html"><img src="{{  asset('assets/clients/img/banner/banner-3.jpg')}}" alt="Banner Image"></a>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ AREA START -->

        <!-- COUNTER UP AREA START -->
        <div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="img/bg/5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{  asset('assets/clients/img/icons/icon-img/2.png')}}" alt="#"> </div>
                            <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Active Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{  asset('assets/clients/img/icons/icon-img/3.png')}}" alt="#"> </div>
                            <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                    class="counterUp-icon">+</span> </h1>
                            <h6>Cup Of Coffee</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{  asset('assets/clients/img/icons/icon-img/4.png')}}" alt="#"> </div>
                            <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Get Rewards</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item-3 text-color-white text-center">
                            <div class="counter-icon"> <img src="{{  asset('assets/clients/img/icons/icon-img/5.png')}}" alt="#"> </div>
                            <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Country Cover</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA END -->

    
@endsection
