<?php use App\User; ?>
<link href="{{ asset('/css/drop-down-cb.css') }}" rel="stylesheet">

<?php $users = User::where('admin', 0)->pluck('name'); ?>

<form>
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
</form>

<script src="{{ asset('js/manager-selection.js') }}"></script>
