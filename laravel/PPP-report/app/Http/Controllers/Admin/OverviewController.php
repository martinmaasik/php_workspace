<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin/overview/index');
    }

    public function filter(Request $request)
    {
        dd($request->all());
        return view('admin/overview/index');
    }


};
