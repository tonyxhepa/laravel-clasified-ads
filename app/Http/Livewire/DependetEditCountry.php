<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class DependetEditCountry extends Component
{
    public $countries;
    public $states;
    public $cities;

    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    public function mount($country, $state, $city)
    {
        $this->countries = Country::all();
        $this->selectedCountry = $country;
        $this->selectedState = $state;
        $this->selectedCity = $city;
        $this->states = State::where('country_id', $country)->get();
        $this->cities = City::where('state_id', $state)->get();
    }

    public function updatedSelectedCountry($country)
    {
        if (!is_null($this->selectedCountry)) {
            $this->states = State::where('country_id', $country)->get();
        }
        $this->reset(['selectedState', 'selectedCity', 'cities']);
    }
    public function updatedSelectedState($state)
    {
        if (!is_null($this->selectedState)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }
    public function render()
    {
        return view('livewire.dependet-edit-country');
    }
}
