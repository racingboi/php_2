@extends('layouts.admin')
@section('title', 'Admin - Users - show')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Details</h4>
                <h6>Full details of a users</h6>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.users.list') }}" class="btn btn-added">
                    <i class="bi bi-list"> List Users</i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Users name</h4>
                                    <h6>{{ $users->name ?? 'N/A' }}</h6>
                                </li>
                                <li>
                                    <h4>Phone</h4>
                                    <h6>{{ $users->phone ?? 'N/A' }}</h6>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <h6>{{ $users->email ?? 'N/A' }}</h6>
                                </li>
                                <li>
                                    <h4>Address</h4>
                                    <h6>{{ $users->address ?? 'N/A' }}</h6>
                                </li>
                                <li>
                                    <h4>Role</h4>
                                    <h6> {{ $users->role == 0 ? 'admin' : 'users' }}</h6>
                                </li>
                                <li>
                                    <h4>Status</h4>
                                    {{-- <h6>{{ $users->status == 0 ? 'active' : 'banned' }}</h6> --}}
                                    <h6>
                                        <form action="{{ route('admin.users.status', ['id' => $users->id]) }}"
                                            method="POST" id="statusForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user{{ $users->id }}" name="status"
                                                    class="check" {{ $users->status == 1 ? 'checked' : '' }}>
                                                <label for="user{{ $users->id }}" class="checktoggle">Chuyển đổi trạng
                                                    thái</label>
                                            </div>
                                        </form>
                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $('#user{{ $users->id }}').change(function() {
                                                    $('#statusForm').submit();
                                                });
                                            });
                                        </script>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
