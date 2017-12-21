@extends('layouts.app')
@section('content')
<?php include(app_path().'/includes/dates.php');
$lastWeekSubmitted = DB::table('ppp_reports')->where('user', Auth::user()->name)->where('period', $lastWeek)->count();
$weekBeforeLastSubmitted = DB::table('ppp_reports')->where('user', Auth::user()->name)->where('period', $weekBeforeLast)->count(); ?>

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Submit a new PPP report</div>
                  <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('PPP.submit.select') }}">
                      {{ csrf_field() }}
                      <div class="form-group">

                        @if ($lastWeekSubmitted == 0 && $weekBeforeLastSubmitted == 0)
                          Select period:<br>
                          <select name="period">
                            <option value="{{ $lastWeek }}">{{ $lastWeek }}</option>
                            <option value="{{ $weekBeforeLast }}">{{ $weekBeforeLast }}</option>
                          </select><br>
                          @include('user\PPP\submit-questions')

                        @elseif ($lastWeekSubmitted == 0)
                          Reports can be submitted for only last 2 weeks.
                          <br><i>- you have already submitted a report for {{ $weekBeforeLast }}. (<b><a href="{{ route('PPP.edit.get') }}">EDIT</a></b>)</i>
                          <br><br>Period: <b>{{ $lastWeek }}</b><br>
                          <input type="hidden" name="period" value="{{ $lastWeek }}">
                          @include('user\PPP\submit-questions')

                        @elseif ($weekBeforeLastSubmitted == 0)
                          Reports can be submitted for only last 2 weeks.
                          <br><i>- you have already submitted a report for {{ $lastWeek }}. (<b><a href="{{ route('PPP.edit.get') }}">EDIT</a></b>)</i>
                          <br><br>Period: <b>{{ $weekBeforeLast }}</b><br>
                          <input type="hidden" name="period" value="{{ $weekBeforeLast }}">
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