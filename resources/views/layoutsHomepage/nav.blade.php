<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="{{ Route::is('pages.index') ? 'active': '' }}"><a href="{{ route('pages.index') }}">Trang chủ</a></li>
                <li class="{{ Route::is('pages.index_allproducts') ? 'active': '' }}"><a href="{{ route('pages.index_allproducts') }}">Tất cả sản phẩm</a></li>
                @foreach ($Categories as $category)
                    <li class="{{ request()->is('category_/' . $category->slug) ? 'active': '' }}"><a href="{{ route('pages.index_category', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
