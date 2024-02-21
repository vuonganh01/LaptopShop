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
                        <li><a href="{{ route('pages.index_category', $category->slug) }}">{{ $category->name }}</a></li>
                        <li class="active">{{ $item->name }}</li>
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
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ asset($item->img) }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{ asset($item->img) }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{ $item->name }}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="product-price">{{ number_format($item->price, 0, ',', '.') }}₫</h3>
                            @if ($item->quantity > 0)
                                <span class="product-available">Còn hàng</span>
                            @else
                                <span class="product-available">Hết hàng</span>
                            @endif

                        </div>
                        <p>{{ $item->description }}</p>

                        <div class="add-to-cart">
                            {{-- <div class="qty-label quantity_number_input_byVuongAnh">
                                Số lượng
                                <div class="input-number">
                                    <input type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div> --}}
                            <div class="add-to-cart">
                                <a href="{{ url('cart/add/' . $item->id) }}">
                                    <button class="add-to-cart-btn" {{ $item->quantity > 0 ? '' : 'disabled' }}><i class="fa fa-shopping-cart"></i> {{ $item->quantity > 0 ? 'Thêm vào giỏ' : 'Hết hàng' }}</button>
                                </a>
                            </div>
                        </div>

                        <ul class="product-links">
                            <li>Danh mục:</li>
                            <li><a href="{{ route('pages.index_category', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
                            <li><a data-toggle="tab" href="#tab2">Thông số</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{ $item->content }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->

                            <!-- tab3  -->

                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Sản phẩm liên quan</h3>
                    </div>
                </div>

                <!-- product -->
                @foreach ($items as $item_related)
                    @if ($item_related->id == $item->id)
                        @continue
                    @endif
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <a href="{{ route('pages.item', $item_related->slug) }}">
                                <div class="product-img">
                                    <img src="{{ asset($item_related->img) }}" alt="">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                            </a>
                            <div class="product-body">
                                <p class="product-category">{{ $item_related->category->name }}</p>
                                <h3 class="product-name"><a href="#">{{ $item_related->name }}</a></h3>
                                <h4 class="product-price">{{ number_format($item_related->price, 0, ',', '.') }}₫</h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="{{ url('cart/add/' . $item_related->id) }}">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào
                                        giỏ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /product -->

                <!-- product -->

                <!-- /product -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- product -->
                <!-- /product -->

                <!-- product -->
                <!-- /product -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->
@endsection
