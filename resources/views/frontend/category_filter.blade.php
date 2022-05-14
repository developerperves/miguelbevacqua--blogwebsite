@extends('layouts.frontend_app')
@section('title')
    Blog | Miguel Bevacqua
@endsection
@section('category')
    active
@endsection
@section('frontend_content')
<div class="akea-page-title-wrap  akea-style-custom akea-center-align" style="
background-image: url({{ $setting->blog_banner_bg ? asset('assets/images/'.$setting->blog_banner_bg) : asset('assets/images/placeholder.png') }});">
    <div class=akea-header-transparent-substitute></div>
    <div class=akea-page-title-overlay></div>
    <div class="akea-page-title-container akea-container">
        <div class="akea-page-title-content akea-item-pdlr">
            <h3 class="akea-page-title">Search blogs</h3>
            <div class=akea-page-caption>{{ $setting->blog_banner_description }}</div>
        </div>
    </div>
</div>
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class="akea-content-container akea-container">
        <div class=" akea-sidebar-wrap clearfix akea-line-height-0 akea-sidebar-style-right">
            <div class=" akea-sidebar-center gdlr-core-column-40 akea-line-height">
                <div class=akea-content-area>
                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                        
                            @forelse ($blogs as $blog)
                                <div
                                    class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                        <div
                                            class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href={{ route('front.blog.detail', $blog->slug) }}>
                                                <img src="{{ $blog->thumbnail ? asset('assets/images/'.$blog->thumbnail) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$blog->thumbnail) }}" width=1000
                                                    height=486 title=pexels-photo-225227>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-blog-full-content-wrap>
                                        <div class="gdlr-core-blog-full-head clearfix">
                                            <div class=gdlr-core-blog-full-head-right>
                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                    style="font-size: 28px ;">
                                                    <a href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                                                </h3>
                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                    <span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                        <img alt src='{{ asset('frontend_asset') }}/upload/avatar.jpeg'
                                                            class='avatar avatar-50 photo' height=50 width=50>
                                                        <a href="{{ route('front.blog.detail', $blog->slug) }}" title="Posts by Kally Gordon" rel=author>Kally
                                                            Gordon</a>
                                                    </span>
                                                    <span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                        <a href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->created_at->format('M d, Y') }}</a>
                                                    </span>
                                                    <span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                        <a href={{ route('category.name', $blog->category_id) }} rel=tag>{{ $blog->category_id }}</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-blog-content>{!! Str::limit($blog->details, 250) !!}</div>
                                    </div>
                                </div>
                             
                                @empty
                                <h3 class="akea-page-title" style="text-align: center;color:#856404;background:#fff3cd;padding:20px">Blogs Not Found</h3>
                                @endforelse
                                <div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-right-align gdlr-core-item-pdlr">
                                    {{ $blogs->links() }}
                                </div>
                        </div>
                        {{-- <div
                            class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-right-align gdlr-core-item-pdlr">
                            <span aria-current=page class='page-numbers current'>1</span> <a
                                class=page-numbers href=#>2</a>
                            <a class="next page-numbers" href=#></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div
                class=" akea-sidebar-right gdlr-core-column-20 akea-line-height akea-line-height gdlr-core-sidebar-script">
                <div class="akea-sidebar-area akea-item-pdlr">
                    <div id=text-4 class="widget widget_text akea-widget">
                        <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->follow_twitter_heading }}</span><span class=akea-widget-head-divider></span></h3>
                        <div class="tweet-box">
                            <span class=clear></span>
                            <div class=textwidget>
                                <a class="twitter-timeline"
                                    href="{{ $setting->twitter_embeded_code }}?ref_src=twsrc%5Etfw">Tweets by
                                    armansomoy</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
                                </script>
                            </div>
                        </div>
                    </div>
                    <div id=text-7 class="widget widget_text akea-widget">
                        <div class=textwidget>
                            <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align"
                                style="color: #666666 ;padding: 50px 40px 65px;background-color: #f4f4f4 ;">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top"
                                    style="padding-bottom: 10px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                            style="font-size: 14px ;font-weight: 700 ;letter-spacing: 2px ;">{{ $setting->follow_us_heading }}<span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                    style="padding-bottom: 0px ;">
                                    @foreach ($socials as $social)
                                    <a href={{ $social->link }} target=_blank
                                        class=gdlr-core-social-network-icon title=facebook
                                        style="font-size: 17px ;" rel="noopener noreferrer"><i
                                            class="{{ $social->icon }}"></i></a>
                                    @endforeach
                                    </div>
                                <br> <span class=gdlr-core-space-shortcode style="margin-top: 0px ;"></span>
                                <br>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top"
                                    style="padding-bottom: 10px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                            style="font-size: 14px ;font-weight: 700 ;letter-spacing: 2px ;">
                                            {{ $setting->newsletter_heading }}<span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>{{ $setting->newsletter_description }}<span
                                    class=gdlr-core-space-shortcode style="margin-top: 10px ;"></span>
                                <br>
                                <div class="tnp tnp-subscription-minimal ">
                                    @include('admin.alerts.alerts')
                                    <form action="{{ route('front.subscribe') }}" method="POST">
                                        @csrf
                                        <input class=tnp-email type=email required name='email' placeholder=Email>
                                        <input class=tnp-submit type=submit value=Subscribe>
                                    </form>
                                </div> <span class=gdlr-core-space-shortcode
                                    style="margin-top: -20px ;"></span>
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
                                                            <div id=text-5
                                                                class="widget widget_text akea-widget">
                                                                <div class=textwidget>
                                                                    <p>
                                                                        <a href=#><img
                                                                                src="{{ asset('frontend_asset') }}/upload/banner-600.jpg"
                                                                                alt width=300 height=600
                                                                                class="alignnone size-full wp-image-6652"></a>
                                                                    </p>
                                                                </div>
                                                    </div>
                                                    <div id=gdlr-core-category-background-widget-2
                                                        class="widget widget_gdlr-core-category-background-widget akea-widget">
                                                        <h3 class="akea-widget-title"><span
                                                                class=akea-widget-head-text>{{ $setting->category_heading }}</span><span
                                                                class=akea-widget-head-divider></span></h3>
                                                        <span class=clear></span>
                                                        <ul class=gdlr-core-category-background-widget>
                                                            @foreach ($categories as $category)
                                                            <li class=gdlr-core-with-bg
                                                                style="background-image: url({{ asset('frontend_asset') }}/upload/cat-bg-fashion.jpg) ;">
                                                                <a href=#><span
                                                                        class=gdlr-core-category-background-widget-content><span
                                                                            class=gdlr-core-category-background-widget-title>{{ $category->name }}</span></span></a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                    </div>
                                    <div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
                                        <h3 class="akea-widget-title"><span
                                                class=akea-widget-head-text>{{ $setting->tag_heading }}</span><span
                                                class=akea-widget-head-divider></span></h3><span
                                            class=clear></span>
                                        <div class=tagcloud>
                                            @foreach ($tags as $tag)
                                            <a href=#
                                                class="tag-cloud-link tag-link-117 tag-link-position-1"
                                                style="font-size: 11.405405405405pt;"
                                                aria-label="Beach (2 items)">{{ $tag }}</a>
                                            @endforeach
                                            </div>
                                    </div>
                                    <div id=text-6 class="widget widget_text akea-widget">
                                        <div class=textwidget>
                                            <p>
                                                <a href=#><img class="alignnone size-full wp-image-6651"
                                                        src="{{ asset('frontend_asset') }}/upload/banner-250.jpg" alt width=300
                                                        height=250></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div id=gdlr-core-recent-post-widget-3
                                        class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                        <h3 class="akea-widget-title"><span
                                                class=akea-widget-head-text>{{ $setting->recent_post_heading }}</span><span
                                                class=akea-widget-head-divider></span></h3><span
                                            class=clear></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-full">
                                            @forelse ($recent_post as $recent)
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
                                                        <a href={{ route('front.blog.detail', $recent->slug) }}>{{ $recent->title }}</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img
                                                                alt src='upload/avatar.jpeg'
                                                                class='avatar avatar-50 photo' height=50
                                                                width=50><a
                                                                href=#
                                                                title="Posts by Jane Smith" rel=author>Admin</a></span><span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                                href=#>{{ $recent->created_at->format('M d, Y') }}</a></span></div>
                                                </div>
                                            </div>
                                            @empty
                                                <p>Nothing to show</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div id=gdlr-core-instagram-widget-2
                                        class="widget widget_gdlr-core-instagram-widget akea-widget">
                                        <h3 class="akea-widget-title"><span
                                                class=akea-widget-head-text>{{ $setting->instagram_heading }}</span><span
                                                class=akea-widget-head-divider></span></h3><span
                                            class=clear></span>
                                        <div class="gdlr-core-instagram-widget clearfix">
                                            @foreach ($instagrams as $instagram)
                                            <div
                                                class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js "
                                                    href="{{ $instagram->photo ? asset('assets/images/'.$instagram->photo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$instagram->photo) }}"
                                                    data-lightbox-group=gdlr-core-img-group-1><img
                                                        src="{{ $instagram->photo ? asset('assets/images/'.$instagram->photo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$instagram->photo) }}"
                                                        width=150 height=150 alt></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection