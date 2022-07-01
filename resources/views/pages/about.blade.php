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
          <div class="card">
            <div class="card-body">
              <h1 class="page-title">{{$page->title}}</h1>
              <div class="page-text">
                {!!$page->content!!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection