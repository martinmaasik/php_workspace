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
        include(app_path().'/includes/dates.php');
        $filteredData = PPP_report::where('period', $thisWeek)->get();
        $unfiltered = true;
        return view('admin/overview/index', ['filteredData' => $filteredData,
                                            'unfiltered' => $unfiltered]);
    }

    public function filter(Request $request)
    {
        $data = $request->all();
        if (isset($request->start_date, $request->end_date, $request->users))
        {
            $filteredData = PPP_report::whereIn('user', $request->users)->where('period_start', '>=', $request->start_date)->where('period_end', '<=', $request->end_date)->get();
            return view('admin/overview/index', ['filteredData' => $filteredData]);
        }
        else
        {
            $filteredData = NULL;
            $unsetCriteria = true;
            return view('admin/overview/index', ['filteredData' => $filteredData,
                                                'unsetCriteria' => $unsetCriteria]);
        }
    }

    public function indexTest()
    {
        return view('admin/overview/test');
    }
};
