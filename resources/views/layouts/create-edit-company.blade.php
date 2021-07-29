<div class="pt-10">
    <div class="max-w-7xl mx-auto px-8">
        <div class="">
            <a href="." title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
        </div>
        <form method="POST" action="." enctype="multipart/form-data">
            @csrf
            @if(strpos(URL::current(), '/edit'))
                @method('PATCH')
            @endif
            <div class="flex px-2 pt-8">
                <div class="flex-1 px-2">
                    <div class="py-3">
                        <label for="name" class="block">Name</label>
                        <input value="@if($company) {{ $company->name }} @endif" type="text" name="name" class="block w-full rounded-lg">
                    </div>
                    <div class="py-3">
                        <label for="email" class="block">Email</label>
                        <input value="@if($company) {{ $company->email }} @endif" type="email" name="email" class="block w-full rounded-lg">
                    </div>
                    <div class="py-3">
                        <label for="website" class="mr-8">Website</label>
                        <input value="@if($company) {{ $company->website }} @endif" type="url" name="website" class="rounded-lg w-full">
                    </div>
                    <div class="py-8">
                        <div class="flex-1">
                            <label for="logo" class="inline-block w-20 border-r-2 border-gray-300">Logo</label>
                            <input type="file" accept="image/*" name="logo" id="logo" class="ml-10">
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="">
                        <img id="preview-image" class="pl-8 pt-2 m-auto h-full" src="@if($company) /storage/{{ $company->logo }} @endif" alt="@if($company) {{ $company->name }} @endif">
                    </div>
                </div>
            </div>
            @include('components.add-buttons', [$add_btn = $button])
        </form>
    </div>
</div>