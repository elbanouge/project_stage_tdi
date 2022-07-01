<div class="card-deck card-decks">
  @php
  $i = 1;
  @endphp
  @foreach ($posts as $post)
  <div class="card list-card post">
    <div class="card-image">
      <a href="{!! route('post', ['slug' => $post->slug]) !!}">
        <img src="{{getThumbnail($post->images, 'posts', 'md')}}" class="card-img" title="{{ $post->title}}" alt="{{ $post->title}}">
      </a>
    </div>
    <div class="card-body">
      
      <a href="{!! route('post', ['slug' => $post->slug]) !!}">
        <h5 class="card-title">{{ $post->title}}</h5>
      </a>

    </div>

    <div class="card-footer">
      <div class="card-date">
        {{ formatDateB($post->created_at)}}
      </div>
    </div>

  </div>
  @php
  if ($i % 4 == 0) {
  echo '</div>
<div class="card-deck">';
  }
  $i++;
  @endphp
  @endforeach
</div>
