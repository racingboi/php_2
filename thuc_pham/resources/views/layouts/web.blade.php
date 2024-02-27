<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,900,800,300" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="page">
        <!-- Header -->
        @yield('header-banner')
        <div class="header-banner">
            <div class="assetBlock">
                <div style="height: 20px; overflow: hidden" id="slideshow">
                    <p style="display: block">
                        Siêu thị! - <span>50%</span> TẮT rau tươi &gt;
                    </p>
                    <p style="display: none">
                        <span>15%</span> Giảm giá! - về thực phẩm Ayurvedic &gt;
                    </p>
                </div>
            </div>
        </div>
        @yield('header-container')
        <header class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                            <div class="phone hidden-xs">
                                <div class="phone-box">
                                    <strong>Gọi: </strong> <span> 0706252156</span>
                                </div>
                            </div>
                            <div class="welcome-msg hidden-xs">
                                Tin nhắn chào mừng mặc định!
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div class="basket dropdown-toggle">
                                        <a href="#">
                                            {{-- <i class="fa fa-shopping-bag"></i> --}}
                                            <i class="bi bi-bag"></i>
                                            <div class="cart-box">
                                                {{-- @php
                                                    $totalProductsInCart = count($groupedCart);
                                                @endphp --}}
                                                @php
                                                    // Kiểm tra xem biến đã được khai báo hay chưa
                                                    if (isset($groupedCart)) {
                                                        $totalProductsInCart = is_countable($groupedCart) ? count($groupedCart) : 0;
                                                    } else {
                                                        $totalProductsInCart = 0; // Hoặc giá trị mặc định khác tùy vào logic của bạn
                                                    }
                                                @endphp


                                                <span id="cart-total">{{ $totalProductsInCart }}</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <div style="display: none" class="top-cart-content arrow_box">
                                            <div class="block-subtitle">(Các) mục được thêm gần đây</div>
                                            <ul id="cart-sidebar" class="mini-products-list">
                                                @php
                                                    $total = 0;
                                                @endphp
                                              @forelse($groupedCart ?? [] as $productId => $items)
                                                    <li class="item last odd">
                                                        @php
                                                            $orderDetail = $items->first();
                                                            $totalQuantity = $items->sum('quantity');
                                                            // $inputId = 'cartInput_' . $productId;
                                                            $total += $totalQuantity * $orderDetail->product->price;
                                                            // $id_oders[] = $orderDetail->id;
                                                        @endphp
                                                        <a class="product-image" href="product_detail.html"
                                                            title=" Lucky Brand Janis "><img alt="Sample Product"
                                                                src="{{ asset($orderDetail->product->image_features->first()->url_img) }}"
                                                                width="80" /></a>
                                                        <div class="detail-item">
                                                            <div class="product-details d-flex">
                                                                <p class="product-name">
                                                                    <a href="product_detail.html"
                                                                        title=" Lucky Brand Janis ">{{ $orderDetail->product->name }}</a>
                                                                </p>
                                                                <form
                                                                    action="{{ route('cart.delete', ['id' => $orderDetail->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input class="btn-remov" type="submit"
                                                                        value="xóa">
                                                                </form>
                                                            </div>

                                                            <div class="product-details-bottom">
                                                                <span
                                                                    class="price">{{ number_format($orderDetail->product->price, 2, '.', ',') }}
                                                                    VNĐ</span>
                                                                <span class="title-desc">Qty:</span>
                                                                <strong>{{ $totalQuantity }}</strong>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        giỏ hàng đang trỗng
                                                @endforelse
                                                </li>
                                            </ul>
                                            <div class="top-subtotal">
                                                Subtotal: <span class="price">{{ number_format($total, 2, '.', ',') }}
                                                    VNĐ</span>
                                            </div>
                                            <div class="actions">
                                                <button class="btn-checkout" type="button">
                                                    <span>Checkout</span>
                                                </button>
                                                <a href="{{ route('cart.list') }}" class="view-cart" type="button">
                                                    <span>View Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ajaxconfig_info" style="display: none">
                                    <a href="#/"></a>
                                    <input value="" type="hidden" />
                                    <input id="enable_module" value="1" type="hidden" />
                                    <input class="effect_to_cart" value="1" type="hidden" />
                                    <input class="title_shopping_cart" value="Go to shopping cart" type="hidden" />
                                </div>
                            </div>
                            <!-- Header Top Links -->
                            <div class="toplinks h-100">
                                <div class="links">
                                    <div class="login">
                                        <a title="Login" href="{{ route('login') }}">
                                            <i class="bi bi-box-arrow-in-right"></i>
                                        </a>
                                    </div>
                                    <div class="wishlist">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a title="Logout" :href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {!! '<i class="bi bi-box-arrow-right"></i>' !!}
                                            </a>
                                        </form>
                                    </div>
                                    <div class="search">
                                       @forelse($groupedCart ?? [] as $productId => $items)
                                            @php
                                                $orderDetail = $items->first();
                                                if (isset(Auth::user()->name)) {
                                                    echo '<a href="' . route('user') . '">';
                                                    echo '<span>';
                                                    echo 'Xin Chào' . ' ' . $orderDetail->order->user->name . '!';
                                                    echo '</span>';
                                                    echo '</a>';
                                                } else {
                                                    echo 'bạn chưa đăng nhập !';
                                                }
                                            @endphp
                                        @break

                                        @empty
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </header>
        @yield('nav')
        <nav>
            <div class="header container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mm-toggle-wrap">
                            <div class="mm-toggle">
                                <i class="fa fa-bars"></i><span class="mm-label">Menu</span>
                            </div>
                        </div>
                        <!-- Header Logo -->
                        <a class="logo" title="Magento Commerce" href="{{ route('home') }}"><img
                                alt="Magento Commerce" src="{{ asset('assets/web/images/logo.png') }}" /></a>
                        <!-- End Header Logo -->

                        <div class="nav-inner">
                            <ul id="nav" class="">
                                <li class="level0 parent drop-menu">
                                    <a href="{{ route('home') }}" class=""><span>Trang chủ</span> </a>
                                </li>
                                <li class="level0 nav-5 level-top first">
                                    <a href="{{ route('shop') }}" class="level-top">
                                        <span>Sản Phẩm</span>
                                    </a>
                                    <div style="display: none; left: 0px" class="level0-wrapper dropdown-6col">
                                        <div class="level0-wrapper2">
                                            <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                                                <ul class="level0">
                                                    @foreach ($category as $a)
                                                        <li class="level1 nav-6-1 parent item">
                                                            <a href=""
                                                                class=""><span>{{ $a->name }}</span></a>
                                                            <!--sub sub category-->
                                                            <ul class="">
                                                                @foreach ($a->subcategories as $sub)
                                                                    <li class="level2 nav-6-1-1">
                                                                        <a href="product_detail.html"
                                                                            class=""><span>{{ $sub->name }}</span></a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <!--level0-->
                                            </div>
                                            <div class="nav-block nav-block-right std grid12-4">
                                                @foreach ($products as $a)
                                                    <div class="cat_pr_info">
                                                        <div class="cat_img">
                                                            <img alt="Sample Product"
                                                                src="{{ asset($a->image_features->first()->url_img) }}"
                                                                width="175" />
                                                        </div>
                                                        <div class="products-info">
                                                            <div class="pr-title">
                                                                {{ $a->name }}
                                                            </div>
                                                            <div class="price-box">
                                                                <p class="special-price">
                                                                    <span class="price-label">Special Price</span>
                                                                    <span class="price"> {{ $a->price }} </span>
                                                                </p>
                                                            </div>
                                                            <div class="push_text">
                                                                {{ Illuminate\Support\Str::limit($a->description, 100) }}

                                                            </div>
                                                            <div class="cat-bnt">
                                                                <button type="button" title="Add to Cart"
                                                                    class="button btn-cart">
                                                                    <span>MUA NGAY</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="level0 nav-7 level-top parent">
                                    <a href="#/electronics.html" class="level-top">
                                        <span>trái cây</span>
                                    </a>
                                    <div style="display: none; left: 0px" class="level0-wrapper dropdown-6col">
                                        <div class="level0-wrapper2">
                                            <div class="normal-text">
                                                <div class="custom_link">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Proin tristique, est aliquet dictum feugiat,
                                                    diam velit ullamcorper lorem
                                                </div>
                                            </div>
                                            <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                                                <ul class="level0">
                                                    <li class="level1 nav-6-1 parent item">
                                                        <div class="cat-img">
                                                            <a title="Magento Commerce" href="#"><img
                                                                    alt="Sample Product"
                                                                    src="images/shoes-img.png" /></a>
                                                        </div>
                                                        <a href="#.html"><span>Graphs</span></a>
                                                        <!--sub sub category-->
                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="#/sport-shoes.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->
                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <div class="cat-img">
                                                            <a title="Magento Commerce" href="#"><img
                                                                    alt="Sample Product"
                                                                    src="images/shirts-img.png" /></a>
                                                        </div>
                                                        <a href="#/dresses.html"><span>Cauliflower</span></a>
                                                        <!--sub sub category-->
                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->
                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <div class="cat-img">
                                                            <a title="Magento Commerce" href="#"><img
                                                                    alt="Sample Product"
                                                                    src="images/sunglasses-img.png" /></a>
                                                        </div>
                                                        <a href="#/sunglasses.html"><span>Strawberry</span></a>
                                                        <!--sub sub category-->
                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="#/sunglasses/ray-ban.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->
                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <div class="cat-img">
                                                            <a title="Magento Commerce" href="#"><img
                                                                    alt="Sample Product"
                                                                    src="images/watches-img.png" /></a>
                                                        </div>
                                                        <a href="#/watches.html"><span>Apple</span></a>
                                                        <!--sub sub category-->
                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail-3.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->
                                                        <!--sub sub category-->
                                                    </li>

                                                    <!--level1 nav-6-1 parent item-->
                                                </ul>
                                            </div>
                                            <div class="nav-block nav-block-right std grid12-4">
                                                <div class="cat_pr_info">
                                                    <div class="cat_img">
                                                        <a title="Magento Commerce" href="#"><img
                                                                alt="Sample Product"
                                                                src="../products-images/product8.jpg"
                                                                width="175" /></a>
                                                    </div>
                                                    <div class="products-info">
                                                        <div class="pr-title">
                                                            Lorem Ipsum is simply dummy
                                                        </div>
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $567.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $456.00 </span>
                                                            </p>
                                                        </div>
                                                        <div class="push_text">
                                                            Lorem Ipsum is simply dummy text of the printing
                                                        </div>
                                                        <div class="cat-bnt">
                                                            <button type="button" title="Add to Cart"
                                                                class="button btn-cart">
                                                                <span>BUY IT NOW</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="normal-text1">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Proin tristique, est aliquet dictum feugiat,
                                                diam velit ullamcorper lorem, non condimentum nisi
                                                urna sit amet dolor. Integer,<br />
                                                turpis eget blandit porttitor, sapien dolor pretium
                                                massa, sed sodales elit dolor eget nulla. Praesent
                                                commodo cursus justo, ut tempor ipsum suscipit eget.
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                            {{-- <li class="level0 parent drop-menu">
                                    <a href="#"><span>Dairy</span>
                                        <!--<span class="category-label-hot">Hot</span> -->
                                    </a>
                                </li> --}}
                            {{-- <li class="level0 nav-6 level-top parent">
                                    <a href="#/fashion.html" class="level-top">
                                        <span>Salad</span>
                                    </a>
                                    <div style="left: 0px; display: none" class="level0-wrapper dropdown-6col">
                                        <div class="level0-wrapper2">
                                            <div class="nav-block nav-block-center">
                                                <ul class="level0">
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#.html" class=""><span>Fruits</span></a>
                                                        <!--sub sub category-->

                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->

                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#-accesories.html"
                                                            class=""><span>Vegetables</span></a>
                                                        <!--sub sub category-->

                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->

                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/cameras.html"><span>Apple</span></a>
                                                        <!--sub sub category-->

                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->

                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/audio-video.html"><span>Carrot</span></a>
                                                        <!--sub sub category-->

                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->

                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/computer.html"><span>Graphs</span></a>
                                                        <!--sub sub category-->

                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                            <li class="level2 nav-6-1-1">
                                                                <a
                                                                    href="product_detail.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->

                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <!--level1 nav-6-1 parent item-->
                                                </ul>
                                                <!--level0-->
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                            <li class="level0 nav-7 level-top parent">
                                <a class="level-top" href="#/electronics.html">
                                    <span></span>
                                </a>
                            </li>
                            <li class="nav-custom-link level0 level-top parent">
                                <a class="level-top" href="#"><span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @yield('footer')
    <div class="our-features-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="feature-box">
                        <i class="fas fa-truck"></i>
                        <div class="content">Miễn phí vận chuyển</div>
                        <span>Việc chăm sóc bệnh nhân, theo dõi sự trưởng thành của bệnh nhân là rất quan trọng
                            nhưng nó được thực hiện giống như công việc.</span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="feature-box">
                        <i class="fas fa-heart"></i>
                        <div class="content">Hỗ trợ khách hàng</div>
                        <span>Việc chăm sóc bệnh nhân, theo dõi sự trưởng thành của bệnh nhân là rất quan trọng
                            nhưng nó được thực hiện giống như công việc.</span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="feature-box">
                        <i class="fas fa-arrow-left"></i>
                        <div class="content">30 ngày hoàn tiền</div>
                        <span>Việc chăm sóc bệnh nhân, theo dõi sự trưởng thành của bệnh nhân là rất quan trọng
                            nhưng nó được thực hiện giống như công việc.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="newsletter-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="newsletter">
                            <form>
                                <h4><span>Đăng ký nhận ưu đãi</span></h4>
                                <p>
                                    Điều rất quan trọng là khách hàng phải chú ý đến quá trình hấp thụ. Nếu điều đó
                                    xảy ra, chúng tôi buộc tội anh ấy đã phải chịu đựng rắc rối trong quá trình tập
                                    luyện.
                                </p>
                                <input type="text" placeholder="Enter your email address"
                                    class="input-text required-entry validate-email"
                                    title="Sign up for our newsletter" id="newsletter1" name="email" />
                                <button class="subscribe" title="Subscribe" type="submit">
                                    <span>Đặt mua</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter-->

        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-logo">
                            <a href="#" title="Logo"><img
                                    src="{{ asset('assets/web/images/footer-logo.png') }}" alt="Logo" /></a>
                        </div>
                        <p>
                            Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo đuổi. Đó là một đội xe
                            hơi, xe hơi và xe hơi. Nói một cách nhẹ nhàng thì không cần phải lo lắng.
                        </p>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h4>Dịch vụ khách hàng</h4>
                        <ul class="links">
                            <li class="first">
                                <a href="#" title="Contact us">Tài khoản của tôi</a>
                            </li>
                            <li><a href="#" title="About us">lịch sử đơn hàng</a></li>
                            <li><a href="#" title="faq">Câu hỏi thường gặp</a></li>
                            <li><a href="#" title="Popular Searches">Khuyến mãi</a></li>
                            <li class="last">
                                <a href="#" title="Where is my order?">Trung tâm trợ giúp</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h4>Tập đoàn</h4>
                        <ul class="links">
                            <li class="first">
                                <a title="Your Account" href="#">Về chúng tôi</a>
                            </li>
                            <li><a title="Information" href="#">Dịch vụ khách hàng</a></li>
                            <li><a title="Addresses" href="#">Công ty</a></li>
                            <li><a title="Addresses" href="#">Quan hệ đầu tư</a></li>
                            <li class="last">
                                <a title="Orders History" href="#">tìm kiếm nâng cao</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h4>tại sao chọn chúng tôi</h4>
                        <ul class="links">
                            <li>
                                <a href="#">Hướng dẫn mua sắm</a>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Công ty</a></li>
                            <li>
                                <a href="#">Quan hệ đầu tư</a>
                            </li>
                            <li class="last">
                                <a href="contact-us.html">Liên hệ chúng tôi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <h4>Liên hệ chúng tôi</h4>
                        <div class="contacts-info">
                            <address>
                                160 ymoan
                                <br />BMT
                            </address>
                            <div class="phone-footer">
                                0706252156
                            </div>
                            <div class="email-footer">

                                <a href="mailto:support@magikcommerce.com">nexus@themesground.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="payment-accept d-flex">
                            <img src="{{ asset('assets/web/images/payment-1.png') }}" alt="" />
                            <img src="{{ asset('assets/web/images/payment-2.png') }}" alt="" />
                            <img src="{{ asset('assets/web/images/payment-3.png') }}" alt="" />
                            <img src="{{ asset('assets/web/images/payment-4.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="social">
                            <ul>
                                <li class="fb">
                                    <a href="#">
                                        <i class="fb fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="tw">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="googleplus">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="rss"><a href="#"><i class="fas fa-rss"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 coppyright">
                        &copy; DUCPRO
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</div>
<!-- JavaScript -->
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/revslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.mobile-menu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#rev_slider_4").show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startwidth: 1000,
            startheight: 900,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: "thumb",
            navigationArrows: "solo",
            navigationStyle: "round",

            touchenabled: "on",
            onHoverStop: "on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: "spinner0",
            keyboardNavigation: "off",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",

            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "off",
            forceFullWidth: "on",
            fullScreenAlignForce: "off",
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: "off",
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: "",
        });
    });
</script>
</body>

</html>
