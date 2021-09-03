<div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">
            Featured Image
        </label>
        <div class="mt-1 flex items-center">
            @if ($featuredImage)
                <div class="m-2 p-2">
                    Photo Preview:
                    <img class="w-28 h-28 rounded" src="{{ $featuredImage->temporaryUrl() }}">
                </div>
            @endif
            <input wire:model="featuredImage" type="file" id="feature_image" name="feature_image"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
            @error('feature_image') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">
            Image One
        </label>
        <div class="mt-1 flex items-center">
            @if ($imageOne)
                <div class="m-2 p-2">
                    Photo Preview:
                    <img class="w-28 h-28 rounded" src="{{ $imageOne->temporaryUrl() }}">
                </div>
            @endif
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
            @if ($imageTwo)
                <div class="m-2 p-2">
                    Photo Preview:
                    <img class="w-28 h-28 rounded" src="{{ $imageTwo->temporaryUrl() }}">
                </div>
            @endif
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
            @if ($imageThree)
                <div class="m-2 p-2">
                    Photo Preview:
                    <img class="w-28 h-28 rounded" src="{{ $imageThree->temporaryUrl() }}">
                </div>
            @endif
            <input wire:model="imageThree" type="file" id="image_three" name="image_three"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
            @error('image_three') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
