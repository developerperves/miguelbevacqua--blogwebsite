@extends('layouts.frontend_app')
@section('title')
    Project | Miguel Bevacqua
@endsection
@section('project')
    active
@endsection
@section('frontend_content')
    
<div class="akea-page-title-wrap  akea-style-custom akea-center-align" style="
    background-image: url({{ $setting->project_banner_bg ? asset('assets/images/'.$setting->project_banner_bg) : asset('assets/images/placeholder.png') }});
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;">
    <div class=akea-header-transparent-substitute></div>
    <div class=akea-page-title-overlay></div>
    <div class="akea-page-title-container akea-container">
        <div class="akea-page-title-content akea-item-pdlr">
            <h1 class="akea-page-title">{{ $setting->project_banner_title }}</h1>
        </div>
    </div>
</div>
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=gdlr-core-page-builder-body>
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                            style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                    style="text-transform: none ;">{{ $setting->project_heading }}<span
                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                </h3>
                            </div><span
                                class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                style="font-style: normal ;">{{ $setting->project_description }}</span>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div
                            class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix"
                                data-layout=fitrows>
                                @foreach ($projects as $project)
                                <div
                                    class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js "
                                            href={{ $project->photo ? asset('assets/images/'.$project->photo) : asset('assets/images/placeholder.png') }}
                                            data-lightbox-group=gdlr-core-img-group-1><img
                                                src={{ $project->photo ? asset('assets/images/'.$project->photo) : asset('assets/images/placeholder.png') }} alt width=700
                                                height=585 title=pexels-photo-697313><span
                                                class="gdlr-core-image-overlay ">
                                                <h5 style="padding-top: 40px; color:#ed9468">{{ Str::limit($project->heading,20) }}</h5>
                                                <i
                                                    class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection