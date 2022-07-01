@extends('layouts.app')
@section('meta')
<title>{{ trans('front.soties') }} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{ settings('main_keywords', 'News') }}">
<meta name="description" content="{{ settings('main_description', 'News') }}">
@endsection
@section('content')
<section class="home-actions">
  <div class="background"></div>
  <div class="container">
    <h2 class="actions-title">{{trans('front.actions-title')}}</h2>
    <h3 class="actions-subtitle">{{trans('front.actions-subtitle')}}</h3>
    <a href="{{ route('action.create')}}" class="btn btn-link">{{trans('front.add-actions')}}</a>
  </div>
</section>
<div class="page actions-page">
  <div class="container ">
    <main class="main-content">
      <div class="row">
        <div class="col-12">
          @foreach ($actions as $action)
          <div class="card">
            <div class="card-body">
              <h1 class="page-title">{{$action->name}}</h1>
              <div class="page-text">
                {!!$action->story!!}
              </div>
              <div class="row">
                <div class="col-md-6 text-center">
                  <div class="card weight-card before-card">
                    <span>{{ trans('front.weight-before')}}</span>
                    <span class="nbr">{{ $action->weight_before }}<span> كج</span></span>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="card weight-card after-card">
                    <span>{{ trans('front.weight-after')}}</span>
                    <span class="nbr">{{ $action->weight }}<span> كج</span></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 text-center">
                  @if ($action->image_before)
                  <figure class="figure">
                    <img src="{{ asset('uploads/action_image_before/lg/' . $action->image_before) }}" class="figure-img img-fluid rounded" style="width: 20rem;">
                    <figcaption class="figure-caption text-right">{{ trans('front.image-before')}}</figcaption>
                  </figure>
                  @endif
                  
                </div>
                <div class="col-md-6 text-center">
                  @if ($action->image_after)
                  <figure class="figure">
                    <img src="{{ asset('uploads/action_image_after/lg/' . $action->image_after) }}" class="figure-img img-fluid rounded"  style="width: 20rem;">
                    <figcaption class="figure-caption text-right">{{ trans('front.image-after')}}</figcaption>
                  </figure>
                  @endif
                  
                </div>
              </div>

            </div>
          </div>
          @endforeach
          {{ $actions->links() }}
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