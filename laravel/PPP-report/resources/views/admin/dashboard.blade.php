@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Welcome, {{ Auth::user()->name }}</div>
              <div class="panel-body">
                <form>
                  <button type="button" style="width:300px" onclick="window.location='{{ URL::route('create.get') }}'">Create a new user</button><br>
                  <button type="button" style="width:300px" onclick="window.location='{{ URL::route('edit.get') }}'">Edit or delete users</button><br>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
