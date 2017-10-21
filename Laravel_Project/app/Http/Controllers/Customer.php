<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_customer;

class Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//echo "su..re"; die;
		$data['customer']=Mdl_customer::all();
		$data['page_title']='Customer';
		$data['alert_success']='';
		return View::make('pages.Customer.customer',$data);
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
        //echo "su..re"; die;
		$data=new Mdl_customer;
		$data->customer_name	= $request->txt_customer_name;
		$data->mobile_no		= $request->txt_mobile_no;
		$data->phone_no			= $request->txt_phone_no;
		$data->fax				= $request->txt_fax;
		$data->email			= $request->txt_email;
		$data->address			= $request->txt_address;
		$data->remarks			= $request->txt_remarks;
		$data->status			= $request->cbo_status;
		$data->inserted_by		= '1';
		$data->insert_date		= date("Y-m-d H:i:s");
		$data->save();
		return $this->list_view('Save Successfully...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo "su..re"; die;
		$data=Mdl_customer::find($_GET['id']);
		echo "$('#txt_customer_name').val('".$data['customer_name']."');\n";
		echo "$('#txt_mobile_no').val('".$data['mobile_no']."');\n";
		echo "$('#txt_phone_no').val('".$data['phone_no']."');\n";
		echo "$('#txt_fax').val('".$data['fax']."');\n";
		echo "$('#txt_email').val('".$data['email']."');\n";
		echo "$('#txt_address').val('".$data['address']."');\n";
		echo "$('#txt_remarks').val('".$data['remarks']."');\n";
		echo "$('#cbo_status').val('".$data['status']."');\n";
		echo "$('#txt_update_id').val('".$data['id']."');\n";
		echo "$('#btn_text').text('Update');\n";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //echo "su..re"; die;
		$data=Mdl_customer::find($request->txt_update_id);
		$data->customer_name	= $request->txt_customer_name;
		$data->mobile_no		= $request->txt_mobile_no;
		$data->phone_no			= $request->txt_phone_no;
		$data->fax				= $request->txt_fax;
		$data->email			= $request->txt_email;
		$data->address			= $request->txt_address;
		$data->remarks			= $request->txt_remarks;
		$data->status			= $request->cbo_status;
		$data->updated_by		= '1';
		$data->update_date		= date("Y-m-d H:i:s");
		$data->save();
		return $this->list_view('Updated Successfully...!');
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
	
	public function list_view($msg="")
    {
     	//echo "su..re"; die;
		$data['customer']=Mdl_customer::all();
		$data['page_title']='Customer';		
		$data['alert_success']=$msg;
		return View::make('pages.Customer.customer_form',$data);
    }
}
