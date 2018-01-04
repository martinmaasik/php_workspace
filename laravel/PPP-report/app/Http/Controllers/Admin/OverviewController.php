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
        $query = PPP_report::where('period', $thisWeek);
        return view('admin/overview/index', ['filteredData' => $query->get(),
                                            'distinctUsers' => $query->distinct()->pluck('user'),
                                            'unfiltered' => true]); // $unfiltered is being set to retrieve view with correct elements
    }

    public function filter(Request $request)
    {
        $data = $request->all();
        if (isset($request->start_date, $request->end_date, $request->users))
        {
            $query = PPP_report::whereIn('user', $request->users)
                                ->where('period_start', '>=', $request->start_date)
                                ->where('period_end', '<=', $request->end_date);
            return view('admin/overview/index', ['filteredData' => $query->get(),
                                                'distinctUsers' => $query->distinct()->pluck('user')]);
        }
        else
        {
            return view('admin/overview/index', ['filteredData' => NULL,
                                                'unsetCriteria' => true]); // $unsetCriteria is being set to retrieve view with correct elements
        }
    }

    public function indexTest()
    {
        return view('admin/overview/test');
    }
};
