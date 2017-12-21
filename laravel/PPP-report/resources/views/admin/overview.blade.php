@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">Overview</div>
              <div class="panel-body">
                      <div class="container">
                      <div class="row">
                           <div class="col-lg-12">
                         <div class="button-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"> Select users <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                      <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
                      <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
                      <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
                      <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
                      <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
                      <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
                      </ul>
                      </div>
                      </div>
                      </div>
                      </div>
                <link href="{{ asset('/css/tables.css') }}" rel="stylesheet">
                <table>
                  <td>tere</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  <td></td><td>tere</td><td></td><td></td><td></td><td></td><td></td></tr>
                  <td></td><td></td><td>tere</td><td></td><td></td><td></td><td></td></tr>
                  <td></td><td></td><td></td><td>tere</td><td></td><td></td><td></td></tr>
                  <td></td><td></td><td></td><td></td><td>tere</td><td></td><td></td></tr>
                  <td></td><td></td><td></td><td></td><td></td><td>tere</td><td></td></tr>
                  <td></td><td></td><td></td><td></td><td></td><td></td><td>tere</td></tr>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
