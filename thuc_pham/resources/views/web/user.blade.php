@extends('layouts.web')
@section('title', 'GRYFFINDOR - Trang users ')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart wow bounceInUp animated">
                    <div class="page-title">
                        <h2>Trang thông tin tài khoản</h2>
                    </div>
                    <div class="table-responsive">
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($groupedCart as $productId => $items)
                            @php
                                $orderDetail = $items->first();
                                $totalQuantity = $items->sum('quantity');
                                $inputId = 'cartInput_' . $productId;
                                $total += $totalQuantity * $orderDetail->product->price;
                            @endphp

                            <table class="data-table cart-table">
                                <tbody>
                                    <tr>
                                        <td><strong>Tên người dùng:</strong></td>
                                        <td>
                                            @if ($orderDetail->order->user)
                                                {{ $orderDetail->order->user->name }}
                                            @else
                                                User not found
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Địa Chỉ</strong>
                                        </td>
                                        <td>
                                            {{ $orderDetail->order->user->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Số  điện thoại:</strong>
                                        </td>
                                        <td>
                                            {{ $orderDetail->order->user->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Email</strong>
                                        </td>
                                        <td>
                                            {{ $orderDetail->order->user->email }}
                                        </td>
                                    </tr>
                                </tbody>
                        @endforeach
                        </table>
                          <div class="page-title py-3">
                        <h2>thông tin mua hàng</h2>
                    </div>
                        <table class="data-table cart-table">
                            <tbody>
                                 <tr>
                                        <td><strong>Tên sản phẩm:</strong></td>
                                        <td>
                                            <img width="75" height="75" alt="Sample Product"
                                                src="{{ optional($orderDetail->product->image_features->first())->url_img }}">
                                            {{ $orderDetail->product->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Số lượng:</strong></td>
                                        <td>{{ $totalQuantity }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tổng cộng:</strong></td>
                                        <td>{{ number_format($totalQuantity * $orderDetail->product->price) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Trạng thái đơn hàng:</strong></td>
                                        <td
                                            style="color:    {{ $orderDetail->order->status == 0 ? 'Yellow' : ($orderDetail->order->status == 1 ? 'Blue' : ($orderDetail->order->status == 2 ? 'grey' : ($orderDetail->order->status == 3 ? 'green' : 'Red'))) }}">
                                            {{ $orderDetail->order->status == 0 ? 'Chờ Sử Lý' : ($orderDetail->order->status == 1 ? 'Chờ giao' : ($orderDetail->order->status == 2 ? 'Đang Giao' : ($orderDetail->order->status == 3 ? 'Hoàn thành' : ($orderDetail->order->status == 4 ? 'Hủy' : 'Trả hàng')))) }}
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
