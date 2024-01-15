@extends('layouts.admin')
@section('title', 'Admin - categories - List')
<div class="page-wrapper">
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Coupons list</h4>
                    <h6>View/Search Coupons</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-added">
                        <img src="{{ asset('assets/dashboard/img/icons/plus.svg') }} " class="me-1" alt="img" />Add
                        Coupons
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
                                <input type="text" class="form-control" placeholder="What do you want to search?"
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

                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all" />
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Slot</th>
                                <th>Category name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @forelse ($categories as $category)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="text-dark"> {{ $category->name }}</a>

                                    </td>

                                    <td>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-success" style="background: green; padding:0.5rem"
                                                href="{{ route('admin.categories.edit', ['id' => $category->id]) }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Sửa mục này">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger"
                                                style="background: red; padding:0.5rem"
                                                onclick="return confirm('Bạn có muốn xóa danh mục này không?')"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa mục này">
                                                <i class="bi
                                                bi-trash3"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                Danh mục không tồn tại
                            @endforelse --}}

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endsection
</div>
