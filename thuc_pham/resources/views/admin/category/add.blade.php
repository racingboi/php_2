@extends('layouts.admin')
@section('title', 'Admin - category - add')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Danh mục thêm sản phẩm</h4>
                <h6>Tạo danh mục sản phẩm mới</h6>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.categories.list') }}" class="btn btn-added">
                    <i class="bi bi-list">Danh sách danh mục</i>
                </a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class=" col-12">
                            <div class="form-group">
                                <label>tên danh mục</label>
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
                            <input type="submit" class="btn btn-submit me-2" value="Submit">
                            <a href="categorylist.html" class="btn btn-cancel">Hủy bỏ</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
