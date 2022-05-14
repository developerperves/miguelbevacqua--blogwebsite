
<!DOCTYPE html>
<html lang=en-US class=no-js>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">


    <title>@yield('title')</title>
<meta property="og:image" content="@yield('blog_photo')" />
<meta property="og:image:secure_url" content="@yield('blog_photo')" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:image:alt" content="A shiny red apple with a bite taken out" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel=stylesheet href='{{ asset('frontend_asset') }}/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='{{ asset('frontend_asset') }}/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='{{ asset('frontend_asset') }}/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='{{ asset('frontend_asset') }}/plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='{{ asset('frontend_asset') }}/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='{{ asset('frontend_asset') }}/css/akea-style-custom.css' type=text/css media=all>
    <link rel="stylesheet" href="{{ asset('frontend_asset/css/shareoption.css') }}">
    <link rel=stylesheet href='{{ asset('frontend_asset') }}/css/header.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800'
        type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=PT+Serif' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Open+Sans' type=text/css media=all>
    <link rel=stylesheet
        href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek'
        type=text/css media=all>


</head>

<body
    class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox"
    data-home-url="{{ route('front.index') }}">
    <div class=akea-mobile-header-wrap>
        <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation "
            id=akea-mobile-header>
            <div class="akea-mobile-header-container akea-container clearfix">
               <!-- logo -->
               <div class="akea-logo  akea-item-pdlr">
                <div class=akea-logo-inner>
                    <a class href="{{ route('front.index') }}"><img src="{{ $setting->logo ? asset('assets/images/'.$setting->logo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$setting->logo) }}"></a>
                </div>
            </div>
                <div class=akea-mobile-menu-right>
                    <div class=akea-main-menu-search id=akea-mobile-top-search><i class="fa fa-search"></i></div>
                    <div class=akea-top-search-wrap>
                        <div class=akea-top-search-close></div>
                        <div class=akea-top-search-row>
                            <div class=akea-top-search-cell>
                                <form role=search method=get class=search-form action=#>
                                    <input type=text class="search-field akea-title-font" placeholder=Search... value
                                        name=s>
                                    <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                    <input type=submit class=search-submit value=Search>
                                    <div class=akea-top-search-close><i class=icon_close></i></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a
                            class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger"
                            href=#><span></span></a>
                        <div class="akea-overlay-menu-content akea-navigation-font">
                            <div class=akea-overlay-menu-close></div>
                            <div class=akea-overlay-menu-row>
                                <div class=akea-overlay-menu-cell>
                                    <ul id=menu-main-navigation class=menu>
                                        <li class="menu-item"><a href="{{ route('front.index') }}" class=@yield('home')>Home</a></li>
                                        <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                            <ul class=sub-menu>
                                                @foreach ($categories as $category)
                                                <li class="menu-item"><a href={{ route('category.name', $category->name) }}>{{ $category->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="{{ route('front.blog') }}" class=@yield('blog')>Blog</a></li>
                                        <li class="menu-item"><a href="{{ route('front.project') }}" class=@yield('project')>Projects</a></li>
                                        <li class="menu-item"><a href="{{ route('front.about') }}" class=@yield('about')>About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="akea-body-outer-wrapper ">
        <div class="akea-body-wrapper clearfix  akea-with-frame">
            <header
                class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide"
                data-navigation-offset=75px>
                <div class=akea-header-background></div>
                <div class="akea-header-container  akea-container">
                    
                    <div class="akea-header-container-inner clearfix">
                        <div class="akea-navigation akea-item-pdlr clearfix ">
                            <div class="logohere" >
                                <a class href="{{ route('front.index') }}"><img src="{{ $setting->logo ? asset('assets/images/'.$setting->logo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$setting->logo) }}" width=140 height=33 title=logo-2></a>
                            </div>
                            <div class=akea-main-menu id=akea-main-menu>
                                <ul id=menu-main-navigation-1 class=sf-menu>
                                    <li class="menu-item menu-item-home current-menu-item akea-normal-menu"><a
                                            href="{{ route('front.index') }}" class=@yield('home')>Home</a>
                                    </li>
                                    <li class="menu-item current-menu-item menu-item-has-children akea-normal-menu"><a href=# class="sf-with-ul-pre  @yield('category')">Category</a>
                                        <ul class=sub-menu>
                                            @foreach ($categories as $category)
                                            <li class="menu-item" data-size=60><a href={{ route('category.name', $category->name) }}>{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item akea-normal-menu"><a href="{{ route('front.blog') }}" class=@yield('blog')>Blog</a></li>
                                    <li class="menu-item akea-normal-menu"><a href="{{ route('front.project') }}" class=@yield('project')>Projects</a></li>
                                    <li class="menu-item akea-normal-menu"><a href={{ route('front.about') }} class=@yield('about')>About</a></li>
                                </ul>
                             </div>
                            <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                                <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-button-no-border" href={{ route('front.about') }} id="a_aff0_0"><span class=gdlr-core-content >Read More</span></a></div>
                                    <a
                                        class="akea-overlay-menu-icon akea-right-menu-button akea-top-menu-button akea-mobile-button-hamburger"
                                        href=#><span></span></a>
                                    <div class="akea-overlay-menu-content akea-navigation-font">
                                        <div class=akea-overlay-menu-close></div>
                                        <div class=akea-overlay-menu-row>
                                            <div class=akea-overlay-menu-cell>
                                                <ul id=menu-main-navigation-2 class=menu>
                                                    <li class="menu-item menu-item-home current-menu-item"><a
                                                            href="{{ route('front.index') }}" aria-current=page>Home</a>
                                                    </li>
                                                    
                                                    <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                                        <ul class=sub-menu>
                                                            @foreach ($categories as $category)
                                                            <li class="menu-item"><a href={{ route('category.name', $category->name) }}>{{ $category->name }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item"><a href="{{ route('front.blog') }}">Blog</a></li>
                                                    <li class="menu-item"><a href="{{ route('front.project') }}">Projects</a></li>
                                                    <li class="menu-item"><a href="{{ route('front.about') }}">About</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=akea-main-menu-search id=akea-top-search><i class="fa fa-search"></i></div>
                                <div class=akea-top-search-wrap>
                                    <div class=akea-top-search-close></div>
                                    <div class=akea-top-search-row>
                                        <div class=akea-top-search-cell>
                                            <form action="{{ route('front.search') }}" method="get" role=search class=search-form>
                                                <input type=text class="search-field akea-title-font"
                                                    placeholder=Search... value name="filter[title]">
                                                <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                                <input type=submit class=search-submit value=Search>
                                                <div class=akea-top-search-close><i class=icon_close></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="akea-main-menu-left-wrap akea-main-menu-left-social clearfix akea-item-pdlr akea-navigation-top">
                                <div class="akea-logo  akea-item-pdlr">
                                    <div class=akea-logo-inner>
                                        <a class href="{{ route('front.index') }}"><img src="{{ $setting->logo ? asset('assets/images/'.$setting->logo) : asset('assets/images/placeholder.png') }}" alt="{{ asset('assets/images/'.$setting->logo) }}" alt width=140 height=33 title=logo-2></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @yield('frontend_content')

            
            <footer>
                <div class="akea-footer-wrapper ">
                    <div class="akea-footer-container akea-container clearfix">
                        <div class="akea-footer-column akea-item-pdlr akea-column-20">
                            <div id=text-2 class="widget widget_text akea-widget">
                                <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->footer_site_name }}</span><span class=akea-widget-head-divider></span></h3><span
                                    class=clear></span>
                                <div class=textwidget>
                                    <p>{{ $setting->footer_address }}
                                        <br> <span class=gdlr-core-space-shortcode id="span_2207_6"></span>
                                        <br> {{ $setting->footer_number }}
                                        <br> <span class=gdlr-core-space-shortcode id="span_2207_7"></span>
                                        <br> <a id="a_2207_30" href="mailto:{{ $setting->footer_email }}">{{ $setting->footer_email }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="akea-footer-column akea-item-pdlr akea-column-20">
                            <div id=gdlr-core-custom-menu-widget-2
                                class="widget widget_gdlr-core-custom-menu-widget akea-widget">
                                <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->footer_category_heading }}</span><span
                                        class=akea-widget-head-divider></span></h3><span class=clear></span>
                                <div class=menu-category-container>
                                    <ul id=menu-category class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                                        @foreach ($categories as $category)
                                        <li class="menu-item"><a href={{ route('category.name', $category->name) }}>{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="akea-footer-column akea-item-pdlr akea-column-20">
                            <div id=text-3 class="widget widget_text akea-widget">
                                <h3 class="akea-widget-title"><span class=akea-widget-head-text>{{ $setting->follow_us_heading }}</span><span
                                        class=akea-widget-head-divider></span></h3><span class=clear></span>

                                <div class=textwidget>
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                        id="div_2207_16">
                                        @foreach ($socials as $social)
                                        <a href={{ $social->link }} target=_blank class=gdlr-core-social-network-icon title=facebook
                                            id="a_2207_31" rel="noopener noreferrer">
                                            <i class="{{ $social->icon }}"></i>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=akea-copyright-wrapper>
                    <div class="akea-copyright-container akea-container clearfix">
                        <div class="akea-copyright-left akea-item-pdlr">{{ $setting->footer_copyright }}</div>
                        <div class="akea-copyright-right akea-item-pdlr">
                            <a href="{{ route('front.index') }}">Home</a>
                            <a href="{{ route('front.blog') }}">Blog</a>
                            <a href="{{ route('front.project') }}">Project</a>
                            <a href="{{ route('front.about') }}">About</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div><a href=#akea-top-anchor class="akea-footer-back-to-top-button  akea-with-recent-post-bar "
        id=akea-footer-back-to-top-button><i class="fa fa-angle-up"></i></a>


    <script src='{{ asset('frontend_asset') }}/js/jquery/jquery.js'></script>
    <script src='{{ asset('frontend_asset') }}/js/jquery/jquery-migrate.min.js'></script>
    <script>
        var zilla_likes = {
            "ajaxurl": ""
        };
    </script>
    <script src='{{ asset('frontend_asset') }}/plugins/zilla-likes/scripts/zilla-likes.js'></script>
    <script src='{{ asset('frontend_asset') }}/plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
    </script>
    <script src='{{ asset('frontend_asset') }}/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script src='{{ asset('frontend_asset') }}/js/jquery/ui/effect.min.js'></script>
    <script src='{{ asset('frontend_asset') }}/js/script-core.js'></script>


</body>

</html>