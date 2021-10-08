<?php

namespace App\Http\Livewire\Admin\Modal;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CategoryModal extends Component
{
    public $name, $slug, $oldCategory,$deleteId;
    public $mode = 'add';
    protected $listeners = [
        'editCategory' => 'edit', 'addCategory' => 'add', 'deleteCategory' => 'delete','confirmed',
        'cancelled',
    ];
    public function render()
    {
        return view('livewire.admin.modal.category-modal');
    }
    public function add()
    {
        $this->name = "";
        $this->slug = "";
        $this->emit('toggleModal');
    }
    public function store()
    {
        $message = "";
        if ($this->mode == "add") {
            $this->validate([
                'name' => 'required|unique:categories,category_name,' . $this->name,
                'slug' => 'required|unique:categories,slug,' . $this->slug,
            ]);

            Category::create(['category_name' => $this->name, 'slug' => $this->slug]);
            $message = 'Category Added Successfully';
        } else {

            $this->validate([
                'name' =>  ['required', Rule::unique('categories', 'category_name')->ignore($this->oldCategory->id),],
                'slug' =>  ['required', Rule::unique('categories', 'slug')->ignore($this->oldCategory->id),],
            ]);
            $this->oldCategory->update(['category_name' => $this->name, 'slug' => $this->slug]);
            $message = 'Category Updated Successfully';
        }


        $this->alert('success', $message, [
            'position' =>  'center',
            'timer' =>  3000,
            'toast' =>  false,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
        ]);
        $this->emit('updateUi');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $this->name = $category->category_name;
        $this->slug = $category->slug;
        $this->mode = "edit";
        $this->oldCategory = $category;
        $this->emit('toggleModal');
    }
    public function delete($id)
    {
        $this->deleteCategory=Category::find($id);
        $this->confirm('Are you sure you want to delete this category', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed',
        ]);
    }
    public function confirmed()
    {
        $this->deleteCategory->delete();
        $this->alert(
            'success',
            'Category deleted successfully'
        );
        $this->emit('updateUi');
    }
    

}
