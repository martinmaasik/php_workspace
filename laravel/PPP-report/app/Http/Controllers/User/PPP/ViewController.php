<?php

namespace App\Http\Controllers\User\PPP;
use Illuminate\Http\Request;
use App\PPP_report;
use App\Http\Controllers\Controller;
use Auth;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $viewableReports = PPP_report::where('user', Auth::user()->name)->pluck('period');
        return view('user/PPP/view-select-period', ['viewableReports' => $viewableReports]);
    }
    public function view (Request $request)
    {
        $selectedViewableReport = PPP_report::where('period', $request->period)->first();
        return view('user/PPP/view', ['selectedViewableReport' => $selectedViewableReport]);
    }
}
