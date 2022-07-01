<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $metas['seo_title']}}</title>
  <meta name="description" content="{{ $metas['seo_description']}}" />
  <meta property="og:title" content="{{ $metas['seo_title']}}" />
  <meta property="og:type" content="" />
  <meta property="og:image" content="{{ $metas['image']}}" />
  <meta property="og:description" content="{{ $metas['seo_description']}}" />
  <meta property="og:locale" content="ar_AR" />
  <meta property="og:title" content="{{ $metas['seo_title']}}" />
  <meta property="og:url" content="{{ $metas['url']}}" />
  <meta property="og:site_name" content="{{ $metas['name']}}" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="{{ $metas['name']}}">
  <meta name="twitter:title" content="{{ $metas['seo_title']}}">
  <meta name="twitter:description" content="{{ $metas['seo_description']}}">
  <meta name="twitter:image" content="{{ $metas['image']}}">

  <!-- Scripts -->
  <script defer src="{{ mix('js/app-client.js') }}"></script>

  <!-- Fonts -->
  <link href="{{ asset('plugins/icomoon/styles.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/material/styles.css') }}" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" charset="utf-8">

  <script>   
    @foreach($data as $key => $val)
    window.{{$key}} = @json($val);
    @endforeach          
  </script>

</head>

<body class="rtl">
  {!! $ssr !!}
  @yield('content') 
</body>

</html>