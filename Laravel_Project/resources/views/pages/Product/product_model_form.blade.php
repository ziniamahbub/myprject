<div class="row">
    <div class="col-md-6">
        <!-- Content Wrapper. Contains page content -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <button class="btn btn-xs btn-dark btn-smglyphicon-plus pull-right" onclick="fnc_add_data()"><i class="fa fa-plus"></i> Add New</button>
            	<h4 class="panel-title">{!! $page_title !!}</h4>
            </div><!-- panel-heading -->
            <div class="panel-body">
            <table id="tblView" class="table table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                <thead class="">
                    <tr>
                        <th>Sl</th>
                        <th>Brand Name</th>
                        <th>Model Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=0; @endphp
                    @foreach($info as $row)
                    <tr>
                        <td>{!! ++$i !!}</td>
                        <td>{!! array_get($brand,$row['brand_id']) !!}</td>
                        <td>{!! $row['model_name'] !!}</td>
                        <td>{!! array_get(config('common_array.status'), $row['status']) !!}</td>
                        <td>
                            {!! Form::button('<i class="fa fa-edit"></i>',array('class'=>'btn btn-xs btn-warning btn-edit','id'=>'btn-edit','data-edit-id'=>$row['id'],'data-edit-url'=>'product_model_edit')) !!}
                            <!--<button id="btn-edit" class="btn btn-xs btn-warning btn-edit" data-edit-id="{!! $row['id'] !!}" data-edit-url="product_model_edit"><i class="fa fa-edit"></i></button>-->
                            <a href="{!! route('customer_show.show',$row['id']) !!}" class="btn btn-xs btn-info" data-target="#myModal_show" data-toggle="modal"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div><!-- panel -->
    </div>
    <div class="col-md-6" id="form_container" style="display:none;">
        {!! Form::open(['class'=>'form-horizontal','id'=>'form_product_model']) !!}
        <div class="panel panel-default">
            <div class="panel-heading">
            	<h4 class="panel-title">{!! $page_title !!}</h4>
            </div><!-- panel-heading -->
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-6">
                        {!! Form::label('cbo_brand_id','Brand Name',array('class'=>'control-label') )!!}
                        {!! Form::select('cbo_brand_id', $brand, '0', array('class'=>'form-control','style'=>'width:100%;')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('txt_model_name','Model Name',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_model_name','',array('class'=>'form-control required_field','style'=>'width:100%;')) !!}
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
                        {!! Form::button('<i class="fa fa-check-circle"></i> <span id="btn_text">Save</span>',array('class'=>'btn btn-md btn-success btn-save','id'=>'btn-save','data-form-id'=>'form_product_model','data-save-url'=>'product_model_store','data-update-url'=>'product_model_update')) !!}
                        {!! Form::button('<i class="fa fa-refresh"></i> Refresh',array('class'=>'btn btn-md btn-primary','type'=>'reset', 'id'=>'btn-refresh')) !!}
                        {!! Form::button('<i class="fa fa-times"></i> Cancel',array('class'=>'btn btn-md btn-danger btn-cancel','id'=>'btn-cancel','data-cancel-url'=>'product_model_cancel')) !!}
                    </center> 
                </div><!-- row -->
            </div>
        </div><!-- panel -->
        {!! Form::close() !!}
    </div>
</div>