@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Edit submitted reports</div>
                  <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('PPP.edit') }}">
                      {{ csrf_field() }}
                      PPP report | <b>{{ $selectedEditableReport->period }}</b> | submitted by <b>{{ $selectedEditableReport->user }}</b><br>
                      <small><i>submitted {{ $selectedEditableReport->created_at }} / last edit {{ $selectedEditableReport->updated_at }}</i></small><br><br>
                      How many emails were sent to new leads?<br>
                      <input type="number" name="emails" min="0" max="999" value="{{ $selectedEditableReport->emails }}"><br>
                      How many calls were made to new leads?<br>
                      <input type="number" name="calls" min="0" max="999" value="{{ $selectedEditableReport->calls }}"><br>
                      How many demos were done?<br>
                      <input type="number" name="demos" min="0" max="999" value="{{ $selectedEditableReport->demos }}"><br>
                      How many trials were started?<br>
                      <input type="number" name="trials" min="0" max="999" value="{{ $selectedEditableReport->trials }}"><br>
                      How many deals were closed?<br>
                      <input type="number" name="deals" min="0" max="999" value="{{ $selectedEditableReport->deals }}"><br>
                      Demos/Trials/Deals notes:
                      <textarea name="notes" rows="5" cols="80" placeholder="Domain  ||  Status (demo/trial/deal)  ||  Traffic ||  Pricing">{{ $selectedEditableReport->notes }}</textarea><br>
                      Any problems?<br>
                      <textarea name="problems" rows="5" cols="80">{{ $selectedEditableReport->problems }}</textarea><br>
                      <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                      <input type="hidden" name="period" value="{{ $selectedEditableReport->period }}">
                    @include('redirect-buttons\back')
                    <input type="submit" class="btn btn-primary" value="Submit edited version">
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
