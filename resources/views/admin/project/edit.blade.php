@extends('layouts.dashboard_app')
@section('title')
Update Project | Dashboard
@endsection
@section('project')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item"><a href="{{ route('home.project.index') }}">Project</a></span>
        <span class="breadcrumb-item active">Update Project</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Project</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="card">
                        <div class="card-header">Update Project</div>
                        <div class="card-body">

                            <form class="admin-form" action="{{ route('home.project.update', $project->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="heading">{{ __('Project Title') }} *</label>
                                    <input type="text" name="heading" class="form-control" value="{{ $project->heading }}">
                                </div>
                                <div class="form-group">
                                    <label for="photo">{{ __('Project Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control"
                                        placeholder="{{ __('Enter Project Photo') }}" value="{{ old('photo') }}">
                                </div>
                                <img width="50px;" src="{{ $project->photo ? asset('assets/images/'.$project->photo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$project->photo) }}">
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
