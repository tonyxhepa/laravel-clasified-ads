<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::where('user_id', auth()->user()->id)->get();

        return view('listings.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListingRequest $request)
    {
        $featured_image = $request->file('featured_image')->store('public/listings');
        $image_one = $request->file('image_one')->store('public/listings');
        $image_two = $request->file('image_two')->store('public/listings');
        $image_three = $request->file('image_three')->store('public/listings');

        Listing::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'child_category_id' => $request->child_category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'price_negotiable' => $request->price_negotiable,
            'location' => $request->location,
            'condition' => $request->condition,
            'phone_number' => $request->phone_number,
            'is_published' => $request->is_published,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
            'featured_image' => $featured_image,
            'image_one' => $image_one,
            'image_two' => $image_two,
            'image_three' => $image_three,
        ]);

        return redirect()->route('listings.index')->with('message', 'Listing created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);

        return view('listings.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $listing = Listing::find($id);

        $featured_image = $listing->featured_image;
        $image_one = $listing->image_one;
        $image_two = $listing->image_two;
        $image_three = $listing->image_three;


        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image')->store('public/listings');
        }
        if ($request->hasFile('image_one')) {
            $image_one = $request->file('image_one')->store('public/listings');
        }
        if ($request->hasFile('image_two')) {
            $image_two = $request->file('image_two')->store('public/listings');
        }
        if ($request->hasFile('image_three')) {
            $image_three = $request->file('image_three')->store('public/listings');
        }

        $listing->update([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'child_category_id' => $request->child_category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'price_negotiable' => $request->price_negotiable,
            'location' => $request->location,
            'condition' => $request->condition,
            'phone_number' => $request->phone_number,
            'is_published' => $request->is_published,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
            'featured_image' => $featured_image,
            'image_one' => $image_one,
            'image_two' => $image_two,
            'image_three' => $image_three,
        ]);

        return redirect()->route('listings.index')->with('message', 'Listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        Storage::delete($listing->featured_image);
        Storage::delete($listing->image_one);
        Storage::delete($listing->image_two);
        Storage::delete($listing->image_three);
        $listing->delete();
        return redirect()->route('listings.index')->with('message', 'Listing deleted successfully');
    }
}
