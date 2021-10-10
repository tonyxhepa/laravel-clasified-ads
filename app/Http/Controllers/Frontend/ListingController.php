<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ListingController extends Controller
{
    public function index()
    {
        $listings = QueryBuilder::for(Listing::class)
    ->allowedFilters([
        'title',
        AllowedFilter::exact('country_id'),
         AllowedFilter::exact('category_id'),
         AllowedFilter::scope('max_price'),
         ])
    ->get();


       

        return view('frontend.all-listings', compact('listings'));
    }

    public function welcome()
    {
        $categories = Category::all();
        $featured_ads = Listing::where('is_published', true)->get();

        return view('welcome', compact('categories', 'featured_ads'));
    }
}
