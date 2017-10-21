<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_product_category;

class Product_category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "su..re"; die;
		$data['product_category']=Mdl_product_category::all();
		$data['page_title']='Product Category';
		$data['alert_success']='';
		return View::make('pages.Product.product_category',$data);
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
		$product_category=new Mdl_product_category;
		$product_category->category_name	= $request->txt_category_name;
		$product_category->remarks			= $request->txt_remarks;
		$product_category->status			= $request->cbo_status;
		$product_category->inserted_by		= '1';
		$product_category->insert_date		= date("Y-m-d H:i:s");
		$product_category->save();
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
		$product_category=Mdl_product_category::find($_GET['id']);
		echo "$('#txt_category_name').val('".$product_category['category_name']."');\n";
		echo "$('#txt_remarks').val('".$product_category['remarks']."');\n";
		echo "$('#cbo_status').val('".$product_category['status']."');\n";
		echo "$('#txt_update_id').val('".$product_category['id']."');\n";
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
		$product_category=Mdl_product_category::find($request->txt_update_id);
		$product_category->category_name	= $request->txt_category_name;
		$product_category->remarks			= $request->txt_remarks;
		$product_category->status			= $request->cbo_status;
		$product_category->updated_by		= '1';
		$product_category->update_date		= date("Y-m-d H:i:s");
		$product_category->save();
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
       	$product_category = Mdl_product_category::all();
		$data['product_category']=$product_category;
		$data['page_title']='Product Category';
		$data['alert_success']='';
		return View::make('pages.Product.product_category_form',$data); 
    }
}
