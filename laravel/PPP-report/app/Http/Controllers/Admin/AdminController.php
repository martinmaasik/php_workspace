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
        $allUserData = User::where('admin', "0")->get();
        return view('admin/edit-select', ['allUserData' => $allUserData]);
    }

    public function selectEdit(Request $request)
    {
        if ($request->button == "Delete")
        {
          User::where('email', $request->user)->delete();
          return redirect()->route('success');
        }
        else
        {
          $selectedUser = User::where('email', $request->user)->first();
          return view('admin/edit', ['selectedUser' => $selectedUser]);
        }
    }

    public function edit(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255', // this validator does not require unique email
                'password' => 'required|string|min:6|confirmed',
        ]);
        // so that admin could not change an user's email to an email address that is taken by another user already (basically another validator)
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

    public function success()
    {
        return view('admin/messages/success');
    }

    public function failed()
    {
        return view('admin/messages/failed');
    }

};
