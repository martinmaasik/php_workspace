<?php

namespace App\Http\Controllers\User\PPP;

use Illuminate\Http\Request;
use App\PPP_report;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user/PPP/view-select-period');
    }
    public function view (Request $request)
    {
        return view('user/PPP/view');
    }
}
