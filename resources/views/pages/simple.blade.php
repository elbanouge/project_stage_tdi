@extends('layouts.app')
@section('meta')
<title>{{$page->title}} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{$page->keywords}}">
<meta name="description" content="{{$page->description}}">
@endsection
@section('content')
<div class="page simple-page">
    <div class="container">
        <div class="row">
          <div class="col-lg-9 col-12">
                <main class="main-content">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="page-title">{{$page->title}}</h1>
                            <div class="page-text">
                                {!!$page->content!!}
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-lg-3 order-first order-lg-last">
                @include('sidemenu', ['is_top' => false])
            </div>
        </div>
    </div>
</div>
@endsection
