<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/dashboard/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">

    <!-- Example: Include Bootstrap CSS from a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>

<body>
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('assets/dashboard/img/logo.png') }}" alt="">
                </a>
                <a href="{{ route('admin.dashboard') }}" class="logo-small">
                    <img src="{{ asset('assets/dashboard/img/logo-small.png') }}" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <ul class="nav user-menu">
                {{-- them ten nguoi dung --}}
                @include('layouts.navigation')
            </ul>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}"><img
                                    src="{{ asset('assets/dashboard/img/icons/dashboard.svg') }}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/product.svg') }}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.products.list') }}">Product List</a></li>
                                <li><a href="{{ route('admin.products.create') }}">Add Product</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/places.svg') }}" alt="img"><span>
                                    Category</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.categories.list') }}">Category List</a></li>
                                <li><a href="{{ route('admin.categories.create') }}">Add Category </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/places.svg') }}" alt="img"><span>
                                    Sub Category</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.subcategories.list') }}">Sub Category List</a></li>
                                <li><a href="{{ route('admin.subcategories.create') }}">Add Sub Category </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/purchase1.svg') }}" alt="img"><span>
                                    Posts</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.posts.list') }}">Posts List</a></li>
                                <li><a href="{{ route('admin.posts.create') }}">Add Posts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/sales1.svg') }}" alt="img"><span>
                                    Coupons</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.coupons.list') }}">Coupons List</a></li>
                                <li><a href="{{ route('admin.coupons.create') }}">Add Coupons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/quotation1.svg') }}"
                                    alt="img"><span>
                                    Orders</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="quotationList.html">Quotation List</a></li>
                                <li><a href="addquotation.html">Add Quotation</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/users1.svg') }}" alt="img"><span>
                                    Users</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('admin.users.list') }}">Users List</a></li>
                                <li><a href="{{ route('admin.users.create') }}">Add Users</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/settings.svg') }}"
                                    alt="img"><span>
                                    website</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="generalsettings.html">General Settings</a></li>
                                <li><a href="emailsettings.html">Email Settings</a></li>
                                <li><a href="paymentsettings.html">Payment Settings</a></li>
                                <li><a href="currencysettings.html">Currency Settings</a></li>
                                <li><a href="grouppermissions.html">Group Permissions</a></li>
                                <li><a href="taxrates.html">Tax Rates</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('assets/dashboard/js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('assets/dashboard/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/apexchart/chart-data.js') }}"></script>
    {{-- <script src="{{ asset('assets/dashboard/js/script.js') }}"></script> --}}

</body>

</html>
