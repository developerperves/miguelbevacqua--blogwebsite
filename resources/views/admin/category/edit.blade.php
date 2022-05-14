@extends('layouts.dashboard_app')
@section('title')
    Update Category | Dashboard
@endsection
@section('category')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.category.index') }}">Category</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.category.update', $category->id) }}">Update Category</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Category</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="card">
                    <div class="card-header">Add Category</div>
                    <div class="card-body">
                            @include('admin.alerts.alerts')
								<form class="admin-form" action="{{ route('home.category.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="category">{{ __('Category') }} *</label>
                                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                                </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </form>
                    </div>
                  </div>
            </div>
          </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection