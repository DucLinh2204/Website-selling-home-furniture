@extends('layout')
@section('title')
    Trang Chủ
@endsection
@section('body')


<!-- Start Hero Section -->
<div class="container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Banner.png') }}" class="d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Banner1.png') }}" class="d-block w-100" alt="Banner1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Banner2.png') }}" class="d-block w-100" alt="Banner2">
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Start Column 1 -->
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('images/bannerNgu.webp') }}" class="d-block w-100 mb-3" alt="Banner An">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/bannerKhach.webp') }}" class="d-block w-100 mb-3" alt="Banner Khach">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/Combo.webp') }}" class="d-block w-100 mt-3" alt="Combo">
                    </div>
                </div>
                <!-- End Column 1 -->
            </div>

            <div class="col-md-6">
                <div class="row">
                    <!-- Product 1 -->
                    @foreach($bannersp as $sp)
                    <div class="col-md-6 mb-1 my-3">
                        <a class="product-item" href="{{ url('/detail', [$sp->id]) }}">
                            <img src="../images/product/{{ $sp->image }}" class="img-fluid product-thumbnail" alt="Product 1">
                            <h3 class="product-title">{{ $sp->name }}</h3>
                            <p class="product-price text-decoration-line-through">{{ number_format($sp->price) }} VNĐ</p>
                            <strong class="product-price" style="color: #03989E;">{{number_format($sp->sale_price) }} VNĐ</strong>
                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid" alt="Cross">
                            </span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="bg-light h-100 py-3">
        <div class="container">
            <div class="row justify-content-between my-5">
                <div class="col-6 col-md-3">
                    <div class="feature">
                        <div class="icon">
                            <img src="images/truck.svg" alt="Image" class="img-fluid">
                        </div>
                        <h3>Miễn Phí Vận Chuyển</h3>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="feature">
                        <div class="icon">
                            <img src="images/bag.svg" alt="Image" class="img-fluid">
                        </div>
                        <h3>Mua Hàng Dễ Dàng</h3>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="feature">
                        <div class="icon">
                            <img src="images/support.svg" alt="Image" class="img-fluid">
                        </div>
                        <h3>Hỗ Trợ 24/7</h3>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="feature">
                        <div class="icon">
                            <img src="images/return.svg" alt="Image" class="img-fluid">
                        </div>
                        <h3>Dễ Dàng Hoàn Trả</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Popular Product -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <h3 class="text-dark">Sản Phẩm</h3>
            <div class="d-flex">
                <a href="/shop/0" style="color: #03989E;" class="btn">Xem Thêm</a>
            </div>
        </div>
    </nav>
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @foreach($products as $sp)
                <!-- Start Column -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{ url('/detail', [$sp->id]) }}">
                        <img src="../images/product/{{ $sp->image }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title text-lg">{{ $sp->name }}</h3>
                        <p class="product-price text-decoration-line-through">{{ number_format($sp->price) }} VNĐ</p>
                        <strong class="product-price" style="color: #03989E;">{{number_format($sp->sale_price) }} VNĐ</strong>
                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column -->
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Popular Product -->

<!-- Start We Help Section -->
<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                    <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                    <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">Chúng tôi giúp bạn thiết kế nội thất hiện đại</h2>
                <ul class="list-unstyled custom-list my-4">
                    <li><strong>Sự Phối Hợp Giữa Sáng Tạo và Chức Năng</strong><br>Chúng tôi tạo ra các không gian sống đẹp mắt, đảm bảo rằng mỗi thiết kế là chức năng và phản ánh sự cá nhân của bạn.</li>
                    <li><strong>Sự Tiện Nghi và Tiết Kiệm Không Gian</strong><br>Thiết kế thông minh để tối ưu hóa không gian, bao gồm cách sử dụng ánh sáng tự nhiên, lựa chọn nội thất đa năng và sử dụng vật liệu thông minh.</li>
                    <li><strong>Sự Kết Hợp Hoàn Hảo của Thẩm Mỹ và Sự Thoải Mái</strong><br>Với sự chú trọng vào chi tiết và sự tỉ mỉ trong từng công đoạn, đảm bảo rằng không gian sống của bạn không chỉ đẹp mắt mà còn mang lại sự thoải mái và hài lòng tối đa.</li>
                    <li><strong>Liên Kết với Thiên Nhiên và Môi Trường</strong><br>Chúng tôi tin rằng việc tạo ra môi trường sống lành mạnh không chỉ là tốt cho sức khỏe của bạn với việc sử dụng vật liệu tự nhiên và thiết kế hướng về thiên nhiên.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <h3 class="text-dark">Sản Phẩm Mua Nhiều</h3>
            <div class="d-flex">
                <a href="/shop/0" style="color: #03989E;" class="btn">Xem Thêm</a>
            </div>
        </div>
    </nav>
    <div class="untree_co-section product-section before-footer-section">
        <div id="carouselExample1" class="carousel slide" data-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row flex-row flex-nowrap overflow-hidden" id="productContainer">
                            @foreach($products as $sp)
                            <!-- Start Column -->
                            <div class="col-12 col-md-4 col-lg-3 mb-5">
                                <a class="product-item" href="{{ url('/detail', [$sp->id]) }}">
                                    <img src="../images/product/{{ $sp->image }}" class="img-fluid product-thumbnail">
                                    <h3 class="product-title text-lg">{{ $sp->name }}</h3>
                                    <strong class="product-price" style="color: #03989E">{{($sp->sale_price) }}</strong>
                                    <p class="product-price text-decoration-line-through">{{($sp->price) }}</p>
                                    <span class="icon-cross">
                                        <img src="../images/cross.svg" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                            <!-- End Column -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
