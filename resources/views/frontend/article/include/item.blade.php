<div class="news__item">
    <h3><a href="{{route('article.show',$item->slug)}}"><span>{{$item->head}}</span></a></h3>
    <div class="news__body d-md-flex justify-content-between">
        <div class="news__pic">
            <a href="{{route('article.show',$item->slug)}}"><img src="{{$item->preview}}" alt="{{$item->head}}"></a>
        </div>
        <p class="news__text">
            {{$item->excerpt}}
        </p>
    </div>
    <div class="news__more">
        <a href="{{route('article.show',$item->slug)}}">Подробнее</a>
    </div>
</div>
