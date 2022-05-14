@extends('layouts.dashboard_app')
@section('title')
    Team | Dashboard
@endsection
@section('team')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.team.index') }}">Team</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Team</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('admin.alerts.alerts')
                    <table class="table table-bordered" id="product_table">
                        <thead class="bg-prima">
                            <th>SL</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->designation }}</td>
                        <td>
                                    <img style="width: 50px;"
                                        src="{{ $data->photo ? asset('assets/images/'.$data->photo) : asset('assets/images/placeholder.png') }}"
                                        alt="{{ asset('assets/images/'.$data->photo) }}">
                                </td>
                                <td>
                                    <a href="{{ route('home.team.edit', $data->id) }}"
                                        class="btn btn-sm btn-primary">Update</a>
                                    <form action="{{ route('home.team.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="50" class="text-danger text-center">No data found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Add Team</div>
                        <div class="card-body">

                            <form class="admin-form" action="{{ route('home.team.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }} *</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('Name') }}" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="designation">{{ __('Designation') }} *</label>
                                    <textarea name="designation" rows="4" class="form-control" placeholder="Designation">{{ old('designation') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">{{ __('Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control"
                                        placeholder="{{ __('Photo') }}" value="{{ old('photo') }}">
                                </div>
                                <div class="form-group">
                                    <label for="fb_link">{{ __('Facebook Link') }} *</label>
                                    <input type="text" name="fb_link" class="form-control"
                                        placeholder="{{ __('Facebook Link') }}" value="{{ old('fb_link') }}">
                                </div>
                                <div class="form-group">
                                    <label for="print_link">{{ __('Pinterest Link') }} *</label>
                                    <input type="text" name="print_link" class="form-control"
                                        placeholder="{{ __('Pinterest Link') }}" value="{{ old('print_link') }}">
                                </div>
                                <div class="form-group">
                                    <label for="twit_link">{{ __('Twitter Link') }} *</label>
                                    <input type="text" name="twit_link" class="form-control"
                                        placeholder="{{ __('Twitter Link') }}" value="{{ old('twit_link') }}">
                                </div>
                                <div class="form-group">
                                    <label for="insta_link">{{ __('Instagram Link') }} *</label>
                                    <input type="text" name="insta_link" class="form-control"
                                        placeholder="{{ __('Instagram Link') }}" value="{{ old('insta_link') }}">
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
