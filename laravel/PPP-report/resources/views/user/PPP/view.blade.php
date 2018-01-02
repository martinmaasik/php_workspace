@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">View submitted reports</div>
                  <div class="panel-body">
                    PPP report | <b>{{ $selectedViewableReport->period }}</b> | submitted by <b>{{ $selectedViewableReport->user }}</b><br>
                    <small><i>submitted {{ $selectedViewableReport->created_at }} / last edit {{ $selectedViewableReport->updated_at }}</i></small><br><br>
                    <table style="width:100%">
                      <tr><td style="width:20%">Emails to new leads:</td>
                      <td>{{ $selectedViewableReport->emails }}</td></tr>
                      <tr><td style="width:20%">Calls to new leads:</td>
                      <td>{{ $selectedViewableReport->calls }}</td></tr>
                      <tr><td style="width:20%">Demos done:</td>
                      <td>{{ $selectedViewableReport->demos }}</td></tr>
                      <tr><td style="width:20%">Trials started:</td>
                      <td>{{ $selectedViewableReport->trials }}</td></tr>
                      <tr><td style="width:20%">Deals closed:</td>
                      <td>{{ $selectedViewableReport->deals }}</td></tr>
                      <tr><td style="width:20%; vertical-align:top">Notes:</td>
                        @if ($selectedViewableReport->notes != '')
                          <td><textarea readonly style="width:100%; resize:none; border:none" rows="2">{{ $selectedViewableReport->notes }}</textarea></td></tr>
                        @else
                          <td>none submitted</td></tr>
                        @endif
                      <tr><td style="width:20%; vertical-align:top">Problems:</td>
                        @if ($selectedViewableReport->problems != '')
                          <td><textarea readonly style="width:100%; resize:none; border:none" rows="2">{{ $selectedViewableReport->problems }}</textarea></td></tr>
                        @else
                          <td>none submitted</td></tr>
                        @endif
                    </table>

                    <br>
                    @include('redirect-buttons\back')
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
