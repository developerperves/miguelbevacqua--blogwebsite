@extends('layouts.dashboard_app')
@section('title')
    Subscriber | Dashboard
@endsection
@section('subscriber')
active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.subscriber.list') }}">Subscriber</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Subscriber</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @include('admin.alerts.alerts')
                    <table class="table table-bordered" id="product_table">
                        <thead class="bg-prima">
                            <th>SL</th>
                            <th>Subscriber Email</th>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $data->email }}</td>
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
