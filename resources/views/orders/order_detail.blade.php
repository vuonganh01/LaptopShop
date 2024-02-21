@extends('master')
@section('content')
    <div>
        <h2>Chi tiết đơn hàng</h2>
        <p>Thông tin khách hàng</p>
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Tên</span>
                </td>
                <td>{{ $order->customer_name }}</td>
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Email</span>
                </td>
                <td>{{ $order->customer_email }}</td>
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Điện thoại</span>
                </td>
                <td>{{ $order->customer_phone }}</td>
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Địa chỉ</span>
                </td>
                <td>{{ $order->customer_address }}</td>
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Ngày tạo</span>
                </td>
                <td>{{ $order->create_date }}</td>
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Phương thức thanh toán</span>
                </td>
                @if ($order->payment_method == 1)
                    <td>Thanh toán khi nhận hàng</td>
                @else
                    <td>Chuyển khoản ngân hàng</td>
                @endif
            </tr>
            <tr>
                <td style="padding-bottom: 8px;">
                    <span class="font-weight-bold mr-5">Trạng thái</span>
                </td>
                @if ($order->status == 0)
                    <td class="btn btn-warning">Chưa xử lý</td>
                @elseif($order->status == 1)
                    <td class="btn btn-info">Đang giao hàng</td>
                @elseif($order->status == 2)
                    <td class="btn btn-danger">Đã huỷ</td>
                @elseif($order->status == 3)
                    <td class="btn btn-success">Giao hàng thành công</td>
                @elseif($order->status == 4)
                    <td class="btn btn-success">Đã xử lý</td>
                @endif
            </tr>
        </table>
    </div>

    <div>
        <p class="mt-5">danh sách sản phẩm</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Thứ tự</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->order_items as $index => $order_item)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $order_item->product_name }}</td>
                        <td>
                            <img style="width: 100px" src="{{ asset($order_item->product_image) }}" alt="">
                        </td>
                        <td>{{ number_format($order_item->product_price, 0, ',', '.') }}₫</td>
                        <td>{{ $order_item->product_quantity }}</td>
                        <td>{{ number_format($order_item->product_price * $order_item->product_quantity, 0, ',', '.') }}₫
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td>Tổng:</td>
                    <td>{{ $order->total_product }}</td>
                    <td>{{ number_format($order->total_money, 0, ',', '.') }}₫</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex">
            @if ($order->status == 0)
                <form class="mr-1" action="{{ route('admin.order_accept', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Chấp nhận đơn hàng</button>
                </form>
                <form action="{{ route('admin.order_cancel', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Huỷ</button>
                </form>
            @endif
            @if ($order->status == 4)
                <form class="mr-1" action="{{ route('admin.order_delivery', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Giao hàng</button>
                </form>
                <form action="{{ route('admin.order_cancel', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Huỷ</button>
                </form>
            @endif
            @if ($order->status == 1)
                <form class="mr-1" action="{{ route('admin.delivery_success', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Giao hàng thành công</button>
                </form>
                <form action="{{ route('admin.order_cancel', $order->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Huỷ</button>
                </form>
            @endif
        </div>
    </div>

    @if (session('success'))
        <script>
            alert('{{ session('success') }}')
        </script>
    @endif

    @if (session('alert'))
        <script>
            alert('{{ session('alert') }}')
        </script>
    @endif
@endsection
