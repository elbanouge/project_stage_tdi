@extends('layouts.app')
@section('meta')
  <title>{{trans('front.sitemap')}} - {{ settings('app_name', 'News') }}</title>
  <meta name="keywords" content="{{ settings('main_keywords', 'News') }}">
  <meta name="description" content="{{ settings('main_description', 'News') }}">
@endsection
@section('content')
<div class="page sitemap-page">
    <div class="container">
        <div class="row">
          <div class="col-12">
                <main class="main-content">
                    <div class="card">
                        <div class="card-body">
                            <h2><a class="nav-link" href="{{ route('index') }}">{{ trans('front.home') }}</a></h2>
                            <h2><a class="nav-link" href="{{ route('files') }}">{{ trans('front.files') }}</a></h2>
                            <h2><a class="nav-link" href="{{ route('appointments') }}">{{ trans('front.appointments') }}</a></h2>
                            <h2><a class="nav-link" href="{{ route('bmi') }}">{{ trans('front.bmi') }}</a></h2>
                            <h2><a class="nav-link" href="{{ route('photos') }}">{{ trans('front.images') }}</a></h2>
                            <h2><a class="nav-link" href="{{ route('contact') }}">{{ trans('front.contact-us') }}</a></h2>
                            <h2><a class="nav-link" href="{{ route('posts') }}">{{ trans('front.posts') }}</a></h2>
                            @foreach ($posts as $post)
                              <h3 class="card-title"><a href="{!! route('post', ['slug' => $post->slug]) !!}">{{ $post->title}}</a></h3>
                            @endforeach
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
