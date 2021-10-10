<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Featured Ads</h1>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            {{ $slot }}
        </div>
        <div class="flex">
            <a href="{{ route('all-listings') }}"
                class="mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">All
                Listings</a>

        </div>
    </div>
</section>
