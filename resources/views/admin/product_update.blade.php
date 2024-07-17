@extends('layoutAdmin')
@section('title')
    Sửa sản phẩm
@endsection
@section('bodyadmin')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between" style="margin-top: 70px;">
        <h3 class="mb-4">Sửa sản phẩm</h3>
        <div>
            <a href="{{ route('admin.product') }}" class="btn btn-outline-secondary rounded-0">
                Quay lại
            </a>
        </div>
    </div>
    <form class="row" action="{{ route('admin.product.postProductUpdate', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8 mb-4">
            <div class="card rounded-0 border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="pb-3 border-bottom">Thông tin sản phẩm</h6>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control rounded-0" id="name" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="number" class="form-control rounded-0" id="price" name="price" value="{{ $product->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="sale_price" class="form-label">Giá khuyến mãi</label>
                        <input type="number" class="form-control rounded-0" id="sale_price" name="sale_price" value="{{ $product->sale_price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="instock" class="form-label">Số lượng</label>
                        <input type="number" class="form-control rounded-0" id="instock" name="instock" value="{{ $product->instock }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Đánh giá</label>
                        <input type="number" class="form-control rounded-0" id="rating" name="rating" value="{{ $product->rating }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control rounded-0" id="image" name="image">
                        <div class="mt-3">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="Current Image" width="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <button type="submit" class="btn btn-primary btn-lg rounded-0 mt-4 w-100">Sửa sản phẩm</button>
        </div>
    </form>
</div>
<script>
    var imgInp = document.querySelector('#image');
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            document.querySelector('#image+div img').src = URL.createObjectURL(file)
        }
    }
</script>
@endsection
