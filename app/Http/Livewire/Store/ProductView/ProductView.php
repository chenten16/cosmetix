<?php

namespace App\Http\Livewire\Store\ProductView;

use App\Models\Product;
use Livewire\Component;

class ProductView extends Component
{
    public $product;
    public $diff_percentage;
    public $isnew;
    public function mount(Product $product,$isnew)
    {

        $this->product = $product;
        $this->isnew=$isnew;
        if ($product->price != 0 && $product->price > $product->sale_price) {
            $this->diff_percentage = round((($product->sale_price - $product->price) / $product->sale_price) * 100);
        } else
            $this->diff_percentage = 0;
    }
    public function render()
    {
        return view('livewire.store.product-view.product-view');
    }
}
