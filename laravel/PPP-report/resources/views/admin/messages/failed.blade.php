@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
                Failed to create or edit record.<br><br>
                @include('redirect-buttons/back')
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
