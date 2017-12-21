<?php $users = DB::table('users')->where('admin', 0)->pluck('name'); ?>

<div class="row">
   <div class="col-lg-12">
      <div class="button-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"> Select users <span class="caret"></span></button>
              <ul class="dropdown-menu">
                      <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;All</a></li>
                  @foreach ($users as $user)
                      <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;{{ $user }}</a></li>
                  @endforeach
              </ul>
      </div>
  </div>
</div>
