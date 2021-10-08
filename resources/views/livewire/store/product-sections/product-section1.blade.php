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
                <div class="sale__area-slider-2 owl-carousel">
                    @foreach($products as $product)
                    <livewire:store.product-view.product-view :isnew="$isnew" :product="$product">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>