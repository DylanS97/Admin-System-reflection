<div id="confirm-delete" class="absolute screen-center bg-gray-200 px-10 py-8 rounded-xl hidden">
    <div class="pb-8 text-l">
        <p><strong>Are you sure you want to delete?</strong></p>
    </div>
    <div class="flex justify-between">
        <button id="cancel-delete" class="px-4 py-2 bg-green-500 rounded-md text-lg font-semibold"><span>Cancel</span></button>
        <div class="">
            <form method="POST" action="{{ $slug }}">
                @csrf
                @method('DELETE')
                <button id="confirmed-delete" class="ml-3 px-4 py-2 bg-red-500 rounded-md text-lg font-semibold" type="submit" title="Delete {{ $title }}"><span>Delete</span></button>
            </form>
        </div>
    </div>
</div>