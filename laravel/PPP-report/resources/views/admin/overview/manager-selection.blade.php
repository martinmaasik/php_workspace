<?php use App\User;
$users = User::where('admin', 0)->pluck('name');?>

<select class="selectpicker" multiple data-actions-box="true" name="users[]">
  @foreach ($users as $user)
    <option value="{{ $user }}">{{ $user }}</option>
  @endforeach
</select>
