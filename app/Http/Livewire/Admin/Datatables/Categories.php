<?php

namespace App\Http\Livewire\Admin\Datatables;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories;

    public function reloadCategories(){
        $this->categories = Category::all();
    }
    public function render()
    {
        $this->reloadCategories();
        return view('livewire.admin.datatables.categories', ['categories' => $this->categories]);
    }
}
