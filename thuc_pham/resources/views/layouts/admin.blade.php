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
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>

<body>
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/dashboard/img/logo.png') }}" alt="">
                </a>
                <a href="index.html" class="logo-small">
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
                            <a href="index.html"><img src="{{ asset('assets/dashboard/img/icons/dashboard.svg') }}"
                                    alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/product.svg') }}" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="productlist.html">Product List</a></li>
                                <li><a href="addproduct.html">Add Product</a></li>
                                <li><a href="categorylist.html">Category List</a></li>
                                <li><a href="addcategory.html">Add Category</a></li>
                                <li><a href="subcategorylist.html">Sub Category List</a></li>
                                <li><a href="subaddcategory.html">Add Sub Category</a></li>
                                <li><a href="brandlist.html">Brand List</a></li>
                                <li><a href="addbrand.html">Add Brand</a></li>
                                <li><a href="importproduct.html">Import Products</a></li>
                                <li><a href="barcode.html">Print Barcode</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/sales1.svg') }}" alt="img"><span>
                                    Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="saleslist.html">Sales List</a></li>
                                <li><a href="pos.html">POS</a></li>
                                <li><a href="pos.html">New Sales</a></li>
                                <li><a href="salesreturnlists.html">Sales Return List</a></li>
                                <li><a href="createsalesreturns.html">New Sales Return</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/places.svg') }}" alt="img"><span>
                                    Places</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newcountry.html">New Country</a></li>
                                <li><a href="countrieslist.html">Countries list</a></li>
                                <li><a href="newstate.html">New State </a></li>
                                <li><a href="statelist.html">State list</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/users1.svg') }}" alt="img"><span>
                                    Users</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newuser.html">New User </a></li>
                                <li><a href="userlists.html">Users List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets/dashboard/img/icons/settings.svg') }}" alt="img"><span>
                                    Settings</span> <span class="menu-arrow"></span></a>
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
    <script src="{{ asset('assets/dashboard/js/script.js') }}"></script>
</body>

</html>
