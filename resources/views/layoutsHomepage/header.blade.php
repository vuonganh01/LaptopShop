<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                {{-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> --}}
                @if (Auth::guard('customer')->user())
                    <li><a href=""><i class="fa fa-user-o"></i> {{ Auth::guard('customer')->user()->name }}</a>
                    </li>
                    <form class="form_logout_costumer" action="{{ route('customer.post.logout') }}" method="POST">
                        @csrf
                        <li>
                            <button>
                                <a href=""><i class="fa fa-sign-out"></i></a>
                                Đăng xuất</button>
                        </li>
                    </form>
                @else
                    <li><a href="{{ route('customer.login') }}"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
                    <li><a href="{{ route('customer.register') }}"><i class="fa fa-user-o"></i> Đăng ký</a></li>
                @endif
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{ route('pages.index') }}" class="logo">
                            <img src="{{ asset('homepage/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form class="form-search-box" action="{{ route('pages.search') }}" method="GET">
                            <select class="input-select">
                                <option value="0">Danh Mục</option>
                                @foreach ($Categories as $category)
                                    <option value="1">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <input name="term" class="input input-fix-search-header" placeholder="Tìm ở đây">
                            <button type="submit" class="search-btn">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        @if (Auth::guard('customer')->check())
                            <div>
                                <a href="{{ route('customer.order_history', Auth::guard('customer')->user()->id) }}">
                                    {{-- <i class="fa fa-heart-o"></i> --}}
                                    <i class="fa fa-truck"></i>
                                    <span>Đơn hàng</span>
                                    <div class="qty">
                                        {{ Auth::guard('customer')->user()->orders->count() }}
                                    </div>
                                </a>
                            </div>
                        @endif
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle cart-icon-cursor_pointer" data-toggle="dropdown"
                                aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Giỏ Hàng</span>
                                @if (session('totalquantity'))
                                    <div class="qty">{{ session('totalquantity') }}</div>
                                @else
                                    <div class="qty">0</div>
                                @endif
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    @if (session('cart'))
                                        @foreach (session('cart') as $product)
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="{{ asset($product['img']) }}" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a
                                                            href="#">{{ $product['name'] }}</a></h3>
                                                    <h4 class="product-price"><span
                                                            class="qty">{{ $product['quantity'] }}x</span>
                                                        {{ number_format($product['price'] * $product['quantity'], 0, ',', '.') }}₫
                                                    </h4>
                                                </div>
                                                <button class="delete">
                                                    <a class="x_marker_product_cart"
                                                        href="{{ URL('cart/delete-cart-product/' . $product['id']) }}">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="cart-summary">
                                    @if (session('totalquantity'))
                                        <small>{{ session('totalquantity') }} Sản phẩm được chọn</small>
                                    @else
                                        <small>0 Sản phẩm được chọn</small>
                                    @endif
                                    @if (session('totalPrice'))
                                        <h5>TỔNG TIỀN: {{ number_format(session('totalPrice'), 0, ',', '.') }}₫</h5>
                                    @else
                                        <h5>TỔNG TIỀN: 0₫</h5>
                                    @endif
                                </div>
                                <div class="cart-btns">

                                    @if (session('cart'))
                                        <a class="checkout-btn_byVuongAnh" href="{{ route('cart.checkout') }}">Thanh
                                            toán <i class="fa fa-arrow-circle-right"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
