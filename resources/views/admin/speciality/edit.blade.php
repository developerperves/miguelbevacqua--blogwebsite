@extends('layouts.dashboard_app')
@section('title')
    Update Speciality | Dashboard
@endsection
@section('speciality')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item"><a href="{{ route('home.speciality.index') }}">speciality</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.speciality.edit', $speciality->id) }}">update speciality</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Speciality</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="card">
                        <div class="card-header">Update Speciality</div>
                        <div class="card-body">

                            <form class="admin-form" action="{{ route('home.speciality.update', $speciality->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="heading">{{ __('Heading') }} *</label>
                                    <input type="text" name="heading" class="form-control"
                                        placeholder="{{ __('Heading') }}" value="{{ $speciality->heading }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }} *</label>
                                    <textarea name="description" rows="4" class="form-control" placeholder="Description">{{ $speciality->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">{{ __('Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control"
                                        placeholder="{{ __('Photo') }}" value="{{ old('photo') }}">
                                </div>
                                
                                <img style="width: 50px;"
                                src="{{ $speciality->photo ? asset('assets/images/'.$speciality->photo) : asset('assets/images/placeholder.png') }}"
                                alt="{{ asset('assets/images/'.$speciality->photo) }}">
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
