<link href="{{ asset('/css/tables.css') }}" rel="stylesheet">
<link href="{{ asset('/css/hover-over.css') }}" rel="stylesheet">

<table style="float:left" frame="void" width="48%">
    <td align="center"><i>Total</i></td>
</table>

<table style="float:right" frame="void" width="48%">
    <td align="center"><i>Average per week</i></td>
</table>

<table style="float:left" frame="void" width="48%">
    <td align="center">Name</td>
    <td align="center" style="width:5%">Emails</td>
    <td align="center" style="width:5%">Calls</td>
    <td align="center" style="width:5%">Demos</td>
    <td align="center" style="width:5%">Trials</td>
    <td align="center" style="width:5%">Deals</td></tr>
    @foreach ($filteredData as $dataEntry)
      <td align="center">{{ $dataEntry->user }}
      <td align="center" style="width:5%">{{ $dataEntry->emails }}</td>
      <td align="center" style="width:5%">{{ $dataEntry->calls}}</td>
      <td align="center" style="width:5%">{{ $dataEntry->demos }}</td>
      <td align="center" style="width:5%">{{ $dataEntry->trials }}</td>
      <td align="center" style="width:5%">{{ $dataEntry->deals }}</td></tr>
    @endforeach
</table>

<table style="float:right" frame="void" width="48%">
    <td align="center">Name</td>
    <td align="center" style="width:5%">Emails</td>
    <td align="center" style="width:5%">Calls</td>
    <td align="center" style="width:5%">Demos</td>
    <td align="center" style="width:5%">Trials</td>
    <td align="center" style="width:5%">Deals</td></tr>
    @foreach ($filteredData->pluck('user')->distinct() as $user)
      <td align="center"></td>
      <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('emails')->average() }}</td>
      <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('calls')->average() }}</td>
      <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('demos')->average() }}</td>
      <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('trials')->average() }}</td>
      <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('deals')->average() }}</td></tr>
    @endforeach
</table>

<table frame="void" width="100%" height="50px">
  <td align="center"><i>General overview</i></td>
</table>

<table frame="void" width="100%">
  <td align="center">Name</td>
  <td align="center">Period</td>
  <td align="center" style="width:5%">Emails</td>
  <td align="center" style="width:5%">Calls</td>
  <td align="center" style="width:5%">Demos</td>
  <td align="center" style="width:5%">Trials</td>
  <td align="center" style="width:5%">Deals</td>
  <td align="center" style="width:10%">Details</td>
  <td align="center" style="width:10%">Problems</td></tr>
  @foreach ($filteredData as $dataEntry)
    <td align="center">{{ $dataEntry->user }}</td>
    <td align="center">{{ $dataEntry->period }}</td>
    <td align="center" style="width:5%">{{ $dataEntry->emails }}</td>
    <td align="center" style="width:5%">{{ $dataEntry->calls}}</td>
    <td align="center" style="width:5%">{{ $dataEntry->demos }}</td>
    <td align="center" style="width:5%">{{ $dataEntry->trials }}</td>
    <td align="center" style="width:5%">{{ $dataEntry->deals }}</td>
    <td align="center" style="width:10%">
        @if ($dataEntry->notes != "")
          {{ $dataEntry->notes }}
        @else
          <i>n/a</i>
        @endif
    </td>
    <td align="center" style="width:10%">
        @if ($dataEntry->problems != "")
          {{ $dataEntry->problems }}
        @else
          <i>n/a</i>
        @endif
    </td></tr>
  @endforeach
</table><br><br>
