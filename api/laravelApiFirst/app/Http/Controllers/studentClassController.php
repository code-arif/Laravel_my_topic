<?php

namespace App\Http\Controllers;

use App\Models\student_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentClassController extends Controller
{
    public function index(){
        // $class = DB::table('student_classes')->get();
        // return response()->json($class);
        return student_class::all();
    }
}
