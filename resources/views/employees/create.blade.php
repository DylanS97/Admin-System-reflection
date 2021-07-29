<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee for ' . ucfirst($company[0]->name)) }}
        </h2>
    </x-slot>

    @include('layouts.create-edit-employees', [
        'method' => 'POST',
        'employee' => '',
        'button' => 'Add Employee',
        'company' => $company[0]->id
    ])
</x-app-layout>