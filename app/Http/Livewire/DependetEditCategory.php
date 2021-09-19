<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Livewire\Component;

class DependetEditCategory extends Component
{
    public $categories;
    public $subCategories;
    public $childCategories;

    public $selectedCategory;
    public $selectedSubCategory;
    public $selectedChildCategory;

    public function mount($category, $subCategory, $childCategory)
    {
        $this->categories = Category::all();
        $this->selectedCategory = $category;
        $this->subCategories = SubCategory::where('category_id', $category)->get();
        $this->selectedSubCategory = $subCategory;
        $this->childCategories = ChildCategory::where('sub_category_id', $subCategory)->get();
        $this->selectedChildCategory = $childCategory;
    }

    public function updatedSelectedCategory($category)
    {
        $this->subCategories = SubCategory::where('category_id', $category)->get();
        $this->reset('selectedSubCategory', 'selectedChildCategory', 'childCategories');
    }
    public function updatedSelectedSubCategory($category)
    {
        if (!is_null($this->selectedSubCategory)) {
            $this->childCategories = ChildCategory::where('sub_category_id', $category)->get();
        }
    }
    public function render()
    {
        return view('livewire.dependet-edit-category');
    }
}
