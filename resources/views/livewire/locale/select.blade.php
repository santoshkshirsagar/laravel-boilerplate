<form id="localeForm" action="{{ route('locale') }}">
    <div class="col-auto ms-auto">
        <label class="visually-hidden" for="locale">Locale</label>
        <select name="locale" wire:model="locale" class="form-select  form-select-sm" id="locale" onchange="document.getElementById('localeForm').submit()">
        <option value="en">English</option>
        <option value="hi">हिंदी</option>
        </select>
    </div>
</form>