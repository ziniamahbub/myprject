@extends('layouts.layout')
@section('title','Welcome to my software')
@section('content')
	<!-- Content Wrapper. Contains page content -->
    <section>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Location</button>
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-btns">
                            <a href="#" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                            <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                        </div><!-- panel-btns -->
                        <h4 class="panel-title">All Location Information</h4>
                    </div><!-- panel-heading -->
                    <table  class="basicTable table table-striped table-bordered responsive">
                        <thead class="">
                            <tr>
                                <th>Location</th>
                                <th>Contact Person</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($location as $row)
                            <tr>
                                <td>{!! $row->location !!}</td>
                                <td>{!! $row->contact_person !!}</td>
                                <td>{!! array_get(config('common_array.status_active'), $row->status) !!}</td>
                                <td>
                                    <a href="{!! route('location.edit',$row->id) !!}" class="btn btn-primary btn-xs" data-target="#myModal_edit" data-toggle="modal">Edit</a>
                                    <a href="{!! route('location.show',$row->id) !!}" class="btn btn-primary btn-xs" data-target="#myModal_show" data-toggle="modal">Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <input type="hidden" name="id" id="id">
                </div><!-- panel -->
            </div>
        </div><!-- row -->

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog" style="width:">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Location</h4>
              </div>
              <div class="modal-body">
                {!! Form::open(array('url'=>'store','class'=>'form-horizontal'))!!}
                    <div class="form-group has-feedback">
                        {!! Form::label('txt_location','Location',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::text('txt_location','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                        {!! Form::label('txt_location_local','Location Local',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::text('txt_location_local','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::label('txt_contact_person','Contact Person',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::text('txt_contact_person','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                        {!! Form::label('txt_contact_no','Contact No',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::text('txt_contact_no','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                    </div>
                    <div class="form-group has-feedback">
                      	{!! Form::label('txt_email','E-mail',array('class'=>'col-sm-2 control-label') )!!}
                        <div class="col-sm-4">
                        	{!! Form::text('txt_email','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                        </div>
                        {!! Form::label('txt_website','Website',array('class'=>'col-sm-2 control-label') )!!}
                        <div class="col-sm-4">
                        	{!! Form::text('txt_website','',array('class'=>'form-control','style'=>'width:100%;')) !!}
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::label('txt_address','Address',array('class'=>'col-sm-2 control-label') )!!}
                        <div class="col-sm-4">
                            {!! Form::text('txt_address','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                        </div>
                      	{!! Form::label('txt_remarks','Remarks',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::text('txt_remarks','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::label('cbo_company_id','Company',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::select('cbo_company_id',config('common_array.company_array'), null, array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                        {!! Form::label('cbo_status','Status',array('class'=>'col-sm-2 control-label') )!!}
                      	<div class="col-sm-4">
                        	{!! Form::select('cbo_status', config('common_array.status_active'), '1', array('class' => 'form-control','style'=>'width:100%;')) !!}
                      	</div>
                    </div>
                    <div class="form-group ">
                      <div class="col-sm-12"></div>
                      <div class="col-sm-12 col-sm-offset-5" of>
                        <button type="submit" class="btn btn-primary active">Save</button>
                        <button type="button" class="btn btn-primary active">Reset</button>
                      </div>
                    </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
    
        <!-- Modal -->
        <div id="myModal_edit" class="modal fade" role="dialog" style="width:">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            </div>
          </div>
        </div>
        
        <!-- Modal -->
        <div id="myModal_show" class="modal fade" role="dialog" style="width:">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            </div>
          </div>
        </div>
    </section><!-- /.content -->
@endsection