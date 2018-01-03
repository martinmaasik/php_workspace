function populateEndDate() {
  var date2 = $('#dateStart').datepicker('getDate');
  $("#dateEnd").datepicker("option", "minDate", date2);
}

$(document).ready(function() {

  $("#dateStart").datepicker({
    dateFormat: 'yy-mm-dd',
    firstDay: 1,
    beforeShowDay: function(date) {
      return [date.getDay() === 1,'']
    },
    onSelect: function(date) {
      populateEndDate();
    }
  });
  $('#dateEnd').datepicker({
    dateFormat: 'yy-mm-dd',
    beforeShowDay: function(date) {
      return [date.getDay() === 0,'']
    },
    firstDay: 1,
  });
});
