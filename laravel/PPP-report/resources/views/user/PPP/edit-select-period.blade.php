@extends('layouts.app')
@section('content')
<?php include(app_path().'/includes/dates.php');
$editableReports = DB::table('ppp_reports')
                    ->where('user', Auth::user()->name)->where('period', $lastWeek)
                    ->orwhere('user', Auth::user()->name)->where('period', $weekBeforeLast)
                    ->pluck('period'); ?>

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Edit submitted reports</div>
                  <div class="panel-body">
                        @if ($editableReports->count() == 0)
                          There are no reports currently available for editing.<br>
                          Only last 2 weeks' reports can be edited.
                        @else
                          Only last 2 weeks' reports can be edited.<br>
                          <form role="form" method="POST" action="{{ route('PPP.edit.select') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                            Select period:<br>
                              <select name="period">
                              @foreach ($editableReports as $editableReport)
                                  <option value="{{ $editableReport }}">{{ $editableReport }}</option>
                              @endforeach
                              </select>
                            </div>
                            @include('redirect-buttons\back')
                            <input type="submit" value="Edit">
                          </form>
                        @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
