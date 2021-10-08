<?php

namespace App\Http\Livewire\Admin\Datatables;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;

    public function reloadProducts(){
        $this->products = Product::all();
    }
    public function render()
    {
        $this->reloadProducts();
        return view('livewire.admin.datatables.products', ['products' => $this->products]);
    }
}
