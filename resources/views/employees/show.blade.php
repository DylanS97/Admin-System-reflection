<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( $employee->first_name . ' ' . $employee->last_name) }}
        </h2>
    </x-slot>

    @include('components.edit-delete-back-buttons', [
        'back' => '/employees',
        'edit_link' => '/employees/' . $employee->id . '/edit',
        'val' => 'Employee',
        'content' => ''
    ])

    <div class="w-full pt-8">
        <div class="max-w-7xl px-10 mx-auto">
            <div class="shadow p-8 rounded-2xl flex bg-gray-50">
                <div class="flex-1">
                    <div class="text-center pb-8"><h1 class="text-4xl font-bold">{{ $employee->first_name }} {{ $employee->last_name }}</h1></div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Employed Since:</strong></span>
                            <span>{{ $employee->created_at->format('d F Y') }}</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Employer:</strong></span>
                            <span><a href="/companies/{{ $employee->company_id }}" class="hover:underline">{{ ucfirst($employee->company->name) }}</a></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Email:</strong></span>
                            <span>{{ $employee->email }}</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Contact No.:</strong></span>
                            <span>{{ $employee->phone_number }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/storage/{{ $employee->company->logo }}" alt="{{ $employee->company->name }}" class="h-full max-w-md max-h-60 float-right">
                    <span class="inline-block float-right pr-4"><strong>Employer Logo:</strong></span>
                </div>
            </div>
        </div>
    </div>
    @include('components.confirm-delete', [
        'slug' => '/employees/' . $employee->id,
        'title' => 'Employee ' . ucfirst($employee->first_name) . ' ' . ucfirst($employee->last_name)
    ])
</x-app-layout>