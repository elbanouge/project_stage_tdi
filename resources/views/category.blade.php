@extends("layouts.app")
@section("meta")
<title>{{trans("front.search-posts-title")}} - {{ settings("app_name", "News") }}</title>
<meta name="keywords" content="{{ settings("main_keywords", "News") }}">
<meta name="description" content="{{ settings("main_description", "News") }}">
@endsection
@section("page-top")
<div class="content-header">
  <div class="container">
    <h1>{{ $category->name }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url("/") }}">{{trans("front.home")}}</a></li>
      </ol>
    </nav>
  </div>
</div>
@endsection
@section("content")
<div class="container search-page">
      <main class="main-content">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @if (!$articles->isEmpty())
            <li class="nav-item">
                <a class="nav-link @if ($active_tab == "articles") active @endif" id="pills-article-tab" data-toggle="pill" href="#pills-article" role="tab" aria-controls="pills-article" aria-selected="true">{{ trans("front.articles") }}</a>
              </li>
            @endif
            @if (!$publications->isEmpty())
            <li class="nav-item">
                <a class="nav-link @if ($active_tab == "publications") active @endif" id="pills-publication-tab" data-toggle="pill" href="#pills-publication" role="tab" aria-controls="pills-publication" aria-selected="false">{{ trans("front.publications") }}</a>
              </li>
            @endif
            @if (!$projets->isEmpty())
            <li class="nav-item">
                <a class="nav-link @if ($active_tab == "projets") active @endif" id="pills-projet-tab" data-toggle="pill" href="#pills-projet" role="tab" aria-controls="pills-projet" aria-selected="false">{{ trans("front.projets") }}</a>
              </li>
            @endif
           
            @if (!$videos->isEmpty())
            <li class="nav-item">
                <a class="nav-link @if ($active_tab == "videos") active @endif" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">{{ trans("front.videos") }}</a>
              </li>
            @endif
          
          
          
          
          
         
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade  @if ($active_tab == "articles") active show @endif" id="pills-article" role="tabpanel" aria-labelledby="pills-article-tab">
            <div class="items-index">
              <div id="items_listing" class="items_listing list">
                @include("article.loop", ["articles" => $articles, "per_deck" => 3])
              </div>
              {{ $articles->links() }}
            </div>
          </div>
          <div class="tab-pane fade @if ($active_tab == "publications") active show @endif" id="pills-publication" role="tabpanel" aria-labelledby="pills-publication-tab">
            <div class="items-index">
              <div id="items_listing" class="items_listing list">
                @include("publication.loop", ["publications" => $publications, "per_deck" => 3])
              </div>
              {{ $publications->appends(request()->query())->links() }}
            </div>
          </div>
          <div class="tab-pane fade @if ($active_tab == "projets") active show @endif" id="pills-projet" role="tabpanel" aria-labelledby="pills-projet-tab">
            <div class="items-index">
              <div id="items_listing" class="items_listing list">
                @include("projet.loop", ["projets" => $projets, "per_deck" => 3])
              </div>
              {{ $projets->links() }}
            </div>
          </div>
          <div class="tab-pane fade @if ($active_tab == "videos") active show @endif" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
            <div class="items-index">
              <div id="items_listing" class="items_listing list">
                @include("video.loop", ["videos" => $videos, "per_deck" => 3])
              </div>
              {{ $videos->links() }}
            </div>
          </div>
        </div>
      </main>
</div>
@endsection
