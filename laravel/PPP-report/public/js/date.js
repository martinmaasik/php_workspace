var dateToday = new Date();
$(function() {
    $( "#fromDatePicker" ).datepicker({
        minDate: dateToday,
        onSelect: function(selected,evnt) {
        var date = $(this).datepicker('getDate'),
            day  = date.getDate(),
            month = date.getMonth() + 1,
            year =  date.getFullYear();
            updateToDate(day,month,year);
    }

    });
});

function updateToDate(day,month,year){
   var myDate = new Date();
    var updatedDay;
    if(month==9|| month==4 ||month==6 || month==11){
        updatedDay = 30;
    }
    else if (month==2){
        updatedDay = 28;
    }
    else{
        updatedDay = 31;
    }
   var prettyDate =month+ '/' +updatedDay + '/' +year;
$("#toDatePicker").val(prettyDate);
}

$(function() {
    $( "#toDatePicker" ).datepicker({
        minDate: dateToday
    });
});
