<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title', 'GRYFFINDOR - Trang cart ')
    </title>
</head>

<body>
    @extends('layouts.web')

    @section('content')
        <section class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <div class="cart wow bounceInUp animated">
                        <div class="page-title">
                            <h2>Giỏ hàng</h2>
                        </div>
                        <div class="table-responsive">
                            {{-- <form method="post" action="#updatePost/">
                            <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key"> --}}
                            <table class="data-table cart-table" id="shopping-cart-table">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div id="updateSuccessMessage" class="alert alert-success" style="display: none;"></div>
                                @php
                                    $total = 0;
                                    $id_oders = [];
                                @endphp
                                @foreach ($groupedCart as $productId => $items)
                                    @php
                                        $orderDetail = $items->first();
                                        $totalQuantity = $items->sum('quantity');
                                        $inputId = 'cartInput_' . $productId;
                                        $total += $totalQuantity * $orderDetail->product->price;
                                        $id_oders[] = $orderDetail->id;
                                    @endphp
                                @endforeach
                                <thead>
                                    <tr>
                                        <th rowspan="1">&nbsp;</th>
                                        <th rowspan="1"><span class="nobr">tên sản phẩm</span></th>
                                        <th rowspan="1"></th>
                                        <th colspan="1" class="a-center"><span class="nobr">Giá</span></th>
                                        <th class="a-center" rowspan="1">Qty</th>
                                        <th rowspan="1">unti</th>
                                        <th colspan="1" class="a-center">Tổng phụ</th>
                                        <th class="a-center" rowspan="1">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="first last">
                                        <td class="a-right last" colspan="50">
                                            <button class="button btn-continue" title="Tiếp tục mua sắm" type="button">
                                                <a href="{{ route('home') }}">
                                                    <span><span>Tiếp tục mua sắm</span></span>
                                                </a>
                                            </button>
                                            <button onclick="updateQuantity()" class="button btn-update cart-plus-minus-box"
                                                title="Update Cart">
                                                <span><span>Cập nhật giỏ hàng</span></span>
                                            </button>


                                            <form action="{{ route('cart.deleteTC') }}" method="POST">
                                                @csrf
                                                {{-- @method('DELETE') --}}
                                                @foreach ($id_oders as $id)
                                                    <input type="hidden" name="ids[]" value="{{ $id }}">
                                                @endforeach
                                                <button id="empty_cart_button" class="button btn-empty" title="Clear Cart"
                                                    value="empty_cart" name="update_cart_action"
                                                    type="submit"><span><span>Dọn
                                                            dẹp giỏ hàng</span></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>


                                    @forelse($groupedCart as $productId => $items)
                                        @php
                                            $orderDetail = $items->first();
                                        @endphp
                                        <tr>
                                            <td class="image">
                                                <a class="product-image" title="Sample Product" href="">
                                                    <img width="75" height="75" alt="Sample Product"
                                                        src="{{ asset($orderDetail->product->image_features->first()->url_img) }}">
                                                </a>
                                            </td>
                                            <td>
                                                <h2 class="product-name "> <a
                                                        href="#">{{ $orderDetail->product->name }}</a>
                                                </h2>
                                            </td>
                                            <td class="a-center">
                                                <a title="Edit item parameters" class="edit-bnt"
                                                    href="#configure/id/15945/"></a>
                                            </td>
                                            <td class="a-right"><span class="cart-price"> <span
                                                        class="price">{{ number_format($orderDetail->product->price) }} đ</span>
                                                </span></td>
                                            <td class="a-center movewishlist">
                                                <input class="input-text qty" value="{{ $totalQuantity }}"
                                                    id="{{ $inputId }}">
                                            </td>

                                            <td>{{ $orderDetail->product->unit }}</td>
                                            <td class="a-right movewishlist"><span class="cart-price"> <span
                                                        class="price">{{ number_format($totalQuantity * $orderDetail->product->price) }} đ</span>
                                                </span></td>
                                            <td class="a-center last">
                                                <form action="{{ route('cart.delete', ['id' => $orderDetail->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Xóa mục này">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">
                                                giỏ hàng đang trỗng
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- BEGIN CART COLLATERALS -->
                        <div class="cart-collaterals row">
                            <div class="col-sm-4">
                                <div class="shipping">
                                    <h3><span>Ước tính vận chuyển và thuế</span></h3>
                                    <div class="shipping-form">
                                        <form id="shipping-zip-form" method="post" action="#estimatePost/">
                                            <p>Nhập điểm đến của bạn để có được ước tính vận chuyển.</p>
                                            <ul class="form-list">
                                                <li>
                                                    <label class="required" for="country"><em>*</em>chọn Tỉnh</label>
                                                    <div class="input-box">
                                                        <select title="Country" value="" class="validate-select"
                                                            id="province" name="">
                                                            <option value="" selected>--chọn tỉnh--</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="district">chọn quận</label>
                                                    <div class="input-box">
                                                        <select style="" name="" title="districts"
                                                            id="districts" value=""
                                                            class="required-entry validate-select">
                                                            <option value="" selected>--chọn quận/huyện--</option>
                                                        </select>
                                                        {{-- <input type="text" style="display:none;"
                                                            class="input-text required-entry" title="State/Province"
                                                            value="" name="region" id="region"> --}}
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="ward">chọn phường</label>
                                                    <div class="input-box">
                                                        <select style="" name="" title="ward"
                                                            id="ward" value=""
                                                            class="required-entry validate-select">
                                                            <option value="" selected>--chọn phường/xã--</option>
                                                        </select>
                                                        {{-- <input type="text" style="display:none;"
                                                            class="input-text required-entry" title="State/Province"
                                                            value="" name="region" id="region"> --}}
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="buttons-set11">
                                                <button class="button get-quote" id="baogia" title="Nhận báo giá"
                                                    type="button"><span>Nhận báo giá</span></button>
                                            </div>
                                            <!--buttons-set11-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="discount">
                                    <form method="post" action="">

                                        <h3><span>Mã giảm giá</span></h3>
                                    </form>
                                    <form method="post" action="#couponPost/">
                                        <label for="coupon_code">Nhập mã phiếu giảm giá của bạn nếu bạn có.</label>
                                        <input type="hidden" value="0" id="remove-coupone" name="remove">
                                        <input type="text" value="" name="coupon_code" id="coupon_code"
                                            class="input-text fullwidth">
                                        <button value="Apply Coupon" onclick="discountForm.submit(false)"
                                            class="button coupon " title="Apply Coupon" type="button"><span>Áp dụng
                                                phiếu giảm giá</span></button>

                                    </form>
                                </div>
                            </div>

                            <div class="totals col-sm-4">
                                <h3><span>TỔNG GIỎ HÀNG</span></h3>
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                        <colgroup>
                                            <col>
                                            <col width="1">
                                        </colgroup>
                                        <tfoot>
                                            <tr>
                                                <td colspan="1" class="a-left" style=""><strong>Tổng
                                                        cộng</strong>
                                                </td>
                                                <td class="a-right" style="">
                                                    <strong><span class="price total">0 đ</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td colspan="1" class="a-left" style=""> Tổng phụ </td>
                                                <td class="a-right" style=""><span
                                                        class="price" id="firstTotal">{{ number_format($total) }} đ</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="1" class="a-left" style=""> Phi giao hàng </td>
                                                <td class="a-right" style=""><span class="price"
                                                        id="GHNfee">0 đ</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="checkout">
                                        <li>
                                            <button class="button btn-proceed-checkout" title="Tiến hành kiểm tra"
                                                type="button"><span>Tiến hành kiểm tra</span></button>
                                        </li>
                                        <br>
                                        <li><a title="Thanh toán với nhiều địa chỉ" href="multiple_addresses.html">Thanh
                                                toán với nhiều địa chỉ</a> </li>
                                        <br>
                                    </ul>
                                </div>
                                <!--inner-->

                            </div>
                        </div>

                        <!--cart-collaterals-->

                    </div>
                    <div class="crosssel wow bounceInUp animated">
                        <div class="new_title center">
                            <h2>Dựa trên lựa chọn của bạn, bạn có thể quan tâm đến các mục sau:</h2>
                        </div>
                        <div class="category-products">
                            <ul id="crosssell-products-list" class="products-grid first odd">
                                @foreach ($products->take(4) as $product)
                                    <li class="item col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-inner">
                                            <div class="product-block">
                                                <div class="product-image"> <a href="product_detail.html">
                                                        <figure class="product-display">
                                                            <div class="sale-label sale-top-left">Sale</div>
                                                            <img src="{{ asset($product->image_features->first()->url_img) }}"
                                                                class="lazyOwl product-mainpic" alt=""
                                                                style="display: block;"> <img class="product-secondpic"
                                                                alt=""
                                                                src="{{ asset($product->image_features->first()->url_img) }}">
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
                                                        <a href="quick_view.html" class="quickview">
                                                            <i class="bi bi-search"></i></i> Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a href="product_detail.html"
                                                            title="Sample Product">{{ $product->name }}</a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span
                                                                        class="price">{{ number_format($product->price) }}
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
                    </div>
                </div>
            </div>
        </section>
    @endsection
    <script>
        function updateQuantity() {
            var inputs = document.querySelectorAll('.input-text.qty');
            // let url = inputs.getAttribute('data-url');
            // console.log(url);
            var updatedQuantities = [];
            inputs.forEach(function(input) {
                var productId = input.id.split('_')[1];
                var quantity = parseInt(input.value);
                updatedQuantities.push({
                    productId: productId,
                    quantity: quantity
                });
            });
            location.reload();
            fetch('cart/update', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        updatedQuantities: updatedQuantities
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Cart updated successfully:', data);
                    var successMessage = document.getElementById('updateSuccessMessage');
                    successMessage.textContent = data.success;
                    successMessage.style.display = 'block';
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 9000);
                })
                .catch(error => {
                    console.error('Error updating cart:', error);
                    console.log('Full response:', error.response);
                });
        }
    </script>
</body>

</html>
