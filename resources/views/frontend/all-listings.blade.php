<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <x-main-hero></x-main-hero>
    </section>
    <section class="m-2 p-2" id="list-listings">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($listings as $listing)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                    src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                                    {{ $listing->category->name }}</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $listing->title }}</h2>
                                <p class="mt-1">$16.00</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
    <x-main-footer></x-main-footer>

</x-main-layout>
