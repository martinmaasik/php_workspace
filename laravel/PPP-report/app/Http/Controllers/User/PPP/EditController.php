<?php

namespace App\Http\Controllers\User\PPP;
use Illuminate\Http\Request;
use App\PPP_report;
use App\Http\Controllers\Controller;
use Auth;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        include(app_path().'/includes/dates.php');
        $editableReports = PPP_report::where('user', Auth::user()->name)->where('period', $lastWeek)
                        ->orwhere('user', Auth::user()->name)->where('period', $thisWeek)
                        ->pluck('period');
        return view('user/PPP/edit-select-period', ['editableReports' => $editableReports]);
    }
    public function select (Request $request)
    {
        $selectedEditableReport = PPP_report::where('period', $request->period)->first();
        return view('user/PPP/edit', ['selectedEditableReport' => $selectedEditableReport]);
    }
    public function submit (Request $request)
    {
      $PPP_report = PPP_report::where('user', $request->user)->where('period', $request->period)->first();
      $PPP_report->emails = $request->emails;
      $PPP_report->calls = $request->calls;
      $PPP_report->demos = $request->demos;
      $PPP_report->trials = $request->trials;
      $PPP_report->deals = $request->deals;
      $PPP_report->notes = $request->notes;
      $PPP_report->problems = $request->problems;
      $PPP_report->remember_token = $request->_token;
      $PPP_report->save();
      return redirect()->route('home');
    }
}
