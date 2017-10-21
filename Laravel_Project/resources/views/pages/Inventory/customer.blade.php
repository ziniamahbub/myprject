@extends('pages.layout.master')
@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- Content Wrapper. Contains page content -->
        <!-- Trigger the modal with a button -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <!--<div class="float_right" style="float:right;">-->
                    <!--<span id="addButton" class="btn btn-xs btn-success btn-smglyphicon-plus" data-add-action=""><i class="fa fa-plus"></i> Add New</span>-->
                    <!--<a href="##" class="btn btn-xs btn-success btn-smglyphicon-plus" data-target="#myModal" data-toggle="modal"><i class="fa fa-plus"></i> Add New</i></a>-->
                    <button class="btn btn-xs btn-dark btn-smglyphicon-plus pull-right" onclick="fnc_add_data()"><i class="fa fa-plus"></i> Add New</button>
                    <!--<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">@lang("messages.Add Battalion")</button>-->
                <!--</div>-->
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
                            <button class="btn btn-xs btn-warning" onclick="fnc_set_data({!! $row['id'] !!})"><i class="fa fa-edit"></i></button>
                            <!--<a href="{!! route('customer_edit.edit',$row['id']) !!}" class="btn btn-xs btn-warning" data-target="#myModal_edit" data-toggle="modal"><i class="fa fa-edit"></i></a>-->
                            <!--<a href="{{ url('test/5') }}" class="btn btn-xs btn-warning" >check</a>-->
                            <a href="{!! route('customer_show.show',$row['id']) !!}" class="btn btn-xs btn-info" data-target="#myModal_show" data-toggle="modal"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div><!-- panel -->
    </div>
    <div class="col-md-6" id="form_container">
        {!! Form::open(['action' => 'Inventory@store','class'=>'form-horizontal']) !!}
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
                        <button type="submit" id="saveButton" class="btn btn-md btn-success btn-save"><i class="fa fa-check-circle"></i><span id="btn_text">Save</span></button>
                        <button type="reset" class="btn btn-md btn-primary">Reset</button>
                    </center> 
                </div><!-- row -->
            </div>
        </div><!-- panel -->
        {!! Form::close() !!}
    </div>
    <script>
		function fnc_set_data(id)
		{
			//alert(id);
			fnc_add_data();
			$.ajax({
				type		: 'GET',
				url			: "{{ url('/test/{id}') }}",
				data		: { id: id },
				success: function(data){
					//alert(data);
					eval(data);
				},
				error: function(data){
					alert("Error Occured");
				}
			});
		}
	</script>
@endsection