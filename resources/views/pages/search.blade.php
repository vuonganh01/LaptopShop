@extends('home')
@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    {{-- <div class="aside">
                        <h3 class="aside-title">Danh mục</h3>
                        <div class="checkbox-filter">
                            @foreach ($Categories as $key => $category)
                                <div class="input-checkbox">
                                    <input type="checkbox" id="category-{{ $key }}">
                                    <label for="category-{{ $key }}">
                                        <span></span>
                                        {{ $category->name }}
                                        <small>(120)</small>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div> --}}
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Giá</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    {{-- <div class="aside">
                        <h3 class="aside-title">Thương hiệu</h3>
                        <div class="checkbox-filter">
                            @foreach ($brands as $key => $brand)
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-{{ $key }}">
                                <label for="brand-{{ $key }}">
                                    <span></span>
                                    {{ $brand->name }}
                                    <small>(578)</small>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                    <!-- /aside Widget -->

                    <!-- aside Widget -->

                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sắp xếp:
                                <select class="input-select">
                                    <option value="0">Mới nhất</option>
                                    <option value="1">Popular</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        <!-- product -->
                        @foreach ($products as $key => $product)
                            <div class="col-md-4 col-xs-6">
                                <div class="product">
                                    <a href="{{ route('pages.item', $product->slug) }}">
                                        <div class="product-img">
                                            <img src="{{ asset($product->img) }}" alt="">
                                        </div>
                                    </a>
                                    <div class="product-body">
                                        <p class="product-category">{{ $product->category->name }}</p>
                                        <h3 class="product-name"><a href="{{ route('pages.item', $product->slug) }}">{{ $product->name }}</a></h3>
                                        <h4 class="product-price">{{ number_format($product->price, 0, ',', '.') }}₫<div
                                                class="product-rating">
                                            </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                            cart</button>
                                    </div>
                                </div>
                            </div>

                            @if (($key + 1) % 3 == 0)
                                <div class="clearfix"></div>
                            @endif
                        @endforeach
                        <!-- /product -->
                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        {{ $products->links() }}
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
