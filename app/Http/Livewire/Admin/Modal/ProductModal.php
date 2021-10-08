<?php

namespace App\Http\Livewire\Admin\Modal;

use App\Models\Category;
use Livewire\Component;

class ProductModal extends Component
{
    protected $listeners = ['optionAdded' => 'optionAdded'];

    public $name,$description,$price;

    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.modal.product-modal',['categories'=>$categories]);
    }

}
