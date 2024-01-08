@extends('layouts.admin')
@section('title', 'Admin - Users - update')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Management</h4>
                <h6>Add/Update User</h6>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.users.list') }}" class="btn btn-added">
                    <i class="bi bi-list"> List Users</i>
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
                <form action="{{ route('admin.users.update', ['id' => $users->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Users Name</label>
                                <input type="text" name="name">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class=" pass-input" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone">
                            </div>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address">
                            </div>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email">
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-select" name="role">
                                    <option>users</option>
                                    <option>admin</option>
                                </select>
                            </div>
                            @error('role')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="form-group">
                                <label for="productImage" class="form-label">Users Image</label>
                                <div class="image-upload">
                                    <input type="file" class="form-control-file" name="img">
                                    <div class="image-uploads d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('assets/dashboard/img/icons/upload.svg') }}" alt="img"
                                            class="img-fluid">
                                        <h4 class="mt-3">Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit me-2" value="update">
                            <a href="userlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
