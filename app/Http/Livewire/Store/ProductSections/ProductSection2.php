<?php

namespace App\Http\Livewire\Store\ProductSections;

use Livewire\Component;

class ProductSection2 extends Component
{
    public $title;
    public $description;
    public $products;
    public $isnew;
    public function mount($title, $description, $products, $isnew)
    {
        $this->title = $title;
        $this->description = $description;
        $this->products = $products;
        $this->isnew = $isnew;
    }
    public function render()
    {
        return view('livewire.store.product-sections.product-section2');
    }
}
