@extends('layouts.admin')

@section('title', 'Admin - Products')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Danh sách sản phẩm</h4>
                <h6>Quản lý sản phẩm</h6>
            </div>

            <div class="page-btn">
                <a href="{{ route('admin.products.create') }}" class="btn btn-added"><img
                        src="{{ asset('assets/dashboard/img/icons/plus.svg') }} " alt="img" class="me-1">Thêm sản
                    phẩm</a>
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
                    <form action="{{ route('admin.products.search') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Bạn muốn tìm kiếm gì?" name="search">
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
                                        src="{{ asset('assets/dashboard/img/icons/pdf.svg') }} " alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="{{ asset('assets/dashboard/img/icons/excel.svg') }} " alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                        src="{{ asset('assets/dashboard/img/icons/printer.svg') }} " alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <table class="table  text-center">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    @forelse ($products as $product)
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        @if ($product->image_features && count($product->image_features) > 0)
                                            <img src="{{ asset($product->image_features[0]->url_img) }}"
                                                alt="{{ $product->image_features[0]->alt_img }}">
                                        @endif
                                    </a>
                                    <a href="javascript:void(0);" style="color: #111111">{{ $product->name }}</a>
                                </td>
                                <td>{{ $product->price }} VND</td>
                                <td>{{ $product->quantity }} {{ $product->unit }}</td>
                                <form action="{{ route('admin.products.destroy', ['id' => $product->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a class="btn" href="{{ route('admin.products.edit', ['id' => $product->id]) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Sửa mục này">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a class="btn" href="{{ route('admin.products.show', ['id' => $product->id]) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Chi tiết sản phẩm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button class="btn" type="submit" data-bs-toggle="tooltip"
                                            onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')"
                                            data-bs-placement="top" title="Xóa mục này">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    @empty
                        <tr class="text-align-center">
                            <td colspan="9">sản phẩm không tồn tại</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
        <div class="col-md-12">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection
