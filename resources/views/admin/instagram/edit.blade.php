@extends('layouts.dashboard_app')
@section('title')
    Update Instagram | Dashboard
@endsection
@section('instagram')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.instagram.index') }}">Instagram</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.instagram.edit', $instagram->id) }}">Update Instagram</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Instagram</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 m-auto">
                @include('admin.alerts.alerts')
                <div class="card">
                    <div class="card-header">Update Instagram</div>
                    <div class="card-body">
                        
								<form class="admin-form" action="{{ route('home.instagram.update', $instagram->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="photo">{{ __('Instagram Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control" placeholder="{{ __('Enter Instagram Photo') }}" value="{{ old('photo') }}">
                                </div>
                                <img width="50px;" src="{{ $instagram->photo ? asset('assets/images/'.$instagram->photo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$instagram->photo) }}">
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