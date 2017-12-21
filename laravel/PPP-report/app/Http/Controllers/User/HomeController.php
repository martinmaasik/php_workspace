<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if ( Auth::user()->admin == 1 )
        {
            return redirect()->route('admin.dashboard');
        }
        else {
            return view('user/home');
        };
    }
}
