@extends('layouts.dashboard_app')
@section('title')
    Website Besic Setting | Dashboard
@endsection
@section('setting')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <span class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></span>
      <span class="breadcrumb-item active"><a href="{{ route('basic.settings') }}">Setting</a></span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Website Besic Settings</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <!-- Nested Row within Card Body -->
                        <form class="admin-form" action="{{ route('basic.settings.update') }}" method="POST"
                        enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" data-toggle="pill" href="#media">{{ __('Genarel Settings') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#home_page_updates">{{ __('Home Page Updates') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#blog_page_updates">{{ __('Blog Page Updates') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#about_page_updates">{{ __('About Page Updates') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#about_page_count">{{ __('About Page Counter') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#about_story">{{ __('About Story') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#project_detail">{{ __('Project Detail') }}</a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9">
                                        @include('admin.alerts.alerts')

                                        {{-- <input type="hidden" name="is_validate" value="1"> --}}

                                        <div class="">
                                            <div id="tabs">
                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <div id="media" class="tab-pane active"><br>

                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-8">

                                                            <ul class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-toggle="pill" href="#logo">{{ __('Logo') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#genarel_info">{{ __('Genarel Info') }}</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div id="logo" class="container tab-pane active"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">

                                                                            <div class="form-group">
                                                                                <label for="name">{{ __('Current Logo') }}</label>
                                                                                <div class="col-lg-12 pb-1">
                                                                                    <img class="admin-setting-img"
                                                                                        src="{{ $setting->logo ? asset('assets/images/'.$setting->logo) : asset('assets/images/placeholder.png') }}"
                                                                                        alt="No Image Found">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group position-relative ">
                                                                                <label class="file">
                                                                                    <input type="file"  accept="image/*"  class="upload-photo" name="logo" id="file" aria-label="File browser example">
                                                                                </label>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="genarel_info" class="container tab-pane"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label for="phone_no">{{ __('Site Name') }} *</label>
                                                                                <input type="text" name="footer_site_name" class="form-control" id="footer_site_name" value="{{ $setting->footer_site_name }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="footer_address">{{ __('Your Address') }} *</label>
                                                                                <input type="text" name="footer_address" class="form-control" id="footer_address" value="{{ $setting->footer_address }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="footer_number">{{ __('Phone No') }} *</label>
                                                                                <input type="text" name="footer_number" class="form-control" id="footer_number" value="{{ $setting->footer_number }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="footer_email">{{ __('Email Address') }} *</label>
                                                                                <input type="email" name="footer_email" class="form-control" id="footer_email" value="{{ $setting->footer_email }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="footer_copyright">{{ __('Copyright') }} *</label>
                                                                                <input type="text" name="footer_copyright" class="form-control" id="footer_copyright" value="{{ $setting->footer_copyright }}" >
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="home_page_updates" class="tab-pane"><br>

                                                        <div class="row justify-content-center">

                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <label for="follow_twitter_heading">{{ __('Twitter Heading') }} *</label>
                                                                    <input type="text" name="follow_twitter_heading" class="form-control" id="follow_twitter_heading"
                                                                        placeholder="{{ __('Twitter Heading') }}" value="{{ $setting->follow_twitter_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="twitter_embeded_code">{{ __('Twitter account URL') }} *</label>
                                                                    <input type="text" name="twitter_embeded_code" class="form-control" id="twitter_embeded_code"
                                                                        placeholder="{{ __('Twitter account URL') }}" value="{{ $setting->twitter_embeded_code }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="follow_us_heading">{{ __('Social Media Heading') }} *</label>
                                                                    <input type="text" name="follow_us_heading" class="form-control" id="follow_us_heading"
                                                                        placeholder="{{ __('Social Media Heading') }}" value="{{ $setting->follow_us_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="newsletter_heading">{{ __('Newsletter Heading') }} *</label>
                                                                    <input type="text" name="newsletter_heading" class="form-control" id="newsletter_heading"
                                                                        placeholder="{{ __('Newsletter Heading') }}" value="{{ $setting->newsletter_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="newsletter_description">{{ __('Newsletter Description') }} *</label>
                                                                    <input type="text" name="newsletter_description" class="form-control" id="newsletter_description"
                                                                        placeholder="{{ __('Newsletter Description') }}" value="{{ $setting->newsletter_description }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="popular_post_heading">{{ __('Populer Post Heading') }} *</label>
                                                                    <input type="text" name="popular_post_heading" class="form-control" id="popular_post_heading"
                                                                        placeholder="{{ __('Populer Post Heading') }}" value="{{ $setting->popular_post_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="category_heading">{{ __('Category Heading') }} *</label>
                                                                    <input type="text" name="category_heading" class="form-control" id="category_heading"
                                                                        placeholder="{{ __('Category Heading') }}" value="{{ $setting->category_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tag_heading">{{ __('Tag Heading') }} *</label>
                                                                    <input type="text" name="tag_heading" class="form-control" id="tag_heading"
                                                                        placeholder="{{ __('Tag Heading') }}" value="{{ $setting->tag_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recent_post_heading">{{ __('Recent Post Heading') }} *</label>
                                                                    <input type="text" name="recent_post_heading" class="form-control" id="recent_post_heading"
                                                                        placeholder="{{ __('Recent Post Heading') }}" value="{{ $setting->recent_post_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="instagram_heading">{{ __('Instagram Heading') }} *</label>
                                                                    <input type="text" name="instagram_heading" class="form-control" id="instagram_heading"
                                                                        placeholder="{{ __('Instagram Heading') }}" value="{{ $setting->instagram_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="footer_category_heading">{{ __('Footer Category Heading') }} *</label>
                                                                    <input type="text" name="footer_category_heading" class="form-control" id="footer_category_heading"
                                                                        placeholder="{{ __('Footer Category Heading') }}" value="{{ $setting->footer_category_heading }}" >
                                                                </div>
                                                            </div>

                                                        </div>

                                                </div>

                                                <div id="blog_page_updates" class="tab-pane"><br>

                                                        <div class="row justify-content-center">

                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <label for="blog_banner_heading">{{ __('Blog Banner Heading') }} *</label>
                                                                    <input type="text" name="blog_banner_heading" class="form-control" id="blog_banner_heading"
                                                                        placeholder="{{ __('Blog Banner Heading') }}" value="{{ $setting->blog_banner_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="blog_banner_description">{{ __('Blog Banner Description') }} *</label>
                                                                    <input type="text" name="blog_banner_description" class="form-control" id="blog_banner_description"
                                                                        placeholder="{{ __('Blog Banner Description') }}" value="{{ $setting->blog_banner_description }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="blog_banner_bg">{{ __('Blog Banner BG') }} *</label>
                                                                    <input type="file" name="blog_banner_bg" class="form-control" id="blog_banner_bg">
                                                                    <br>
                                                                    <img src="{{ $setting->blog_banner_bg ? asset('assets/images/'.$setting->blog_banner_bg) : asset('assets/images/placeholder.png') }}"
                                                                    alt="No Image Found">
                                                                </div>
                                                            </div>

                                                        </div>

                                                </div>

                                                <div id="about_page_updates" class="tab-pane"><br>

                                                        <div class="row justify-content-center">

                                                            <div class="col-lg-8">
                                                                <div class="form-group">
                                                                    <label for="about_banner_heading">{{ __('About Banner Heading') }} *</label>
                                                                    <input type="text" name="about_banner_heading" class="form-control" id="about_banner_heading"
                                                                        placeholder="{{ __('About Banner Heading') }}" value="{{ $setting->about_banner_heading }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="about_banner_title">{{ __('About Banner Title') }} *</label>
                                                                    <input type="text" name="about_banner_title" class="form-control" id="about_banner_title"
                                                                        placeholder="{{ __('About Banner Title') }}" value="{{ $setting->about_banner_title }}" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="about_banner_bg">{{ __('About Banner BG') }} *</label>
                                                                    <input type="file" name="about_banner_bg" class="form-control" id="about_banner_bg">
                                                                    <br>
                                                                    <img class="w-100" src="{{ $setting->about_banner_bg ? asset('assets/images/'.$setting->about_banner_bg) : asset('assets/images/placeholder.png') }}"
                                                                    alt="No Image Found">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="about_thumbnail">{{ __('About Thumbnail') }} *</label>
                                                                    <input type="file" name="about_thumbnail" class="form-control" id="about_thumbnail">
                                                                    <br>
                                                                    <img class="w-100" src="{{ $setting->about_thumbnail ? asset('assets/images/'.$setting->about_thumbnail) : asset('assets/images/placeholder.png') }}"
                                                                    alt="No Image Found">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="count_bg">{{ __('Counter BG') }} *</label>
                                                                    <input type="file" name="count_bg" class="form-control" id="count_bg">
                                                                    <br>
                                                                    <img class="w-100" src="{{ $setting->count_bg ? asset('assets/images/'.$setting->count_bg) : asset('assets/images/placeholder.png') }}"
                                                                    alt="No Image Found">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="about_detail">{{ __('About Detail') }} *</label>
                                                                    <textarea id="about_detail" name="about_detail" rows="4" class="form-control text-editor">{!! $setting->about_detail !!}</textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                </div>
                                                

                                                <div id="about_page_count" class="tab-pane"><br>

                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-8">

                                                            <ul class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-toggle="pill" href="#photos_taken">{{ __('Photos Taken') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#articles_posts">{{ __('Articles & Posts') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#active_readers">{{ __('Active Readers') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#followers">{{ __('Followers') }}</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div id="photos_taken" class="container tab-pane active"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">
                                                                            <div class="form-group">
                                                                                <label for="photo_taken_text">{{ __('Photo Taken Text') }} *</label>
                                                                                <input type="text" name="photo_taken_text" class="form-control" id="photo_taken_text"
                                                                                    placeholder="{{ __('Photo Taken Text') }}" value="{{ $setting->photo_taken_text }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="photo_taken_count">{{ __('Photo Taken Count') }} *</label>
                                                                                <input type="text" name="photo_taken_count" class="form-control" id="photo_taken_count"
                                                                                    placeholder="{{ __('Photo Taken Count') }}" value="{{ $setting->photo_taken_count }}" >
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="articles_posts" class="container tab-pane"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">
                                                                            <div class="form-group">
                                                                                <label for="artical_post_text">{{ __('Artical Post Text') }} *</label>
                                                                                <input type="text" name="artical_post_text" class="form-control" id="artical_post_text"
                                                                                    placeholder="{{ __('Artical Post Text') }}" value="{{ $setting->artical_post_text }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="artical_post_count">{{ __('Artical Post Count') }} *</label>
                                                                                <input type="text" name="artical_post_count" class="form-control" id="artical_post_count"
                                                                                    placeholder="{{ __('Artical Post Count') }}" value="{{ $setting->artical_post_count }}" >
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="active_readers" class="container tab-pane"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">
                                                                            <div class="form-group">
                                                                                <label for="active_reader_text">{{ __('Active Reader Text') }} *</label>
                                                                                <input type="text" name="active_reader_text" class="form-control" id="active_reader_text"
                                                                                    placeholder="{{ __('Active Reader Text') }}" value="{{ $setting->active_reader_text }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="active_reader_count">{{ __('Active Reader Count') }} *</label>
                                                                                <input type="text" name="active_reader_count" class="form-control" id="active_reader_count"
                                                                                    placeholder="{{ __('Active Reader Count') }}" value="{{ $setting->active_reader_count }}" >
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="followers" class="container tab-pane"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">
                                                                            <div class="form-group">
                                                                                <label for="follower_text">{{ __('Follower Text') }} *</label>
                                                                                <input type="text" name="follower_text" class="form-control" id="follower_text"
                                                                                    placeholder="{{ __('Follower Text') }}" value="{{ $setting->follower_text }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="follower_count">{{ __('Follower Count') }} *</label>
                                                                                <input type="text" name="follower_count" class="form-control" id="follower_count"
                                                                                    placeholder="{{ __('Follower Count') }}" value="{{ $setting->follower_count }}" >
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="about_story" class="tab-pane"><br>

                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-8">

                                                            <ul class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-toggle="pill" href="#story">{{ __('Story') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#author_heading">{{ __('Author') }}</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div id="story" class="container tab-pane active"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">
                                                                            <div class="form-group">
                                                                                <label for="story_heading">{{ __('Story Heading') }} *</label>
                                                                                <input type="text" name="story_heading" class="form-control" id="story_heading"
                                                                                    placeholder="{{ __('Story Heading') }}" value="{{ $setting->story_heading }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="story_detail">{{ __('Story Details') }} *</label>
                                                                                <textarea name="story_detail" id="story_detail" rows="4" class="form-control text-editor">{!! $setting->story_detail !!}</textarea>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="author_heading" class="container tab-pane active"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">
                                                                            <div class="form-group">
                                                                                <label for="story_heading">{{ __('Author Heading') }} *</label>
                                                                                <input type="text" name="author_heading" class="form-control" id="author_heading"
                                                                                    placeholder="{{ __('Author Heading') }}" value="{{ $setting->author_heading }}" >
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="author_detail">{{ __('Author Details') }} *</label>
                                                                                <textarea name="author_detail" rows="4" class="form-control">{!! $setting->author_detail !!}</textarea>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                

                                                <div id="project_detail" class="tab-pane"><br>

                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="project_banner_title">{{ __('Banner Title') }} *</label>
                                                                <input type="text" name="project_banner_title" class="form-control" id="project_banner_title"
                                                                    placeholder="{{ __('Banner TiTLE') }}" value="{{ $setting->project_banner_title }}" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="project_heading">{{ __('Project Heading') }} *</label>
                                                                <input type="text" name="project_heading" class="form-control" id="project_heading"
                                                                    placeholder="{{ __('Project Heading') }}" value="{{ $setting->project_heading }}" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="project_description">{{ __('Project Description') }} *</label>
                                                                <textarea id="project_description" name="project_description" rows="4" class="form-control">{{ $setting->project_description }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="project_banner_bg">{{ __('Project Banner BG') }} *</label>
                                                                <input type="file" name="project_banner_bg" class="form-control" id="project_banner_bg">
                                                                <br>
                                                                <img class="w-100" src="{{ $setting->project_banner_bg ? asset('assets/images/'.$setting->project_banner_bg) : asset('assets/images/placeholder.png') }}"
                                                                alt="No Image Found">
                                                            </div>
                                                        </div>

                                                    </div>

                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                        <button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button>
                                    </div>


                                </div>
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

<script type="text/javascript">


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

</script>
@endsection