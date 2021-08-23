<div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="category_id" class="block text-sm font-medium text-gray-700">
            Category
        </label>
        <select wire:model="selectedCategory" name="category_id"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @if (!is_null($selectedCategory))
        <div class="col-span-6 sm:col-span-3 md:col-span-2">
            <label for="sub_category_id" class="block text-sm font-medium text-gray-700">
                Sub Category
            </label>
            <select wire:model="selectedSubCategory" name="sub_category_id"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @foreach ($subCategories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}</option>
                @endforeach
            </select>
            @error('sub_category_id') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    @endif
    @if (!is_null($selectedSubCategory))
        <div class="col-span-6 sm:col-span-3 md:col-span-2">
            <label for="chid_category_id" class="block text-sm font-medium text-gray-700">
                Child Category
            </label>
            <select name="child_category_id"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @foreach ($childCategories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}</option>
                @endforeach
            </select>
            @error('child_category_id') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    @endif

</div>
