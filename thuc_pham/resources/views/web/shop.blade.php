@extends('layouts.web')
@section('title', 'GRYFFINDOR - Trang shop ')
@section('content')
    <section class="main-container col2-left-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
                    <div class="category-title">
                        <h1>Tops &amp; Tees</h1>
                    </div>
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1">

                                    <!-- Item -->
                                    <div class="item"> <a href="#x"><img alt=""
                                                src="{{ asset('assets/web/images/women_banner.png') }}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <h2 class="cat-heading">Category Banner</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#x"><img alt=""
                                                src="{{ asset('assets/web/images/women_banner1.png') }}"></a> </div>
                                    <!-- End Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category-products">
                        <div class="toolbar">
                            <div class="sorter">
                            </div>
                            <div id="sort-by">
                                <div class="d-flex justify-content-evenly text-center">
                                    <label class="left">Sắp xếp theo:</label>
                                    <form class="d-flex justify-content" action="{{ route('LocSp') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <select class="form-control nice-select w-100" name="sorting_option">
                                                <option selected value="1">Theo bảng chữ cái, A-Z</option>
                                                <option value="2">Sắp xếp theo mức độ phổ biến</option>
                                                <option value="3">Sắp xếp theo độ mới</option>
                                                <option value="4">Sắp xếp theo giá: thấp đến cao</option>
                                                <option value="5">Sắp xếp theo giá: cao xuống thấp</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-light text-center p-3 h-19" type="submit">Lọc</button>
                                    </form>
                                </div>
                            </div>
                            <div class="pager">
                                <div class="pages">
                                    <label>Page:</label>
                                    <ul class="pagination">
                                        <!-- Previous Page Link -->
                                        @if ($products->currentPage() > 1)
                                            <li><a href="{{ $products->previousPageUrl() }}">&laquo;</a></li>
                                        @else
                                            <li class="disabled"><span>&laquo;</span></li>
                                        @endif

                                        <!-- Pagination Elements -->
                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                            <li class="{{ $i == $products->currentPage() ? 'active' : '' }}">
                                                <a href="{{ $products->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        <!-- Next Page Link -->
                                        @if ($products->hasMorePages())
                                            <li><a href="{{ $products->nextPageUrl() }}">&raquo;</a></li>
                                        @else
                                            <li class="disabled"><span>&raquo;</span></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="products-grid">
                            @foreach ($products as $product)
                                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-inner">
                                        <div class="product-block">
                                            <div class="product-image"> <a
                                                    href="{{ route('detail', ['id' => $product->id]) }}">
                                                    <figure class="product-display">
                                                        <div class="sale-label sale-top-left">Sale</div>
                                                        <img src="{{ asset($product->image_features->first()->url_img) }}"
                                                            class="lazyOwl product-mainpic" alt=""
                                                            style="display: block;"> <img class="product-secondpic"
                                                            alt=""
                                                            src="{{ asset($product->image_features->first()->url_img) }}"
                                                            width="258">
                                                    </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <form id="addToCartForm"
                                                        action="{{ route('cart.add', ['productId' => $product->id, 'quantity' => 1]) }}"
                                                        method="post">
                                                        @csrf
                                                        <!-- Add any hidden input fields as needed -->
                                                        <a class="addcart">
                                                            <input type="submit" value="Add to cart">
                                                        </a>
                                                    </form>
                                                    <a href="quick_view.html" class="quickview">Quick
                                                        view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a
                                                        href="{{ route('detail', ['id' => $product->id]) }}"
                                                        title="Sample Product"> {{ $product->name }}</a> </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span
                                                                    class="price">{{ number_format($product->price, 2, '.', ',') }}
                                                                    VND</span> </span> </div>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a>
                                                                <span class="separator">|</span> <a href="#">Add
                                                                    Review</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
                    <div class="side-nav-categories">
                        <div class="block-title">Danh Mục</div>
                        <!--block-title-->
                        <!-- BEGIN BOX-CATEGORY -->
                        <div class="box-content box-category">
                            <ul>
                                <li> <a class="active" href="#">menu</a> <span class="subDropdown minus"></span>
                                    <ul class="level0_415" style="display:block">
                                        @foreach ($category as $a)
                                            <li>
                                                <a href="#">{{ $a->name }}</a> <span class="subDropdown plus">
                                                </span>
                                                @foreach ($a->subcategories as $sub)
                                                    <ul class="level1" style="display:none">
                                                        <li> <a href="#"> {{ $sub->name }} </a> </li>
                                                    </ul>
                                                @endforeach
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block block-banner"><a href="#"><img
                                src="{{ asset('assets/web/images/block-banner.png') }}" alt="block-banner"></a></div>
                </aside>
            </div>
        </div>
    </section>
@endsection
{{-- <script type="text/javascript" src="{{ asset('assets/web/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/revslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.mobile-menu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script> --}}
