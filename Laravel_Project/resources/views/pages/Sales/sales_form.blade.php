<div class="row">
    <div class="col-md-12">
        <!-- Content Wrapper. Contains page content -->
        <div class="row">
            <div class="col-md-12">
                @if($alert_success)
                <div class="alert alert-success alert-dismissable">
                	{!! Form::button('&times;',array('class'=>'close','id'=>'btn-close','data-dismiss'=>'alert','aria-hidden'=>'true')) !!}
                    {!! $alert_success !!}
                </div>
            	@endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="form_container" style="display:none;">
                {!! Form::open(['class'=>'form-horizontal','id'=>'form_product']) !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">{!! $page_title !!}</h4>
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::label('cbo_category_id','Product Category',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_category_id',$product_category,'0',array('class'=>'form-control required_field','onchange'=>'fnc_common_dynamic_dropdown("cbo_category_id","cbo_group_id","inv_product_group","category_id","id","group_name","","")','style'=>'width:100%;')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('cbo_group_id','Product Group',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_group_id',$product_group,'0',array('class'=>'form-control required_field','onchange'=>'fnc_common_dynamic_dropdown("cbo_group_id","cbo_product_id","inv_product_list","group_id","id","product_name","","")','style'=>'width:100%;')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::label('cbo_brand_id','Brand Name',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_brand_id',$product_brand,'0',array('class'=>'form-control required_field','onchange'=>'fnc_common_dynamic_dropdown("cbo_brand_id","cbo_model_id","inv_product_model","brand_id","id","model_name","","")','style'=>'width:100%;')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('cbo_model_id','Model Name',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_model_id',$product_model,'0',array('class'=>'form-control required_field','style'=>'width:100%;')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::label('cbo_product_id','Product Name',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_product_id',$product_list,'0',array('class'=>'form-control required_field','style'=>'width:100%;')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('cbo_unit_id','Unit Name',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_unit_id',$product_unit,'0',array('class'=>'form-control required_field','style'=>'width:100%;')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::label('txt_product_quantity','Product Quantity',array('class'=>'control-label') )!!}
                                {!! Form::text('txt_product_quantity','',array('class'=>'form-control required_field','style'=>'width:100%;')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('txt_product_unit_price','Product Unit Price',array('class'=>'control-label') )!!}
                                {!! Form::text('txt_product_unit_price','',array('class'=>'form-control required_field','style'=>'width:100%;')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::label('txt_remarks','Remarks',array('class'=>'control-label') )!!}
                                {!! Form::text('txt_remarks','',array('class'=>'form-control','style'=>'width:100%;')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('cbo_status','Status',array('class'=>'control-label') )!!}
                                {!! Form::select('cbo_status', config('common_array.status'), '1', array('class'=>'form-control','style'=>'width:100%;')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <center>
                                <div class="col-sm-6" style="display:none;">
                                    {!! Form::label('txt_update_id','Update Id',array('class'=>'control-label') )!!}
                                    {!! Form::text('txt_update_id','',array('class'=>'form-control','style'=>'width:100%;')) !!}
                                </div>
                                {!! Form::button('<i class="fa fa-check-circle"></i> <span id="btn_text">Save</span>',array('class'=>'btn btn-md btn-success btn-save','id'=>'btn-save','data-form-id'=>'form_product','data-save-url'=>'product_store','data-update-url'=>'product_update')) !!}
                                {!! Form::button('<i class="fa fa-refresh"></i> Refresh',array('class'=>'btn btn-md btn-primary','type'=>'reset', 'id'=>'btn-refresh')) !!}
                                {!! Form::button('<i class="fa fa-times"></i> Cancel',array('class'=>'btn btn-md btn-danger btn-cancel','id'=>'btn-cancel','data-cancel-url'=>'product_cancel')) !!}
                            </center> 
                        </div><!-- row -->
                    </div>
                </div><!-- panel -->
                {!! Form::close() !!}
        	</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
            	<h4 class="panel-title">{!! $page_title !!}</h4>
            </div><!-- panel-heading -->
            <div class="panel-body">
                <table id="tblView" class="table table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                    <thead class="">
                        <tr>
                            <th>Sl</th>
                            <th>Category Name</th>
                            <th>Group Name</th>
                            <th>Brand Name</th>
                            <th>Model Name</th>
                            <th>Supplier Name</th>
                            <th>Product Name</th>
                            <th>Unit Name</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=0; @endphp
                        @foreach($product as $row)
                        <tr>
                            <td>{!! ++$i !!}</td>
                            <td>{!! array_get($product_category, $row['category_id']) !!}</td>
                            <td>{!! array_get($product_group, $row['group_id']) !!}</td>
                            <td>{!! array_get($product_brand, $row['brand_id']) !!}</td>
                            <td>{!! array_get($product_model, $row['model_id']) !!}</td>
                            <td>{!! array_get($supplier_id, $row['supplier_id']) !!}</td>
                            <td>{!! array_get($product_list,$row['product_id']) !!}</td>
                            <td>{!! array_get($product_unit, $row['unit_id']) !!}</td>
                            <td>{!! $row['product_quantity'] !!}</td>
                            <td>
                                {!! Form::button('<i class="fa fa-plus"></i> Pick',array('class'=>'btn btn-xs btn-dark btn-smglyphicon-plus pull-right','id'=>'btn-add')) !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- panel -->
    </div>
</div>