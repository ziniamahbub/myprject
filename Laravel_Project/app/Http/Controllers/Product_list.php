<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_product_list;
use App\Model\Mdl_common;

class Product_list extends Controller
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
		$data['category']=$common->get_product_category();
		$data['group']=$common->get_product_group();
		$data['info']=Mdl_product_list::all();
		$data['page_title']='Product List';
		$data['alert_success']='';
		return View::make('pages.Product.product_list',$data);
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
		$rules=array('txt_product_name'=>'unique:inv_product_list,product_name,NULL,id');
		$validator=Validator::make($request->all(), $rules);
		if ($validator->fails()) 
		{
			return "0*txt_product_name";
			//return redirect()->back()->withErrors($validator)->withInput();
		}

		$data=new Mdl_product_list;
		$data->category_id	= $request->cbo_category_id;
		$data->group_id		= $request->cbo_group_id;
		$data->product_name	= $request->txt_product_name;
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
		$data=Mdl_product_list::find($_GET['id'],array('id','category_id','group_id','product_name','remarks','status'));
		echo "$('#cbo_category_id').val('".$data['category_id']."');\n";
		echo "$('#cbo_group_id').val('".$data['group_id']."');\n";
		echo "$('#txt_product_name').val('".$data['product_name']."');\n";
		echo "$('#txt_remarks').val('".$data['remarks']."');\n";
		echo "$('#cbo_status').val('".$data['status']."');\n";
		echo "$('#txt_update_id').val('".$data['id']."');\n";
		//echo "fnc_common_dynamic_dropdown('cbo_category_id','cbo_group_id','inv_product_group','category_id','id','group_name','".$data['group_id']."','".$data['category_id']."');\n";
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
		$rules = array('txt_product_name'=>'unique:inv_product_list,product_name,'.$request->txt_update_id.',id');
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) 
		{
			return "0*txt_product_name";
			//return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$data=Mdl_product_list::find($request->txt_update_id);
		$data->category_id	= $request->cbo_category_id;
		$data->group_id		= $request->cbo_group_id;
		$data->product_name	= $request->txt_product_name;
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
		$common=new Mdl_common;
		$data['category']=$common->get_product_category();
		$data['group']=$common->get_product_group();
		$data['info']=Mdl_product_list::all();
		$data['page_title']='Product List';
		$data['alert_success']='';
		return View::make('pages.Product.product_list_form',$data); 
    }
}
