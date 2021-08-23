<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Listing') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="overflow-hidden sm:rounded-lg bg-gray-200 m-2 p-2">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('listings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                @livewire('depended-category')
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6">
                                        <label for="title" class="block text-sm font-medium text-gray-700">
                                            Title
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="title" id="title"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                placeholder="title">
                                            @error('title') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="description" class="block text-sm font-medium text-gray-700">
                                            Descripttion
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <textarea type="text" name="description" id="description"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"></textarea>
                                            @error('description') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-4">
                                        <label for="price" class="block text-sm font-medium text-gray-700">
                                            Price
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="price" id="price"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                placeholder="Price">
                                            @error('price') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-2">
                                        <label for="price_negotiable" class="block text-sm font-medium text-gray-700">
                                            Price Negotiable
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="price_negotiable"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                <option value="fixed">Fixed </option>
                                                <option value="negotiable">Negotiable </option>
                                            </select>
                                            @error('price_negotiable') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-4">
                                        <label for="condition" class="block text-sm font-medium text-gray-700">
                                            Condition
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="condition"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                <option value="new">New </option>
                                                <option value="used">Used </option>
                                            </select>
                                            @error('condition') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="location" class="block text-sm font-medium text-gray-700">
                                            Location
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="location" id="location"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                placeholder="location">
                                            @error('location') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-2">
                                        <label for="country_id" class="block text-sm font-medium text-gray-700">
                                            Country
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="country_id"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @foreach (App\Models\Country::all() as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('country_id') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-2">
                                        <label for="state_id" class="block text-sm font-medium text-gray-700">
                                            State
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="state_id"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @foreach (App\Models\State::all() as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('state_id') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-2">
                                        <label for="city_id" class="block text-sm font-medium text-gray-700">
                                            City
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="city_id"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @foreach (App\Models\City::all() as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('city_id') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-3">
                                        <label for="phone_number" class="block text-sm font-medium text-gray-700">
                                            Phone Number
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="number" name="phone_number" id="phone_number"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                placeholder="Phone">
                                            @error('phone_number') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6 md:col-span-3">
                                        <label for="is_published" class="block text-sm font-medium text-gray-700">
                                            Published
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="is_published"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                <option value="0">Unpublished </option>
                                                <option value="1">Published </option>
                                            </select>
                                            @error('is_published') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Featured Image
                                    </label>
                                    <div class="mt-1 flex items-center">
                                        <input type="file" id="feature_image" name="feature_image"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        @error('feature_image') <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">
                                        FImage One
                                    </label>
                                    <div class="mt-1 flex items-center">
                                        <input type="file" id="image_one" name="image_one"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        @error('image_one') <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Image Two
                                    </label>
                                    <div class="mt-1 flex items-center">
                                        <input type="file" id="image_two" name="image_two"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        @error('image_two') <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Image Three
                                    </label>
                                    <div class="mt-1 flex items-center">
                                        <input type="file" id="image_three" name="image_three"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        @error('image_three') <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
