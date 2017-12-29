@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Test</div>
                    <div class="panel-body">
                      <script>var dateToday = new Date();
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
                      </script>
                      <p>From Date: <input type="text" id="fromDatePicker"></p>
                      <p>To Date: <input type="text" id="toDatePicker"></p>
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection
