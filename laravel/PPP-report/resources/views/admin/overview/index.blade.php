@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Overview</div>
                    <div class="panel-body">
                          <form class="form-horizontal" method="POST" action="{{ route('overview.filter') }}">
                              {{ csrf_field() }}
                                  @include('admin/overview/date-range')
                                  @include('admin/overview/manager-selection')
                                  <input type="submit" value="Filter">
                            </form>
                            <br>
                      @if (count($filteredData))
                          @include('admin/overview/data-tables')
                      @elseif (isset($unfiltered))
                          No PPP reports have been submitted this week.<br><br>
                      @elseif (isset($unsetCriteria))
                          Please set all filter criteria to view reports.<br><br>
                      @else
                          No PPP reports match filter criteria. <br><br>
                      @endif
                          @include('redirect-buttons/back')

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
