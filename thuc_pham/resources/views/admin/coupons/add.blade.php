@extends('layouts.admin')
@section('title', 'Admin - Coupons - add')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Coupons</h4>
                <h6>Create new Coupons</h6>
            </div>
            <div class="page-btn">
                <a href="{{ Route('admin.coupons.list') }}" class="btn btn-added">
                    <i class="bi bi-list"> List Coupons</i>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Coupon Name</label>
                            <input type="text" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                        <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
