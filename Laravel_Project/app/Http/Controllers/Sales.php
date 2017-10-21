<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Model\Mdl_product;
use App\Model\Mdl_common;

class Sales extends Controller
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
		return View::make('pages.sales.sales',$data);
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
        //
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
        //
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
        //
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
