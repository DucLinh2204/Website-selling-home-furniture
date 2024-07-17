@extends('layout')
@section('title')
    Liên Hệ
@endsection
@section('body')
    <style>
        .form-control {
            width: 100%;
        }
    </style>
    <!-- Start Contact Form -->
    <div class=" bg-light">
        <div class="container" style="height: 700px">
            <h1 class="text-center py-4">LIÊN HỆ VỚI CHÚNG TÔI</h1>
            <div class="py-3 d-flex">
                <div class="col-md-6 m-auto">
                    <img src="images/contact.png" class="w-100 " alt="">
                </div>
                <div class="col-md-6 m-auto">
                    <form class="col-10 mx-auto p-3 border border-success" method="post" action="/guilienhe">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="ht" class="form-label">Họ tên</label>
                                <input class="form-control" id="ht" name="ht" required>
                            </div>
                            <div class="col-md-6">
                                <label for="em" class="form-label">Email</label>
                                <input class="form-control" id="em" name="em" type="email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="nd" class="form-label">Nội dung</label>
                                <textarea class="form-control" id="nd" name="nd"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-warning p-2">Gửi liên hệ</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- End Contact Form -->
@endsection
