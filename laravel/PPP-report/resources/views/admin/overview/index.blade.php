@extends('layouts.app')
@section('content')

<link href="{{ asset('/css/tables.css') }}" rel="stylesheet">
@if (empty($filteredData))
  <?php $filteredData = DB::table('ppp_reports')->get()?>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Overview</div>
                    <div class="panel-body">
                      @if (count($filteredData))
                          <form class="form-horizontal" method="POST" action="{{ route('overview.filter') }}">
                            {{ csrf_field() }}
                                <table frame="void">
                                    <td>Start date: <input name="start-date" type="date"> End date: <input name="end-date" type="date"></td><td width=160px>@include('admin\overview\manager-selection')</td><td><input type="submit" value="Filter"></td>
                                </table><br>
                          </form>
                          {{ var_dump($filteredData) }}
                          @include('admin/overview/data-tables')
                      @else
                            No PPP reports have been submitted yet.
                      @endif
                      <br><br>
                      @include('redirect-buttons/back')
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
