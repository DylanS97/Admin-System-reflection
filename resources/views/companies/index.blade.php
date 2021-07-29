
<x-app-layout>
    @include('components.error-box', [
        'content' => 'Company details already exist in the database.'
    ])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            @include('components.paginate')

            @include('components.search-bar')

            <div class="flex justify-end">
                <a class="ml-10" href="/companies/create" title="Add Company"><i class="far fa-plus-square text-green-500 hover:text-green-600" style="font-size: 41px"></i></a>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto p-10">
            <table id="inner-table-container" class="w-full">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="width-500">Website</th>
                </tr>
                @if (count($companies) > 0)
                    @foreach ($companies as $company)
                        <tr id="row" class="bg-white">
                            <td class="text-center border-2">
                                <a href="/companies/{{ $company->id }}" class="p-3 hover:underline">{{ $company->id }}</a>
                            </td>
                            <td class="border-2">
                                <a href="/companies/{{ $company->id }}" class="p-3 hover:underline">{{ ucfirst($company->name) }}</a>
                            </td>
                            <td class="border-2">
                                <div class="p-3">
                                    {{ $company->email }}
                                </div>
                            </td>
                            <td class="border-2"><span class="block p-3 overflow-hidden overflow-ellipsis whitespace-nowrap width-500">{{ $company->website }}</span></td>
                            <td class="border-2 width-120">
                                <a class="inline-block w-min mx-auto" href="/companies/{{ $company->id }}/edit" title="Edit {{ $company->name }}">
                                    <i class="far fa-edit mx-2 text-gray-700"></i>
                                </a>
                                <a class="inline-block w-min mx-auto" href="/companies/{{ $company->id }}" title="View Company">
                                    <i class="far fa-eye mx-2 text-gray-700"></i>
                                </a>
                                <a class="inline-block w-min mx-auto" href="/companies/{{ $company->id }}/employees" title="View Employees">
                                    <i class="fas fa-users mx-2 text-gray-700"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="4" class="text-center pt-10 text-2xl text-gray-300 font-semibold">No companies on record.</td></tr>
                @endif
            </table>
        </div>
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10 pb-10">
            {{ $companies->appends(compact('items'))->links() }}
        </span>
    </div>
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
</x-app-layout>