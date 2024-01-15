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
                    <form action="{{ route('admin.products.update', ['id' => $products->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="name" value="{{ $products->name }}">
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
                                        @foreach ($category as $categori)
                                            <option value={{ $categori->id }}>{{ $categori->name }}</option>
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
                                        @foreach ($subcategory as $category)
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
                                    <input type="text" name="quantity" value="{{ $products->quantity }}">
                                </div>
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Đơn vị</label>
                                    <input type="text" name="unit" value="{{ $products->unit }}">
                                </div>
                                @error('unit')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="price" value="{{ $products->price }}">
                                </div>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Sự miêu tả</label>
                                    <textarea name="description" class="form-control">
                                      {{ $products->description }}
                                    </textarea>
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
                                                <span class = "upload-info-value">{{ count($existingImagePaths) }}</span>
                                                file(s) uploaded.
                                            </p>
                                        </div>
                                        <div class = "upload-area">
                                            <div class = "upload-area-img">
                                                <img src = "{{ asset('assets/dashboard/img/upload.png') }}" alt = "">
                                            </div>
                                            <p class = "upload-area-text">Select images or <span>browse</span>.</p>
                                        </div>
                                        {{-- <input type="file" class ="visually-hidden" id ="upload-input" name="images[]"
                                            multiple>
                                        @foreach ($products->image_features as $imageFeature)
                                            <input type="hidden" name="existing_images[]"
                                                value="{{ $imageFeature->url_img }}">
                                        @endforeach --}}
                                        <!-- Hiển thị đường dẫn ảnh cũ -->
                                        @foreach ($existingImagePaths as $imagePath)
                                            <input type="hidden" name="existing_images[]" value="{{ $imagePath }}">
                                        @endforeach
                                        <input type="file" class="visually-hidden" id="upload-input" name="images[]"
                                            multiple>

                                    </div>
                                    @error('images')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class = "upload-img">
                                    {{-- @for ($i = 0; $i < $products->image_features->count(); $i++)
                                        <img src="{{ $products->image_features[$i]->url_img }}">
                                    @endfor --}}
                                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var existingImagePaths = [];
        @foreach ($existingImagePaths as $imagePath)
            existingImagePaths.push("{{ $imagePath }}");
        @endforeach

        // document.getElementById("upload-input").value = "";

        // Hiển thị đường dẫn ảnh cũ trong input type file
        existingImagePaths.forEach(function(imagePath) {
            var input = document.createElement('input');
            input.type = 'file';
            input.name = 'images[]';
            input.value = imagePath; // Bạn không thể đặt giá trị này, vì vấn đề bảo mật
            document.querySelector('.upload-wrapper').appendChild(input);
        });
    </script>
</body>

</html>
