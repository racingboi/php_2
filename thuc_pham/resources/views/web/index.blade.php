@extends('layouts.web')
@section('title', 'GRYFFINDOR - Trang home ')
@section('header-banner')

    <body class="index">

    @section('content')
        <div id="thm-slideshow" class="thm-slideshow">
            <div id="rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                <div id="rev_slider_4" class="rev_slider fullwidthabanner">
                    <ul>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000"
                            data-thumb="{{ asset('assets/web/images/slide-img1.jpg') }}">
                            <img src="{{ asset('assets/web/images/slide-img1.jpg') }}" data-bgposition="left top"
                                data-bgfit="cover" data-bgrepeat="no-repeat" alt="" />
                            <div class="tp-caption LargeTitle sfl tp-resizeme" data-x="0" data-y="280"
                                data-endspeed="1000" data-speed="1000" data-start="0" data-easing="Linear.easeNone"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 3; white-space: nowrap">
                                Fresh Vegetables
                            </div>

                            <div class="tp-caption sfb tp-resizeme" data-x="45" data-y="470" data-endspeed="500"
                                data-speed="500" data-start="1500" data-easing="Linear.easeNone" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 4; white-space: nowrap">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                            <div class="tp-caption Title sft tp-resizeme" data-x="45" data-y="390" data-endspeed="500"
                                data-speed="500" data-start="1500" data-easing="Power2.easeInOut" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 4; white-space: nowrap">
                                In augue urna, nunc, tincidunt, augue, augue facilisis
                                facilisis.
                            </div>
                        </li>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000"
                            data-thumb="{{ asset('assets/web/images/slide-img2.jpg') }}">
                            <img src="{{ asset('assets/web/images/slide-img2.jpg') }}" data-bgposition="left top"
                                data-bgfit="cover" data-bgrepeat="no-repeat" alt="" />
                            <div class="tp-caption LargeTitle sfl tp-resizeme" data-x="45" data-y="280"
                                data-endspeed="500" data-speed="500" data-start="1300" data-easing="Linear.easeNone"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 3; white-space: nowrap">
                                Organic Products
                            </div>
                            <div class="tp-caption sfb tp-resizeme" data-x="45" data-y="470" data-endspeed="500"
                                data-speed="500" data-start="1500" data-easing="Linear.easeNone" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 4; white-space: nowrap">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                            <div class="tp-caption Title sft tp-resizeme" data-x="45" data-y="390" data-endspeed="500"
                                data-speed="500" data-start="1500" data-easing="Power2.easeInOut" data-splitin="none"
                                data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 4; white-space: nowrap">
                                In augue urna, nunc, tincidunt, augue, augue facilisis
                                facilisis.
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div>

        <!-- end Slider -->
        <!-- banner section -->
        <div class="offer-banner-section">
            <div class="container">
                <div class="row">
                    <div class="offer-inner col-lg-12">
                        <!--newsletter-wrap-->
                        <div class="left">
                            <div class="col">
                                <a href="#"><img src="{{ asset('assets/web/images/offer-banner1.jpg') }}"
                                        alt="offer banner1" /></a>
                            </div>
                            <div class="col mid">
                                <a href="#"><img src="{{ asset('assets/web/images/offer-banner2.jpg') }}"
                                        alt="offer banner2" /></a>
                            </div>
                            <div class="col last">
                                <a href="#"><img src="{{ asset('assets/web/images/offer-banner3.jpg') }}"
                                        alt="offer banner3" /></a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="col">
                                <div class="add-slider">
                                    <ul id="add-slideshow">
                                        <li>
                                            <a href="#" title=""><img
                                                    src="{{ asset('assets/web/images/offer-banner4.jpg') }}"
                                                    alt="" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End banner section -->

        <!-- main container -->

        <section class="main-container col1-layout home-content-container">
            <div class="container">
                <div class="std ">
                    <div class="best-seller-pro">
                        <div class="slider-items-products">
                            <div class="new_title center">
                                <h2>Best Seller</h2>
                            </div>
                            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4">
                                    <!-- Item -->
                                    @foreach ($products as $product)
                                        <div class="item">
                                            <div class="product-block">
                                                <div class="product-image">
                                                    <a href="{{ route('detail', ['id' => $product->id]) }}">
                                                        <figure class="product-display">
                                                            <div class="sale-label sale-top-left">Sale</div>
                                                            <img src="{{ asset($product->image_features->first()->url_img) }}"
                                                                class="product-mainpic" alt="Sample Product" />
                                                            <img class="product-secondpic" alt="Sample Product"
                                                                src="{{ asset($product->image_features->first()->url_img) }}" />
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-meta">
                                                    <div class="product-action">
                                                        <a class="addcart" href="shopping_cart.html">
                                                            <i class="bi bi-cart3"></i> Add to
                                                            cart
                                                        </a>
                                                        <a href="quick_view.html" class="quickview">
                                                            <i class="bi bi-search"></i></i> Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title">
                                                        {{-- {{ route('detail', ['id' => $product->id]) }} --}}
                                                        <a href="" title="Sample Product">
                                                            {{ $product->name }}
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span
                                                                        class="price">{{ number_format($product->price, 2, '.', ',') }}
                                                                        VND
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width: 80%"></div>
                                                                </div>
                                                                <p class="rating-links">
                                                                    <a href="#">1 Review(s)</a>
                                                                    <span class="separator">|</span>
                                                                    <a href="#">Add Review</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End main container -->
        <!-- Featured Slider -->

        <section>
            <div class="container">
                <div class="featured-pro">
                    <div class="slider-items-products">
                        <div class="new_title center">
                            <h2>Featured Products</h2>
                        </div>
                        <div id="featured-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                <!-- Item -->
                                @php
                                    $totalProducts = $products->count();
                                    $middleIndex = floor($totalProducts / 2);
                                    $middleProducts = $products->slice($middleIndex);
                                @endphp

                                @foreach ($middleProducts as $product)
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="{{ route('detail', ['id' => $product->id]) }}">
                                                    <figure class="product-display">
                                                        <div class="sale-label sale-top-left">Sale</div>
                                                        <img src="{{ asset($product->image_features->first()->url_img) }}"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="{{ asset($product->image_features->first()->url_img) }}" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="bi bi-cart3"></i> Add to cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="bi bi-search"></i></i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html"
                                                        title="Sample Product">{{ $product->name }}
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <span
                                                                    class="price">{{ number_format($product->price, 2, '.', ',') }}
                                                                    VND</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width: 80%"></div>
                                                            </div>
                                                            <p class="rating-links">
                                                                <a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span>
                                                                <a href="#">Add Review</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Slider -->

        <!-- Latest Blog -->
        <section class="latest-blog container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="blog-l blog-img">
                        <a href="blog_detail.html"><img src="{{ asset('assets/web/images/blog-img1.jpg') }}"
                                alt="blog img" /></a>
                    </div>
                    <div class="blog-info">
                        <h3>
                            <a href="blog_detail.html">Lorem ipsum dolor sit amet, consectetur.</a>
                        </h3>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames.
                        </p>
                        <div class="date-blog">
                            <i class="icon-calendar"></i> Apr 02, 2014 &nbsp; 04:21:59
                        </div>
                        <div class="info">
                            <a href="blog_detail.html" class="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="blog-l blog-img">
                        <a href="blog_detail.html"><img src="{{ asset('assets/web/images/blog-img2.jpg') }}" /></a>
                    </div>
                    <div class="blog-info">
                        <h3>
                            <a href="blog_detail.html">Proin mauris mi, egestas eget nibh sit.</a>
                        </h3>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames.
                        </p>
                        <div class="date-blog">
                            <i class="icon-calendar"></i> Apr 10, 2014 &nbsp; 09:11:44
                        </div>
                        <div class="info">
                            <a href="blog_detail.html" class="">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="blog-l blog-img">
                        <a href="blog_detail.html"><img src="{{ asset('assets/web/images/blog-img4.jpg') }}"
                                alt="blog img" />
                        </a>
                    </div>
                    <div class="blog-info">
                        <h3>
                            <a href="blog_detail.html">Proin mauris leo, sollicitudin vel egestas.</a>
                        </h3>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames.
                        </p>
                        <div class="date-blog">
                            <i class="icon-calendar"></i> Apr 20, 2014 &nbsp; 10:01:55
                        </div>
                        <div class="info">
                            <a href="blog_detail.html" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- middle slider -->
        <section class="middle-slider container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bag-product-slider small-pr-slider">
                        <div class="slider-items-products">
                            <div class="new_title center">
                                <h2>New Products</h2>
                            </div>
                            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col3">
                                    <!-- Item -->
                                    @foreach ($products->reverse() as $product)
                                        <div class="item">
                                            <div class="product-block">
                                                <div class="product-image">
                                                    <a href="{{ route('detail', ['id' => $product->id]) }}">
                                                        <figure class="product-display">
                                                            <div class="new-label new-top-left">New</div>
                                                            <img src="{{ asset($product->image_features->first()->url_img) }}"
                                                                class="product-mainpic" alt="Sample Product" />
                                                            <img class="product-secondpic" alt="Sample Product"
                                                                src="{{ asset($product->image_features->first()->url_img) }}" />
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-meta">
                                                    <div class="product-action">
                                                        <a class="addcart" href="javascript:;">
                                                            <i class="bi bi-cart3"></i>
                                                        </a>
                                                        <a href="quick_view.html" class="quickview">
                                                            <i class="bi bi-search"></i></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title">
                                                        <a href="product_detail.html"
                                                            title="Sample Product">{{ $product->name }}</a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                {{-- <p class="old-price">
                                                                    <span class="price-label">Regular Price:</span>
                                                                    <span
                                                                        class="price">{{ number_format($product->price, 2, '.', ',') }}
                                                                        VND </span>
                                                                </p> --}}
                                                                <p class="special-price">
                                                                    <span class="price-label">Special Price</span>
                                                                    <span
                                                                        class="price">{{ number_format($product->price, 2, '.', ',') }}
                                                                        VND </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width: 0%"></div>
                                                                </div>
                                                                <p class="rating-links">
                                                                    <a href="#">1 Review(s)</a>
                                                                    <span class="separator">|</span>
                                                                    <a href="#">Add Review</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>
