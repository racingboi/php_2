@extends('layouts.web')
@section('title', 'GRYFFINDOR - Đăng nhập')
@section('content')
    <div class="row">
        <div class="col-12">
            @include('auth.login')
        </div>
    </div>
@endsection
