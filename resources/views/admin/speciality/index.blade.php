@extends('layouts.dashboard_app')
@section('title')
    Speciality | Dashboard
@endsection
@section('speciality')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.speciality.index') }}">speciality</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Speciality</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('admin.alerts.alerts')
                    <table class="table table-bordered" id="product_table">
                        <thead class="bg-prima">
                            <th>SL</th>
                            <th>Heading</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $data->heading }}</td>
                        <td>
                                    <img style="width: 50px;"
                                        src="{{ $data->photo ? asset('assets/images/'.$data->photo) : asset('assets/images/placeholder.png') }}"
                                        alt="{{ asset('assets/images/'.$data->photo) }}">
                                </td>
                                <td>
                                    <a href="{{ route('home.speciality.edit', $data->id) }}"
                                        class="btn btn-sm btn-primary">Update</a>
                                    <form action="{{ route('home.speciality.destroy', $data->id) }}" method="POST">
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
                        <div class="card-header">Add Speciality</div>
                        <div class="card-body">

                            <form class="admin-form" action="{{ route('home.speciality.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="heading">{{ __('Heading') }} *</label>
                                    <input type="text" name="heading" class="form-control"
                                        placeholder="{{ __('Heading') }}" value="{{ old('heading') }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }} *</label>
                                    <textarea name="description" rows="4" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="photo">{{ __('Photo') }} *</label>
                                    <input type="file" name="photo" class="form-control"
                                        placeholder="{{ __('Photo') }}" value="{{ old('photo') }}">
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
