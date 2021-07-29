<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Company') }}
        </h2>
    </x-slot>

    @include('layouts.create-edit-company', [
        'company' => '',
        'button' => 'Add Company'
    ])
</x-app-layout>