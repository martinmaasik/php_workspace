<?php use App\PPP_report; use App\User;
$usersWithReports = PPP_report::distinct()->pluck('user');
$usersWithoutReports = User::where('admin', "0")->whereNotIn('name', $usersWithReports)->pluck('name');?>

<select class="selectpicker" multiple data-actions-box="true" name="users[]">
  @foreach ($usersWithReports as $userWithReports)
    <option value="{{ $userWithReports }}">{{ $userWithReports }}</option>
  @endforeach
  @foreach ($usersWithoutReports as $userWithoutReports)
    <option disabled>{{ $userWithoutReports }}</option>
  @endforeach
</select>
