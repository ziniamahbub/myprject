<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$location = DB::select('select * from lib_location where status = ?', [1]);
        //return view('pages.libraries.location', ['location'=>$location]);
		//return view('pages.libraries.location');
		
		// get all the nerds
        $location = Location::all();
        // load the view and pass the nerds
        return View::make('pages.libraries.location')->with('location', $location);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//input = $request->all();
		$location 		= $request->input('txt_location');
		$location_local = $request->input('txt_location_local');
		$contact_person = $request->input('txt_contact_person');
		$contact_no 	= $request->input('txt_contact_no');
		$email 			= $request->input('txt_email');
		$website 		= $request->input('txt_website');
		$address 		= $request->input('txt_address');
		$remarks 		= $request->input('txt_remarks');
		$company_id 	= $request->input('cbo_company_id');
		$status 		= $request->input('cbo_status');
		
		DB::table('lib_location')->insert(['location'=>$location,'location_local'=>$location_local,'contact_person'=>$contact_person,'contact_no'=>$contact_no,'email'=>$email,'website'=>$website,'address'=>$address,'remarks'=>$remarks,'company_id'=>$company_id,'status'=>$status,'inserted_by'=>1,'insert_date'=>date("Y-m-d H:i:s")]);
		
		$locations = DB::select('select * from lib_location where status = ?', [1]);
        return view('pages.libraries.location', ['location'=>$locations]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "su..re";
		$location = Location::find($id);
		return View::make('pages.libraries.location_show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "su..re";
		//$location = DB::select('select * from lib_location where id = ?', [$id]);
        //return view('pages.libraries.location_edit', ['location'=>$location]);
		
		$location = Location::find($id);
		return View::make('pages.libraries.location_edit')->with('location', $location);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return "su..re";
		$location = location::find($id);
		$location		= $request->input('txt_location');
		$location_local = $request->input('txt_location_local');
		$contact_person = $request->input('txt_contact_person');
		$contact_no 	= $request->input('txt_contact_no');
		$email 			= $request->input('txt_email');
		$website 		= $request->input('txt_website');
		$address 		= $request->input('txt_address');
		$remarks 		= $request->input('txt_remarks');
		$company_id 	= $request->input('cbo_company_id');
		$status 		= $request->input('cbo_status');
		//$location->save();
		//redirect
		//Session::flash('message', 'Successfully updated nerd!');
		
		//$input = $request->all();
		//print_r($input);
		DB::table('lib_location')->where('id', $id)->update(['location'=>$location,'location_local'=>$location_local,'contact_person'=>$contact_person,'contact_no'=>$contact_no,'email'=>$email,'website'=>$website,'address'=>$address,'remarks'=>$remarks,'company_id'=>$company_id,'status'=>$status,'updated_by'=>1,'update_date'=>date("Y-m-d H:i:s")]);
		//return Redirect::to('location');
		
		// get all the nerds
        $location = Location::all();
        // load the view and pass the nerds
        return View::make('pages.libraries.location')->with('location', $location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
