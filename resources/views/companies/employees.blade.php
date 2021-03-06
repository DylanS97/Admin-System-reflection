@extends('layouts.company')

@section('content')
    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            @include('components.paginate')

            @include('components.search-bar')
        </div>
    </div>
    
    @component('components.edit-delete-back-buttons', [ 
        'back' => '/companies/' . $company->id,
        'edit_link' => '/companies/' . $company->id . '/edit',
        'val' => 'Company'
    ])
        @slot('content')
            <a class="mx-3" href="/companies/{{ $company->id }}/employees/create" title="Add Employee">
                <i class="far fa-plus-square text-green-500 hover:text-green-600 text-4xl" style="margin-top: 2px"></i>
            </a>
        @endslot
    @endcomponent

    <div class="">
        @include('components.employees-table')
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10 pb-10">
            {{ $employees->appends(compact('items'))->links() }}
        </span>
    </div>
    @include('components.confirm-delete', [
        'slug' => '/companies/' . $company->id,
        'title' => 'Company ' . ucfirst($company->name)
    ])
@endsection