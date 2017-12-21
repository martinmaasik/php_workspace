<?php

namespace App\Http\Controllers\User\PPP;

use Illuminate\Http\Request;
use App\PPP_report;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user/PPP/edit-select-period');
    }
    public function select (Request $request)
    {
        return view('user/PPP/edit');
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
