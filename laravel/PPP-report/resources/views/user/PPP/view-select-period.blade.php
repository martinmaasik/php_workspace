@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">View submitted reports</div>
                  <div class="panel-body">
                        @if ($viewableReports->count() == 0)
                          You have not submitted any reports yet.
                        @else
                          <form role="form" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                            Select period:<br>
                              <select name="period" id="soflow-color">
                              @foreach ($viewableReports as $viewableReport)
                                <option value="{{ $viewableReport }}">{{ $viewableReport }}</option>
                              @endforeach
                              </select>
                            </div>
                            @include('redirect-buttons\back')
                            <input type="submit" class="btn btn-primary" value="View">
                          </form>
                        @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
