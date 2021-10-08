<div class="sale__item">
    <div class="product__wrapper mb-60">
        <div class="product__thumb">
            <a href="/product/{{$product->id}}" class="w-img">
                <img src="{{Storage::url($product->preview_image)}}" alt="product-img">
            </a>
            <div class="product__action transition-3">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                    <i class="fal fa-heart"></i>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                    <i class="fal fa-sliders-h"></i>
                </a>
                <!-- Button trigger modal -->
                <a href="#" data-toggle="modal" data-target="#productModalId">
                    <i class="fal fa-search"></i>
                </a>
            </div>
            
            <div class="product__sale">
                @if($diff_percentage!=0)
                @if($isnew=="true")
                <span class="new">new</span>
                @endif
                <span class="percent">{{$diff_percentage}}%</span>
                @endif
            </div>
        </div>
        <div class="product__content p-relative">
            <div class="product__content-inner">
                <h4><a href="/product/{{$product->id}}" class="ellipsis-text">{{$product->name}}</a></h4>
                <div class="product__price transition-3">
                    <span>${{$product->sale_price}}</span>
                    <span class="old-price">${{$product->price}}</span>
                </div>
            </div>
            <div class="add-cart p-absolute transition-3">
                <a href="#">+ Add to Cart</a>
            </div>
        </div>
    </div>
</div>