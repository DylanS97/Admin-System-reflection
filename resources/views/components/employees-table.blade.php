<div class="max-w-7xl mx-auto p-10">
    <table id="inner-table-container" class="w-full">
        <tr>
            <i></i>
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th class="width-300">Email</th>
            <th>Contact No.</th>
        </tr>
    
        @if (count($employees) > 0)
            @foreach ($employees as $employee)
                <tr id="row" class="bg-white">
                    <td class="text-center border-2">
                        <a href="/employees/{{ $employee->id }}" class="p-3 hover:underline">{{ $employee->id }}</a>
                    </td>
                    <td class="border-2">
                        <a href="/employees/{{ $employee->id }}" class="p-3 hover:underline">{{ ucfirst($employee->first_name) . ' ' . ucfirst($employee->last_name) }}</a>
                    </td>
                    <td class="border-2">
                        <a href="/companies/{{ $employee->company_id }}" class="p-3 hover:underline">{{ ucfirst($employee->company->name) }}</a>
                    </td>
                    <td class="border-2">
                        <div class="p-3">
                            {{ $employee->email }}
                        </div>
                    </td>
                    <td class="border-2">
                        <div class="p-3">
                            {{ $employee->phone_number }}
                        </div>
                    </td>
                    <td class="border-2 width-80">
                        <a class="inline-block w-min mx-auto" href="/employees/{{ $employee->id }}/edit" title="Edit {{ $employee->first_name }}">
                            <i class="far fa-edit mx-2 text-gray-700"></i>
                        </a>
                        <a href="/employees/{{ $employee->id }}" title="View {{ $employee->first_name }}" class="inline-block w-min mx-auto">
                            <i class="far fa-eye mx-2 text-gray-700"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr><td colspan="5" class="text-center pt-10 text-2xl text-gray-300 font-semibold">No employees on record.</td></tr>
        @endif
    </table>
</div>