<div class="sidebar-area">
  @isset($top)
  {{ $top }}
  @endisset

  <aside class="card widget watiqa">
    <div class="card-body text-center pb-2">
      <div class="view-watiqa">
        <h3>watiqa.ma</h3>
        <p>{{ trans('front.watiqa-text')}}</p>
        <a class="btn btn-warning" href="https://www.watiqa.ma/" target="_blank">{{ trans('front.acceder-site')}}</a>
      </div>
    </div>
  </aside>

  <aside class="card widget facebook">
    <div class="card-body text-center pt-1">
      <div class="home-aside facebookpage">
        <div id="fb-root">&nbsp;</div>
        
        <div class="fb-page" data-href="https://www.facebook.com/pages/Municipalite-de-Tiznit/102710613255607"
          data-height="800" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">&nbsp;</div>
      </div>
    </div>
  </aside>

  @isset($slot)
  {{ $slot }}
  @endisset



  @isset($bottom)
  {{ $bottom }}
  @endisset

</div>