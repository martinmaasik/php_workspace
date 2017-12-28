<script>

$(document).ready(function() {
    $("#dataStart").datepicker({
        minDate: '+1d',
        changeMonth: true,
		changeYear: true,
		dateFormat: 'mm/dd/yy',
        onSelect: function(date){
            var dates = date.split('/');
            var lastDate = new Date(dates[2], dates[0], 0);
            var y = lastDate.getFullYear(), m = lastDate.getMonth(), d = lastDate.getDate();
            m = ('0'+ (m+1)).slice(-2);

            $('#dataEnd').val(m+'/'+d+'/'+y);
        }
    });
});

</script>

<fieldset>
    <label for="dataStart">Start Date</label>
    <input type="text" style="width: 88px;" class="datepicker" id="dataStart" size="10" name="dataStart" />
</fieldset>
<fieldset>
    <label for="dataEnd">End Date</label>
   <input type="text" style="width: 88px;" class="end_date" id="dataEnd" size="10" name="dataEnd" value="" readonly />
</fieldset>
