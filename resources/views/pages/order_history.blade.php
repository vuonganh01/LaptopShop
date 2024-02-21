@extends('home')
@section('content')
    <div class="section">
        <div class="container">
            <table class="table">
                <caption>
                    <b class="by-vuonganh-primary_color">Đơn hàng của bạn</b>
                </caption>
                <thead>
                    <tr>
                        <th class="by-vuonganh-primary_color" scope="col">STT</th>
                        <th class="by-vuonganh-primary_color" scope="col">Mã đơn hàng</th>
                        <th class="by-vuonganh-primary_color" scope="col">Tên khách hàng</th>
                        <th class="by-vuonganh-primary_color" scope="col">Số lượng</th>
                        <th class="by-vuonganh-primary_color" scope="col">Tổng tiền</th>
                        <th class="by-vuonganh-primary_color" scope="col">Phương thức thanh toán</th>
                        <th class="by-vuonganh-primary_color" scope="col">Trạng thái</th>
                        <th class="by-vuonganh-primary_color" scope="col">Ngày tạo</th>
                        <th class="by-vuonganh-primary_color" scope="col">Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $index => $order)
                        <tr>
                            <th class="by-vuonganh-primary_color" scope="row">{{ ++$index }}</th>
                            <td class="font_weigh-bold-by-vuonganh">{{ $order['code'] }}</td>
                            <td class="font_weigh-bold-by-vuonganh">{{ $order['customer_name'] }}</td>
                            <td class="font_weigh-bold-by-vuonganh">{{ $order['total_product'] }}</td>
                            <td class="font_weigh-bold-by-vuonganh">{{ number_format($order['total_money'], 0, ',', '.') }}₫</td>
                            @if ($order['payment_method'] == 1)
                                <td class="font_weigh-bold-by-vuonganh">Thanh toán khi nhận hàng</td>
                            @endif
                            @if ($order['status'] == 0)
                                <td class="font_weigh-bold-by-vuonganh text-warning">Chưa xử lý</td>
                            @elseif($order['status'] == 1)
                                <td class="font_weigh-bold-by-vuonganh text-primary">Đang giao hàng</td>
                            @elseif($order['status'] == 2)
                                <td class="font_weigh-bold-by-vuonganh text-danger">Đã huỷ</td>
                            @elseif($order['status'] == 3)
                                <td class="font_weigh-bold-by-vuonganh text-success">Giao hàng thành công</td>
                            @elseif($order['status'] == 4)
                                <td class="font_weigh-bold-by-vuonganh text-success">Đã xử lý</td>
                            @endif
                            <td class="font_weigh-bold-by-vuonganh">{{ $order['create_date'] }}</td>
                            <td>
                                <a href="{{ route('customer.detail_order_history', $order['id']) }}" class="font_weigh-bold-by-vuonganh text-primary">Chi tiết</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
