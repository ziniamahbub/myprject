<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_supplier;

class Supplier extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "su..re"; die;
		$supplier = Mdl_supplier::all();
		$data['supplier']=$supplier;
		$data['page_title']='Supplier';
		$data['alert_success']='';
		return View::make('pages.Supplier.supplier',$data);
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
		$supplier=new Mdl_supplier;
		$supplier->supplier_name	= $request->txt_supplier_name;
		$supplier->contact_person	= $request->txt_contact_person;
		$supplier->mobile_no		= $request->txt_mobile_no;
		$supplier->phone_no			= $request->txt_phone_no;
		$supplier->fax				= $request->txt_fax;
		$supplier->email			= $request->txt_email;
		$supplier->address			= $request->txt_address;
		$supplier->remarks			= $request->txt_remarks;
		$supplier->status			= $request->cbo_status;
		$supplier->inserted_by		= '1';
		$supplier->insert_date		= date("Y-m-d H:i:s");
		$supplier->save();
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
		$supplier=Mdl_supplier::find($_GET['id']);
		echo "$('#txt_supplier_name').val('".$supplier['supplier_name']."');\n";
		echo "$('#txt_contact_person').val('".$supplier['contact_person']."');\n";
		echo "$('#txt_mobile_no').val('".$supplier['mobile_no']."');\n";
		echo "$('#txt_phone_no').val('".$supplier['phone_no']."');\n";
		echo "$('#txt_fax').val('".$supplier['fax']."');\n";
		echo "$('#txt_email').val('".$supplier['email']."');\n";
		echo "$('#txt_address').val('".$supplier['address']."');\n";
		echo "$('#txt_remarks').val('".$supplier['remarks']."');\n";
		echo "$('#cbo_status').val('".$supplier['status']."');\n";
		echo "$('#txt_update_id').val('".$supplier['id']."');\n";
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
        //echo "su..re".$request->txt_update_id;  die;
		$supplier=Mdl_supplier::find($request->txt_update_id);
		$supplier->supplier_name	= $request->txt_supplier_name;
		$supplier->contact_person	= $request->txt_contact_person;
		$supplier->mobile_no		= $request->txt_mobile_no;
		$supplier->phone_no			= $request->txt_phone_no;
		$supplier->fax				= $request->txt_fax;
		$supplier->email			= $request->txt_email;
		$supplier->address			= $request->txt_address;
		$supplier->remarks			= $request->txt_remarks;
		$supplier->status			= $request->cbo_status;
		$supplier->updated_by		= '1';
		$supplier->update_date		= date("Y-m-d H:i:s");
		$supplier->save();
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
		$supplier = Mdl_supplier::all();
		$data['supplier']=$supplier;
		$data['page_title']='Supplier';
		$data['alert_success']=$msg;
		return View::make('pages.Supplier.supplier_form',$data);    
	}
}
