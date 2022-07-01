<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Universiam | Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script>
    window.App = {!! json_encode([
              'csrfToken' => csrf_token(),
              'name' => settings('app_name'),
              'urlBase' => getUrlBase(),
              'appUrl' => config('app.url'),
              'user' => Auth::user()
      ]) !!};
  </script>
</head>

<body class="skin-blue sidebar-toggled rtl">
  <div class="page-wrapper chiller-theme" id="app">
    <!-- main-header -->
    <header class="main-header">
      <!-- Header Navbar -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{route('index')}}">
          <span class="logo-mini">{{ config('app.short_name') }}</span>
          <span class="logo-lg">{{ config('app.name') }}</span>
        </a>
        <a id="toggled-sidebar" class="btn btn-sm btn-navbar" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav navbar-right mr-auto">
            <div class="btn-group">
              <a href="{{ route('logout') }}"  class="btn btn-navbar" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                <logout-icon fill_color="#9098a6" />
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="{{$user->profile_photo_url}}" alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name">{{$user->name}}</span>
          </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>{{ trans('admin.main')}}</span>
            </li>
            <li>
              <router-link :to="prefix">
                <i>
                  <home-icon fill_color="#4B69B0"></home-icon>
                </i>
                {{ trans('admin.index')}}
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'posts'">
                <i>
                  <category-icon fill_color="#4B69B0"></category-icon>
                </i>
                <span>{{ trans('front.posts')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'categories'">
                <i>
                  <category-icon fill_color="#4B69B0"></category-icon>
                </i>
                <span>{{ trans('front.categories')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'posts'">
                <i>
                  <post-icon fill_color="#4B69B0"></post-icon>
                </i>
                <span>{{ trans('front.posts')}}</span>
                <span class="badge badge-pill badge-info">56</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'comments'">
                <i>
                  <comment-icon fill_color="#4B69B0"></comment-icon>
                </i>
                <span>{{ trans('front.comments')}}</span>
                <span class="badge badge-pill badge-info">79</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'medias'">
                <i>
                  <media-icon fill_color="#4B69B0"></media-icon>
                </i>
                <span>{{ trans('front.medias')}}</span>
                <span class="badge badge-pill badge-info"></span>
              </router-link>
            </li>

            <li class="header-menu">
              <span>{{ trans('admin.extra')}}</span>
            </li>
            <li>
              <router-link :to="prefix + 'polls'">
                <i>
                  <poll-icon fill_color="#4B69B0"></poll-icon>
                </i>
                <span>{{ trans('front.polls')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'pages'">
                <i>
                  <page-icon fill_color="#4B69B0"></page-icon>
                </i>
                <span>{{ trans('admin.pages')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'menus'">
                <i>
                  <menu-icon fill_color="#4B69B0"></menu-icon>
                </i>
                <span>{{ trans('admin.menus')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'pubs'" exact>
                <i>
                  <pubs-icon fill_color="#4B69B0"></pubs-icon>
                </i>
                <span>{{ trans('admin.pubs')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'users'">
                <i>
                  <people-icon fill_color="#4B69B0"></people-icon>
                </i>
                <span>{{ trans('admin.users')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'settings'">
                <i>
                  <setting-icon fill_color="#4B69B0"></setting-icon>
                </i>
                <span>{{ trans('admin.settings')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'messages'">
                <i>
                  <message-icon fill_color="#4B69B0"></message-icon>
                </i>
                <span>{{ trans('admin.messages')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'translations'" exact>
                <i>
                  <translation-icon fill_color="#4B69B0"></translation-icon>
                </i>
                <span>{{ trans('admin.translations')}}</span>
              </router-link>
            </li>
            <li>
              <router-link :to="prefix + 'api'" exact>
                <i>
                  <api-icon fill_color="#4B69B0"></api-icon>
                </i>
                <span>{{ trans('admin.api')}}</span>
              </router-link>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <router-view></router-view>
      </div>
    </main>
    <notifications></notifications>
    <confirmation></confirmation>
    <!-- page-content" -->
  </div>


  <!-- REQUIRED JS SCRIPTS -->

  <!-- AdminLTE App -->
  <script src="{{ asset('/js/trans/admin_ar.js') }}"></script>
  <script src="{{ asset('/js/admin.js') }}"></script>
  <script src="{{ asset('plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

</body>

</html>