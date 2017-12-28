@extends('layouts.app')
@section('content')
<?php use App\User;
      $users = User::where('admin', 0)->pluck('email'); ?>

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Edit or delete users</div>
                  <div class="panel-body">
                        @if ($users->count() == 0)
                          No users have been created yet.<br><br>
                          @include('redirect-buttons\back')
                        @else
                          <form role="form" method="POST" action="{{ route('edit.select') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                            Select user:<br>
                              <select name="user">
                              @foreach ($users as $user)
                                  <option value="{{ $user }}">{{ $user }} ({{ User::where('email', $user)->value('name') }})</option>
                              @endforeach
                              </select>
                            </div>
                            @include('redirect-buttons\back')
                            <input type="submit" value="Edit/Delete">
                          </form>
                        @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
