<div class="card-share">
    <div id="share">
      <share-network network="twitter" class="share-item twitter" ref="twitterShare" url="{{$url}}" title="{{$title}}"
        hashtags="{{$hashtags}}">
          <i class="fa fa-twitter"></i>
      </share-network>

      <share-network network="facebook" class="share-item facebook" ref="facebook-share" url="{{$url}}" title="{{$title}}"
        description="{{$description}}" hashtags="{{$hashtags}}">
          <i class="fa fa-facebook"></i>
      </share-network>

      <share-network network="whatsapp" class="share-item whatsapp" ref="whatsapp-share" url="{{$url}}" title="{{$title}}"
        description="{{$description}}">
          <i class="fa fa-whatsapp"></i>
      </share-network>
    </div>
</div>