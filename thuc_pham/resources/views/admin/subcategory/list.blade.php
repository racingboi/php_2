@extends('layouts.admin')
@section('title', 'Admin - categories - List')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Sub Category list</h4>
                    <h6>View/Search Sub Category</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/dashboard/img/icons/plus.svg') }} " class="me-1" alt="img" />Add
                        Sub Category
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
                        <form action="{{ route('admin.subcategories.search') }}" method="POST">
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
                                <th>Chỗ</th>
                                <th>Tên danh mục</th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($subcategories as $subcategory)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subcategory->name }}</td>
                                    <td>
                                        <form action="{{ route('admin.subcategories.destroy', $subcategory->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Edit this entry"
                                                href="{{ route('admin.subcategories.edit', ['id' => $subcategory->id]) }}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a class="btn">
                                                <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete this item"
                                                    onclick="return confirm('Are you sure you want to delete this  sub category ?')">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </a>
                                        </form>
                                    </td>
                                @empty
                                    <td colspan="4">
                                        Danh mục phụ không tồn tại</td>
                            @endforelse
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-md-12">
                {{ $subcategories->links('pagination::bootstrap-5') }}
            </div>
        </div>
    @endsection
</div>
