@extends('layouts.dashboard_app')
@section('title')
    Update Partner | Dashboard
@endsection
@section('partner')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item"><a href="{{ route('home.partner.index') }}">Partner</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.partner.edit', $partner->id) }}">Update Partner</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Partner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Update Partner</div>
                        <div class="card-body">

                            <form class="admin-form" action="{{ route('home.partner.update', $partner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="photo">{{ __('Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control"
                                        placeholder="{{ __('Photo') }}" value="{{ old('photo') }}">
                                </div>
                                <img style="width: 50px;"
                                    src="{{ $partner->photo ? asset('assets/images/'.$partner->photo) : asset('assets/images/placeholder.png') }}"
                                    alt="{{ asset('assets/images/'.$partner->photo) }}">
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
