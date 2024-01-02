<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

<body class="index">
    <div id="page">
        <!-- Header -->
        <div class="header-banner">
            <div class="assetBlock">
                <div style="height: 20px; overflow: hidden" id="slideshow">
                    <p style="display: block">
                        Super Market! - <span>50%</span> OFF on fresh Vegetables &gt;
                    </p>
                    <p style="display: none">
                        <span>15%</span> Discount! - on Ayurvedic Foods &gt;
                    </p>
                </div>
            </div>
        </div>

        <header class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                            <div class="phone hidden-xs">
                                <div class="phone-box">
                                    <strong>Call:</strong> <span>+(888) 123-4567 </span>
                                </div>
                            </div>
                            <div class="welcome-msg hidden-xs">Default welcome msg!</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div class="basket dropdown-toggle">
                                        <a href="#">
                                            {{-- <i class="fa fa-shopping-bag"></i> --}}
                                            <i class="bi bi-bag"></i>
                                            <div class="cart-box">
                                                <span id="cart-total">2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <div style="display: none" class="top-cart-content arrow_box">
                                            <div class="block-subtitle">Recently added item(s)</div>
                                            <ul id="cart-sidebar" class="mini-products-list">
                                                <li class="item last odd">
                                                    <a class="product-image" href="product_detail.html"
                                                        title=" Lucky Brand Janis "><img alt="Sample Product"
                                                            src="{{ asset('assets/web/products-images/product2.jpg') }}"
                                                            width="80" /></a>
                                                    <div class="detail-item">
                                                        <div class="product-details">
                                                            <a href="#" title="Remove This Item" onClick=""
                                                                class="btn-remove1">Remove This Item</a>
                                                            <a class="btn-edit" title="Edit item" href="#">Edit
                                                                item</a>
                                                            <p class="product-name">
                                                                <a href="product_detail.html"
                                                                    title=" Lucky Brand Janis ">Sample Product</a>
                                                            </p>
                                                        </div>
                                                        <div class="product-details-bottom">
                                                            <span class="price">$320.00</span>

                                                            <!--p-->
                                                            <span class="title-desc">Qty:</span>
                                                            <strong>2</strong>
                                                            <!--/p-->

                                                            <!--p-->

                                                            <!--p-->
                                                        </div>
                                                    </div>

                                                    <!--div class="edit-remove"></div-->
                                                </li>
                                            </ul>
                                            <div class="top-subtotal">
                                                Subtotal: <span class="price">$480.00</span>
                                            </div>
                                            <div class="actions">
                                                <button class="btn-checkout" type="button">
                                                    <span>Checkout</span>
                                                </button>
                                                <button class="view-cart" type="button">
                                                    <span>View Cart</span>
                                                </button>
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
                            <div class="toplinks">
                                <div class="links">
                                    <div class="login">
                                        <a title="Login" href="login.html">
                                             {{-- <span class="hidden-xs"> --}}
                                                <i class="bi bi-box-arrow-in-right"></i>
                                             {{-- </span> --}}
                                        </a>
                                    </div>
                                    <div class="wishlist">
                                       <a  href="wishlist.html">
                                            <span class="hidden-xs">
                                                <i class="bi bi-heart"></i>
                                                <span class="wishlist-items">0</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="search">
                                       <a href="#">
                                          <span class="hidden-xs">
                                        <i class="bi bi-search"></i>
                                          </span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <!-- End Header Currency -->

                            {{-- <div class="collapse navbar-collapse">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" />
                                        <span class="input-group-btn">
                                            <button type="reset" class="btn btn-default">
                                                <i class="bi bi-x"></i>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-default">
                                                <i class="bi bi-search"></i>
                                                <span class="sr-only">Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- Navbar -->
        <nav>
            <div class="header container">
                <div class="row">
                    <div class="">
                        <div class="mm-toggle-wrap">
                            <div class="mm-toggle">
                                <i class="fa fa-bars"></i><span class="mm-label">Menu</span>
                            </div>
                        </div>
                        <!-- Header Logo -->
                        <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce"
                                src="{{ asset('assets/web/images/logo.png') }}" /></a>
                        <!-- End Header Logo -->

                        <div class="nav-inner">
                            <ul id="nav" class="">
                                <li class="level0 parent drop-menu">
                                    <a href="index.html" class="active"><span>Home</span> </a>
                                </li>
                                <li class="level0 parent drop-menu">
                                    <a href="#"><span>Pages</span> </a>
                                    <ul style="display: none" class="level1">
                                        <li class="level1 first">
                                            <a href="grid.html"> <span>Grid</span></a>
                                        </li>
                                        <li class="level1 nav-10-2">
                                            <a href="list.html"> <span>List</span> </a>
                                        </li>
                                        <li class="level1 nav-10-3">
                                            <a href="product_detail.html">
                                                <span>Product Detail</span>
                                            </a>
                                        </li>
                                        <li class="level1 nav-10-4">
                                            <a href="shopping_cart.html">
                                                <span>Shopping Cart</span>
                                            </a>
                                        </li>
                                        <li class="level1 first parent">
                                            <a href="checkout.html"> <span>Checkout</span></a>
                                            <ul class="level2">
                                                <li class="level2 nav-2-1-1 first">
                                                    <a href="checkout_method.html"><span>Checkout Method</span></a>
                                                </li>
                                                <li class="level2 nav-2-1-5 last">
                                                    <a href="checkout_billing_info.html"><span>Checkout Billing
                                                            Info</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 nav-10-5">
                                            <a href="wishlist.html"> <span>Wishlist</span> </a>
                                        </li>
                                        <li class="level1 nav-10-6">
                                            <a href="dashboard.html"> <span>Dashboard</span> </a>
                                        </li>
                                        <li class="level1 nav-10-7">
                                            <a href="multiple_addresses.html">
                                                <span>Multiple Addresses</span>
                                            </a>
                                        </li>
                                        <li class="level1 nav-10-8">
                                            <a href="about_us.html"> <span>About Us</span> </a>
                                        </li>
                                        <li class="level1 nav-10-11">
                                            <a href="faq.html"> <span>FAQ</span> </a>
                                        </li>
                                        <li class="level1 nav-10-12">
                                            <a href="quick_view.html"> <span>Quick View</span> </a>
                                        </li>
                                        <li class="level1 nav-10-13">
                                            <a href="newsletter.html"> <span>Newsletter</span> </a>
                                        </li>
                                        <li class="level1 nav-10-14">
                                            <a href="contact_us.html"> <span>Contact Us</span></a>
                                        </li>
                                        <li class="level1 first parent">
                                            <a href="blog.html"> <span>Blog</span></a>
                                            <ul class="level2">
                                                <li class="level2 nav-2-1-1 first">
                                                    <a href="blog_detail.html"><span>Blog Detail</span></a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="level1 nav-10-16">
                                            <a href="404error.html"> <span>404 Error Page</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="level0 nav-5 level-top first">
                                    <a href="grid.html" class="level-top">
                                        <span>Vegetables</span>
                                    </a>
                                    <div style="display: none; left: 0px" class="level0-wrapper dropdown-6col">
                                        <div class="level0-wrapper2">
                                            <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                                                <ul class="level0">
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#.html" class=""><span>Cabbage</span></a>
                                                        <!--sub sub category-->

                                                        <ul class="level1">
                                                            <li class="level2 nav-6-1-1">
                                                                <a href="product_detail.html"
                                                                    class=""><span>Subcategory</span></a>
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
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/dresses.html"
                                                            class=""><span>Carrot</span></a>
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
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/styliest-bag.html"><span>Papaw</span></a>
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
                                                        <a href="#/material-bag.html"><span>Potato</span></a>
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
                                                        <a href="#/shoes.html"><span>Nuts</span></a>
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
                                                        <a href="#/jwellery.html"><span>Pineapple</span></a>
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
                                                                    href="product_detail-2.html"><span>Subcategory</span></a>
                                                            </li>
                                                            <!--level2 nav-6-1-1-->
                                                        </ul>
                                                        <!--level1-->
                                                        <!--sub sub category-->
                                                    </li>
                                                    <!--level1 nav-6-1 parent item-->
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/swimwear.html"><span>Mango</span></a>
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
                                                    <li class="level1 nav-6-1 parent item">
                                                        <a href="#/swimwear.html"><span>Carrot</span></a>
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
                                                </ul>
                                                <!--level0-->
                                            </div>
                                            <div class="nav-block nav-block-right std grid12-4">
                                                <div class="cat_pr_info">
                                                    <div class="cat_img">
                                                        <img alt="Sample Product"
                                                            src="../products-images/product25.jpg" width="175" />
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
                                        </div>
                                    </div>
                                </li>
                                <li class="level0 nav-7 level-top parent">
                                    <a href="#/electronics.html" class="level-top">
                                        <span>Fruits</span>
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
                                </li>
                                <li class="level0 parent drop-menu">
                                    <a href="#"><span>Dairy</span>
                                        <!--<span class="category-label-hot">Hot</span> -->
                                    </a>
                                </li>
                                <li class="level0 nav-6 level-top parent">
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
                                </li>
                                <li class="level0 nav-7 level-top parent">
                                    <a class="level-top" href="#/electronics.html">
                                        <span>Snacks</span>
                                    </a>
                                </li>
                                <li class="nav-custom-link level0 level-top parent">
                                    <a class="level-top" href="#"><span>Custom</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav -->

        <!-- Slider -->
        <div id="thm-slideshow" class="thm-slideshow">
            <div id="rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                <div id="rev_slider_4" class="rev_slider fullwidthabanner">
                    <ul>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000"
                            data-thumb="images/slider_img_2.html">
                            <img src="{{asset('assets/web/images/slide-img1.jpg')}}" data-bgposition="left top" data-bgfit="cover"
                                data-bgrepeat="no-repeat" alt="" />
                            <div class="tp-caption LargeTitle sfl tp-resizeme" data-x="0" data-y="280"
                                data-endspeed="1000" data-speed="1000" data-start="0" data-easing="Linear.easeNone"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" style="z-index: 3; white-space: nowrap">
                                Fresh Vegetables
                            </div>

                            <div class="tp-caption sfb tp-resizeme" data-x="45" data-y="470"
                                data-endspeed="500" data-speed="500" data-start="1500" data-easing="Linear.easeNone"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" style="z-index: 4; white-space: nowrap">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                            <div class="tp-caption Title sft tp-resizeme" data-x="45" data-y="390"
                                data-endspeed="500" data-speed="500" data-start="1500"
                                data-easing="Power2.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1"
                                style="z-index: 4; white-space: nowrap">
                                In augue urna, nunc, tincidunt, augue, augue facilisis
                                facilisis.
                            </div>
                        </li>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000"
                            data-thumb="images/slider_img_2.html">
                            <img src="{{asset('assets/web/images/slide-img2.jpg')}}" data-bgposition="left top" data-bgfit="cover"
                                data-bgrepeat="no-repeat" alt="" />
                            <div class="tp-caption LargeTitle sfl tp-resizeme" data-x="45" data-y="280"
                                data-endspeed="500" data-speed="500" data-start="1300" data-easing="Linear.easeNone"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" style="z-index: 3; white-space: nowrap">
                                Organic Products
                            </div>
                            <div class="tp-caption sfb tp-resizeme" data-x="45" data-y="470"
                                data-endspeed="500" data-speed="500" data-start="1500" data-easing="Linear.easeNone"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" style="z-index: 4; white-space: nowrap">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                            <div class="tp-caption Title sft tp-resizeme" data-x="45" data-y="390"
                                data-endspeed="500" data-speed="500" data-start="1500"
                                data-easing="Power2.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1"
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
                                <a href="#"><img src="{{asset('assets/web/images/offer-banner1.jpg')}}" alt="offer banner1" /></a>
                            </div>
                            <div class="col mid">
                                <a href="#"><img src="{{asset('assets/web/images/offer-banner2.jpg')}}" alt="offer banner2" /></a>
                            </div>
                            <div class="col last">
                                <a href="#"><img src="{{asset('assets/web/images/offer-banner3.jpg')}}" alt="offer banner3" /></a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="col">
                                <div class="add-slider">
                                    <ul id="add-slideshow">
                                        <li>
                                            <a href="#" title=""><img src="{{asset('assets/web/images/offer-banner4.jpg')}}"
                                                    alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#" title=""><img src="{{asset('assets/web/images/offer-banner5.jpg')}}"
                                                    alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="#/" title=""><img src="{{asset('assets/web/images/offer-banner6.jpg')}}"
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
                <div class="std">
                    <div class="best-seller-pro">
                        <div class="slider-items-products">
                            <div class="new_title center">
                                <h2>Best Seller</h2>
                            </div>
                            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4">
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="sale-label sale-top-left">Sale</div>
                                                        <img src="../products-images/product1.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product1.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i>Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">
                                                        Sample Product
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <span class="price">$125.00</span>
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product6.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product6.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width: 50%"></div>
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <div class="sale-label sale-top-right">Sale</div>
                                                        <img src="../products-images/product3.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product3.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="sale-label sale-top-right">Sale</div>
                                                        <img src="../products-images/product4.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product4.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $100.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $90.00 </span>
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="sale-label sale-top-left">Sale</div>
                                                        <img src="../products-images/product5.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product5.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <span class="price">$125.00</span>
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product6.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product6.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width: 50%"></div>
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product8.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product8.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="sale-label sale-top-left">Sale</div>
                                                        <div class="new-label new-top-right">New</div>
                                                        <img src="../products-images/product9.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product9.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="shopping_cart.html">
                                                        <i class="icon-shopping-cart">&nbsp;</i> Add to
                                                        cart
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $100.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $90.00 </span>
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
                                    <!-- End Item -->
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
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="../products-images/product11.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product11.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">Sample Product
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$125.00</span>
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
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="../products-images/product18.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product18.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">Sample
                                                    Product</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
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
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width: 50%"></div>
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
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="sale-label new-top-right">Sale</div>
                                                    <img src="../products-images/product13.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product13.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">Sample
                                                    Product</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
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
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="../products-images/product14.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product14.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">Sample
                                                    Product</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price">
                                                            <span class="price-label">Regular Price:</span>
                                                            <span class="price"> $100.00 </span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price-label">Special Price</span>
                                                            <span class="price"> $90.00 </span>
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
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="../products-images/product15.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product15.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <span class="price">$125.00</span>
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
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="../products-images/product11.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product11.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i>Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">
                                                    Sample Product
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">$125.00</span>
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
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="../products-images/product18.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product18.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">Sample
                                                    Product</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
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
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width: 50%"></div>
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
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <div class="product-block">
                                        <div class="product-image">
                                            <a href="product_detail.html">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <div class="sale-label sale-top-right">Sale</div>
                                                    <img src="../products-images/product16.jpg"
                                                        class="product-mainpic" alt="Sample Product" />
                                                    <img class="product-secondpic" alt="Sample Product"
                                                        src="../products-images/product16.jpg" />
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="product-action">
                                                <a class="addcart" href="shopping_cart.html">
                                                    <i class="icon-shopping-cart">&nbsp;</i> Add to cart
                                                </a>
                                                <a href="quick_view.html" class="quickview">
                                                    <i class="icon-zoom">&nbsp;</i> Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <a href="product_detail.html" title="Sample Product">Sample
                                                    Product</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
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
                                <!-- End Item -->
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
                        <a href="blog_detail.html"><img src="images/blog-img1.jpg" alt="blog img" /></a>
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
                        <a href="blog_detail.html"><img src="images/blog-img2.jpg" alt="blog img" /></a>
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
                        <a href="blog_detail.html"><img src="images/blog-img4.jpg" alt="blog img" />
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
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product21.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product21.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $100.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $90.00 </span>
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
                                    <!--item-inner-->

                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <img src="../products-images/product22.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product22.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width: 50%"></div>
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
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product23.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product23.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <img src="../products-images/product25.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product25.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $100.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $90.00 </span>
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

                                    <!--item-inner-->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product21.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product21.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $100.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $90.00 </span>
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
                                    <!--item-inner-->

                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <img src="../products-images/product22.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product22.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width: 50%"></div>
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

                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="../products-images/product23.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product23.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
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

                                    <div class="item">
                                        <div class="product-block">
                                            <div class="product-image">
                                                <a href="product_detail.html">
                                                    <figure class="product-display">
                                                        <img src="../products-images/product21.jpg"
                                                            class="product-mainpic" alt="Sample Product" />
                                                        <img class="product-secondpic" alt="Sample Product"
                                                            src="../products-images/product21.jpg" />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-meta">
                                                <div class="product-action">
                                                    <a class="addcart" href="javascript:;">
                                                        <i class="icon-shopping-cart">&nbsp;</i>
                                                    </a>
                                                    <a href="quick_view.html" class="quickview">
                                                        <i class="icon-zoom">&nbsp;</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a href="product_detail.html" title="Sample Product">Sample
                                                        Product</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $100.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $90.00 </span>
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

                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End middle slider -->

        <!-- End Latest Blog -->

        <div class="our-features-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="feature-box">
                            <i class="fas fa-truck"></i>
                            <div class="content">Free Shipping</div>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore.</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="feature-box">
                            <i class="fas fa-heart"></i>
                            <div class="content">Customer Support</div>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore.</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="feature-box">
                            <i class="fas fa-arrow-left"></i>
                            <div class="content">30 days money back</div>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore.</span>
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
                                    <h4><span>Subscribe for offers</span></h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Eveniet cumque, perferendis accusamus porro illo
                                        exercitationem molestias.
                                    </p>
                                    <input type="text" placeholder="Enter your email address"
                                        class="input-text required-entry validate-email"
                                        title="Sign up for our newsletter" id="newsletter1" name="email" />
                                    <button class="subscribe" title="Subscribe" type="submit">
                                        <span>Subscribe</span>
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus diam arcu, placerat ut odio vel, ultrices vehicula
                                erat. Ut mauris diam, egestas nec lacus sit amet.
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <h4>Customer Service</h4>
                            <ul class="links">
                                <li class="first">
                                    <a href="#" title="Contact us">My Account</a>
                                </li>
                                <li><a href="#" title="About us">Order History</a></li>
                                <li><a href="#" title="faq">FAQ</a></li>
                                <li><a href="#" title="Popular Searches">Specials</a></li>
                                <li class="last">
                                    <a href="#" title="Where is my order?">Help Center</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <h4>Corporation</h4>
                            <ul class="links">
                                <li class="first">
                                    <a title="Your Account" href="#">About us</a>
                                </li>
                                <li><a title="Information" href="#">Customer Service</a></li>
                                <li><a title="Addresses" href="#">Company</a></li>
                                <li><a title="Addresses" href="#">Investor Relations</a></li>
                                <li class="last">
                                    <a title="Orders History" href="#">Advanced Search</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <h4>Why Choose Us</h4>
                            <ul class="links">
                                <li>
                                    <a href="#">Shopping Guide</a>
                                </li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Company</a></li>
                                <li>
                                    <a href="#">Investor Relations</a>
                                </li>
                                <li class="last">
                                    <a href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <h4>Contact us</h4>
                            <div class="contacts-info">
                                <address>
                                    ThemesGround, 789 Main rd,
                                    <br />Anytown, CA 12345 USA
                                </address>
                                <div class="phone-footer">
                                    +(888) 123-4567
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
                            <div class="payment-accept">
                                <img src="{{ asset('assets/web/images/payment-1.png') }}" alt="" />
                                <img src="{{ asset('assets/web/images/payment-2.png') }}" alt="" />
                                <img src="{{ asset('assets/web/images/payment-3.png') }}" alt="" />
                                <img src="{{ asset('assets/web/images/payment-4.png') }}g" alt="" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="social">
                                <ul>
                                    <li class="fb"><a href="#"><i class="fb fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#">
                                            <i class="fab fa-google-plus-g"></i></a></li>
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
                            &copy; 2016 Themesground. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>

    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search" name="search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="icon-search"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control simple" placeholder="Search ..."
                                name="srch-term" id="srch-term" />
                        </div>
                    </form>
                </div>
            </li>
            <li>
                <div class="home">
                    <a href="index.html"><i class="icon-home"></i>Home</a>
                </div>
            </li>
            <li>
                <a href="#">Pages </a>
                <!--sub sub category-->
                <ul>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="list.html">List</a></li>
                    <li><a href="product_detail.html">Product Detail </a></li>
                    <li><a href="shopping_cart.html">Shopping Cart </a></li>
                    <li>
                        <a href="checkout.html">Checkout</a>
                        <!--sub sub category-->
                        <ul>
                            <li><a href="checkout_method.html">Checkout Method</a></li>
                            <li>
                                <a href="checkout_billing-info.html">Checkout Billing Info</a>
                            </li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li><a href="wishlist.html">Wishlist </a></li>
                    <li><a href="dashboard.html">Dashboard </a></li>
                    <li><a href="multiple_addresses.html">Multiple Addresses </a></li>
                    <li><a href="about_us.html">About us </a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="quick_view.html">Quick View</a></li>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li>
                        <a href="blog.html">Blog</a>
                        <!--sub sub category-->
                        <ul>
                            <li><a href="blog_detail.html">Blog Detail</a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li><a href="404error.html">404 Error Page</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Vegetables</a>
                <ul>
                    <li>
                        <a href="#" class="">Cabbage</a>
                        <ul>
                            <li><a href="product_detail.html" class="">Subcategory</a></li>
                            <li><a href="product_detail.html" class="">Subcategory</a></li>
                            <li><a href="product_detail.html" class="">Subcategory</a></li>
                            <li><a href="product_detail.html" class="">Subcategory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/material-bag.html">Carrot</a>
                        <ul>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/shoes.html">Papaw</a>
                        <ul>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/jwellery.html">Potato</a>
                        <ul>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/dresses.html">Nuts</a>
                        <ul>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/swimwear.html">Pineapple</a>
                        <ul>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                            <li><a href="product_detail.html">Subcategory</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Fruits</a>
                <ul>
                    <li>
                        <a href="#/shoes.html" class="">Mango</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/dresses.html">Carrot</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/jackets.html">Apple</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/watches.html">Strawberry</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/sunglasses.html">Cauliflower</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/accesories.html">Graphs</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                            <li class="level2 nav-6-1-1">
                                <a href="product_detail.html">Subcategory</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Dairy</a></li>
            <li>
                <a href="#">Salad</a>
                <ul>
                    <li>
                        <a href="#/mobiles.html"><span>Manago</span></a>
                        <!--sub sub category-->

                        <ul>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/mobiles-accesories.html" class=""><span>Subcategory</span></a>
                        <ul>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/cameras.html"><span>Cameras</span></a>
                        <ul>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/audio-video.html"><span>Audio &amp; Video</span></a>
                        <ul>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/computer.html"><span>Computer</span></a>
                        <ul>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                        </ul>
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    <li>
                        <a href="#/home-appliances.html"><span>Appliances</span></a>
                        <!--sub sub category-->

                        <ul>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                            <li>
                                <a href="product_detail.html"><span>Subcategory</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Snacks</a></li>
            <li><a href="#">Custom</a></li>
        </ul>
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
