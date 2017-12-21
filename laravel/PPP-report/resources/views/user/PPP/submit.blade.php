@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Submit a new PPP report</div>
                  <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('PPP.submit') }}">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <input type="hidden" name="period" value="{{ $_POST['period'] }}">
                        <input type="hidden" name="emails" value="{{ $_POST['emails'] }}">
                        <input type="hidden" name="calls" value="{{ $_POST['calls'] }}">
                        <input type="hidden" name="demos" value="{{ $_POST['demos'] }}">
                        <input type="hidden" name="trials" value="{{ $_POST['trials'] }}">
                        <input type="hidden" name="deals" value="{{ $_POST['deals'] }}">
                        <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                        @if (($_POST['demos'] || $_POST['trials'] || $_POST['deals']) != "0")
                          Demos/Trials/Deals notes:
                          <textarea name="notes" rows="5" cols="80" placeholder="Domain  ||  Status (demo/trial/deal)  ||  Traffic ||  Pricing"></textarea><br>
                        @endif
                        Any problems?<br>
                        <textarea name="problems" rows="5" cols="80"></textarea><br>
                        @include('redirect-buttons\back')
                        <input type="submit" value="Submit PPP report">
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
