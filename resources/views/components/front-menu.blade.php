@foreach($menus as $menu)
    <li><a href="{{$menu['url']}}" @if($menu['action'] == false) class="active" @endif>
            {{$menu['name']}}
        </a></li>
@endforeach
