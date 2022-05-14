@extends('layouts.dashboard_app')
@section('title')
    Add Blog | Dashboard
@endsection
@section('blog')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
        <span class="breadcrumb-item"><a href="{{ route('home.blog.index') }}">Blog</a></span>
        <span class="breadcrumb-item active"><a href="{{ route('home.blog.create') }}">Add Blog</a></span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Blog</h5>
        </div><!-- sl-page-title -->
        
        <div class="sl-page-title text-right">
            <a class="btn btn-primary" href="{{ route('home.blog.index') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
        </div><!-- sl-page-title -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Add Blog</div>
                                <div class="card-body">
                                    
                                    <form class="admin-form" action="{{ route('home.blog.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @include('admin.alerts.alerts')
                                    <div class="form-group">
                                        <label for="thumbnail">{{ __('Blog Thumbnail') }} *</label>
                                        <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                                    </div>
									<div class="form-group position-relative ">
                                        <label for="thumbnail">{{ __('More Photos') }} *</label>
											<input type="file"  accept="image/*"  class="form-control" name="photos[]" multiple id="file"
												aria-label="File browser example" >
									</div>
                                    <div class="form-group">
                                        <label for="title">{{ __('Title') }} *</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">{{ __('Select Category') }} *</label>
                                        <select name="category_id" id="category_id" class="form-control" >
                                            <option value="" selected disabled>{{__('Select Category')}}</option>
                                            @foreach(DB::table('categories')->get() as $category)
                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
										<label for="details">{{ __('Details') }} *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="{{ __('Enter Details') }}"
											>{{ old('details') }}</textarea>
									</div>

                                    <div class="form-group">
                                        <label for="tags">{{ __('Tags') }}
                                            </label>
                                        <input type="text" name="tags" class="tags"
                                            id="tags"
                                            placeholder="{{ __('Tags') }}"
                                            value="">
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
            // ClassicEditor
            // .create( document.querySelector( '#details' ) )
            // .then( editor => {
            //     console.log( editor );
            // } )
            // .catch( error => {
            //     console.error( error );
            // } );
        // Tagify
        if( $('.tags').length > 0 ) {
            $('.tags').tagify();
        }
    </script>
@endsection