@extends('layouts.app')
@section('meta')
<title>{{ $post->title }} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{ $post->keywords }}">
<meta name="description" content="{{ $post->summary }}">
@endsection
@section('page-top')
<div class="content-header">
    <div class="container">
        <h1 class="card-title">
            {{$post->title}}
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{trans('front.home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('posts') }}">{{trans('front.posts')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
            </ol>
        </nav>
    </div>
</div>
@endsection
@section('content')
<div class="container posts-show">
    <main class="main-content">
        <div class="card card-single">
            <div class="card-header">
                <div class="card-date">
                    {{ formatDateB($post->created_at)}}
                </div>

            </div>
            <div class="card-image">
                <img src="{{getThumbnail($post->images, 'posts', 'lg')}}" class="card-img" title="{{ $post->title}}"
                    alt="{{ $post->title}}">
            </div>
            <div class="card-meta">
                <div class="card-size">
                    <ul class="list-inline font-size mr-auto">
                        <li class="list-inline-item font-increase" id="font_increase_size">A</li>
                        <li class="list-inline-item font-reset" id="font_reset_size">A</li>
                        <li class="list-inline-item font-decrease" id="font_decrease_size">A</li>
                    </ul>
                </div>
                <div class="card-share">
                    <share-network network="facebook" 
                        url="{{route('post', $post->slug)}}"
                        title="{{$post->title}}"
                        description="{{$post->summary}}"
                        hashtags="{{$post->keywords}}">
                        <i class="fab fa-facebook"></i>
                    </share-network>

                    <share-network network="twitter" 
                        url="{{route('post', $post->slug)}}"
                        title="{{$post->title}}"
                        hashtags="{{$post->keywords}}">
                        <i class="fab fa-twitter"></i>
                    </share-network>

                    <share-network network="whatsapp" 
                        url="{{route('post', $post->slug)}}"
                        title="{{$post->title}}"
                        description="{{$post->summary}}"
                        >
                        <i class="fab fa-whatsapp"></i>
                    </share-network>
                </div>
            </div>
            <div class="card-body">
                {!! $post->body !!}
            </div>
            @if (Auth::check() and Auth::user()->hasRole(['admin', 'super-admin']))
            <div class="card-edit">
                <a target="_blank" href="{!! route('admin::post.edit', ['id' => $post->id]) !!}">
                    <div class="btn btn-info">تعديل</div>
                </a>

            </div>
            @endif
        </div>
        <div class="recommendations_listing">
            <div class="recommendations-title">
                <h3>{{trans('front.recommendations')}}</h3>
            </div>
            <div id="items_listing" class="items_listing list">
                @include('post.loop', ['posts' => $promotes])
            </div>
        </div>
    </main>
</div>
@endsection
@section('script')
<script src="{{ mix('js/app.js') }}" defer></script>

<script>
    $( document ).ready(function() {
$('#font_increase_size').click(function(){
        $('.main-content .card-body').children().each(function () {
            var size = parseInt($(this).css("font-size"))  + 2;
    		$(this).css("font-size", size);
        });
    });

    $('#font_reset_size').click(function(){
        $('.main-content .card-body p').css("font-size", 16);
        $('.main-content .card-body li').css("font-size", 16);
        $('.main-content .card-body pre').css("font-size", 16);
        $('.main-content .card-body figcaption').css("font-size", 14);
        $('.main-content .card-body h1').css("font-size", 34);
        $('.main-content .card-body h2').css("font-size", 30);
        $('.main-content .card-body h3').css("font-size", 26);
        $('.main-content .card-body h4').css("font-size", 22);
        $('.main-content .card-body h5').css("font-size", 18);
        $('.main-content .card-body h6').css("font-size", 15);
    });

    $('#font_decrease_size').click(function(){
        $('.main-content .card-body').children().each(function () {
            var size = parseInt($(this).css("font-size")) - 2;
    		$(this).css("font-size", size);
        });
    });
});
 </script>
 @endsection