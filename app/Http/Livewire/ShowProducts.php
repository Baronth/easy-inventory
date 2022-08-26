<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{

    use WithPagination;

    public $search = '';
    public $category = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';

    public function render()
    {
        if($this->category == ""){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy($this->sortField,$this->sortDirection)->paginate(30);
        } else {
            $products = Product::where('name', 'like', '%'.$this->search.'%')->where('category_id','=',$this->category)->orderBy($this->sortField,$this->sortDirection)->paginate(30);
        }
        return view('livewire.show-products', [
            'products' => $products,
            'categories' => Category::all()
        ]);
    }

    public function sortBy($field){

        if($this->sortField == $field){
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

}
