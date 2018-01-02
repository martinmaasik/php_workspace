$(document).ready(function() {
  $("#startdate").datepicker({
      autoSize: true,         // automatically resize the input field
      altFormat: 'yy-mm-dd',  // Date Format used
      firstDay: 1, // Start with Monday
      beforeShowDay: function(date) {
        return [date.getDay() === 1,''];}
      }); // Allow only one day a week
});

$(document).ready(function() {
  $("#enddate").datepicker({
      autoSize: true,         // automatically resize the input field
      altFormat: 'yy-mm-dd',  // Date Format used
      firstDay: 1, // Start with Monday
      beforeShowDay: function(date) {
        return [date.getDay() === 0,''];}
      }); // Allow only one day a week
});
