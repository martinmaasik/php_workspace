@extends('layouts.app')
@section('content')

<link href="{{ asset('/css/tables.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Overview</div>
                    <div class="panel-body">
                      @if (count($filteredData))
                          <form class="form-horizontal" method="POST" action="{{ route('overview.filter') }}">
                            {{ csrf_field() }}
                                @include('admin/overview/date-range')
                                @include('admin\overview\manager-selection')
                                <input type="submit" value="Filter">
                                <br>
                          </form>
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
