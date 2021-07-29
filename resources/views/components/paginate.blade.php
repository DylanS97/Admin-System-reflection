<div class="text-3xl font-semibold">
    <div class="page">
        <form action="">
            <select name="Paginate" id="paginate" class="rounded-lg paginator">
                <option value="10" @if($items == 10) selected @endif>10</option>
                <option value="25" @if($items == 25) selected @endif>25</option>
                <option value="50" @if($items == 50) selected @endif>50</option>
                <option value="100" @if($items == 100) selected @endif>100</option>
            </select>
        </form>
    </div>
</div>