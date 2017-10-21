<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\LibGroupDetails;
class LibraryController extends Controller
{
	public function index()
	{
		$all_data=LibGroupDetails::all();
		return view('pages.library.group_details')->with('details',$all_data);
	}
	
	public function store(Request $request)
	{
		$input=$request->all();
		$response=LibGroupDetails::create($input);
		$messages="Data Saved Successfully";
		if($response)
		{
			return redirect()->back()->with('msg',$messages);	
			//return redirect('/library/group')
		}
		
	}
	
	public function edit($id)
	{
		$getdata=LibGroupDetails::find($id);
		//print_r($getdata);
		return view('pages.library.group_details_edit')->with('editdata',$getdata);
		//return redirect('/library/group');
	}
	
	public function update(Request $request,$id)
	{
		$data=$request->all();
		$response=LibGroupDetails::find($id)->update($data);
		if($response)
		{
			//return redirect()->back();	
			return redirect('/library/group');	
		}
	}
	
	public function delete($id)
	{
		$getdata=LibGroupDetails::find($id);
		$response=$getdata->delete();
		if($response)
		{
			return redirect()->back();	
			//return redirect('/library/group');	
		}
	}
}
