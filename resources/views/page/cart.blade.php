@extends('layout')

@section('title')
    Giỏ Hàng
@endsection

@section('body')
<style>
    .form-control {
        width: 100%;
    }
</style>
@php
$totalPrice = 0;
@endphp
<div class="container">
    <div class="my-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-sp"><a style=" color: #03989E ;">Giỏ Hàng /</a></li>
                <li class="breadcrumb-sp active" aria-current="page"> Đơn Hàng</li>
            </ol>
        </nav>
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Hình Ảnh</th>
                                <th class="product-name">Sản Phẩm</th>
                                <th class="product-price">Giá</th>
                                <th class="product-price">Giá Khuyến Mãi</th>
                                <th class="product-quantity">Số Lượng</th>
                                <th class="product-total">Tổng</th>
                                <th class="product-remove">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $sp)
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="../images/product/{{$sp['image']}}" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{ $sp['name'] }}</h2>
                                </td>
                                <td>{{ number_format($sp['price']) }}đ</td>
                                <td>{{ number_format($sp['sale_price']) }}đ</td>
                                <td>
                                    <div class="count-input" style="padding-left: 50px">
                                        <input type="number" class="form-control" value="{{ $sp['quantity'] }}" min="1">
                                    </div>
                                </td>
                                <td>
                                    <p>{{ number_format($sp['sale_price'] * $sp['quantity']) }}đ</p>
                                </td>
                                <td>
                                    <form action="/cart/delete/{{$sp['id']}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" value="{{ $sp['id'] }}">
                                        <button type="submit" class="btn"><i class="fa-solid fa-xmark"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div>
            <form action="{{ route('checkout') }}" method="POST" class="row">
                @csrf
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <a href="/shop/0" class="btn btn-outline-dark btn-block">Tiếp Tục Mua Hàng</a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Hoá Đơn</h2>
                        <div class="p-3 p-lg-5 border bg-white">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="name" class="text-black">Họ tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{ old('name', Auth::check() ? Auth::user()->name : '') }}">
                                    @error('name')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address"
                                           value="{{ old('address', Auth::check() ? Auth::user()->address : '') }}">
                                    @error('address')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email"
                                           value="{{ old('email', Auth::check() ? Auth::user()->email : '') }}">
                                    @error('email')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                           value="{{ old('phone', Auth::check() ? Auth::user()->phone : '') }}">
                                    @error('phone')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="c_order_notes" class="text-black">Ghi chú</label>
                                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5"
                                          class="form-control" placeholder="Viết ghi chú...">{{ old('c_order_notes') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 pl-md-5">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Đơn hàng</h2>
                            <div class="p-3 p-lg-5 border bg-white">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th class="h5">Sản phẩm</th>
                                        <th class="h5">Tổng</th>
                                    </thead>
                                    <tbody>
                                        @php $totalPrice = 0; @endphp
                                        @foreach($cart as $sp)
                                            @php
                                                $subtotal = $sp['sale_price'] * $sp['quantity'];
                                                $totalPrice += $subtotal;
                                            @endphp
                                            <tr>
                                                <td class="product-name">
                                                    <p class="text-black">{{ $sp['name'] }} x {{ $sp['quantity'] }}</p>
                                                </td>
                                                <td>{{ number_format($subtotal) }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>Tổng tiền</strong></td>
                                            <td class="text-black font-weight-bold"><strong>{{ number_format($totalPrice) }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0">
                                        <a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Chuyển khoản ngân hàng.</a>
                                    </h3>
                                    <div class="collapse" id="collapsebank">
                                        <div class="py-2">
                                            <p class="mb-0">Chi tiết tài khoản ngân hàng sẽ được gửi qua email.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0">
                                        <a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Thanh toán khi nhận hàng.</a>
                                    </h3>
                                    <div class="collapse" id="collapsecheque">
                                        <div class="py-2">
                                            <p class="mb-0">Bạn có thể thanh toán bằng tiền mặt khi nhận hàng.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success btn-lg border py-3 btn-block">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection

