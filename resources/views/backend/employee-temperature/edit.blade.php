@extends('backend.layouts.dashboard.master')
@section('title', 'Job Category')


@section('breadcrumb-title')
<h3>Create Category</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Category</li>
<li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="col-sm-12 col-xl-12">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Record.</h5>
                </div>
                <form class="theme-form mega-form" enctype="multipart/form-data" action="{{ route('admin.categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('put')
                <div class="card-body">
                        <h6>Please fill out the all required fields</h6>
                        <div class="form-group">
                            <label class="col-form-label" for="name">Name: <span class="text-danger">*</span></label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="e.g. web design" value="{{ $category->name }}">
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-12 m-checkbox-inline mb-0 custom-radio-ml">
                            <label class="col-form-label" for="">Status:</label>
                            <div class="radio radio-primary">
                                <input id="open" type="radio" name="is_published" value="1" {{ ( $category->is_published == 1 ? 'checked' : '' ) }}>
                                <label class="mb-0" for="open">Publish</span></label>
                            </div>
                            <div class="radio radio-primary">
                                <input id="closed" type="radio" name="is_published" value="0" {{ ( $category->is_published == 0 ? 'checked' : '' ) }}>
                                <label class="mb-0" for="closed">Un publish</label>
                            </div>
                            @error('is_published')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
