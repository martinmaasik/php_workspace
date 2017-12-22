@extends('layouts.app')
@section('content')

<link href="{{ asset('/css/tables.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">Overview</div>
                  <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ route('overview.filter') }}">
                        {{ csrf_field() }}
                            <table frame="void">
                                <td>Start date: <input name="start-date" type="date"> End date: <input name="end-date" type="date"></td><td></td><td><input type="submit" value="Filter"></td>
                            </table><br>
                            @include('admin\overview\manager-selection')
                      </form>
                          @if (isset($filteredData))
                                {{ var_dump($filteredData) }}
                          @else
                                <?php $filteredData = DB::table('ppp_reports')->get()?>
                                @include('admin/overview/data-tables')
                          @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
