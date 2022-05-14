@extends('layouts.frontend_app')
@section('title')
    About | Miguel Bevacqua
@endsection
@section('about')
    active
@endsection

@section('frontend_content')
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=gdlr-core-page-builder-body>
        <div class="gdlr-core-pbf-wrapper " id="div_aff0_0">
            <div class=gdlr-core-pbf-background-wrap>
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_aff0_1" data-parallax-speed=0  style="
                background-image: url({{ $setting->about_banner_bg ? asset('assets/images/'.$setting->about_banner_bg) : asset('assets/images/placeholder.png') }});
                background-size: cover;
                background-position: center;"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_0">{{ $setting->about_banner_heading }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_aff0_0">{{ $setting->about_banner_title }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_aff0_2">
            <div class=gdlr-core-pbf-background-wrap id="div_aff0_3"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_4">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_aff0_5" data-sync-height=half-height>
                            <div class=gdlr-core-pbf-background-wrap>
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_aff0_6" data-parallax-speed=0 style="
                                    background-image: url({{ $setting->about_thumbnail ? asset('assets/images/'.$setting->about_thumbnail) : asset('assets/images/placeholder.png') }});
                                    background-size: cover;
                                    background-position: center;
                                "   ></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id=gdlr-core-column-2>
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_aff0_7" data-sync-height=half-height>
                            <div class=gdlr-core-pbf-background-wrap id="div_aff0_8"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                {!! $setting->about_detail !!}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_aff0_11">
            <div class=gdlr-core-pbf-background-wrap id="div_aff0_12"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_13">
                    @foreach ($specialities as $speciality)
                        <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="About Column">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_aff0_18">
                                            <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_aff0_19"><img src="{{ $speciality->photo ? asset('assets/images/'.$speciality->photo) : asset('assets/images/placeholder.png') }}" alt width=48 height=50 title=about-icon-3></div>
                                            <div class=gdlr-core-column-service-content-wrapper>
                                                <div class=gdlr-core-column-service-title-wrap>
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_aff0_4">{{ $speciality->heading }}</h3></div>
                                                <div class=gdlr-core-column-service-content id="div_aff0_20">
                                                    <p>{{ $speciality->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_aff0_21" data-skin="White Text">
            <div class=gdlr-core-pbf-background-wrap id="div_aff0_22">
                <div class=gdlr-core-pbf-background id="div_aff0_23" style="
                opacity: 0.20;
                background-image: url({{ $setting->count_bg ? asset('assets/images/'.$setting->count_bg) : asset('assets/images/placeholder.png') }});
                background-size: cover;
                background-position: center;
                background-attachment: fixed;"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_24">
                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_25">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_26"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=4000 data-counter-start=0 data-counter-end={{ $setting->photo_taken_count }}>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_27">{{ $setting->photo_taken_text }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_28">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_29"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=4000 data-counter-start=0 data-counter-end={{ $setting->artical_post_count }}>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_30">{{ $setting->artical_post_text }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_31">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_32"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=4000 data-counter-start=0 data-counter-end={{ $setting->active_reader_count }}>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_33">{{ $setting->active_reader_text }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_34">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_35"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=14000 data-counter-start=0 data-counter-end={{ $setting->follower_count }}>0</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_36">{{ $setting->follower_text }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_aff0_37">
            <div class=gdlr-core-pbf-background-wrap id="div_aff0_38"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_39">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="About Column">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_aff0_40">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_5">{{ $setting->story_heading }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class=gdlr-core-divider-container id="div_aff0_41">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_aff0_42"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-40" data-skin="About Column">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_aff0_43">
                                        <div class=gdlr-core-text-box-item-content id="div_aff0_44">
                                            <p>{!! $setting->story_detail !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " id="div_aff0_46">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_aff0_47">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " id="div_aff0_48">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_6">{{ $setting->author_heading }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                        <div class=gdlr-core-text-box-item-content id="div_aff0_49">
                                            <p>{{ $setting->author_detail }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-author-item gdlr-core-item-pdb gdlr-core-item-mgb clearfix" id="div_aff0_50">
                            @foreach ($teams as $team)
                            <div class="gdlr-core-author-list-column gdlr-core-item-pdlr  gdlr-core-column-15">
                                <div class=gdlr-core-author-list>
                                    <div class="gdlr-core-author-list-thumbnail gdlr-core-media-image"><img src="{{ $team->photo ? asset('assets/images/'.$team->photo) : asset('assets/images/placeholder.png') }}" alt width=700 height=781 title=author-2></div>
                                    <div class=gdlr-core-author-list-content-wrap>
                                        <h3 class="gdlr-core-author-list-title">{{ $team->name }}</h3>
                                        <div class=gdlr-core-author-list-position>{{ $team->designation }}</div>
                                        <div class=gdlr-core-author-list-social>
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_aff0_52">
                                                @if ($team->fb_link != null)
                                                <a href="{{ $team->fb_link }}" target=_blank class=gdlr-core-social-network-icon title=facebook id="a_aff0_5"><i class="fa fa-facebook" ></i></a>
                                                @endif
                                                @if ($team->print_link != null)
                                                <a href="{{ $team->print_link }}" target=_blank class=gdlr-core-social-network-icon title=pinterest id="a_aff0_6"><i class="fa fa-pinterest-p" ></i></a>
                                                @endif
                                                @if ($team->twit_link != null)
                                                <a href="{{ $team->twit_link }}" target=_blank class=gdlr-core-social-network-icon title=twitter id="a_aff0_7"><i class="fa fa-twitter" ></i></a>
                                                @endif
                                                @if ($team->insta_link != null)
                                                <a href="{{ $team->insta_link }}" target=_blank class=gdlr-core-social-network-icon title=instagram id="a_aff0_8"><i class="fa fa-instagram" ></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper ">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_55">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_aff0_56">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_7">{{ $setting->featured_heading }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                            <div class=gdlr-core-divider-container id="div_aff0_57">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_aff0_58"></div>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                @foreach ($partners as $partner)
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="{{ $partner->photo ? asset('assets/images/'.$partner->photo) : asset('assets/images/placeholder.png') }}" alt width=290 height=136 title=banner-2></div>
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