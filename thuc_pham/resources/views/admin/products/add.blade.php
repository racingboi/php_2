<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', 'Admin - posts - create')
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
    @section('title', 'Admin - Products - add')

    @section('content')
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Thêm sản phẩm</h4>
                    <h6>Tạo sản phẩm mới</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.products.list') }}" class="btn btn-added">
                        <i class="bi bi-list">Danh sách sản phẩm</i>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>tên sản phẩm</label>
                                    <input type="text" name="name">
                                </div>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-select" name="category_id">
                                        <option>Chọn danh mục</option>
                                        @foreach ($Category as $category)
                                            <option value={{ $category->id }}>{{ $category->name }}</option>
                                        @endforeach
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Danh mục phụ</label>
                                    <select class="form-select" name="subcategory_id">
                                        <option>Chọn danh mục</option>
                                        @foreach ($Subcategory as $category)
                                            <option value={{ $category->id }}>{{ $category->name }}</option>
                                        @endforeach
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </select>
                                </div>
                                @error('subcategory_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="text" name="quantity">
                                </div>
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Đơn vị</label>
                                    <input type="text" name="unit">
                                </div>
                                @error('unit')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="price">
                                </div>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Sự miêu tả</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                                @error('decription')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6 col-lg-12 d-flex justify-content-center align-items-center">
                                <div class = "upload ">
                                    <div class = "upload-wrapper">
                                        <div class = "upload-info">
                                            <p>
                                                <span class = "upload-info-value">0</span>(các) tệp đã được tải lên.
                                            </p>
                                        </div>
                                        <div class = "upload-area">
                                            <div class = "upload-area-img">
                                                <img src = "{{ asset('assets/dashboard/img/upload.png') }}" alt = "">
                                            </div>
                                            <p class = "upload-area-text">Chọn hình ảnh hoặc <span>duyệt qua</span>.</p>
                                        </div>
                                        <input type="file" class ="visually-hidden" id ="upload-input" name="images[]"
                                            multiple>
                                    </div>
                                    @error('images')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class = "upload-img">
                                    <!-- image here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit me-2" value="Gửi">
                            <a href="userlist.html" class="btn btn-cancel">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
