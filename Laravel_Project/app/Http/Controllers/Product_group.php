<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_product_group;
use App\Model\Mdl_common;

class Product_group extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $common=new Mdl_common;
		$data['product_group']=Mdl_product_group::all();
		$data['product_category']=$common->get_product_category();
		$data['page_title']='Product Group';
		$data['alert_success']='';
		return View::make('pages.Product.product_group',$data);
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
		$product_group=new Mdl_product_group;
		$product_group->category_id	= $request->cbo_category_id;
		$product_group->group_name	= $request->txt_group_name;
		$product_group->remarks		= $request->txt_remarks;
		$product_group->status		= $request->cbo_status;
		$product_group->inserted_by	= '1';
		$product_group->insert_date	= date("Y-m-d H:i:s");
		$product_group->save();
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
		$product_group=Mdl_product_group::find($_GET['id']);
		echo "$('#cbo_category_id').val('".$product_group['category_id']."');\n";
		echo "$('#txt_group_name').val('".$product_group['group_name']."');\n";
		echo "$('#txt_remarks').val('".$product_group['remarks']."');\n";
		echo "$('#cbo_status').val('".$product_group['status']."');\n";
		echo "$('#txt_update_id').val('".$product_group['id']."');\n";
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
		$product_group=Mdl_product_group::find($request->txt_update_id);
		$product_group->category_id	= $request->cbo_category_id;
		$product_group->group_name	= $request->txt_group_name;
		$product_group->remarks		= $request->txt_remarks;
		$product_group->status		= $request->cbo_status;
		$product_group->updated_by	= '1';
		$product_group->update_date	= date("Y-m-d H:i:s");
		$product_group->save();
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
		$data['product_group']=Mdl_product_group::all();
		$data['product_category']=$common->get_product_category();
		$data['page_title']='Product Group';
		$data['alert_success']='';
		return View::make('pages.Product.product_group_form',$data); 
    }
}
