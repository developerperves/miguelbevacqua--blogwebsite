@extends('layouts.dashboard_app')
@section('title')
    Home | Dashboard
@endsection
@section('home')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item active">Home</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Users</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              @if (session('user_delete_status'))
                  <div class="alert alert-danger">
                    {{ session('user_delete_status') }}
                  </div>
              @endif
              <table class="table table-bordered" id="product_table">
                <thead class="bg-prima">
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created At</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a href="{{ route('user.delete',$user->id) }}" class="btn btn-danger">delete</a></td>
                  </tr>
                       
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection