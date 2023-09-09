<?php

namespace App\Http\Controllers\admin;

use app\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // if($request->isMethod('post')){
        //     $data = $request->all();
        //     // echo '<pre>'; print_r($data); die;

        //     if (Auth::guard('admin')->attempt([
        //         'email'=>$data['email'],
        //         'password'=>$data['password']
        //     ])){
        //         return to_route('admin.dashboard.show');
        //     } else{
        //         return to_route('admin.login.show');
        //     }
        // }


        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => \request('email'),
            'password' => \request('password')

        ])) {
            return to_route('admin.dashboard.show');
        } else {
            return to_route('admin.login.show');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return to_route('admin.login.show');
    }
}
