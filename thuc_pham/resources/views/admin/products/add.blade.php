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
                    <h4>Product Add</h4>
                    <h6>Create new product</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ Route('admin.products.list') }}" class="btn btn-added">
                        <i class="bi bi-list"> List Products</i>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-select">
                                    <option>Choose Category</option>
                                    <option>Computers</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Unit</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class=" col-sm-6 col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="productImage" class="form-label">Product Image</label>
                                <div class="image-upload">
                                    <input type="file" class="form-control-file">
                                    <div class="image-uploads d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('assets/dashboard/img/icons/upload.svg') }}" alt="img"
                                            class="img-fluid">
                                        <h4 class="mt-3">Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
