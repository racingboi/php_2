@extends('layouts.admin')
@section('title', 'Admin - category - add')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Sản phẩm Thêm danh mục phụ</h4>
                <h6>Tạo sản phẩm mới Danh mục phụ</h6>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.subcategories.list') }}" class="btn btn-added">
                    <i class="bi bi-list">Danh sách các danh mục phụ</i>
                </a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <form action="{{ route('admin.subcategories.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <select class="form-select" name="category_id">
                                    <option>Chọn danh mục</option>
                                    @foreach ($categories as $category)
                                        <option value={{ $category->id }}>{{ $category->name }}</option>
                                    @endforeach
                                    @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Tên danh mục phụ</label>
                                <input type="text" name="name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit me-2" value="Gửi">
                            <a href="categorylist.html" class="btn btn-cancel">Hủy</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
