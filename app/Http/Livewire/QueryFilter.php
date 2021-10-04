<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Spatie\QueryBuilder\QueryBuilder;

class QueryFilter extends Component
{
    public $title;
    
    public $listings = [];

    public function filter()
    {
        $this->listings = QueryBuilder::for(Listing::class)->allowedFilters('title')->get();
    }
    public function render()
    {
        return view('livewire.query-filter')->layout('layouts.guest');
    }
}
