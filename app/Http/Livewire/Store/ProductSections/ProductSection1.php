<?php

namespace App\Http\Livewire\Store\ProductSections;

use App\Models\Product;
use Livewire\Component;

class ProductSection1 extends Component
{
    public $title;
    public $description;
    public $products;
    public $isnew;
    public function mount($title,$description,$products,$isnew)
    {
        $this->title=$title;
        $this->description=$description;
        $this->products=$products;
        $this->isnew=$isnew;
    }
    public function render()
    {
        return view('livewire.store.product-sections.product-section1');
    }
}
