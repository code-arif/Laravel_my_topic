<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class updatePasswordController extends Controller
{

    public function updatePassword()
    {
        return view('admin.auth.updatePassword');
    }
}
