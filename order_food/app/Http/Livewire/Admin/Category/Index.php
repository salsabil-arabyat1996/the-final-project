<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $Category_id;
    public function deleteCategory($Category_id)
    {

        $this->Category_id = $Category_id;
    }

    public function destroyCategory()
    {
        $category=Category::find($this->Category_id);
        $path='uploads/category/'.$category->image;
        if(File::exists( $path)){
            File::delete( $path);
        }
        $category->delete();
        session()->flash('message','Category Deleted');
        // $this->dispatchBrowserEvent('close-modal');
    }
     public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
