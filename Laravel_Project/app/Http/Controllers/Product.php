<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_product;
use App\Model\Mdl_common;

class Product extends Controller
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
		$data['product_category']=$common->get_product_category();
		$data['product_group']=$common->get_product_group();
		$data['product_brand']=$common->get_brand();
		$data['product_model']=$common->get_product_model();
		$data['product_list']=$common->get_product_list();
		$data['product_unit']=$common->get_product_unit();
		$data['supplier_id']=$common->get_supplier();
		$data['product']=Mdl_product::all();
		$data['page_title']='Product';
		$data['alert_success']='';
		return View::make('pages.Product.product',$data);
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
		$data=new Mdl_product;
		$data->category_id			= $request->cbo_category_id;
		$data->group_id				= $request->cbo_group_id;
		$data->brand_id				= $request->cbo_brand_id;
		$data->model_id				= $request->cbo_model_id;
		$data->product_id			= $request->cbo_product_id;
		$data->unit_id				= $request->cbo_unit_id;
		$data->product_quantity		= $request->txt_product_quantity;
		$data->product_unit_price	= $request->txt_product_unit_price;
		$data->product_total_price	= $request->txt_product_quantity*$request->txt_product_unit_price;
		$data->supplier_id			= $request->cbo_supplier_id;
		$data->remarks				= $request->txt_remarks;
		$data->status				= $request->cbo_status;
		$data->inserted_by			= '1';
		$data->insert_date			= date("Y-m-d H:i:s");
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
		$data=Mdl_product::find($_GET['id']);
		echo "$('#cbo_category_id').val('".$data['category_id']."');\n";
		echo "$('#cbo_group_id').val('".$data['group_id']."');\n";
		echo "$('#cbo_brand_id').val('".$data['brand_id']."');\n";
		echo "$('#cbo_model_id').val('".$data['model_id']."');\n";
		echo "$('#cbo_product_id').val('".$data['product_id']."');\n";
		echo "$('#cbo_unit_id').val('".$data['unit_id']."');\n";
		echo "$('#txt_product_quantity').val('".$data['product_quantity']."');\n";
		echo "$('#txt_product_unit_price').val('".$data['product_unit_price']."');\n";
		echo "$('#cbo_supplier_id').val('".$data['supplier_id']."');\n";
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
		$data=Mdl_product::find($request->txt_update_id);
		$data->category_id			= $request->cbo_category_id;
		$data->group_id				= $request->cbo_group_id;
		$data->brand_id				= $request->cbo_brand_id;
		$data->model_id				= $request->cbo_model_id;
		$data->product_id			= $request->cbo_product_id;
		$data->unit_id				= $request->cbo_unit_id;
		$data->product_quantity		= $request->txt_product_quantity;
		$data->product_unit_price	= $request->txt_product_unit_price;
		$data->product_total_price	= $request->txt_product_quantity*$request->txt_product_unit_price;
		$data->supplier_id			= $request->cbo_supplier_id;
		$data->remarks				= $request->txt_remarks;
		$data->status				= $request->cbo_status;
		$data->updated_by			= '1';
		$data->update_date			= date("Y-m-d H:i:s");
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
		$common=new Mdl_common;
		$data['product_category']=$common->get_product_category();
		$data['product_group']=$common->get_product_group();
		$data['product_brand']=$common->get_brand();
		$data['product_model']=$common->get_product_model();
		$data['product_list']=$common->get_product_list();
		$data['product_unit']=$common->get_product_unit();
		$data['supplier_id']=$common->get_supplier();
		$data['product']=Mdl_product::all();
		$data['page_title']='Product';
		$data['alert_success']=$msg;
		return View::make('pages.Product.product_form',$data);
    }
}
