<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(ucfirst($company->name)) }}
        </h2>
    </x-slot>

    <div class="w-full shadow">
        <div class="flex max-w-7xl mx-auto px-10 pt-8">
            <div class="block rounded-t-md @if(strpos(url()->current(), '/' . $company->id) != '' && strpos(url()->current(), '/employees') == '')bg-gray-200 border-gray-300 border-2 border-b-0 @endif">
                <a href="/companies/{{ $company->id }}" class="block p-4 hover:underline"><span>Details</span></a>
            </div>
            <div class="rounded-t-md @if(strpos(url()->current(), '/employees') != '')bg-gray-200 border-gray-300 border-2 border-b-0 @endif">
                <a href="/companies/{{ $company->id }}/employees" class="block p-4 hover:underline"><span>Employees</span></a>
            </div>
        </div>
    </div>

    @yield('content')

</x-app-layout>

