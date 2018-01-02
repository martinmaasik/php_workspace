@extends('layouts.app')
@section('content')
<?php include(app_path().'/includes/dates.php'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Submit a new PPP report</div>
                  <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('PPP.submit.select') }}">
                      {{ csrf_field() }}
                      <div class="form-group">

                        @if ($lastWeekSubmitted == 0 && $thisWeekSubmitted == 0)
                          Select period:<br>
                          <select name="period">
                            <option value="{{ $thisWeek }}">{{ $thisWeek }}</option>
                            <option value="{{ $lastWeek }}">{{ $lastWeek }}</option>
                          </select><br>
                          @include('user\PPP\submit-questions')

                        @elseif ($lastWeekSubmitted == 0)
                          Reports can be submitted for only last 2 weeks.
                          <br><i>- you have already submitted a report for {{ $thisWeek }}. (<b><a href="{{ route('PPP.edit.get') }}">EDIT</a></b>)</i>
                          <br><br>Period: <b>{{ $lastWeek }}</b><br>
                          <input type="hidden" name="period" value="{{ $lastWeek }}">
                          @include('user\PPP\submit-questions')

                        @elseif ($thisWeekSubmitted == 0)
                          Reports can be submitted for only last 2 weeks.
                          <br><i>- you have already submitted a report for {{ $lastWeek }}. (<b><a href="{{ route('PPP.edit.get') }}">EDIT</a></b>)</i>
                          <br><br>Period: <b>{{ $thisWeek }}</b><br>
                          <input type="hidden" name="period" value="{{ $thisWeek }}">
                          @include('user\PPP\submit-questions')

                        @else
                          You have already submitted reports for the last 2 periods.<br><br>
                          @include('redirect-buttons\back')
                          <button type="button" onclick="location.href='{{ route('PPP.edit.get') }}'">Go edit reports</button>

                        @endif

                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
