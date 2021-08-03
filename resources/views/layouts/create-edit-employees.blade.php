<div class="pt-10">
    <div class="max-w-7xl mx-auto px-8">
        <div class="px-4">
            <a href="{{ URL::previous() }}" title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
        </div>
        <form method="POST" action="{{ $slug }}">
            @csrf
            @method($method)
            <input value="{{ $company->id }}" name="company" type="hidden">
            <div class="flex">
                <div class="flex-1 py-4">
                    <div class="p-4">
                        <label for="first_name" class="block">First Name</label>
                        <input value="@if (old('first_name')) {{ old('first_name') }} @elseif($employee) {{ $employee->first_name }} @endif" type="text" name="first_name" class="block w-full rounded-lg">
                        @error('first_name')
                            <span class="block text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="p-4">
                        <label for="last_name" class="block">Last Name</label>
                        <input value="@if (old('last_name')) {{ old('last_name') }} @elseif($employee) {{ $employee->last_name }} @endif" type="text" name="last_name" class="block w-full rounded-lg">
                        @error('last_name')
                            <span class="block text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex-1 py-4">
                    <div class="p-4">
                        <label for="email" class="block">Email</label>
                        <input value="@if (old('email')) {{ old('email') }} @elseif($employee) {{ $employee->email }} @endif" type="email" name="email" class="block w-full rounded-lg">
                        @error('email')
                            <span class="block text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="p-4">
                        <label for="phone_number">Contact No.</label>
                        <input value="@if (old('phone_number')) {{ old('phone_number') }} @elseif($employee) {{ $employee->phone_number }} @endif" type="text" name="phone_number" class="block w-full rounded-lg">
                        @error('phone_number')
                            <span class="block text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-end p-4 pt-8">
                @include('components.add-buttons', [$add_btn = $button])
            </div>
        </form>
    </div>
</div>