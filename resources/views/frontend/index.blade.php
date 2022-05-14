@extends('layouts.frontend_app')
@section('title')
    Home | Miguel Bevacqua
@endsection
@section('home')
    active
@endsection
{{-- @section('index')
current-menu-item
@endsection --}}
@section('frontend_content')
    
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=gdlr-core-page-builder-body>
        <div class="gdlr-core-pbf-wrapper " id="div_2207_0" id=gdlr-core-wrapper-1>
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-post-slider-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix "
                            id="div_2207_1">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type=slider
                                data-effect=default data-nav=navigation data-disable-autoslide=1>
                                <ul class=slides>
                                    @foreach ($banners as $banner)
                                    <li>
                                        <div class=gdlr-core-post-slider-slide>
                                            <div class="gdlr-core-post-slider-image gdlr-core-media-image">
                                                <a target="_blank" href={{ $banner->link }}><img src="{{ $banner->bg ? asset('assets/images/'.$banner->bg) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$banner->bg) }}"
                                                        alt width=1500 height=635
                                                        title=pexels-photo-736166><span
                                                        class=gdlr-core-post-slider-overlay
                                                        id="span_2207_0"></span></a>
                                            </div>
                                            <div
                                                class="gdlr-core-post-slider-caption gdlr-core-center-align">
                                                <h3 class="gdlr-core-post-slider-title" id="h3_2207_0"><a
                                                        href={{ $banner->link }}>{{ $banner->heading }}</a></h3>
                                                <div class=gdlr-core-post-slider-widget-info><span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                            class=gdlr-core-blog-info-sep>/</span><a
                                                            href={{ $banner->link }}>{{ $banner->description }}</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div
                class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
                    id="div_2207_2">
                    <div class=gdlr-core-pbf-sidebar-content-inner data-skin="Blog List">
                        <div class=gdlr-core-pbf-element>
                            <div
                                class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix"
                                    data-layout=fitrows>
                                    @foreach ($blogs as $blog)
                                    <div
                                        class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                            <div
                                                class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href={{ route('front.blog.detail', $blog->slug) }}><img src="{{ $blog->thumbnail ? asset('assets/images/'.$blog->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$blog->thumbnail) }}"
                                                        width=1000 height=486
                                                        title=pexels-photo-871053></a>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-blog-full-content-wrap>

                                            <div class="gdlr-core-blog-full-head clearfix">
                                                <div class=gdlr-core-blog-full-head-right>
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        id="h3_2207_3">
                                                        <a href={{ route('front.blog.detail', $blog->slug) }}>{{ $blog->title }}</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                           
                                                            <a href=# title="Posts by Admin"
                                                                rel=author>Admin</a>
                                                        </span>
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                            <a href=#>{{ $blog->created_at->format('M d, Y') }}</a>
                                                        </span>
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                            <a href={{ route('category.name', $blog->category_id) }} rel=tag>{{ $blog->category_id }}</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-blog-content><a href="{{ route('front.blog.detail', $blog->slug) }}" style="color: inherit;">{{ strlen(strip_tags($blog->details)) > 250 ? substr(strip_tags($blog->details), 0, 250) : strip_tags($blog->details) }}...</a><a href="{{ route('front.blog.detail', $blog->slug) }}">read more</a></div>
                                            
                                        </div>
                                    </div>
                                    <hr />
                                    @endforeach
                                </div>
                                <div
                                class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-right-align gdlr-core-item-pdlr">
                                {{ $blogs->links() }}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  akea-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height"
                    data-skin="Blog List" id="div_2207_9">
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">

                        <div id=text-4 class="widget widget_text akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->follow_twitter_heading }}</span><span class=akea-widget-head-divider></span></h3>
                            <div class="tweet-box">
                                <span class=clear></span>
                                <div class=textwidget>
                                    <a class="twitter-timeline"
                                        href="{{ $setting->twitter_embeded_code }}?ref_src=twsrc%5Etfw">Tweets by
                                        Miguel Bevacqua</a>
                                    <script async src="https://platform.twitter.com/widgets.js"
                                        charset="utf-8">
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div id=text-7 class="widget widget_text akea-widget">
                            <div class=textwidget>
                                <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align"
                                    id="div_2207_10">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top"
                                        id="div_2207_11">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                id="h3_2207_9">{{ $setting->follow_us_heading }}<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                        id="div_2207_12">
                                        @foreach ($socials as $social)
                                        <a href="{{ $social->link }}" target=_blank
                                            class=gdlr-core-social-network-icon title=facebook
                                            id="a_2207_11" rel="noopener noreferrer"><i
                                                class="{{ $social->icon }}"></i></a>
                                        @endforeach
                                            </div>
                                    <br> <span class=gdlr-core-space-shortcode id="span_2207_3"></span>
                                    <br>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top"
                                        id="div_2207_13">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                id="h3_2207_10">{{ $setting->newsletter_heading }}<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>{{ $setting->newsletter_description }}<span
                                        class=gdlr-core-space-shortcode id="span_2207_4"></span>
                                    <br>
                                    <div class="tnp tnp-subscription-minimal ">
                                        @include('admin.alerts.alerts')
                                        <form action="{{ route('front.subscribe') }}" method="POST">
                                            @csrf
                                            <input class=tnp-email type=email required name='email' placeholder=Email>
                                            <input class=tnp-submit type=submit value=Subscribe>
                                        </form>
                                    </div> <span class=gdlr-core-space-shortcode id="span_2207_5"></span>
                                </div>
                            </div>
                        </div>
                        <div id=gdlr-core-recent-post-widget-2
                            class="widget widget_gdlr-core-recent-post-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->popular_post_heading }}</span><span class=akea-widget-head-divider></span></h3><span
                                class=clear></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                @foreach ($popular_blog as $popular)
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div
                                        class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                        <img src="{{ $popular->thumbnail ? asset('assets/images/'.$popular->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$popular->thumbnail) }}"
                                            width=150 height=150 style="height: 50px!important; width:50px !important" title=qingbao-meng-330658-unsplash></div>
                                    <div class=gdlr-core-recent-post-widget-content>
                                        <div class=gdlr-core-recent-post-widget-title><a href={{ route('front.blog.detail', $popular->slug) }}>{{ $popular->title }}</a></div>
                                        <div class=gdlr-core-recent-post-widget-info><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><a
                                                    href=# title="Posts by Admin" rel=author>Admin</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                    href=#>{{ $popular->created_at->format('M d, Y') }}</a></span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id=text-5 class="widget widget_text akea-widget">
                            <div class=textwidget>
                                <p>
                                    <a href=#><img src="{{ asset('frontend_asset') }}/upload/banner-600.jpg" alt width=300 height=600
                                            class="alignnone size-full wp-image-6652"></a>
                                </p>
                            </div>
                        </div>
                        <div id=gdlr-core-category-background-widget-2
                            class="widget widget_gdlr-core-category-background-widget akea-widget">
                            <h3 class="akea-widget-title"><span
                                    class=akea-widget-head-text>{{ $setting->category_heading }}</span><span
                                    class=akea-widget-head-divider></span></h3><span class=clear></span>
                            <ul class=gdlr-core-category-background-widget>
                                @foreach ($categories as $category)
                                <li class=gdlr-core-with-bg id="li_2207_0"><a href={{ route('category.name', $category->name) }}><span
                                            class=gdlr-core-category-background-widget-content><span
                                                class=gdlr-core-category-background-widget-title>{{ $category->name }}</span></span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
                            <h3 class="akea-widget-title">
                                <span class=akea-widget-head-text>{{ $setting->tag_heading }}</span>
                                <span class=akea-widget-head-divider></span>
                            </h3>
                            <span class=clear></span>
                            <div class=tagcloud>
                                @foreach ($tags as $tag)
                                <a href=# class="tag-cloud-link tag-link-117 tag-link-position-1"
                                    id="a_2207_16" aria-label="Beach (2 items)">{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div id=text-6 class="widget widget_text akea-widget">
                            <div class=textwidget>
                                <p>
                                    <a href=#><img class="alignnone size-full wp-image-6651"
                                            src="{{ asset('frontend_asset') }}/upload/banner-250.jpg" alt width=300 height=250></a>
                                </p>
                            </div>
                        </div>
                        <div id=gdlr-core-recent-post-widget-3
                            class="widget widget_gdlr-core-recent-post-widget akea-widget">
                            <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->recent_post_heading }}</span><span class=akea-widget-head-divider></span></h3><span
                                class=clear></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-full">
                                @foreach ($recent_post as $recent)
                                    <div class="gdlr-core-recent-post-widget clearfix">
                                        <div
                                            class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js "
                                                        href="{{ $recent->thumbnail ? asset('assets/images/'.$recent->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$recent->thumbnail) }}"> <img
                                                        src="{{ $recent->thumbnail ? asset('assets/images/'.$recent->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$recent->thumbnail) }}" alt width=1000
                                                        height="486px" title=post-vr></a></div>
                                        <div class=gdlr-core-recent-post-widget-content>
                                            <div
                                                class="gdlr-core-recent-post-widget-title gdlr-core-title-font">
                                                <a href={{ route('front.blog.detail', $recent->slug) }}>{{ $recent->title }}</a>
                                            </div>
                                            <div class=gdlr-core-recent-post-widget-info><span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img
                                                        alt src='{{ $recent->thumbnail ? asset('assets/images/'.$recent->thumbnail) : asset('assets/images/placeholder.png') }}'
                                                        class='avatar avatar-50 photo' height=50 width=50><a
                                                        href=# title="Posts by Jane Smith" rel=author>Admin</a></span><span
                                                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                        href=#>{{ $recent->created_at->format('M d, Y') }}</a></span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_2207_14">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                            id="div_2207_15">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                    id="h3_2207_11">{{ $setting->instagram_heading }}<span
                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-instagram-item gdlr-core-item-pdb  gdlr-core-item-pdlr">
                            <div class="gdlr-core-instagram-item-content clearfix">
                                @foreach ($instagrams as $instagram)
                                    <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js "
                                                    href="{{ $instagram->photo ? asset('assets/images/'.$instagram->photo) : asset('assets/images/placeholder.png') }}"
                                                    data-lightbox-group=gdlr-core-img-group-2><img
                                                        src="{{ $instagram->photo ? asset('assets/images/'.$instagram->photo) : asset('assets/images/placeholder.png') }}"
                                                        width=640 height=640 alt></a>
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