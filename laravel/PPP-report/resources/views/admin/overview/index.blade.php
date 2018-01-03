@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Overview</div>
                    <div class="panel-body">
                      @if (count($filteredData))
                          <form class="form-horizontal" method="POST" action="{{ route('overview.filter') }}">
                              {{ csrf_field() }}
                                  <table width="65%" frame="void">
                                    <tr valign="top">
                                      <td width=45%>@include('admin/overview/date-range')</td>
                                      <td width=20%>@include('admin\overview\manager-selection')</td>
                                      <td><input type="submit" value="Filter"></td>
                                  </table>
                            </form>
                            <br>
                          @include('admin/overview/data-tables')
                      @else
                            No PPP reports have been submitted yet.
                      @endif
                          @include('redirect-buttons/back')

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
