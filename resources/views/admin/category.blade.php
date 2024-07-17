@extends('layoutAdmin')
@section('title')
    Danh mục
@endsection
@section('bodyadmin')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between" style="margin-top: 70px;">
      <h3 class="mb-4">Danh mục</h3>
      <div class="rounded-0">
        <a href="{{ route('admin.category.addCategory') }}" class="btn btn-primary">Thêm danh mục</a>
      </div>
    </div>

    <div class="card rounded-0 border-0 shadow-sm">
      <div class="card-body">
        <table class="table text-center">
          <thead>
            <tr>
              <th class="text-start">Tên danh mục</th>
              <th></th>
              <th>Số thứ tự</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            @foreach ($listCategory as $dm)
            <tr>
              <td class="text-start">
                <strong>
                    {{ $dm['name'] }}
                </strong>
              </td>
              <td></td>
              <td>
                {{ $dm['order'] }}
              </td>

              <td>
                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                  <i class="fas fa-eye fa-fw"></i>
                </a>
                <a href="{{ route('admin.category.upCategory', $dm['id']) }}" class="btn btn-outline-warning btn-sm">
                  <i class="fas fa-pencil fa-fw"></i>
                </a>
                <a href="#" class="btn btn-outline-danger btn-sm" onclick="xoadm('{{ $dm['id'] }}')">
                  <i class="fas fa-times fa-fw"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $listCategory->links() }}
      </div>
    </div>
</div>
<script>
    function xoadm(id) {
        if (confirm("Xác nhận xóa danh mục.") == false) return;
        fetch(`{{ url('admin/category') }}/${id}`, {
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
                alert("Không thể xóa danh mục.");
            }
        })
        .catch(error => console.log('Có lỗi: \n', error));
    }
</script>
@endsection
