
<form>
    <select name="Company" id="company-select" class="rounded-lg transition-shadow ml-5 companySelect">
        <option value="" label="-- Company --" disabled @if($com == '') selected @endif></option>
        <option value="/" label="All" @if($com == 'all') selected @endif>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" @if($com == $company->name) selected @endif>{{ $company->name }}</option>
        @endforeach
    </select>
</form>