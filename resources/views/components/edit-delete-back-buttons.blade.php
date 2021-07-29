<div class="">
    <div class="max-w-7xl mx-auto px-10 pt-10">
        <div class="flex justify-between">
            <div class="">
                <a href="{{ $back }}" title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
            </div>
            <div class="flex justify-end relative">
                {{ $content }}
                <a class="mx-3" href="{{ $edit_link }}" title="Edit {{ $val }}"><i class="far fa-edit text-green-500 hover:text-green-600 text-4xl"></i></a>
                <button id="delete-button" class="ml-3" type="submit" title="Delete {{ $val }}"><i class="far fa-trash-alt text-red-500 hover:text-red-600 text-4xl"></i></button>
            </div>
        </div>
    </div>
</div>