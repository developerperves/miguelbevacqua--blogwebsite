@extends('layouts.frontend_app')
@section('title')
{{ $blog_info->title }} | Miguel Bevacqua
@endsection
@section('blog')
    active
@endsection
@section('blog_photo'){{asset('assets/images/'.$blog_info->thumbnail) }}@endsection

@section('frontend_content')
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=akea-header-transparent-substitute></div>
    <div class="akea-content-container akea-container ">
        <div class=" akea-sidebar-wrap clearfix akea-line-height-0 akea-sidebar-style-none">
            <div class=" akea-sidebar-center gdlr-core-column-60 akea-line-height">
                <div class="akea-content-wrap akea-item-pdlr clearfix">
                    <div class=akea-content-area>
                        <article id=post-6613 class="post-6613 post type-post status-publish format-standard has-post-thumbnail hentry category-travel tag-photography tag-travel">
                            <div class="akea-single-article clearfix">
                                <div class="akea-single-article-title-wrap akea-align-center">
                                    <header class="akea-single-article-head clearfix">
                                        <div class=akea-single-article-head-right>
                                            <h1 class="akea-single-article-title">{{ $blog_info->title }}</h1>
                                            <div class=akea-blog-info-wrapper>
                                                <div class="akea-blog-info akea-blog-info-font akea-blog-info-author vcard author post-author "><span class=fn><a href=../../../../author/author1/index.html title="Posts by Admin" rel=author>Admin</a></span></div>
                                                <div class="akea-blog-info akea-blog-info-font akea-blog-info-category "><a href=../../../../category/travel/index.html rel=tag>{{ $blog_info->category_id }}</a></div>
                                                <div class="akea-blog-info akea-blog-info-font akea-blog-info-tag ">
                                                    @foreach ($tags as $tag)
                                                    <a href=# rel=tag>{{ $tag }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                </div>
                                <div class="akea-single-article-thumbnail akea-media-image"><img
                                        src={{ $blog_info->thumbnail ? asset('assets/images/'.$blog_info->thumbnail) : asset('assets/images/placeholder.png') }} alt width=1300 height=530
                                        title=pexels-photo-871053></div>
                                <div class=akea-single-article-content>
                                    <div class=akea-breadcrumbs>
                                        <div class=akea-breadcrumbs-container>
                                            <div class=akea-breadcrumbs-item> <span property=itemListElement typeof=ListItem><a property=item typeof=WebPage  href={{ route('front.index') }} class=home><span property=name>Home</span></a>
                                                <meta property=position content=1>
                                                </span>&#183;<span property=itemListElement typeof=ListItem><a property=item typeof=WebPage title="Go to the Travel category archives." href={{ route('category.name', $blog_info->category_id) }} class="taxonomy category"><span property=name>{{ $blog_info->category_id }}</span></a>
                                                <meta property=position content=2>
                                                </span>&#183;<span class="post post-post current-item">{{ $blog_info->title }}</span></div>
                                        </div>
                                    </div>
                                    <div id=gallery-1 class='gallery galleryid-6613 gallery-columns-5 gallery-size-Gallerythumb'>
                                        
                                        @foreach (json_decode($blog_info->photos,true) as $photo)
                                        <figure class=gallery-item>
                                            <div class='gallery-icon landscape'>
                                                <a href="{{ $photo ? asset('assets/images/'.$photo) : asset('assets/images/placeholder.png') }}"><img width=500 height=414 src={{ $photo ? asset('assets/images/'.$photo) : asset('assets/images/placeholder.png') }} class="attachment-Gallery thumb size-Gallery thumb" alt></a>
                                            </div>
                                        </figure>
                                        @endforeach
                                    </div>
                                    {!! $blog_info->details !!}
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=gdlr-core-page-builder-body></div>
    
    <div class="akea-bottom-page-builder-container akea-container">
        <div class="akea-bottom-page-builder-sidebar-wrap akea-sidebar-style-none">
            <div class=akea-bottom-page-builder-sidebar-class>
                    <div class="akea-single-social-share akea-item-rvpdlr clearfix">
                       <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_afec_0">
                            <span class=gdlr-core-social-share-wrap>
                                <div class='share_option'>
                                    <span>Share :</span> {!! $shareComponent!!}
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="akea-bottom-page-builder-container akea-container">
        <div class="akea-bottom-page-builder-sidebar-wrap akea-sidebar-style-none">
            <div class=akea-bottom-page-builder-sidebar-class>
                <div class="akea-bottom-page-builder-content akea-item-pdlr">
                    <div class="akea-single-magazine-author-tags clearfix">
                        @foreach ($tags as $tag)
                        <a href=# rel=tag>{{ $tag }}</a>
                        @endforeach
                    </div>
                    <div class="akea-single-related-post-wrap akea-item-rvpdlr">
                        <h3 class="akea-single-related-post-title akea-item-mglr">Related Posts</h3>
                        <div class="gdlr-core-blog-item-holder clearfix">
                            @forelse ($related_blog as $related)
                            <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30 gdlr-core-column-first">
                                <div class="gdlr-core-blog-grid ">
                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href={{ route('front.blog.detail', $related->slug) }}><img src={{ $related->thumbnail ? asset('assets/images/'.$related->thumbnail) : asset('assets/images/placeholder.png') }} alt width=900 height=537 title=pexels-photo-736166></a>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-blog-grid-content-wrap>
                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_afec_0"><a href={{ route('front.blog.detail', $related->slug) }} >{{ $related->title }}</a></h3>
                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><a href=# title="Posts by Admin" rel=author>Admin</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href={{ route('front.blog.detail', $related->slug) }}>{{ $related->created_at->format('M d, Y') }}</a></span></div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <p>No Related Product Yet!</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection