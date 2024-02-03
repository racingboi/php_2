@extends('layouts.admin')
@section('title', 'Admin - coupons - List')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh Sách Đơn Hàng</h4>
                    <h6>Xem/Tìm Kiếm Đơn Hàng</h6>
                </div>
                <div class="page-btn">
                    {{-- <a href="{{ route('admin.coupons.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/dashboard/img/icons/plus.svg') }} " class="me-1" alt="img" />Thêm
                        phiếu giảm giá
                    </a> --}}
                </div>
            </div>
            @if (isset($messenger) && is_array($messenger) && count($messenger) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($messenger as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <form action="{{ route('admin.orders.search') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Bạn muốn tìm kiếm gì?"
                                    name="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <img src="{{ asset('assets/dashboard/img/icons/search.svg') }}" alt="">
                                    </button>
                                </div>
                            </div>

                        </form>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="{{ asset('assets/dashboard/img/icons/pdf.svg') }} " alt="img" /></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="{{ asset('assets/dashboard/img/icons/excel.svg') }} " alt="img" /></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('assets/dashboard/img/icons/printer.svg') }} "
                                            alt="img" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all" />
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Tên Khách Hàng</th>
                                <th>Tên sản phẩm</th>
                                 <th>số lượng</th>
                                 <th>Tổng tiền</th>
                                 <th>Trạng Thái</th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($groupedCart as $productId => $items)
                                    @php
                                        $orderDetail = $items->first();
                                        $totalQuantity = $items->sum('quantity');
                                        $inputId = 'cartInput_' . $productId;

                                    @endphp
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                         <td>{{ $orderDetail->order->user->name }}</td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="{{ asset($orderDetail->product->image_features->first()->url_img) }}"
                                                    alt="product">
                                            </a>
                                            <a style="color: black">{{ substr($orderDetail->product->name, 0, 20) }}...</a>
                                        </td>
                                        </td>

                                        <td>{{ $orderDetail->quantity }}{{ $orderDetail->product->unti }}</td>
                                        <td>{{ number_format($orderDetail->order->total, 2) }} VND</td>
                                        {{-- <td><span class="badges bg-lightgreen">{{ $orderDetail->order->status }}</span>
                                        </td> --}}
                                            <td style="color: {{ $orderDetail->order->status == 0 ? 'Yellow' : ($orderDetail->order->status == 1 ? 'Blue' : ($orderDetail->order->status == 2 ? 'grey' : ($orderDetail->order->status == 3 ? 'green' : 'Red'))) }}">
                                                 {{ $orderDetail->order->status == 0 ? 'Chờ Sử Lý' : ($orderDetail->order->status == 1 ? 'Chờ giao' : ($orderDetail->order->status == 2 ? 'Đang Giao' : ($orderDetail->order->status == 3 ? 'Hoàn thành' : ($orderDetail->order->status == 4 ? 'Hủy' : 'Trả hàng')))) }}
                                            </td>

                                        <td>
                                            <a class="btn" href="{{ route('admin.orders.show', ['id' => $orderDetail->id]) }}"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Xem Chi Tiết Đơn Hàng">
                                        <i class="bi bi-eye"></i>
                                        </a>
                                        <a class="btn">
                                            <form action="{{ route('admin.orders.destroy', ['id' => $orderDetail->id]) }}"
                                                method="POST" style="padding-bottom: 10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Bạn có muốn xóa bài viết này không?')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa mục này">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    Không có đơn hàng nào
                                @endforelse
                        </tbody>
                    </table>
                </div>
                {{-- <div class="col-md-12">
                    {{ $coupons->links('pagination::bootstrap-5') }}
                </div> --}}
            </div>
        </div>
    @endsection
</div>
