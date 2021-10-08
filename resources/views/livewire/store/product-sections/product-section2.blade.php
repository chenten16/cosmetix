<section class="sale__area pb-55">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__title-wrapper text-center mb-55">
                    <div class="section__title mb-10">
                        <h2>{{$title}}</h2>
                    </div>
                    <div class="section__sub-title">
                        <p>{{$description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="grid__slider owl-carousel">

                    @for ($i = 0; $i < count($products); $i++) <div class="product__item">
                        <div class="product__wrapper mb-60">
                            <livewire:store.product-view.product-view :isnew="$isnew" :product="$products[$i]">
                        </div>
                        @if(count($products)-1!=$i)
                        <div class="product__wrapper mb-60">
                            <livewire:store.product-view.product-view :isnew="$isnew" :product="$products[$i+1]">
                        </div>
                        @endif
                </div>
                @endfor

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="product__load-btn text-center mt-25">
                <a href="/shop" class="os-btn os-btn-3">Load More</a>
            </div>
        </div>
    </div>
    </div>
</section>