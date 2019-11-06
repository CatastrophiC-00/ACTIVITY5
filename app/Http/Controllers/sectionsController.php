<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class sectionsController extends Controller
{
    public function index()
    {
		$students = DB::table('students')->get();
		$sections = DB::table('sections')->get();
    	return view('sections.index', compact('sections', 'students'));
    }
}
