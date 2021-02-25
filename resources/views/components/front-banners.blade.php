<div class="slider">
    <div class="container">
        <div class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @php($act=false)
                @foreach($banners as $banner)
                    <div class="carousel-item @if($act==false) active @php($act=true) @endif">
                        <a href="{{$banner->url}}">
                            <img src="{{$banner->banner}}" class="d-block w-100" alt="pic">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
