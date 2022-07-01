@extends('layouts.app')
@section('meta')
<title>{{$seo['title']}} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{ $seo['keywords'] }}">
<meta name="description" content="{{ $seo['description'] }}">
@endsection
@section('page-top')
<div class="content-header">
  <div class="container">
    <h1>{{trans('front.posts-index-title')}}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{trans('front.home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('front.posts')}}</li>
      </ol>
    </nav>
  </div>
</div>
@endsection
@section('content')
<div class="container posts-index">
  <main class="main-content">
    <div class="items-index">
      <div class="categories-list">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="{{route('posts')}}">الكل</a>
          </li>
          @foreach ($categories as $category)
          <li class="list-inline-item">
            <a href="{{route('cat', ['slug' => $category->slug]) }}">{{$category->name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div id="items_listing" class="items_listing list">
        @include('post.loop')
      </div>
      {{ $posts->links() }}
    </div>
  </main>
</div>
@endsection