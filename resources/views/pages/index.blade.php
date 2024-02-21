@extends('home')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Sản phẩm mới</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    @foreach ($products as $product)
                                        <div class="product">
                                            <a href="{{ route('pages.item', $product->slug) }}">
                                                <div class="product-img">
                                                    <img src="{{ asset($product->img) }}" alt="">
                                                    <div class="product-label">
                                                        <span class="new">NEW</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="product-body">
                                                <p class="product-category">{{ $product->category->name }}</p>
                                                <h3 class="product-name"><a href="{{ route('pages.item', $product->slug) }}">{{ $product->name }}</a></h3>
                                                <h4 class="product-price">{{ number_format($product->price, 0, ',', '.') }}₫
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="{{url('cart/add/'. $product->id)}}">
                                                    <button class="add-to-cart-btn" {{ $product->quantity > 0 ? '' : 'disabled' }}><i class="fa fa-shopping-cart"></i> {{ $product->quantity > 0 ? 'Thêm vào giỏ' : 'Hết hàng' }}</button>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach


                                    <!-- /product -->

                                    <!-- product -->

                                    <!-- /product -->

                                    <!-- product -->

                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    @include('layoutsHomepage.hotdeal')
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Bán chạy</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <!-- product -->
                                    @foreach ($products as $product)
                                        <div class="product">
                                            <a href="{{ route('pages.item', $product->slug) }}">
                                                <div class="product-img">
                                                    <img src="{{ asset($product->img) }}" alt="">
                                                    <div class="product-label">
                                                        <span class="new">NEW</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-body">
                                                <p class="product-category">{{ $product->category->name }}</p>
                                                <h3 class="product-name"><a href="{{ route('pages.item', $product->slug) }}">{{ $product->name }}</a></h3>
                                                <h4 class="product-price">{{ number_format($product->price, 0, ',', '.') }}₫
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="{{url('cart/add/'. $product->id)}}">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- /product -->

                                    <!-- product -->

                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
