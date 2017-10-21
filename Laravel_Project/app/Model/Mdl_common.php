<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mdl_common extends Model
{
	public function get_product_category()
	{
		$sql=DB::select('SELECT id, category_name FROM inv_product_category WHERE status=1 AND is_deleted=0');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->category_name;	
		}
		return $data;
	}
	
	public function get_product_group()
	{
		$sql=DB::select('SELECT id, group_name FROM inv_product_group WHERE status=1 AND is_deleted=0');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->group_name;	
		}
		return $data;
	}
	
	public function get_country()
	{
		$sql=DB::select('SELECT id, name FROM lib_country WHERE status_active=1 AND is_deleted=0 ORDER BY name ASC');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->name;	
		}
		return $data;
	}
	
	public function get_brand()
	{
		$sql=DB::select('SELECT id, brand_name FROM inv_product_brand WHERE status=1 AND is_deleted=0 ORDER BY brand_name ASC');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->brand_name;	
		}
		return $data;
	}
	
	public function get_product_model()
	{
		$sql=DB::select('SELECT id, model_name FROM inv_product_model WHERE status=1 AND is_deleted=0 ORDER BY model_name ASC');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->model_name;	
		}
		return $data;
	}
	
	public function get_product_list()
	{
		$sql=DB::select('SELECT id, product_name FROM inv_product_list WHERE status=1 AND is_deleted=0 ORDER BY product_name ASC');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->product_name;	
		}
		return $data;
	}
	
	public function get_product_unit()
	{
		$sql=DB::select('SELECT id, unit_name FROM inv_product_unit WHERE status=1 AND is_deleted=0 ORDER BY unit_name ASC');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->unit_name;	
		}
		return $data;
	}
	
	public function get_supplier()
	{
		$sql=DB::select('SELECT id, customer_name FROM inv_customer WHERE status=1 AND is_deleted=0 ORDER BY customer_name ASC');
		$data[0]='-- Select --';
		foreach($sql as $row)
		{
			$data[$row->id]=$row->customer_name;	
		}
		return $data;
	}
			
	public function get_common_dynamic_dropdown($tableName, $parentIdColumn, $parentFieldValue, $optionValueColumn, $optionTextColumn)
	{
		$sql=DB::table($tableName)->where($parentIdColumn,$parentFieldValue)->orderBy($optionTextColumn,'asc')->get(array($optionValueColumn,$optionTextColumn));
		return json_encode($sql);
	}
}
