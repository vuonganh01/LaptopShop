@extends('home')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row order-details-move-to-center">
                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title text-success">Thanh toán thành công</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>SẢN PHẨM</strong></div>
                            <div><strong>TỔNG TIỀN</strong></div>
                        </div>
                        <div class="order-products">
                            @foreach ($cart as $item)
                                <div class="order-col">
                                    <div>{{ $item['quantity'] }}x {{ $item['name'] }}</div>
                                    <div>{{ number_format($item['price'], 0, ',', '.') }}₫</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="order-col">
                            <div>Phí ship</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TỔNG TIỀN</strong></div>
                            <div><strong class="order-total">{{ number_format($totalPrice, 0, ',', '.') }}₫</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <h5>Hình thức thanh toán: <span class="text-primary">Thanh toán khi nhận hàng</span></h5>
                    </div>
                    <a href="{{ route('pages.index_allproducts') }}" class="primary-btn order-submit">Tiếp tục mua sắm</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
