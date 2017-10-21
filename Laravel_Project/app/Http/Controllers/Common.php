<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//use Validator;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\View;
//use App\Model\Mdl_product_list;
use App\Model\Mdl_common;

class Common extends Controller
{
	public function common_dynamic_dropdown(Request $request)
    {
		$common=new Mdl_common;
		return $common->get_common_dynamic_dropdown($request->tableName, $request->parentIdColumn, $request->parentFieldValue, $request->optionValueColumn, $request->optionTextColumn);
    }
}