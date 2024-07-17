@extends('layoutAdmin')
@section('title')
    Sản phẩm
@endsection
@section('bodyadmin')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between" style="margin-top: 70px;">
      <h3 class="mb-4">Sản phẩm</h3>
      <div class="rounded-0">
        <a href="{{ route('admin.product.addProduct') }}" class="btn btn-primary">Thêm sản phẩm</a>
      </div>
    </div>

    <div class="card rounded-0 border-0 shadow-sm">
      <div class="card-body">
        <table class="table text-center">
          <thead>
            <tr>
              <th class="text-start" colspan="2">Tên sản phẩm</th>
              <th>Giá</th>
              <th>Số lượng</th>
              <th>Đánh giá</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            @foreach ($listProduct as $sp)
            <tr>
              <td style="width:64px">
                <img src="../images/product/{{ $sp['image'] }}" class="w-100">
              </td>
              <td class="text-start">
                <strong>
                    {{ $sp['name'] }}
                </strong>
                <br>
                <small>
                  Id: <strong>{{ $sp['id'] }}</strong> |
                  Danh mục: <a href="#" class="text-decoration-none fw-bold">{{ $sp->category->name }}</a>
                </small>
              </td>
              <td>
                <strong>
                    {{ number_format($sp['sale_price']) }} đ
                </strong>
                <br><del>{{ number_format($sp['price']) }} đ</del>
              </td>
              <td>
                {{ $sp['instock'] }}
              </td>
              <td>
                {{ $sp['rating'] }}<br>
                @for ($i = 0; $i < floor($sp->rating); $i++)
                <i class="fas fa-star fa-xs text-warning"></i>
                @endfor
                @for ($i = 0; $i < 5 - floor($sp->rating); $i++)
                <i class="far fa-star fa-xs text-warning"></i>
                @endfor
              </td>
              <td>
                <a href="#" target="_blank" class="btn btn-primary btn-sm">
                  <i class="fas fa-eye fa-fw"></i>
                </a>
                <a href="{{ route('admin.product.upProduct', $sp['id']) }}" class="btn btn-outline-warning btn-sm">
                  <i class="fas fa-pencil fa-fw"></i>
                </a>
                <a href="#" class="btn btn-outline-danger btn-sm" onclick="xoasp('{{ $sp['id'] }}')">
                  <i class="fas fa-times fa-fw"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $listProduct->links() }}
      </div>
    </div>
</div>
<script>
    function xoasp(id){
        if (confirm("Xác nhận xóa sản phẩm.") == false) return;
        fetch(`{{ url('admin/product') }}/${id}`, {
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
                alert("Không thể xóa sản phẩm.");
            }
        })
        .catch(error => console.log('Có lỗi: \n', error));
    }
</script>
@endsection
