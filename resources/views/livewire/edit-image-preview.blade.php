<div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">
            Featured Image
        </label>
        <div class="mt-1 flex items-center">
            <div class="w-full flex">
                @if ($oldFeaturedImage)
                    <div class="m-2 p-2 flex">
                        Old Featured Image:
                        <img class="w-28 h-28 rounded" src="{{ Storage::url($oldFeaturedImage) }}">
                    </div>
                @endif
                @if ($featuredImage)
                    <div class="m-2 p-2">
                        New Featured Image:
                        <img class="w-28 h-28 rounded" src="{{ $featuredImage->temporaryUrl() }}">
                    </div>
                @endif
            </div>

            <input wire:model="featuredImage" type="file" id="featured_image" name="featured_image"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
            @error('featured_image') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">
            Image One
        </label>
        <div class="mt-1 flex items-center">
            <div class="w-full flex">
                @if ($oldImageOne)
                    <div class="m-2 p-2 flex">
                        Old Image One:
                        <img class="w-28 h-28 rounded" src="{{ Storage::url($oldImageOne) }}">
                    </div>
                @endif
                @if ($imageOne)
                    <div class="m-2 p-2">
                        New Image One:
                        <img class="w-28 h-28 rounded" src="{{ $imageOne->temporaryUrl() }}">
                    </div>
                @endif
            </div>
            <input wire:model="imageOne" type="file" id="image_one" name="image_one"
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
            <div class="w-full flex">
                @if ($oldImageTwo)
                    <div class="m-2 p-2 flex">
                        Old Image Two:
                        <img class="w-28 h-28 rounded" src="{{ Storage::url($oldImageTwo) }}">
                    </div>
                @endif
                @if ($imageTwo)
                    <div class="m-2 p-2">
                        New Image Two:
                        <img class="w-28 h-28 rounded" src="{{ $imageTwo->temporaryUrl() }}">
                    </div>
                @endif
            </div>
            <input wire:model="imageTwo" type="file" id="image_two" name="image_two"
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
            <div class="w-full flex">
                @if ($oldImageThree)
                    <div class="m-2 p-2 flex">
                        Old Featured Image:
                        <img class="w-28 h-28 rounded" src="{{ Storage::url($oldImageThree) }}">
                    </div>
                @endif
                @if ($imageThree)
                    <div class="m-2 p-2">
                        New Featured Image:
                        <img class="w-28 h-28 rounded" src="{{ $imageThree->temporaryUrl() }}">
                    </div>
                @endif
            </div>
            <input wire:model="imageThree" type="file" id="image_three" name="image_three"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
            @error('image_three') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
