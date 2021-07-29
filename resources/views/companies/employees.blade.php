@extends('layouts.company')

@section('content')
    @include('components.error-box', [
        'content' => 'Employee details already exist in the database.'
    ])
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
            <a class="mx-3" href="/employees/create" title="Add Employee">
                <i class="far fa-plus-square text-green-500 hover:text-green-600 text-4xl" style="margin-top: 2px"></i>
            </a>
        @endslot
    @endcomponent
    
    <div class="">
        <div class="max-w-7xl mx-auto px-10 pt-10">
            <div class="flex justify-end">
            </div>
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
    @include('components.confirm-delete', [
        'slug' => '/companies/' . $company->id,
        'title' => 'Company ' . ucfirst($company->name)
    ])
    @if($errors->any())
        @if ($errors->first() == 1062)
            <script>
                function errorHandler() {
                    // document.querySelector('#error-popup').classList.remove('-top-full');
                    document.querySelector('#error-popup').classList.add('show-popup');
                    setTimeout(() => {
                        document.querySelector('#error-popup').classList.remove('show-popup');
                        // document.querySelector('#error-popup').classList.add('-top-full');
                    }, 3000);
                }
                errorHandler();
                </script>
        @endif
    @endif
@endsection