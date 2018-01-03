<?php use App\User;
$users = User::where('admin', 0)->pluck('name');?>
<link href="{{ asset('/css/drop-down-cb.css') }}" rel="stylesheet">

<span>
  <div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Select users</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
      @foreach ($users as $user)
        <label for><input name="{{ $user }}" type="checkbox" /> {{ $user }}</label>
      @endforeach

    </div>
  </div>
</span>

<script src="{{ asset('js/manager-selection.js') }}"></script>
