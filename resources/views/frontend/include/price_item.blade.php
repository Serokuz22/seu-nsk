<div class="price-list__item justify-content-between">
    <div class="price-list__text">
        <h3><a href="#">{{$item->name}}</a></h3>
        <p>{{$item->excerpt}}</p>
    </div>
    <div class="price-list__check">
        <span>{{$item->price}}</span>
        <div class="checkbox">
            <input type="checkbox" name="check" id="check1">
            <label for="check1"></label>
        </div>
    </div>
</div>
