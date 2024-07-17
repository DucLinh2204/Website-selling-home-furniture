@extends('layoutAdmin')
@section('title')
    Thêm sản phẩm
@endsection
@section('bodyadmin')

    <div class="container-fluid p-4">
            <div class="d-flex justify-content-between" style="margin-top: 70px;">
                <h3 class="mb-4">Thêm sản phẩm</h3>
                <div>
                <a href="{{route('admin.product')}}" class="btn btn-outline-secondary rounded-0">
                     Quay lại
                </a>
                </div>
            </div>
            <form class="row" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-8 mb-4">
                <div class="card rounded-0 border-0 shadow-sm mb-4">
                    <div class="card-body">
                    <h6 class="pb-3 border-bottom">Thông tin sản phẩm</h6>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control rounded-0" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control rounded-0" id="description" name="description" rows="6"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Mô tả ngắn</label>
                        <textarea class="form-control rounded-0" id="short_description" name="short_description"
                        rows="6"></textarea>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="instock" class="form-label">Số lượng</label>
                        <input type="number" class="form-control rounded-0" id="instock" min="0" name="instock" required>
                        </div>
                        <div class="col mb-3">
                        <label for="category" class="form-label">Category</label>
                        <div class="input-group">
                            <select class="form-select rounded-0" id="category" name="category_id" required>
                                @foreach ($listCategory as $dm)
                                    <option value="{{$dm->id}}">{{$dm->name}}</option>
                                @endforeach

                            </select>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card rounded-0 border-0 shadow-sm">
                    <div class="card-body">
                    <h6 class="pb-3 border-bottom">Giá</h6>
                    <div class="row">
                        <div class="col mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="number" class="form-control rounded-0" id="price" min="0" name="price" required>
                        </div>
                        <div class="col mb-3">
                        <label for="sale_price" class="form-label">Giá khuyến mãi</label>
                        <input type="number" class="form-control rounded-0" id="sale_price" name="sale_price" min="0">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4 mb-4">
                <div class="card rounded-0 border-0 shadow-sm">
                    <div class="card-body">
                    <h6 class="pb-3 border-bottom">Hình ảnh</h6>
                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh sản phẩm</label>
                            <input class="form-control rounded-0" type="file" id="image" name="image">
                            <div class="bg-secondary-subtle mb-3 p-2 text-center">
                            <img src="" class="w-50">
                            </div>
                        </div>
                       {{--  <div class="mb-3">
                            <label for="images" class="form-label">More Product Image</label>
                            <input class="form-control rounded-0" type="file" id="images" multiple name="images[]">
                            <div class="bg-secondary-subtle mb-3 p-2 text-center d-flex">
                              <img src="assets/img/products/iphone.webp" class="w-25">
                              <img src="assets/img/products/iphone.webp" class="w-25">
                              <img src="assets/img/products/iphone.webp" class="w-25">
                              <img src="assets/img/products/iphone.webp" class="w-25">
                            </div>
                          </div> --}}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg rounded-0 mt-4 w-100">Tạo sản phẩm</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        var imgInp = documnet.querySelector('#image');
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                documnet.querySelector('#image+div img').src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
