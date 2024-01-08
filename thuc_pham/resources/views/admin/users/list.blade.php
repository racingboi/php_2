@extends('layouts.admin')
@section('title', 'Admin - Users - List')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Danh sách người dùng</h4>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.users.create') }}" class="btn btn-added"><img
                        src="{{ asset('assets/dashboard/img/icons/plus.svg') }}" alt="img" class="me-2" />Add Users</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="table-top">

                    <form action="{{ route('admin.users.search') }}" method="POST">
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
                                        src="{{ asset('assets/dashboard/img/icons/printer.svg') }} " alt="img" /></a>
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
                            <th>Slot</th>
                            <th>Users name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name ?? 'N/A' }}</td>
                                <td>{{ $user->phone ?? 'N/A' }}</td>
                                <td>{{ $user->email ?? 'N/A' }}</td>
                                <td>{{ $user->address ?? 'N/A' }}</td>
                                <td>{{ $user->role == 0 ? 'admin' : 'user' }}</td>
                                <td style="color: {{ $user->status == 0 ? 'green' : 'red' }}">
                                    {{ $user->status == 0 ? 'active' : 'banned' }}
                                </td>
                                <td>
                                    <a class="btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Edit this entry"
                                        href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a class="btn" href="{{ route('admin.users.show', ['id' => $user->id]) }}"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="User details">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a class="btn">
                                        <form action="{{ route('admin.users.destroy', ['id' => $user->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Delete this item"
                                                onclick="return confirm('Are you sure you want to delete this user ?')">
                                                <i class="bi bi-trash3"></i></button>
                                        </form>
                                    </a>
                                </td>
                                {{-- <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="user2" class="check" checked="">
                                        <label for="user2" class="checktoggle">checkbox</label>
                                    </div>
                                </td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">Không có dữ liệu</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
