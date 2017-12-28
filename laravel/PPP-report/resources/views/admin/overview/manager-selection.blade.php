<?php use App\User; ?>
<link href="{{ asset('/css/drop-down-cb.css') }}" rel="stylesheet">

<script>
var expanded = false;
function showCheckboxes() {
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>

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
