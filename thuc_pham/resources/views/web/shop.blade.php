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
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i
                                                        class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a
                                                    href="quick_view.html" class="quickview"> <i
                                                        class="icon-zoom">&nbsp;</i>Quick view</a> </div>
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
                    <div class="block block-layered-nav">
                        <div class="block-title"><span>Shop By</span></div>
                        <div class="block-content">
                            <p class="block-subtitle">Shopping Options</p>
                            <dl id="narrow-by-list">
                                <dt class="odd">Price</dt>
                                <dd class="odd">
                                    <ol>
                                        <li> <a href="#"><span class="price">$0.00</span> - <span
                                                    class="price">$99.99</span></a> (6) </li>
                                        <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                                    </ol>
                                </dd>
                                <dt class="even">Manufacturer</dt>
                                <dd class="even">
                                    <ol>
                                        <li> <a href="#">TheBrand</a> (9) </li>
                                        <li> <a href="#">Company</a> (4) </li>
                                        <li> <a href="#">LogoFashion</a> (1) </li>
                                    </ol>
                                </dd>
                                <dt class="odd">Color</dt>
                                <dd class="odd">
                                    <ol>
                                        <li> <a href="#">Green</a> (1) </li>
                                        <li> <a href="#">White</a> (5) </li>
                                        <li> <a href="#">Black</a> (5) </li>
                                        <li> <a href="#">Gray</a> (4) </li>
                                        <li> <a href="#">Dark Gray</a> (3) </li>
                                        <li> <a href="#">Blue</a> (1) </li>
                                    </ol>
                                </dd>
                                <dt class="last even">Size</dt>
                                <dd class="last even">
                                    <ol>
                                        <li> <a href="#">S</a> (6) </li>
                                        <li> <a href="#">M</a> (6) </li>
                                        <li> <a href="#">L</a> (4) </li>
                                        <li> <a href="#">XL</a> (4) </li>
                                    </ol>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="block block-cart">
                        <div class="block-title"><span>My Cart</span></div>
                        <div class="block-content">
                            <div class="summary">
                                <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span
                                        class="price">$27.99</span> </p>
                            </div>
                            <div class="ajax-checkout">
                                <button type="submit" title="Submit"
                                    class="button button-checkout"><span>Checkout</span></button>
                            </div>
                            <p class="block-subtitle">Recently added item(s) </p>


                            <ul>
                                <li class="item"> <a class="product-image" title="Sample Product"
                                        href="product_detail.html"><img width="80" alt="Sample Product"
                                            src="../products-images/product1.jpg"></a>
                                    <div class="product-details">
                                        <div class="access"> <a class="btn-remove1" title="Remove This Item"
                                                href="#"> <span class="icon"></span> Remove </a> </div>
                                        <p class="product-name"> <a href="product_detail.html">Sample Product</a> </p>
                                        <strong>1</strong> x <span class="price">$19.99</span>
                                    </div>
                                </li>
                                <li class="item last"> <a class="product-image" title="Sample Product"
                                        href="product_detail.html"><img width="80" alt="Sample Product"
                                            src="../products-images/product2.jpg"></a>
                                    <div class="product-details">
                                        <div class="access"> <a class="btn-remove1" title="Remove This Item"
                                                href="#"> <span class="icon"></span> Remove </a> </div>
                                        <p class="product-name"> <a href="product_detail.html">Sample Product</a> </p>
                                        <strong>1</strong> x <span class="price">$8.00</span>
                                        <!--access clearfix-->
                                    </div>
                                </li>
                            </ul>



                        </div>
                    </div>
                    <div class="block block-compare">
                        <div class="block-title "><span>Compare Products (2)</span></div>
                        <div class="block-content">
                            <ol id="compare-items">
                                <li class="item odd">
                                    <input type="hidden" class="compare-item-id" value="2173">
                                    <a href="#" title="Remove This Item" class="btn-remove1"></a> <a
                                        class="product-name" href="#"> Sofa with Box-Edge Polyester Wrapped
                                        Cushions</a>
                                </li>
                                <li class="item last even">
                                    <input type="hidden" class="compare-item-id" value="2174">
                                    <a href="#" title="Remove This Item" class="btn-remove1"></a> <a
                                        class="product-name" href="#"> Sofa with Box-Edge Down-Blend Wrapped
                                        Cushions</a>
                                </li>
                            </ol>
                            <div class="ajax-checkout">
                                <button class="button button-compare" title="Submit"
                                    type="submit"><span>Compare</span></button>
                                <button class="button button-clear" title="Submit"
                                    type="submit"><span>Clear</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="block block-list block-viewed">
                        <div class="block-title"><span>Recently Viewed</span> </div>
                        <div class="block-content">
                            <ol id="recently-viewed-items">
                                <li class="item odd">
                                    <p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered Arm</a>
                                    </p>
                                </li>
                                <li class="item even">
                                    <p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>
                                </li>
                                <li class="item last odd">
                                    <p class="product-name"><a href="#"> Sofa with Box-Edge Down-Blend Wrapped
                                            Cushions</a></p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="block block-poll">
                        <div class="block-title"><span>Community Poll</span> </div>
                        <form onsubmit="return validatePollAnswerIsSelected();" method="post" action="#"
                            id="pollForm">
                            <div class="block-content">
                                <p class="block-subtitle">What is your favorite Magento feature?</p>
                                <ul id="poll-answers">
                                    <li class="odd">
                                        <input type="radio" value="5" id="vote_5" class="radio poll_vote"
                                            name="vote">
                                        <span class="label">
                                            <label for="vote_5">Layered Navigation</label>
                                        </span>
                                    </li>
                                    <li class="even">
                                        <input type="radio" value="6" id="vote_6" class="radio poll_vote"
                                            name="vote">
                                        <span class="label">
                                            <label for="vote_6">Price Rules</label>
                                        </span>
                                    </li>
                                    <li class="odd">
                                        <input type="radio" value="7" id="vote_7" class="radio poll_vote"
                                            name="vote">
                                        <span class="label">
                                            <label for="vote_7">Category Management</label>
                                        </span>
                                    </li>
                                    <li class="last even">
                                        <input type="radio" value="8" id="vote_8" class="radio poll_vote"
                                            name="vote">
                                        <span class="label">
                                            <label for="vote_8">Compare Products</label>
                                        </span>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="button button-vote" title="Vote"
                                        type="submit"><span>Vote</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="block block-tags">
                        <div class="block-title"><span>Popular Tags</span></div>
                        <div class="block-content">
                            <ul class="tags-list">
                                <li><a style="font-size:98.3333333333%;" href="#tagId/23/">Camera</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/109/">Hohoho</a></li>
                                <li><a style="font-size:145%;" href="#tagId/27/">SEXY</a></li>
                                <li><a style="font-size:75%;" href="#tagId/61/">Tag</a></li>
                                <li><a style="font-size:110%;" href="#tagId/29/">Test</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/17/">bones</a></li>
                                <li><a style="font-size:110%;" href="#tagId/12/">cool</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/184/">cool t-shirt</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/173/">crap</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/41/">good</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/16/">green</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/5/">hip</a></li>
                                <li><a style="font-size:75%;" href="#tagId/51/">laptop</a></li>
                                <li><a style="font-size:75%;" href="#tagId/20/">mobile</a></li>
                                <li><a style="font-size:75%;" href="#tagId/70/">nice</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/42/">phone</a></li>
                                <li><a style="font-size:98.3333333333%;" href="#tagId/30/">red</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/28/">tight</a></li>
                                <li><a style="font-size:75%;" href="#tagId/2/">trendy</a></li>
                                <li><a style="font-size:86.6666666667%;" href="#tagId/4/">young</a></li>
                            </ul>
                            <div class="actions"> <a class="view-all" href="#">View All Tags</a> </div>
                        </div>
                    </div>
                    <div class="block block-banner"><a href="#"><img src="images/block-banner.png"
                                alt="block-banner"></a></div>
                </aside>
            </div>
        </div>
    </section>
@endsection
