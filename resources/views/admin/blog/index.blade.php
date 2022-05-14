@extends('layouts.dashboard_app')
@section('title')
    Blog | Dashboard
@endsection
@section('blog')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.blog.index') }}">Blog</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Blog</h5>
        </div><!-- sl-page-title -->
        <div class="sl-page-title text-right">
            <a class="btn btn-primary" href="{{ route('home.blog.create') }}">Add Blog</a>
        </div><!-- sl-page-title -->
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    @include('admin.alerts.alerts')
                    <table class="table table-bordered" id="product_table">
                        <thead class="bg-prima">
                            <th>SL</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Thumbnail</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $data->category_id }}</td>
                                <td>{{ $data->title }}</td>
                                
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-{{  $data->type == 'new' ? 'success' : 'info'  }} btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{  $data->type == 'new' ? __('New') : __('Populer')  }}
                                        </button>
                                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('home.blog.item.status',[$data->id,'new']) }}">{{ __('New') }}</a>
                                        <a class="dropdown-item" href="{{ route('home.blog.item.status',[$data->id,'popular']) }}">{{ __('Popular') }}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <img style="width: 50px;"
                                        src="{{ $data->thumbnail ? asset('assets/images/'.$data->thumbnail) : asset('assets/images/placeholder.png') }}"
                                        alt="{{ asset('assets/images/'.$data->thumbnail) }}">
                                </td>
                                <td>
                                    <a href="{{ route('home.blog.edit', $data->id) }}"
                                        class="btn btn-sm btn-primary">Update</a>
                                    <form action="{{ route('home.blog.destroy', $data->id) }}" method="POST">
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
                </div>
            </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection