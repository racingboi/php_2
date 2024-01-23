@extends('layouts.admin')
@section('title', 'Admin - coupons - List')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Danh sách phiếu giảm giá</h4>
                    <h6>Xem/Tìm kiếm phiếu giảm giá</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('admin.coupons.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/dashboard/img/icons/plus.svg') }} " class="me-1" alt="img" />Thêm
                        phiếu giảm giá
                    </a>
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
                        <form action="{{ route('admin.coupons.search') }}" method="POST">
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
                                <th> Tên phiếu giảm giá</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày cuối</th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($coupons as $coupon)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>

                                    <td class="productimgname">
                                        <a href="" class="text-dark"> {{ $coupon->name }}</a>
                                    </td>
                                    <td>{{ $coupon->start_date }}</td>
                                    <td>{{ $coupon->expiry_date }}</td>

                                    <td>
                                        <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn"
                                                href="{{ route('admin.coupons.edit', ['id' => $coupon->id]) }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Sửa mục này">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="submit" class="btn "
                                                onclick="return confirm('Bạn có muốn xóa danh mục này không?')"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa mục này">
                                                <i class="bi
                                                bi-trash3"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Danh mục không tồn tại</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{ $coupons->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    @endsection
</div>
