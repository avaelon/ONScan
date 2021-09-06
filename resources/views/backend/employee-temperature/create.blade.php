@extends('backend.layouts.dashboard.master')
@section('title', 'Job Category')


@section('breadcrumb-title')
<h3>Create Category</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Category</li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="col-sm-12 col-xl-12">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h5>Fill The Form Below.</h5>
                </div>
                <form class="theme-form mega-form" enctype="multipart/form-data" action="{{ route('admin.employeeTemperatures.store') }}" method="post">
                    @csrf
                <div class="card-body">
                        <h6>Please fill out the all required fields</h6>
                        <div class="form-group">
                            <label class="col-form-label" for="name">Name: <span class="text-danger">*</span></label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="e.g. webdesign" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
