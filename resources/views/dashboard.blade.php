<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex max-w-7xl mx-auto px-10 py-4">
        @include('components.dashboard-buttons', [ 'location' => 'companies' ])
        
        @include('components.dashboard-buttons', [ 'location' => 'employees' ])
    </div>
</x-app-layout>
