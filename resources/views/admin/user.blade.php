@extends('layoutAdmin')
@section('title')
    Tài khoản
@endsection
@section('bodyadmin')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between" style="margin-top: 70px;">
      <h3 class="mb-4">Tài khoản</h3>
      <div class="rounded-0">
        <a href="{{ route('admin.user.addUser') }}" class="btn btn-primary">Thêm tài khoản</a>
      </div>
    </div>

    <div class="card rounded-0 border-0 shadow-sm">
      <div class="card-body">
        <table class="table text-center">
          <thead>
            <tr>
              <th class="text-start">Họ và tên</th>
              <th>Email</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
              <th>Chức vụ</th>
              <th>Nghề nghiệp</th>
              <th>Giới tính</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            @foreach ($listUser as $user)
            @php
            $roles = [
                'user' => 'success',
                'admin' => 'primary',
            ];

                $role = $roles[$user['role']] ?? 'default';
            @endphp
            <tr>
              <td class="text-start">
                <strong>
                    {{ $user['name'] }}
                </strong>
              </td>
              <td>
                {{ $user['email'] }}
              </td>
              <td>
                {{ $user['address'] }}
              </td>
              <td>
                {{ $user['phone'] }}
              </td>
              <td class="align-items-center">
                <span class="badge bg-{{ $role }} rounded-3 fw-semibold">{{ $user['role'] }}</span>
              </td>
              <td>
                {{ $user['job'] }}
              </td>
              <td>
                {{ $user['sex'] }}
              </td>
              <td>
                <a href="{{ route('admin.user.upUser', $user['id']) }}" class="btn btn-outline-warning btn-sm">
                  <i class="fas fa-pencil fa-fw"></i>
                </a>
                <a href="#" class="btn btn-outline-danger btn-sm" onclick="xoaUser('{{ $user['id'] }}')">
                  <i class="fas fa-times fa-fw"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $listUser->links() }}
      </div>
    </div>
</div>
<script>
    function xoaUser(id){
        if (confirm("Xác nhận xóa tài khoản.") == false) return;
        fetch(`{{ url('admin/user') }}/${id}`, {
            method: "DELETE",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (response.ok) {
                alert("Đã xóa");
                location.reload();
            } else {
                alert("Không thể xóa tài khoản.");
            }
        })
        .catch(error => console.log('Có lỗi: \n', error));
    }
</script>
@endsection
