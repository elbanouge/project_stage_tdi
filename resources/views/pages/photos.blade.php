@extends('layouts.app')
@section('meta')
<title>{{$page->title}} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{$page->keywords}}">
<meta name="description" content="{{$page->description}}">
@endsection
@section('content')
<div class="page images-page">
  <div class="container ">

    <main class="main-content">
      <div class="row">
        <div class="col-12">
          <div class="images-page-title">
            <h1>{{$page->title}}</h1>
          </div>
          <div class="images-page-text">
            {!!$page->content!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card-columns" id="category_posts_list">
            @foreach ($photos as $photo)
            <div class="card image-pictures" @click="showImage('{{$photo->getImage('lg')}}')">
              <img class="card-img-top" src="{{$photo->getImage('md')}}" alt="{{$photo->title}}" />
              <div class="card-body">
                <h2 class="card-title">{{$photo->title}}</h2>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <sweet-modal  ref="showImage"><img class="card-img-top" :src="modal.image" alt="" /></sweet-modal>
    </main>
  </div>
</div>
@endsection