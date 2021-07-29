@extends('layouts.company')

@section('content')
    @include('components.error-box', [
        'content' => 'Company details already exist in the database.'
    ])
    @include('components.edit-delete-back-buttons', [
        'back' => '/companies',
        'edit_link' => '/companies/' . $company->id . '/edit',
        'val' => 'Company',
        'content' => ''
    ])
    <div class="w-full pt-8">
        <div class="max-w-7xl px-10 mx-auto">
            <div class="shadow p-8 rounded-2xl flex bg-gray-50">
                <div class="flex-1">
                    <div class="text-center pb-8"><h1 class="text-4xl font-bold">{{ ucfirst($company->name) }}</h1></div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Active Since:</strong></span>
                            <span>{{ $company->created_at->format('d F Y') }}</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Total Employees:</strong></span>
                            <span>{{ $company->employees->count() }}</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Email:</strong></span>
                            <span>{{ $company->email }}</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Website:</strong></span>
                            <span>{{ $company->website }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/storage/{{ $company->logo }}" alt="{{ $company->name }}" class="mx-auto h-full max-w-md">
                </div>
            </div>
        </div>
    </div>
    @include('components.confirm-delete', [
        'slug' => '/companies/' . $company->id,
        'title' => 'Company ' . ucfirst($company->name)
    ])
    @if($errors->any())
        @if ($errors->first() == 1062)
            <script>
                function errorHandler() {
                    document.querySelector('#error-popup').classList.add('show-popup');
                    setTimeout(() => {
                        document.querySelector('#error-popup').classList.remove('show-popup');
                    }, 3000);
                }
                errorHandler();
                </script>
        @endif
    @endif
@endsection
