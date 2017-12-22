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

<?php $users = DB::table('users')->where('admin', 0)->pluck('name');?>

<form class="form-horizontal" method="POST" action="{{ route('test.post') }}">
  {{ csrf_field() }}
  <div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Select users</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
      @foreach ($users as $user)
        <label for><input name="{{ $user }}" type="checkbox" />{{ $user }}</label>
      @endforeach

    </div>
  </div>
  <input type="submit" value="Filter"></td>
</form>
