@extends('layouts.app')
@section('meta')
<title>{{$page->title}} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{$page->keywords}}">
<meta name="description" content="{{$page->description}}">
@endsection
@section('content')
<div class="page appointment-page">
    <div class="container">
        <main class="main-content">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h1 class="page-title">{{$page->title}}</h1>
                        <div class="page-text">
                            {!!$page->content!!}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <appointment-calendar></appointment-calendar>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/trans/text_'.Lang::locale().'.js') }}" defer></script>
<script src="{{ mix('js/app.js') }}" defer></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
 @endsection