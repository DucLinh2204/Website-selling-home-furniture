@extends('layoutAdmin')
@section('title')
    Đơn hàng
@endsection
@section('bodyadmin')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between" style="margin-top: 70px;">
      <h3 class="mb-4">Đơn hàng</h3>
    </div>

    <div class="card rounded-0 border-0 shadow-sm">
      <div class="card-body">
        <table class="table text-center">
          <thead>
            <tr>
              <th class="text-start">ID Đơn hàng</th>
              <th>Họ và tên</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Trạng thái</th>
              <th>Tổng tiền của đơn</th>
              <th>Tổng số lượng hàng</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            @foreach ($listOrder as $dh)
            @php
            $statusClasses = [
                'success' => 'success',
                'cancle' => 'danger',
                'shiping' => 'primary',
                'prepare' => 'secondary',
                'pending' => 'warning'
            ];

                $statusClass = $statusClasses[$dh['status']] ?? 'default';
            @endphp
            <tr>
              <td class="text-start">
                <strong>
                    {{ $dh['id'] }}
                </strong>
              </td>
              <td>
                {{ $dh['user_fullname'] }}
              </td>
              <td>
                {{ $dh['user_email'] }}
              </td>
              <td>
                {{ $dh['user_phone'] }}
              </td>
              <td>
                {{ $dh['user_address'] }}
              </td>
              <td class="align-items-center">
                <span class="badge bg-{{ $statusClass }} rounded-3 fw-semibold">{{ $dh['status'] }}</span>
              </td>
              <td>
                {{ $dh['totalPrice'] }}
              </td>
              <td>
                {{ $dh['totalQuantity'] }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $listOrder->links() }}
      </div>
    </div>
</div>
@endsection
