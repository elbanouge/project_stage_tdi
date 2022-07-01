@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <aside class="home-right py-3">
                <div class="hr-buttons">
                    <a href="{!! route('page.show', ['name' => 'كلمة-الرئيس']) !!}" role="button"
                        class="btn btn-outline-primary btn-lg btn-block">{{ trans('front.president-speech') }}</a>
                    <a href="{!! route('page.show', ['name' => 'أنشطة-المجلس']) !!}" role="button"
                        class="btn btn-outline-primary btn-lg btn-block">{{ trans('front.council-activities') }}</a>
                    <a href="{!! route('publication.show', ['slug' => 'برنامج-عمل-جماعة-تيزنيت-1']) !!}" role="button"
                        class="btn btn-outline-primary btn-lg btn-block">{{ trans('front.community-program') }}</a>
                    <a href="{!! route('page.show', ['name' => 'الخدمات-الإلكترونية']) !!}" role="button"
                        class="btn btn-outline-primary btn-lg btn-block">{{ trans('front.e-services') }}</a>
                    <a href="https://www.chikaya.ma/" target="_blank" role="button"
                        class="btn btn-outline-primary btn-lg btn-block">{{ trans('front.complaints') }}</a>
                    <a href="{!! route('page.show', ['name' => 'اقتراحات']) !!}" role="button"
                        class="btn btn-outline-primary btn-lg btn-block">{{ trans('front.suggestions') }}</a>
                </div>
            </aside>
            <div class="home-center">
                <main class="home-main">
                    <section class="home-slider">
                        <div id="carouselHomeSlider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($slids as $key => $slid)
                                <div class="carousel-item @if ($key == 0) active @endif">
                                    <img src="{{$slid->getThumb()}}" class="d-block w-100" title="{{ $slid->title}}"
                                        alt="{{ $slid->title}}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $slid->title}}</h5>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselHomeSlider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselHomeSlider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>
                </main>
            </div>
            <aside class="home-left">
                <div class="home-aside projets">
                    <div class="ha-title">
                        <h2>{{ trans('front.projets')}}</h2>
                    </div>
                    <div class="hs-content">
                        @foreach ($projets as $projet)
                        <div class="card list-card article">
                            <div class="card-image">
                                <a href="{!! route('projet.show', ['slug' => $projet->slug]) !!}">
                                    <img src="{{getThumbnail($projet->images, 'projet_thumb', 'md')}}" class="card-img"
                                        title="{{ $projet->title}}" alt="{{ $projet->title}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{!! route('projet.show', ['slug' => $projet->slug]) !!}">
                                    <h5 class="card-title">{{ $projet->title}}</h5>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="card-date">
                                    {{ formatDateB($projet->created_at)}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="hs-more">
                        <a href="{{ route('projet.index')}}" role="button"
                            class="btn btn-outline-info">{{ trans('front.more')}}</a>
                    </div>
                </div>
                <div class="home-aside evenements">
                    <div class="ha-title">
                        <h2>{{ trans('front.evenements')}}</h2>
                    </div>
                    <div class="hs-content">
                        @foreach ($evenements as $evenement)
                        <div class="card list-card article">
                            <div class="card-image">
                                <a href="{!! route('evenement.show', ['slug' => $evenement->slug]) !!}">
                                    <img src="{{getThumbnail($evenement->thumb, 'evenement_thumb', 'md')}}"
                                        class="card-img" title="{{ $evenement->title}}" alt="{{ $evenement->title}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{!! route('evenement.show', ['slug' => $evenement->slug]) !!}">
                                    <h5 class="card-title">{{ $evenement->title}}</h5>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="card-date">
                                    {{ formatDateB($evenement->created_at)}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="hs-more">
                        <a href="{{ route('evenement.index')}}" role="button"
                            class="btn btn-outline-info">{{ trans('front.more')}}</a>
                    </div>
                </div>
                <poll title="{{ trans("front.poll") }}"></poll>
            </aside>
            <div class="home-center">
                <main class="home-main">
                    <section class="home-publications">
                        <div class="hs-title">
                            <h2>{{ trans('front.publications')}}</h2>
                        </div>
                        <div class="hs-content">
                            @include('publication.loop', ['publications' => $publications, 'per_deck' => 2])
                        </div>
                        <div class="hs-more">
                            <a href="{{ route('publication.index')}}" role="button"
                                class="btn btn-outline-info">{{ trans('front.more')}}</a>
                        </div>
                    </section>
                    <section class="home-articles">
                        <div class="hs-title">
                            <h2>{{ trans('front.articles')}}</h2>
                        </div>
                        <div class="hs-content">
                            @include('article.loop', ['articles' => $articles, 'per_deck' => 2])
                        </div>
                        <div class="hs-more">
                            <a href="{{ route('article.index')}}" role="button"
                                class="btn btn-outline-info">{{ trans('front.more')}}</a>
                        </div>
                    </section>
                    <section class="home-associactions">
                        <div class="hs-title">
                            <h2>{{ trans('front.associactions')}}</h2>
                        </div>
                        <div class="hs-content">
                            @include('associaction.loop', ['associactions' => $associactions, 'per_deck' => 2])
                        </div>
                        <div class="hs-more">
                            <a href="{{ route('associaction.index')}}" role="button"
                                class="btn btn-outline-info">{{ trans('front.more')}}</a>
                        </div>
                    </section>
                </main>
            </div>
            <aside class="home-left">
                <div class="home-aside albums">
                    <div class="ha-title">
                        <h2>{{ trans('front.albums')}}</h2>
                    </div>
                    @foreach ($albums as $album)
                    <div class="card list-card article">
                        <div class="card-image">
                            <a href="{!! route('album.show', ['slug' => $album->slug]) !!}">
                                <img src="{{getThumbnail($album->images, 'album_image', 'md')}}" class="card-img"
                                    title="{{ $album->title}}" alt="{{ $album->title}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="{!! route('album.show', ['slug' => $album->slug]) !!}">
                                <h5 class="card-title">{{ $album->title}}</h5>
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="card-date">
                                {{ formatDateB($album->created_at)}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="hs-more">
                        <a href="{{ route('album.index')}}" role="button"
                            class="btn btn-outline-info">{{ trans('front.more')}}</a>
                    </div>
                </div>
                <div class="home-aside videos">
                    <div class="ha-title">
                        <h2>{{ trans('front.videos')}}</h2>
                    </div>
                    @foreach ($videos as $video)
                    <div class="card list-card article">
                        <div class="card-image">
                            <a href="{!! route('video.show', ['slug' => $video->slug]) !!}">
                                <img src="{{getThumbnail($video->thumb, 'video_thumb', 'md')}}" class="card-img"
                                    title="{{ $video->title}}" alt="{{ $video->title}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="{!! route('video.show', ['slug' => $video->slug]) !!}">
                                <h5 class="card-title">{{ $video->title}}</h5>
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="card-date">
                                {{ formatDateB($video->created_at)}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="hs-more">
                        <a href="{{ route('video.index')}}" role="button"
                            class="btn btn-outline-info">{{ trans('front.more')}}</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function (){
        let options = {
						autostart: true,
						property: 'value',
						onComplete: null,
						duration: 200000,
						padding: 10,
						marquee_class: '.marquee',
						container_class: '.marquee-container',
						sibling_class: 0,
						hover: true,
						velocity: .05,
						direction: 'right'
                    }
                    
        $('.marquee-container').SimpleMarquee(options);


});
</script>

@endsection