@extends('layouts.app')
@section('content')
<?php $requestedData = DB::table('ppp_reports')->get(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">Overview</div>
                  <div class="panel-body">
                      <link href="{{ asset('/css/tables.css') }}" rel="stylesheet">

                      <table frame="void">
                          <td>Start date: <input id="start-date" type="date"> End date: <input id="end-date" type="date"></td><td>@include('admin\overview\manager-selection')</td><td><input type="submit" value="Filter"></td>
                      </table><br>

                      <table frame="void" width="100%">
                          <td align="center">Name</td><td align="center">Week</td><td align="center" style="width:5%">Emails</td><td align="center" style="width:5%">Calls</td><td align="center" style="width:5%">Demos</td><td align="center" style="width:5%">Trials</td><td align="center" style="width:5%">Deals</td><td align="center" style="width:10%">Details</td><td align="center" style="width:10%">Problems</td></tr>
                          @foreach ($requestedData as $dataEntry)
                          <td align="center">{{ $dataEntry->user }}</td><td align="center">{{ $dataEntry->period }}</td><td align="center" style="width:5%">{{ $dataEntry->emails }}</td><td align="center" style="width:5%">{{ $dataEntry->calls}}</td><td align="center" style="width:5%">{{ $dataEntry->demos }}</td>
                          <td align="center" style="width:5%">{{ $dataEntry->trials }}</td><td align="center" style="width:5%">{{ $dataEntry->deals }}</td><td align="center" style="width:10%">Details</td><td align="center" style="width:10%">Problems</td></tr>
                          @endforeach
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
