@extends('layouts.dashboard_app')
@section('title')
    Update Team | Dashboard
@endsection
@section('team')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item"><a href="{{ route('home.team.index') }}">Team</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.team.edit', $team->id) }}">Update Team</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Team</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header">Update Team</div>
                        <div class="card-body">

                            <form class="admin-form" action="{{ route('home.team.update', $team->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }} *</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $team->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="designation">{{ __('Designation') }} *</label>
                                    <textarea name="designation" rows="4" class="form-control" >{{ $team->designation }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">{{ __('Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control"
                                        placeholder="{{ __('Photo') }}" value="{{ old('photo') }}">
                                </div>
                                <img style="width: 50px;"
                                    src="{{ $team->photo ? asset('assets/images/'.$team->photo) : asset('assets/images/placeholder.png') }}"
                                    alt="{{ asset('assets/images/'.$team->photo) }}">
                                    <br>
                                    <br>
                                <div class="form-group">
                                    <label for="fb_link">{{ __('Facebook Link') }} *</label>
                                    <input type="text" name="fb_link" class="form-control"
                                         value="{{ $team->fb_link }}">
                                </div>
                                <div class="form-group">
                                    <label for="print_link">{{ __('Pinterest Link') }} *</label>
                                    <input type="text" name="print_link" class="form-control"
                                         value="{{ $team->print_link }}">
                                </div>
                                <div class="form-group">
                                    <label for="twit_link">{{ __('Twitter Link') }} *</label>
                                    <input type="text" name="twit_link" class="form-control"
                                        value="{{ $team->twit_link }}">
                                </div>
                                <div class="form-group">
                                    <label for="insta_link">{{ __('Instagram Link') }} *</label>
                                    <input type="text" name="insta_link" class="form-control"
                                         value="{{ $team->insta_link }}">
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
