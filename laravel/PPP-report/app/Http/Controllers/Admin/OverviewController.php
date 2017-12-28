<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\PPP_report;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function indexOverview()
    {
        return view('admin/overview/index');
    }

    public function filter(Request $request)
    {
        $data = $request->all();
        $filteredStartDate = date("Y-m-d", strtotime($data['start-date']));
        $filteredEndDate = date("Y-m-d", strtotime($data['end-date']));
        $filteredUsers = array_keys($data);
        unset($filteredUsers[0], $filteredUsers[1], $filteredUsers[2]);
        $filteredData = PPP_report::whereIn('user', $filteredUsers)->where('period_start', '>=', $filteredStartDate)->where('period_end', '<=', $filteredEndDate)->get();

        return view('admin/overview/index', ['filteredData' => $filteredData]);
    }

    public function indexTest()
    {
        return view('admin/overview/test');
    }

    public function postTest(Request $request)
    {
        dd($request->all());
    }

};
