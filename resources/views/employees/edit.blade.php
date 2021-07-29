<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit ' . ucfirst($employee->first_name) . ' ' . ucfirst($employee->last_name)) }}
        </h2>
    </x-slot>
    
    @include('layouts.create-edit-employees', [
        'method' => 'PATCH',
        'employee' => $employee,
        'button' => 'Update Employee',
        'company' => $company
    ])
</x-app-layout>