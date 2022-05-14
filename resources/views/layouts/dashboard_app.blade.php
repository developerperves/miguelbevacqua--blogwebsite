
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('dashboard_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('dashboard_asset') }}/img/favicon.png" type="image/gif" sizes="16x16"> 
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/azzara.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/tagify.css">
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_asset/back/css/editor.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/starlight.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{ route('home') }}"><i class="icon ion-android-star-outline"></i>{{ env('APP_NAME') }}</a></div>
    <div class="sl-sideleft">
      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ route('home') }}" class="sl-menu-link @yield('home')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.subscriber.list') }}" class="sl-menu-link @yield('subscriber')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-thumbs-up tx-22"></i>
            <span class="menu-item-label">Subscribers</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <label class="sidebar-label">Common Parts</label>
        <a href="{{ route('basic.settings') }}" class="sl-menu-link @yield('setting')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-cog tx-22"></i>
            <span class="menu-item-label">Besic Setting</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.social.index') }}" class="sl-menu-link @yield('social')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-share-square tx-22"></i>
            <span class="menu-item-label">Social Media</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <label class="sidebar-label">Home Page</label>
        <a href="{{ route('home.banner.index') }}" class="sl-menu-link @yield('homebanner')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-picture-o tx-22"></i>
            <span class="menu-item-label">Banner</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.instagram.index') }}" class="sl-menu-link @yield('instagram')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-instagram tx-22"></i>
            <span class="menu-item-label">Instagram</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.category.index') }}" class="sl-menu-link @yield('category')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-th-list tx-22"></i>
            <span class="menu-item-label">Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.blog.index') }}" class="sl-menu-link @yield('blog')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-pencil-square-o tx-22"></i>
            <span class="menu-item-label">Blog</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <label class="sidebar-label">About Page</label>
        <a href="{{ route('home.speciality.index') }}" class="sl-menu-link @yield('speciality')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-bar-chart tx-22"></i>
            <span class="menu-item-label">Speciality</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.team.index') }}" class="sl-menu-link @yield('team')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-users tx-22"></i>
            <span class="menu-item-label">Team</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('home.partner.index') }}" class="sl-menu-link @yield('partner')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-handshake-o tx-22"></i>
            <span class="menu-item-label">Partner</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <label class="sidebar-label">Project Page</label>
        <a href="{{ route('home.project.index') }}" class="sl-menu-link @yield('project')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-briefcase tx-22"></i>
            <span class="menu-item-label">Project</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::User()->name }}</span>
              <img src="{{ asset('uploads') }}/profile/{{ Auth::user()->profile_photo }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ Route('profile.index') }}"><i class="icon fa fa-cog"></i> Edit Profile</a></li>
                <li><a href="{{ route('register') }}"><i class="icon ion-ios-person-outline"></i>Register A person</a></li>
                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="icon ion-power"></i> Sign Out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    @yield('dashboard_content')



    
<script src="{{ asset('dashboard_asset') }}/lib/jquery/jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/popper.js/popper.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="{{ asset('dashboard_asset') }}/js/tagify.js"></script>
<script src="{{ asset('dashboard_asset') }}/js/editor.js"></script>
<script src="{{ asset('dashboard_asset') }}/js/ready.min.js"></script>
<script src="{{ asset('dashboard_asset') }}/js/starlight.js"></script>
@yield('footer_scripts')
</body>
</html>