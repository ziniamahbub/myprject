<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::auth();
Route::get('/', function(){ return view('auth.login'); });
Route::get('/home', 'HomeController@index');

Route::get('hello', function(){
	echo "Test route";
});

/*
|--------------------------------------------------------------------------
| Common
|--------------------------------------------------------------------------
*/
Route::post('/common_dynamic_dropdown', 'Common@common_dynamic_dropdown');


/*
|--------------------------------------------------------------------------
| dashboard
|--------------------------------------------------------------------------
*/
//Route::get('/', function(){ return view('pages.dashboard.dashboard')->with('alert_success',''); });
Route::get('/dashboard', function(){ return view('pages.dashboard.dashboard')->with('alert_success',''); });


/*
|--------------------------------------------------------------------------
| Inventory
|--------------------------------------------------------------------------
*/
Route::resource('/inventory','Inventory@index');
Route::resource('/customer_show','Inventory@customer_show');


/*
|--------------------------------------------------------------------------
| Customer
|--------------------------------------------------------------------------
*/
Route::resource('/customer','Customer@index');
Route::post('customer_store','Customer@store');
Route::get('/customer_edit/{id}','Customer@edit');
Route::post('customer_update','Customer@update');
Route::get('/customer_cancel','Customer@list_view');


/*
|--------------------------------------------------------------------------
| Supplier
|--------------------------------------------------------------------------
*/
Route::resource('/supplier','Supplier@index');
Route::post('supplier_store','Supplier@store');
Route::get('/supplier_edit/{id}','Supplier@edit');
Route::post('supplier_update','Supplier@update');
Route::get('/supplier_cancel','Supplier@list_view');


/*
|--------------------------------------------------------------------------
| Product Category
|--------------------------------------------------------------------------
*/
Route::resource('/product_category','Product_category@index');
Route::post('product_category_store','Product_category@store');
Route::get('/product_category_edit/{id}','Product_category@edit');
Route::post('product_category_update','Product_category@update');
Route::get('/product_category_cancel','Product_category@list_view');


/*
|--------------------------------------------------------------------------
| Product Group
|--------------------------------------------------------------------------
*/
Route::resource('/product_group','Product_group@index');
Route::post('product_group_store','Product_group@store');
Route::get('/product_group_edit/{id}','Product_group@edit');
Route::post('product_group_update','Product_group@update');
Route::get('/product_group_cancel','Product_group@list_view');


/*
|--------------------------------------------------------------------------
| Product List
|--------------------------------------------------------------------------
*/
Route::resource('/product_list','Product_list@index');
Route::post('product_list_store','Product_list@store');
Route::get('/product_list_edit/{id}','Product_list@edit');
Route::post('product_list_update','Product_list@update');
Route::get('/product_list_cancel','Product_list@list_view');


/*
|--------------------------------------------------------------------------
| Product Unit
|--------------------------------------------------------------------------
*/
Route::resource('/product_unit','Product_unit@index');
Route::post('product_unit_store','Product_unit@store');
Route::get('/product_unit_edit/{id}','Product_unit@edit');
Route::post('product_unit_update','Product_unit@update');
Route::get('/product_unit_cancel','Product_unit@list_view');


/*
|--------------------------------------------------------------------------
| Product Brand
|--------------------------------------------------------------------------
*/
Route::resource('/product_brand','Product_brand@index');
Route::post('product_brand_store','Product_brand@store');
Route::get('/product_brand_edit/{id}','Product_brand@edit');
Route::post('product_brand_update','Product_brand@update');
Route::get('/product_brand_cancel','Product_brand@list_view');


/*
|--------------------------------------------------------------------------
| Product Model
|--------------------------------------------------------------------------
*/
Route::resource('/product_model','Product_model@index');
Route::post('product_model_store','Product_model@store');
Route::get('/product_model_edit/{id}','Product_model@edit');
Route::post('product_model_update','Product_model@update');
Route::get('/product_model_cancel','Product_model@list_view');


/*
|--------------------------------------------------------------------------
| Product
|--------------------------------------------------------------------------
*/
Route::resource('/product','Product@index');
Route::post('product_store','Product@store');
Route::get('/product_edit/{id}','Product@edit');
Route::post('product_update','Product@update');
Route::get('/product_cancel','Product@list_view');


/*
|--------------------------------------------------------------------------
| Sales
|--------------------------------------------------------------------------
*/
Route::resource('/sales','Sales@index');
Route::post('sales_store','Sales@store');
Route::get('/sales_edit/{id}','Sales@edit');
Route::post('sales_update','Sales@update');
Route::get('/sales_cancel','Sales@list_view');
Route::auth();

Route::get('/home', 'HomeController@index');
