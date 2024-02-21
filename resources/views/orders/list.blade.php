@extends('master')
@section('content')
    <table class="table">
        <caption>Danh sách các đơn hàng</caption>
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Phương thức thanh toán</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $index => $order)
                <tr>
                    <th scope="row">{{ ++$index }}</th>
                    <td>{{ $order->code }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->total_product }}</td>
                    <td>{{ number_format($order->total_money, 0, ',', '.') }}₫</td>
                    @if ($order->payment_method == 1)
                        <td>Thanh toán khi nhận hàng</td>
                    @else
                        <td>Chuyển khoản ngân hàng</td>
                    @endif
                    @if ($order->status == 0)
                        <td class="text-warning">Chưa xử lý</td>
                    @elseif($order->status == 1)
                        <td class="text-primary">Đang giao hàng</td>
                    @elseif($order->status == 2)
                        <td class="text-danger">Đã huỷ</td>
                    @elseif($order->status == 3)
                        <td class="text-success">Giao hàng thành công</td>
                    @elseif($order->status == 4)
                        <td class="text-success">Đã xử lý</td>
                    @endif
                    <td>
                        <a href="{{ route('admin.order_detail', ['id' => $order->id]) }}">Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
