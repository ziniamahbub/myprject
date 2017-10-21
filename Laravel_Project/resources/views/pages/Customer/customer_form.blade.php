<div class="row">
    <div class="col-md-6">
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
        <div class="panel panel-default">
            <div class="panel-heading">
                {!! Form::button('<i class="fa fa-plus"></i> Add New',array('class'=>'btn btn-xs btn-dark btn-smglyphicon-plus pull-right','id'=>'btn-add')) !!}
            	<h4 class="panel-title">{!! $page_title !!}</h4>
            </div><!-- panel-heading -->
            <div class="panel-body">
            <table id="tblView" class="table table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                <thead class="">
                    <tr>
                        <th>Customer Name</th>
                        <th>Mobile No</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer as $row)
                    <tr>
                        <td>{!! $row['customer_name'] !!}</td>
                        <td>{!! $row['mobile_no'] !!}</td>
                        <td>{!! array_get(config('common_array.status'), $row['status']) !!}</td>
                        <td>
                        	{!! Form::button('<i class="fa fa-edit"></i>',array('class'=>'btn btn-xs btn-warning btn-edit','id'=>'btn-edit','data-edit-url'=>'customer_edit','data-edit-id'=>$row['id'])) !!}
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
        {!! Form::open(['class'=>'form-horizontal','id'=>'form_customer']) !!}
        <div class="panel panel-default">
            <div class="panel-heading">
            	<h4 class="panel-title">{!! $page_title !!}</h4>
            </div><!-- panel-heading -->
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-6">
                        {!! Form::label('txt_customer_name','Customer Name',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_customer_name','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('txt_mobile_no','Mobile No',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_mobile_no','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        {!! Form::label('txt_phone_no','Phone No',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_phone_no','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('txt_fax','Fax',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_fax','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        {!! Form::label('txt_email','Email',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_email','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('txt_address','Address',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_address','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        {!! Form::label('txt_remarks','Remarks',array('class'=>'control-label') )!!}
                        {!! Form::text('txt_remarks','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('cbo_status','Status',array('class'=>'control-label') )!!}
                        {!! Form::select('cbo_status', config('common_array.status'), '1', array('class' => 'form-control','style'=>'width:100%;')) !!}
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
                    	{!! Form::button('<i class="fa fa-check-circle"></i> <span id="btn_text">Save</span>',array('class'=>'btn btn-md btn-success btn-save','id'=>'btn-save','data-form-id'=>'form_customer','data-save-url'=>'customer_store','data-update-url'=>'customer_update')) !!}
                        {!! Form::button('<i class="fa fa-refresh"></i> Refresh',array('class'=>'btn btn-md btn-primary','type'=>'reset', 'id'=>'btn-refresh')) !!}
                        {!! Form::button('<i class="fa fa-times"></i> Cancel',array('class'=>'btn btn-md btn-danger btn-cancel','id'=>'btn-cancel','data-cancel-url'=>'customer_cancel')) !!}
                    </center> 
                </div><!-- row -->
            </div>
        </div><!-- panel -->
        {!! Form::close() !!}
    </div>
</div>