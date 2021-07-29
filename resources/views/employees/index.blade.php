{{-- @dd($companies) --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            @include('components.paginate')
            
            @include('components.company-select')

            @include('components.search-bar')
        </div>
    </div>

    <div class="">
        @include('components.employees-table')
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10 pb-10">
            {{ $employees->appends(compact('items'))->links() }}
        </span>
    </div>
</x-app-layout>