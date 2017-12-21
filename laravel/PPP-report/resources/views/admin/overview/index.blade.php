@extends('layouts.app')
@section('content')
<?php $requestedData = DB::table('ppp_reports')->get(); ?>
<link href="{{ asset('/css/tables.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">Overview</div>
                  <div class="panel-body">

                            <table frame="void">
                                <td>
                                  <form class="form-horizontal" method="POST" action="{{ route('overview.filter') }}">
                                    {{ csrf_field() }}
                                      Start date: <input id="start-date" type="date"> End date: <input id="end-date" type="date"></td><td>@include('admin\overview\manager-selection')</td><td><input type="submit" value="Filter"></td>
                                  </form>
                            </table><br>

                      <table frame="void" width="100%">
                          <td align="center"><i>General overview</i></td>

                      </table>

                      <table frame="void" width="100%">
                          <td align="center">Name</td><td align="center">Period</td><td align="center" style="width:5%">Emails</td><td align="center" style="width:5%">Calls</td><td align="center" style="width:5%">Demos</td><td align="center" style="width:5%">Trials</td><td align="center" style="width:5%">Deals</td><td align="center" style="width:10%">Details</td><td align="center" style="width:10%">Problems</td></tr>
                          @foreach ($requestedData as $dataEntry)
                            <td align="center">{{ $dataEntry->user }}</td><td align="center">{{ $dataEntry->period }}</td><td align="center" style="width:5%">{{ $dataEntry->emails }}</td><td align="center" style="width:5%">{{ $dataEntry->calls}}</td><td align="center" style="width:5%">{{ $dataEntry->demos }}</td>
                            <td align="center" style="width:5%">{{ $dataEntry->trials }}</td><td align="center" style="width:5%">{{ $dataEntry->deals }}</td><td align="center" style="width:10%">Details</td><td align="center" style="width:10%">Problems</td></tr>
                          @endforeach
                      </table><br><br>

                        <table style="float:left" frame="void" width="48%">
                            <td align="center"><i>Total</i></td>
                        </table>

                        <table style="float:right" frame="void" width="48%">
                            <td align="center"><i>Average per week</i></td>
                        </table>

                        <table style="float:left" frame="void" width="48%">
                            <td align="center">Name</td><td align="center" style="width:5%">Emails</td><td align="center" style="width:5%">Calls</td><td align="center" style="width:5%">Demos</td><td align="center" style="width:5%">Trials</td><td align="center" style="width:5%">Deals</td></tr>
                            @foreach ($requestedData as $dataEntry)
                              <td align="center">{{ $dataEntry->user }}<td align="center" style="width:5%">{{ $dataEntry->emails }}</td><td align="center" style="width:5%">{{ $dataEntry->calls}}</td><td align="center" style="width:5%">{{ $dataEntry->demos }}</td>
                              <td align="center" style="width:5%">{{ $dataEntry->trials }}</td><td align="center" style="width:5%">{{ $dataEntry->deals }}</td></tr>
                            @endforeach
                        </table>

                        <table style="float:right" frame="void" width="48%">
                            <td align="center">Name</td><td align="center" style="width:5%">Emails</td><td align="center" style="width:5%">Calls</td><td align="center" style="width:5%">Demos</td><td align="center" style="width:5%">Trials</td><td align="center" style="width:5%">Deals</td></tr>
                            @foreach ($requestedData as $dataEntry)
                              <td align="center">{{ $dataEntry->user }}<td align="center" style="width:5%">{{ $dataEntry->emails }}</td><td align="center" style="width:5%">{{ $dataEntry->calls}}</td><td align="center" style="width:5%">{{ $dataEntry->demos }}</td>
                              <td align="center" style="width:5%">{{ $dataEntry->trials }}</td><td align="center" style="width:5%">{{ $dataEntry->deals }}</td></tr>
                            @endforeach
                        </table>

                        @include('redirect-buttons/back')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
