<link href="{{ asset('css/date-range.css') }}" rel="stylesheet">  <!-- this is here because under app.blade it would affect register/edit view name input box length -->

<span class="selectpicker">
    <input class="date-range" type="text" style="text-align:center" name="start_date" id="dateStart" readonly="true" placeholder="Select period start">
    <input class="date-range" type="text" style="text-align:center" name="end_date" id="dateEnd" readonly="true" placeholder="Select period end">
</span>
