@extends('layouts.admin')
@section('title', 'Admin - Users - show')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Orders Details</h4>
                <h6>Full details of a Orders</h6>
            </div>
            {{-- <div class="page-btn">
                <a href="{{ Route('admin.users.list') }}" class="btn btn-added">
                    <i class="bi bi-list"> List Users</i>
                </a>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Tên Khách Hàng</h4>
                                    <h6>{{ $cart->order->user->name }}</h6>
                                </li>

                                    <li>
                                        <h4>Tên sản phẩm</h4>

                                            <h6>
                                                <img class="w-20" src="{{ asset($cart->product->image_features->first()->url_img) }}"
                                                    alt="product">
                                                {{ $cart->product->name }}
                                            </h6>

                                    </li>

                                <li>
                                    <h4>số lượng

                                    </h4>
                                    <h6>{{ $cart->quantity}} {{$cart->product->unit}}</h6>
                                </li>
                                <li>
                                    <h4>Tổng tiền</h4>
                                    <h6>{{ number_format($cart->order->total) }} đ</h6>
                                    <h6></h6>
                                </li>
                                <li>
                                    <h4>Trạng Thái</h4>
                                    <h6 style="color:
                                          {{ $cart->order->status == 0 ? 'Yellow' : ($cart->order->status == 1 ? 'Blue' : ($cart->order->status == 2 ? 'grey' : ($cart->order->status == 3 ? 'green' : 'Red'))) }}">
                                                 {{ $cart->order->status == 0 ? 'Chờ Sử Lý' : ($cart->order->status == 1 ? 'Chờ giao' : ($cart->order->status == 2 ? 'Đang Giao' : ($cart->order->status == 3 ? 'Hoàn thành' : ($cart->order->status == 4 ? 'Hủy' : 'Trả hàng')))) }}

                                    </h6>
                                </li>
                                <li>
                                    <h4>Hoạt động</h4>

                                    <h6>
                                        <form action="{{ route('admin.orders.status', ['id' => $cart->order->id]) }}"
                                            method="POST" id="statusForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                               <button class="btn btn-success">Xác Nhận Đơn Hàng</button>
                                            </div>
                                        </form>
                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $('#user{{ $cart->order->id }}').change(function() {
                                                    $('#statusForm').submit();
                                                });
                                            });
                                        </script>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
