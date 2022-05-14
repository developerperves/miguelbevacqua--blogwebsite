@extends('layouts.dashboard_app')
@section('title')
    Home Banner | Dashboard
@endsection
@section('homebanner')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.banner.index') }}">Banner</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Banner</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
                @include('admin.alerts.alerts')
              <table class="table table-bordered" id="product_table">
                <thead class="bg-prima">
                  <th>SL</th>
                  <th>Heading</th>
                  <th>Description</th>
                  <th>Banner</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @forelse ($datas as $data)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ Str::limit($data->heading, 20) }}</td>
                    <td>{{ Str::limit($data->description, 20) }}</td>
                    <td>
                        <img style="width: 50px;" src="{{ $data->bg ? asset('assets/images/'.$data->bg) : asset('assets/images/placeholder.png') }}" alt="asset('assets/images/'.$data->bg)">
                    </td>
                    <td>
                        <a href="{{ route('home.banner.edit', $data->id) }}" class="btn btn-sm btn-primary">Update</a>
                        <form action="{{ route('home.banner.destroy', $data->id) }}" method="POST">
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
                    <div class="card-header">Add Banner</div>
                    <div class="card-body">
                        
								<form class="admin-form" action="{{ route('home.banner.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="heading">{{ __('Heading') }} *</label>
                                    <input type="text" name="heading" class="form-control" placeholder="{{ __('Enter Banner Heading') }}" value="{{ old('heading') }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }} *</label>
                                    <textarea name="description" rows="4" class="form-control" placeholder="{{ __('Enter Banner Description') }}">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="link">{{ __('Banner Link') }} *</label>
                                    <textarea name="link" rows="4" class="form-control" placeholder="{{ __('Enter Banner Link') }}">{{ old('link') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="bg">{{ __('Background') }} *</label>
                                    <input type="file" name="bg" class="form-control">
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