<div class="flex justify-end flex-grow">
    <div id="search-container" class="min-w-half relative">
        <form method="GET" action="#" class="flex min-w-full absolute bottom-0">
            @csrf
            <label for="search" class="text-base font-medium mr-4"><span class="relative top-2">Search</span></label>
            <input value="{{ request('search') }}" id="search" name="search" type="text" class="rounded-lg w-full">
        </form>
    </div>
</div>