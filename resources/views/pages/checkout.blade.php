@extends('home')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ route('pages.index') }}">Trang chủ</a></li>
                        <li class="active">Thanh toán</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <form action="{{ route('cart.postCheckout') }}" method="POST">
						@csrf
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Địa chỉ thanh toán</h3>
							</div>
							<label for="">Họ và tên</label>
							<div class="form-group">
								<input class="input" type="text" name="customer_name" placeholder="Họ và tên" value="{{ Auth::guard('customer')->user()->name }}">
							</div>
							<br>
							<label for="">Email</label>
							<div class="form-group">
								<input class="input" type="email" name="customer_email" placeholder="Email" value="{{ Auth::guard('customer')->user()->email }}">
							</div>
							<br>
							<label for="">Số điện thoại</label>
							<div class="form-group">
								<input class="input" type="tel" name="customer_phone" placeholder="Số điện thoại" value="{{ Auth::guard('customer')->user()->phone }}">
							</div>
							<br>
							<label for="">Địa chỉ</label>
							<div class="form-group">
								<input class="input" type="text" name="customer_address" placeholder="Địa chỉ">
							</div>
						</div>
						<!-- /Billing Details -->
	
						<!-- Shiping Details -->
	
						<!-- /Shiping Details -->
	
						<!-- Order notes -->
						<!-- /Order notes -->
					</div>
	
					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">ĐƠN HÀNG CỦA BẠN</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>SẢN PHẨM</strong></div>
								<div><strong>TỔNG TIỀN</strong></div>
							</div>
							<div class="order-products">
								@foreach (session('cart') as $key => $product)
									<div class="order-col">
										<div>{{ $product['quantity'] }}x {{ $product['name'] }}</div>
										<div>{{ number_format($product['price'], 0, ',', '.') }}₫</div>
									</div>
									{{-- <input name="name_{{ $key }}" value="{{ $product['name'] }}" type="text" style="display: none">
									<input name="quantity_{{ $key }}" type="text" value="{{ $product['quantity'] }}" style="display: none">
									<input name="price_{{ $key }}" type="text" value="{{ $product['price'] }}" style="display: none"> --}}
								@endforeach
							</div>
							<div class="order-col">
								<div>Phí ship</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TỔNG CỘNG</strong></div>
								<div><strong
										class="order-total">{{ number_format(session('totalPrice'), 0, ',', '.') }}₫</strong>
										<input name="totalPrice" value="{{ session('totalPrice') }}" type="text" style="display: none">
										<input name="total_product" value="{{ session('totalquantity') }}" type="text" style="display: none">
										<input name="customer_id" value="{{ Auth::guard('customer')->user()->id }}" type="text" style="display: none">
								</div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment_method" id="payment-1" value="1">
								<label for="payment-1">
									<span></span>
									Thanh toán tiền mặt khi nhận hàng
								</label>
								<div class="caption">
									<p>Shiper sẽ mang máy đến địa chỉ của bạn, sau đó bạn nhận hàng và thanh toán tiền mặt cho
										Shiper</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment_method" id="payment-2">
								<label for="payment-2">
									<span></span>
									Chuyển khoản ngân hàng
								</label>
								<div class="caption">
									<p>Chuyển khoản tổng số tiền vào stk:1234567890 Vietinbank</p>
								</div>
							</div>
	
						</div>
						@if (session('cart'))
							<button class="primary-btn order-submit order-submit_byVuongAnh">Thanh toán</button>
						@endif
					</form>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
