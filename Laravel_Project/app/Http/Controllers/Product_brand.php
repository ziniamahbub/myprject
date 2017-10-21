<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_product_brand;
use App\Model\Mdl_common;

class Product_brand extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "su..re"; die;
		$common=new Mdl_common;
		$data['country']=$common->get_country();
		$data['info']=Mdl_product_brand::all();
		$data['page_title']='Product Brand';
		$data['alert_success']='';
		return View::make('pages.Product.product_brand',$data);
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
		$rules=array('txt_brand_name'=>'unique:inv_product_brand,brand_name,NULL,id');
		$validator=Validator::make($request->all(), $rules);
		if ($validator->fails()) 
		{
			return "0*txt_brand_name";
			//return redirect()->back()->withErrors($validator)->withInput();
		}

		$data=new Mdl_product_brand;
		$data->brand_name	= $request->txt_brand_name;
		$data->country_id	= $request->cbo_country_id;
		$data->remarks		= $request->txt_remarks;
		$data->status		= $request->cbo_status;
		$data->inserted_by	= '1';
		$data->insert_date	= date("Y-m-d H:i:s");
		$data->save();
		return $this->list_view();
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
		$data=Mdl_product_brand::find($_GET['id']);
		echo "$('#txt_brand_name').val('".$data['brand_name']."');\n";
		echo "$('#cbo_country_id').val('".$data['country_id']."');\n";
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
		$rules = array('txt_brand_name'=>'unique:inv_product_brand,brand_name,'.$request->txt_update_id.',id');
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) 
		{
			return "0*txt_brand_name";
			//return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$data=Mdl_product_brand::find($request->txt_update_id);
		$data->brand_name	= $request->txt_brand_name;
		$data->country_id	= $request->cbo_country_id;
		$data->remarks		= $request->txt_remarks;
		$data->status		= $request->cbo_status;
		$data->updated_by	= '1';
		$data->update_date	= date("Y-m-d H:i:s");
		$data->save();
		return $this->list_view();
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
	
	public function list_view()
    {
		//echo "su..re"; die;
		$common=new Mdl_common;
		$data['country']=$common->get_country();
		$data['info']=Mdl_product_brand::all();
		$data['page_title']='Product Brand';
		$data['alert_success']='';
		return View::make('pages.Product.product_brand_form',$data); 
    }
}
