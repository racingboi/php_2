@extends('layouts.web')
@section('title', 'Phụ tùng ôtô - Trang chủ ')
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
                                <div class="view-mode"> <span title="Grid"
                                        class="button button-active  button-grid">Grid</span>&nbsp;<a href="list.html"
                                        title="List" class="button button-list">List</a>&nbsp; </div>

                            </div>
                            <div id="sort-by">
                                <label class="left">Sort By: </label>
                                <ul>
                                    <li><a href="#">Position<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Price</a></li>
                                            <li><a href="#">Position</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="button-asc left" href="#" title="Set Descending Direction"><span
                                        style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span></a>
                            </div>
                            <div class="pager">
                                <div id="limiter">
                                    <label>View: </label>
                                    <ul>
                                        <li><a href="#">15<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">30</a></li>
                                                <li><a href="#">35</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pages">
                                    <label>Page:</label>
                                    <ul class="pagination">
                                        <li><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="products-grid">
                            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="{{ asset('assets/web/products-images/product1.jpg') }}"
                                                        class="lazyOwl product-mainpic" alt=""
                                                        style="display: block;"> <img class="product-secondpic"
                                                        alt=""
                                                        src="{{ asset('assets/web/products-images/product1.jpg') }}"
                                                        width="258">
                                                </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> Add
                                                    to cart </a> <a href="quick_view.html" class="quickview">Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="product_detail.html"
                                                    title="Sample Product">Sample Product </a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$125.00</span> </span> </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                                class="separator">|</span> <a href="#">Add Review</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
                    <div class="side-nav-categories">
                        <div class="block-title"> Categories </div>
                        <!--block-title-->
                        <!-- BEGIN BOX-CATEGORY -->
                        <div class="box-content box-category">
                            <ul>
                                <li> <a class="active" href="#">Vegetables</a> <span
                                        class="subDropdown minus"></span>
                                    <ul class="level0_415" style="display:block">
                                        <li> <a href="#"> Cabbage </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Apple </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategorys </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Cauliflower </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Graphs </a>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Straberry </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>


                                        <!--level1-->
                                        <li> <a href="#"> Nuts </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                    </ul>
                                    <!--level0-->
                                </li>
                                <!--level 0-->
                                <li> <a href="#">Fruits</a> <span class="subDropdown plus"></span>
                                    <ul class="level0_455" style="display:none">
                                        <li> <a href="#"> Cabbage </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Pineapple </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Papaw </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Carrot </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Potato </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                    </ul>
                                    <!--level0-->
                                </li>
                                <!--level 0-->
                                <li> <a href="#">Dairy</a> <span class="subDropdown plus"></span>
                                    <ul class="level0_482" style="display:none">
                                        <li> <a href="#"> Fruits </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Mango </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                        <li> <a href="#"> Apple </a> <span class="subDropdown plus"></span>
                                            <ul class="level1" style="display:none">
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <li> <a href="#"> Subcategory </a> </li>
                                                <!--end for-each -->
                                            </ul>
                                            <!--level1-->
                                        </li>
                                        <!--level1-->
                                    </ul>
                                    <!--level0-->
                                </li>
                                <!--level 0-->
                                <li> <a href="#">Salad</a> </li>
                                <!--level 0-->
                                <li class="last"> <a href="#">Snacks</a> </li>
                                <!--level 0-->
                            </ul>
                        </div>
                        <!--box-content box-category-->
                    </div>
                    <div class="block block-banner"><a href="#"><img
                                src="{{ asset('assets/web/images/block-banner.png') }}" alt="block-banner"></a></div>
                </aside>
            </div>
        </div>
    </section>
@endsection
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/revslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.mobile-menu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script>
