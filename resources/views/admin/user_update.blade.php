@extends('layoutAdmin')
@section('title')
    Sửa tài khoản
@endsection
@section('bodyadmin')
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between" style="margin-top: 70px;">
            <h3 class="mb-4">Sửa tài khoản</h3>
            <div>
                <a href="{{ route('admin.user') }}" class="btn btn-outline-secondary rounded-0">
                    Quay lại
                </a>
            </div>
        </div>
        <form class="row" action="{{ route('admin.user.postUserUpdate', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8 mb-4">
                <div class="card rounded-0 border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="pb-3 border-bottom">Thông tin tài khoản</h6>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên tài khoản</label>
                            <input type="text" class="form-control rounded-0" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control rounded-0" id="password" name="password">
                        </div>
                        <div class="col mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control rounded-0" id="address" name="address" value="{{ $user->address }}" required>
                        </div>
                        <div class="col mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control rounded-0" id="phone" name="phone" value="{{ $user->phone }}" required>
                        </div>
                        <div class="col mb-3">
                            <label for="role" class="form-label">Chức vụ</label>
                            <div class="input-group">
                                <select class="form-select rounded-0" id="role" name="role" required>
                                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Khách hàng</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Quản lí</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="job" class="form-label">Công việc</label>
                            <input type="text" class="form-control rounded-0" id="job" name="job" value="{{ $user->job }}" required>
                        </div>
                        <div class="col mb-3">
                            <label for="sex" class="form-label">Giới tính</label>
                            <div class="input-group">
                                <select class="form-select rounded-0" id="sex" name="sex" required>
                                    <option value="Nam" {{ $user->sex == 'Nam' ? 'selected' : '' }}>Nam</option>
                                    <option value="Nữ" {{ $user->sex == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg rounded-0 mt-4 w-100">Sửa tài khoản</button>
                </div>
            </div>
        </form>
    </div>
@endsection
