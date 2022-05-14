@extends('layouts.dashboard_app')
@section('title')
    Update Blog | Dashboard
@endsection
@section('blog')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item"><a href="{{ route('home.blog.index') }}">Blog</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.blog.edit', $blog->id) }}">Update Blog</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Blog</h5>
        </div><!-- sl-page-title -->
        
        <div class="sl-page-title text-right">
            <a class="btn btn-primary" href="{{ route('home.blog.index') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
        </div><!-- sl-page-title -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Update Blog</div>
                                <div class="card-body">
                                    
								<form class="admin-form" action="{{ route('home.blog.update',$blog->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('admin.alerts.alerts')
                                    <img style="width: 50px;" class="admin-gallery-img" src="{{ $blog->thumbnail ? asset('assets/images/'.$blog->thumbnail) : asset('assets/images/placeholder.png') }}"
                                                            alt="No Image Found">
                                        <br>
                                    <div class="form-group position-relative ">
                                        <label for="thumbnail">{{ __('Update Thumbnail') }} *</label>
                                            <input class="form-control" type="file"  accept="image/*"  name="thumbnail" id="file">
                                    </div>
                                    <div class="d-block">
                                        @forelse(json_decode($blog->photos,true) as $key => $photo)
                                            <div class="single-g-item d-inline-block m-2">
                                                    <a href="{{ route('home.blog.photo.delete',[$key,$blog->id]) }}" class="remove-gallery-img">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                    <a class="popup-link" href="{{ $photo ? asset('assets/images/'.$photo) : asset('assets/images/placeholder.png') }}">
                                                        <img style="width: 50px;" class="admin-gallery-img" src="{{ $photo ? asset('assets/images/'.$photo) : asset('assets/images/placeholder.png') }}"
                                                            alt="No Image Found">
                                                    </a>
                                            </div>
                                        @empty

                                            <h6><b>{{ __('No Images Added') }}</b></h6>
                                        @endforelse
                                    </div>
                                    <div class="form-group position-relative ">
                                        <label for="photos">{{ __('More photos') }} *</label>
                                            <input class="form-control" type="file"  accept="image/*"  name="photos[]" id="file"
                                                aria-label="File browser example" accept="image/*" multiple>
                                    </div>
									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="{{ __('Enter Title') }}" value="{{ $blog->title }}" >
									</div>

									<div class="form-group">
										<label for="category_id">{{ __('Select Category') }} *</label>
										<select name="category_id" id="category_id" class="form-control" >
											<option value="" selected disabled>{{__('Select Category')}}</option>
											@foreach(DB::table('categories')->get() as $category)
											<option value="{{ $category->name }}" {{$blog->category_id == $category->name ? 'selected' : ''}} >{{ $category->name }}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="details">{{ __('Details') }} *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="{{ __('Enter Details') }}"
											>{!! $blog->details !!}</textarea>
									</div>

									<div class="form-group">
										<label for="tags">{{ __('Tags') }}
											</label>
										<input type="text" name="tags" class="tags"
											id="tags"
											placeholder="{{ __('Tags') }}"
											value="{{$blog->tags}}">
									</div>

								    <div class="form-group">
										<button type="submit"
											class="btn btn-secondary ">{{ __('Submit') }}</button>
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
@section('footer_scripts')
    <script>
        // editor
         if($('.text-editor').length > 0) {

            $('.text-editor').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen']],
                  ]
            });

        }
        



        // Tagify
        if( $('.tags').length > 0 ) {
            $('.tags').tagify();
        }
    </script>
@endsection