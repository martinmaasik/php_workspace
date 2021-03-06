<?php

namespace App\Http\Controllers\User\PPP;
use App\PPP_report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SubmitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        include(app_path().'/includes/dates.php');
        $lastWeekSubmitted = PPP_report::where('user', Auth::user()->name)->where('period', $lastWeek)->count();
        $thisWeekSubmitted = PPP_report::where('user', Auth::user()->name)->where('period', $thisWeek)->count();
        return view('user/PPP/submit-select-period', ['lastWeekSubmitted' => $lastWeekSubmitted,
                                                      'thisWeekSubmitted' => $thisWeekSubmitted]);
    }

    public function select (Request $request)
    {
        $halfSubmittedData = $request->all();
        return view('user/PPP/submit', ['halfSubmittedData' => $halfSubmittedData]);
    }

    public function submit (Request $request)
    {
        $PPP_report = new PPP_report;
        $PPP_report->user = $request->user;
        $PPP_report->period = $request->period;
        $PPP_report->period_start = $request->period_start;
        $PPP_report->period_end = $request->period_end;
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
