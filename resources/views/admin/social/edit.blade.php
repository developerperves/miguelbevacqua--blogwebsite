@extends('layouts.dashboard_app')
@section('title')
    Update Social Media | Dashboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.social.index') }}">Social</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.social.edit', $social->id) }}">Update Social</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Social Media</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-5 m-auto">
                @include('admin.alerts.alerts')
                <div class="card">
                    <div class="card-header">Update Social Media</div>
                    <div class="card-body">
                        
								<form class="admin-form" action="{{ route('home.social.update', $social->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="icon">{{ __('Icon') }} *</label>
                                    <input type="text" name="icon" class="form-control" value="{{ $social->icon }}">
                                </div>
                                <div class="form-group">
                                    <label for="link">{{ __('Link') }} *</label>
                                    <textarea name="link" rows="4" class="form-control" >{{ $social->link }}</textarea>
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