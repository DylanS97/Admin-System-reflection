<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit ' . ucfirst($company['name'])) }}
        </h2>
    </x-slot>

    @include('layouts.create-edit-company', [
        'company' => $company,
        'button' => 'Update Company'
    ])
</x-app-layout>