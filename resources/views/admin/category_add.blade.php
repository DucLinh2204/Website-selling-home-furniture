@extends('layoutAdmin')
@section('title')
    Thêm sản phẩm
@endsection
@section('bodyadmin')

    <div class="container-fluid p-4">
            <div class="d-flex justify-content-between" style="margin-top: 70px;">
                <h3 class="mb-4">Thêm danh mục</h3>
                <div>
                <a href="{{route('admin.category')}}" class="btn btn-outline-secondary rounded-0">
                     Quay lại
                </a>
                </div>
            </div>
            <form class="row" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-8 mb-4">
                <div class="card rounded-0 border-0 shadow-sm mb-4">
                    <div class="card-body">
                    <h6 class="pb-3 border-bottom">Thông tin danh mục</h6>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control rounded-0" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="order" class="form-label">Số thứ tự</label>
                        <input type="number" class="form-control rounded-0" id="order" name="order" required>
                    </div>


                    </div>
                </div>

                </div>
                <div class="col-md-4 mb-4">
                <button type="submit" class="btn btn-primary btn-lg rounded-0 mt-4 w-100">Tạo danh mục</button>
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
