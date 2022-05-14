@extends('layouts.dashboard_app')
@section('title')
    Social Media | Dashboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.social.index') }}">Social</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Social Media</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
                @include('admin.alerts.alerts')
              <table class="table table-bordered" id="product_table">
                <thead class="bg-prima">
                  <th>SL</th>
                  <th>Icon</th>
                  <th>Link</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @forelse ($datas as $data)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ Str::limit($data->icon, 20) }}</td>
                    <td>{{ Str::limit($data->link, 20) }}</td>
                    <td>
                        <a href="{{ route('home.social.edit', $data->id) }}" class="btn btn-sm btn-primary">Update</a>
                        <form action="{{ route('home.social.destroy', $data->id) }}" method="POST">
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
                    <div class="card-header">Add Social Media</div>
                    <div class="card-body">
                        
								<form class="admin-form" action="{{ route('home.social.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="icon">{{ __('Icon') }} *</label>
                                    <input type="text" name="icon" class="form-control" placeholder="{{ __('Enter Icon class') }}" value="{{ old('icon') }}">
                                </div>
                                <div class="form-group">
                                    <label for="link">{{ __('Link') }} *</label>
                                    <textarea name="link" rows="4" class="form-control" placeholder="{{ __('Enter your link') }}">{{ old('link') }}</textarea>
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