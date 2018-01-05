@if (!isset($unfiltered))

    <table style="float:left" frame="void" width="48%">
        <td align="center" valign="bottom" height="40px"><i>Total</i></td>
    </table>

    <table style="float:right" frame="void" width="48%">
        <td align="center" valign="bottom" height="40px"><i>Average per week</i></td>
    </table>

    <table style="float:left" frame="void" width="48%">
        <td align="center">Name</td>
        <td align="center" style="width:5%">Emails</td>
        <td align="center" style="width:5%">Calls</td>
        <td align="center" style="width:5%">Demos</td>
        <td align="center" style="width:5%">Trials</td>
        <td align="center" style="width:5%">Deals</td></tr>
        @foreach ($distinctUsers as $user)
          <td align="center">{{ $user }}</td>
          <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('emails')->sum() }}</td>
          <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('calls')->sum() }}</td>
          <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('demos')->sum() }}</td>
          <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('trials')->sum() }}</td>
          <td align="center" style="width:5%">{{ $filteredData->where('user', $user)->pluck('deals')->sum() }}</td></tr>
        @endforeach
    </table>

    <table style="float:right" frame="void" width="48%">
        <td align="center">Name</td>
        <td align="center" style="width:5%">Emails</td>
        <td align="center" style="width:5%">Calls</td>
        <td align="center" style="width:5%">Demos</td>
        <td align="center" style="width:5%">Trials</td>
        <td align="center" style="width:5%">Deals</td></tr>
        @foreach ($distinctUsers as $user)
          <td align="center">{{ $user }}</td>
          <td align="center" style="width:5%">{{ (round($filteredData->where('user', $user)->pluck('emails')->average(),1)) }}</td>
          <td align="center" style="width:5%">{{ (round($filteredData->where('user', $user)->pluck('calls')->average(),1)) }}</td>
          <td align="center" style="width:5%">{{ (round($filteredData->where('user', $user)->pluck('demos')->average(),1)) }}</td>
          <td align="center" style="width:5%">{{ (round($filteredData->where('user', $user)->pluck('trials')->average(),1)) }}</td>
          <td align="center" style="width:5%">{{ (round($filteredData->where('user', $user)->pluck('deals')->average(),1)) }}</td></tr>
        @endforeach
    </table>

@endif

<table frame="void" width="100%" height="40px">
  <td align="center" valign="bottom"><i>
    General overview
      @if (isset($unfiltered))
        <small>(ongoing week)</small>
      @endif
  </i></td>
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
          <div class="tooltip">Hover over me
              <span class="tooltiptext">Tooltip text</span>
          </div>
        @else
          <i>n/a</i>
        @endif
    </td></tr>
  @endforeach
</table><br><br>
