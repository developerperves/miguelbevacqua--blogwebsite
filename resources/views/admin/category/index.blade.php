@extends('layouts.dashboard_app')
@section('title')
    Category | Dashboard
@endsection
@section('category')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('home.category.index') }}">Category</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Category</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
                @include('admin.alerts.alerts')
              <table class="table table-bordered" id="product_table">
                <thead class="bg-prima">
                  <th>SL</th>
                  <th>Category</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @forelse ($datas as $data)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="{{ route('home.category.edit', $data->id) }}" class="btn btn-sm btn-primary">Update</a>
                        <form action="{{ route('home.category.destroy', $data->id) }}" method="POST">
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
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Add Category</div>
                    <div class="card-body">
                        
								<form class="admin-form" action="{{ route('home.category.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="category">{{ __('Category') }} *</label>
                                    <input type="text" name="name" class="form-control" placeholder="{{ __('Enter category name') }}" value="{{ old('name') }}">
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