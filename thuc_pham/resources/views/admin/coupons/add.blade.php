<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @section('title', 'Admin - Coupons - add')</title>
    <script src="https://cdn.tiny.cloud/1/cz7tbij09p7p6b14bz3fbocnnvm5nztqcmy95npx6f4srsdh/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            editable_class: 'mceEditable',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</head>

<body>
    @extends('layouts.admin')
    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm phiếu giảm giá</h4>
                    <h6>Tạo phiếu giảm giá mới</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.coupons.list') }}" class="btn btn-added">
                        <i class="bi bi-list">Danh sách phiếu giảm giá</i>
                    </a>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.coupons.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Tên phiếu giảm giá</label>
                                    <input type="text" name="name" />
                                </div>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="text" class="form-control" name="value" />
                                </div>
                                @error('value')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Ngày kết thúc </label>
                                    <input type="date" class="form-control" name="expiry_date" />
                                </div>
                                @error('expiry_date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Sự miêu tả</label>
                                    <textarea class="form-control" name="type"></textarea>
                                </div>
                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-submit me-2" value="Gửi">
                                <a href="{{ route('admin.coupons.list') }}" class="btn btn-cancel">Hủy</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    @endsection

</body>

</html>
