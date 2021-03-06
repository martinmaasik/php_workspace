@extends('layouts.app')
@section('content')
<?php include(app_path().'/includes/dates.php'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Submit a new PPP report</div>
                  <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('PPP.submit') }}">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <input type="hidden" name="period" value="{{ $halfSubmittedData['period'] }}">
                        @if ($halfSubmittedData['period'] == $thisWeek)
                            <input type="hidden" name="period_start" value="{{ $thisWeekStart }}">
                            <input type="hidden" name="period_end" value="{{ $thisWeekEnd }}">
                        @else
                            <input type="hidden" name="period_start" value="{{ $lastWeekStart }}">
                            <input type="hidden" name="period_end" value="{{ $lastWeekEnd }}">
                        @endif
                        <input type="hidden" name="emails" value="{{ $halfSubmittedData['emails'] }}">
                        <input type="hidden" name="calls" value="{{ $halfSubmittedData['calls'] }}">
                        <input type="hidden" name="demos" value="{{ $halfSubmittedData['demos'] }}">
                        <input type="hidden" name="trials" value="{{ $halfSubmittedData['trials'] }}">
                        <input type="hidden" name="deals" value="{{ $halfSubmittedData['deals'] }}">
                        <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                        @if (($halfSubmittedData['demos'] || $halfSubmittedData['trials'] || $halfSubmittedData['deals']) != "0")
                          Demos/Trials/Deals notes:
                          <textarea name="notes" rows="5" cols="80" placeholder="Domain  ||  Status (demo/trial/deal)  ||  Traffic ||  Pricing"></textarea><br>
                        @endif
                        Any problems?<br>
                        <textarea name="problems" rows="5" cols="80"></textarea><br>
                        @include('redirect-buttons\back')
                        <input type="submit" class="btn btn-primary" value="Submit PPP report">
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
