<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Classified</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">Home</a>
            <a class="mr-5 hover:text-gray-900">All Ads</a>
            <a class="mr-5 hover:text-gray-900">Stores</a>
            <a class="mr-5 hover:text-gray-900">Contact</a>
            @guest
                <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">login</a>
                <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Register</a>
            @endguest
            @auth
                <a class="mr-5 hover:text-gray-900">{{ auth()->user()->name }}</a>
            @endauth
        </nav>
        <button
            class="inline-flex items-center bg-green-500 border-0 py-1 px-3 focus:outline-none hover:bg-green-200 rounded text-base text-gray-50 font-semibold mt-4 md:mt-0">Post
            New Ad
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</header>
