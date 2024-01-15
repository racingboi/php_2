@extends('layouts.web')
@section('title', 'GRYFFINDOR - Trang detail')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
                    <li class=""> <a href="grid.html" title="Go to Home Page">Women</a><span>&mdash;›</span></li>
                    <li class="category13"><strong> Sample Product </strong></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="product-view">
                        <div class="product-next-prev">
                            {{-- <a href="#" class="product-next">></a>
                            <a href="#" class="product-prev">
                                < </a> --}}
                        </div>
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                    <div class="new-label new-top-left"> New </div>
                                    <div class="product-image">
                                        <div class="large-image">

                                            <a href="{{ asset($product->image_features->first()->url_img) }}"
                                                class="cloud-zoom" id="zoom1"
                                                rel="useWrapper: false, adjustY:0, adjustX:20"> <img
                                                    src="{{ asset($product->image_features->first()->url_img) }}"
                                                    alt="">
                                            </a>

                                        </div>
                                        <div class="flexslider flexslider-thumb">
                                            <ul class="previews-list slides">
                                                @for ($i = 0; $i < $product->image_features->count(); $i++)
                                                    <li><a href='{{ asset($product->image_features[$i]->url_img) }}'
                                                            class='cloud-zoom-gallery'
                                                            rel="useZoom: 'zoom1', smallImage: '{{ asset($product->image_features[$i]->url_img) }}' "><img
                                                                src="{{ asset($product->image_features[$i]->url_img) }}"
                                                                alt = "Thumbnail 1" /></a>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- end: more-images -->

                                    <div class="clear"></div>
                                </div>
                                <div class="product-shop col-lg-7 col-sm-7 col-md-7 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{ $product->name }}</h1>
                                    </div>
                                    {{-- <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:60%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                    </div> --}}
                                    {{-- <p class="availability in-stock"><span>In Stock</span></p> --}}
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span
                                                    id="product-price-48" class="price">{{ $product->price }} </span> </p>
                                        </div>
                                    </div>
                                    <div class="short-description">
                                        <h2>Quick Overview</h2>
                                        <p>
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <label for="qty">Quantity:</label>
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <button
                                                        onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                        class="reduced items-count" type="button">
                                                        <i class="bi bi-dash-lg"></i>
                                                    </button>
                                                    <input type="text" class="input-text qty" title="Qty"
                                                        value="1" maxlength="12" id="qty" name="qty">
                                                    <button
                                                        onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                        class="increase items-count" type="button">
                                                        <i class="bi bi-plus-lg"></i>
                                                    </button>
                                                </div>
                                                <div class="custom pull-left">
                                                    <h5 class="m-3">{{ $product->unit }} </h5>
                                                </div>
                                            </div>

                                            <div class="pull-left">
                                                <button onClick="productAddToCartForm.submit(this)" class="button btn-cart"
                                                    title="Add to Cart" type="button"><span><i class="icon-basket"></i>
                                                        Add to Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 h-50">
                        <div class="box-additional">
                            <div class="upsell-pro wow bounceInUp animated">
                                <div class="slider-items-products">
                                    <div class="new_title center">
                                        <h2>Upsell Products</h2>
                                    </div>
                                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4">
                                            <!-- Item -->
                                            @foreach ($products as $a)
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="product-block">
                                                            <div class="product-image">
                                                                <a href="{{ route('detail', ['id' => $a->id]) }}">
                                                                    <figure class="product-display">
                                                                        <div class="new-label new-top-left">
                                                                            New
                                                                        </div>
                                                                        <img src="{{ asset($a->image_features->first()->url_img) }}"
                                                                            class="lazyOwl product-mainpic" alt=""
                                                                            style="display: block" />
                                                                        <img class="product-secondpic" alt=""
                                                                            src="{{ asset($a->image_features->first()->url_img) }}" />
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="product-meta">
                                                                <div class="product-action">
                                                                    <a class="addcart" href="">
                                                                        <i class="bi bi-cart3"></i>
                                                                    </a>
                                                                    <a href="quick_view.html" class="quickview">
                                                                        <i class="bi bi-search"></i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a href="product_detail.html"
                                                                        title="Sample Product">{{ $a->name }}</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <p class="old-price">
                                                                                <span class="price-label">Regular
                                                                                    Price:</span>
                                                                                <span class="price"> $100.00 </span>
                                                                            </p>
                                                                            <p class="special-price">
                                                                                <span class="price-label">Special
                                                                                    Price</span>
                                                                                <span class="price"> $90.00 </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width: 0%">
                                                                                </div>
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
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script type="text/javascript" src=" {{ asset('assets/web/js/jquery.min.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/bootstrap.min.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/parallax.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/common.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/revslider.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/jquery.mobile-menu.min.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/owl.carousel.min.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/jquery.flexslider.js') }} "></script>
<script type="text/javascript" src=" {{ asset('assets/web/js/cloud-zoom.js') }} "></script>
