<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <form method="get" action="/test">
            <input type="text" name="filter[test]">
            <button type="submit">Filter</button>
        </form>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>
