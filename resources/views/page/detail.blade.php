@extends('layout')

@section('title')
    Chi Tiết Sản Phẩm
@endsection

@section('body')
    <style>
        .review {
        list-style: none;
        }
        .custom-button {
            background-color: #03989E;
            color: white;
            height: 100%;
        }

        .quantity-input {
            text-align: center;
        }

    </style>
    <div class="container">
        <div class="my-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a style="color: #03989E;">Cửa Hàng</a></li>
                    <li class="breadcrumb-item"><a style="color: #03989E;">{{ $currentCategories->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $products->name }}</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- Start Item Details -->
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img src="../images/product/{{ $products->image }}" id="current" width="650px" alt="#">
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $products->name }}</h2>
                            <ul class="review d-flex">
                                @for ($i=0; $i< floor($products->rating); $i++)

                                <li><i class="fa-solid fa-star" style="color: #FFD43B;"></i></li>
                                @endfor
                                @for ($i=0; $i< 5-floor($products->rating); $i++)

                                <li><i class="fa-solid fa-star" style="color: #FFD43B;"></i></li>
                                @endfor

                                <li><span>{{number_format($products->rating,1)}} Review(s)</span></li>
                            </ul>
                            <h4 class="price text-lg" style="color: #03989E;">
                                {{ number_format($products->sale_price) }} VNĐ
                                <span class="product-price text-decoration-line-through fs-5 text-secondary">
                                    {{ number_format($products->price) }} VNĐ
                                </span>
                            </h4>
                            <span class="info-text text-lg">
                                {!! $products->short_description !!}
                            </span>
                            <div class="row my-3">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group quantity">
                                        <label for="quantity">Quantity</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary custom-button" type="button" id="decrement">-</button>
                                            </div>
                                            <input type="number" class="form-control form-control-lg quantity-input" value="1" min="1" max="{{$products->instock}}" id="quantityInput" >
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary custom-button" type="button" id="increment">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row my-3">
                                <div class="col-lg-8 col-md-12 col-12">
                                    <div class="button cart-button">
                                        <form action="{{ route('cart.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                                            <input type="hidden" name="quantity" value="1" id="addToCartQuantity">

                                            <!-- Other form fields if necessary -->
                                            <button type="submit" class="btn" style="width: 100%; background-color: #03989E; color: white;">Thêm vào giỏ hàng</button>
                                        </form>
                                        <br>
                                        <div id="notification"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-info my-4 ">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-describe-tab" data-bs-toggle="tab" data-bs-target="#nav-describe" type="button" role="tab" aria-controls="nav-describe" aria-selected="true">Mô Tả</button>
                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Đánh Giá</button>
                    </div>
                </nav>
                <div class="tab-content border" id="nav-tabContent">
                    <div class="tab-pane fade show active px-2" id="nav-describe" role="tabpanel" aria-labelledby="nav-describe-tab" tabindex="0"> {!! $products->description !!}</div>
                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                        <div class="card mb-3 card-horizontal">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="../images/product/{{ $products->image }}" class="card-img" width="250px" alt="Ảnh sản phẩm">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Khách hàng</h5>
                                        <p class="card-text">Tôi rất ấn tượng với sản phẩm này. Nó phản ánh chính xác như mô tả trên trang web. Điều tôi thích nhất là thiết kế đẹp và chất lượng vật liệu tốt.</p>
                                        <p class="card-text"><small class="text-muted">Đăng bởi: Ngày 5 Tháng 4, 2024</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-4">
                <div class="text text-center">
                    <h2>Sản Phẩm Liên Quan</h2>
                </div>
                <div class="untree_co-section product-section before-footer-section">
                    <div class="row">
                        @foreach($products_new as $sp)
                        <!-- Start Column -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="{{ url('/detail', [$sp->id]) }}">
                                <img src="../images/product/{{ $sp->image }}" class="img-fluid product-thumbnail">
                                <h3 class="product-title text-lg">{{ $sp->name }}</h3>
                                <p class="product-price text-decoration-line-through">{{ number_format($sp->price) }} VNĐ</p>
                                <strong class="product-price" style="color: #03989E">{{ number_format($sp->sale_price) }} VNĐ</strong>
                                <span class="icon-cross">
                                    <img src="{{ asset('images/cross.svg') }}" class="img-fluid">
                                </span>
                            </a>
                        </div>
                        <!-- End Column -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Item Details -->
@endsection
@section('viewFunction')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var quantityInput = document.getElementById('quantityInput');
    var addToCartQuantityInput = document.getElementById('addToCartQuantity');
    var incrementButton = document.getElementById('increment');
    var decrementButton = document.getElementById('decrement');

    incrementButton.addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        var maxValue = parseInt(quantityInput.max);
        if (currentValue < maxValue) {
            quantityInput.value = currentValue + 1;
            addToCartQuantityInput.value = quantityInput.value;
        }
    });

    decrementButton.addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        var minValue = parseInt(quantityInput.min);
        if (currentValue > minValue) {
            quantityInput.value = currentValue - 1;
            addToCartQuantityInput.value = quantityInput.value;
        }
    });


    quantityInput.addEventListener('change', function() {
        addToCartQuantityInput.value = quantityInput.value;
        });
    });



    </script>
@endsection
