<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditImagePreview extends Component
{
    use WithFileUploads;

    public $featuredImage;
    public $imageOne;
    public $imageTwo;
    public $imageThree;

    public $oldFeaturedImage;
    public $oldImageOne;
    public $oldImageTwo;
    public $oldImageThree;

    public function mount($oldFeaturedImage, $oldImageOne, $oldImageTwo, $oldImageThree)
    {
        $this->oldFeaturedImage = $oldFeaturedImage;
        $this->oldImageOne = $oldImageOne;
        $this->oldImageTwo = $oldImageTwo;
        $this->oldImageThree = $oldImageThree;
    }

    
    public function render()
    {
        return view('livewire.edit-image-preview');
    }
}
