<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        @if (session('message'))
            <div class="bg-indigo-600 text-gray-100 m-2 p-2 text-lg text-center">{{ session('message') }}</div>
        @endif
        <!-- This example requires Tailwind CSS v2.0+ -->

    </div>
</x-admin-layout>
