@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Welcome, {{ Auth::user()->name }}</div>
              <div class="panel-body">
                <form>
                  <div class="row">
                    <div class="col-sm-4"><button type="button" class="btn btn-default" style="width:100%" onclick="window.location='{{ URL::route('create.get') }}'">Create a new user</button></div>
                    <div class="col-sm-4"><button type="button" class="btn btn-default" style="width:100%" onclick="window.location='{{ URL::route('edit.get') }}'">Edit or delete users</button></div>
                    <div class="col-sm-4"><button type="button" class="btn btn-default" style="width:100%" onclick="window.location='{{ URL::route('overview.get') }}'">Overview</button></div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
