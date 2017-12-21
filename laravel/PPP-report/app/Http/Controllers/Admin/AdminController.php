<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin/dashboard');
    }

    public function indexCreate()
    {
        return view('admin/create');
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails())
        {
              return redirect()->route('failed');
        }
        else
        {
              User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
              ]);
              return redirect()->route('success');
        }
    }

    public function indexEdit()
    {
        return view('admin/edit-select');
    }

    public function selectEdit()
    {
        return view('admin/edit');
    }

    public function edit(Request $request)
    {
        if ($request->delete == "on") {
              User::where('id', $request->id)->delete();
              return redirect()->route('success');
        }
        else
        {
              $data = $request->all();
              $validator = Validator::make($data, [
                      'name' => 'required|string|max:255',
                      'email' => 'required|string|email|max:255',
                      'password' => 'required|string|min:6|confirmed',
              ]);

              if ($validator->fails() || User::where('email', $request->email)->count() == 1 && User::where('email', $request->email)->where('id', $request->id)->count() == 0)
              {
                    return redirect()->route('failed');
              }
              else
              {
                    User::where('id', $request->id)->update([
                          'name' => $data['name'],
                          'email' => $data['email'],
                          'password' => bcrypt($data['password']),
                    ]);
                    return redirect()->route('success');
              }
        }
    }

    public function success()
    {
        return view('admin/messages/success');
    }

    public function failed()
    {
        return view('admin/messages/failed');
    }

};
