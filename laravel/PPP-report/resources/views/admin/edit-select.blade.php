@extends('layouts.app')
@section('content')
<link href="{{ asset('css/date-range.css') }}" rel="stylesheet">

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Edit or delete users</div>
                  <div class="panel-body">
                        @if ($allUserData->count() == 0)
                          No users have been created yet.<br><br>
                          @include('redirect-buttons\back')
                        @else
                          <form role="form" method="POST" action="{{ route('edit.select') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                            Select user:<br>
                              <select name="user">
                              @foreach ($allUserData->where('admin', 0)->pluck('email') as $user)
                                  <option value="{{ $user }}">{{ $user }} ({{ $allUserData->where('email', $user)->pluck('name')->first() }})</option>
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
