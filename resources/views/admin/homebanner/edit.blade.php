@extends('layouts.dashboard_app')
@section('title')
    Update Home Banner | Dashboard
@endsection
@section('homebanner')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.banner.index') }}">Banner</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.banner.edit', $banner->id) }}">Update Banner</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Banner</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-5 m-auto">
                @include('admin.alerts.alerts')
                <div class="card">
                    <div class="card-header">Update Banner</div>
                    <div class="card-body">
								<form class="admin-form" action="{{ route('home.banner.update', $banner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <label for="heading">{{ __('Heading') }} *</label>
                                    <input type="text" name="heading" class="form-control" value="{{ $banner->heading }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }} *</label>
                                    <textarea name="description" rows="4" class="form-control" >{{ $banner->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="link">{{ __('Banner Link') }} *</label>
                                    <textarea name="link" rows="4" class="form-control" placeholder="{{ __('Enter Banner Link') }}">{{ $banner->link }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="bg">{{ __('Background') }} *</label>
                                    <input type="file" name="bg" class="form-control">
                                </div>
                                <img style="width: 50px;" src="{{ $banner->bg ? asset('assets/images/'.$banner->bg) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$banner->bg)  }}">
                                <br>
                                <br>
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