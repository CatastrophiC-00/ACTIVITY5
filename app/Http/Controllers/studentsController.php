<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class studentsController extends Controller
{
     public function index()
    {
		$students = DB::table('students')->get();
    	return $students;
    }
}
