<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LibDivisionController extends Controller
{
    public function index(Request $request)
	{
		//$all_data=LibGroupDetails::all();
		return view('pages.library.division_details');
	}
	
	public function store(Request $request)
	{
		//$input=$request->all();
		//LibGroupDetails::create($input);
		//return view('pages.library.group_details');
		//redirect('/library/group');
	}
}
