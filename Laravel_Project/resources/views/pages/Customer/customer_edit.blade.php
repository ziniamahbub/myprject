@extends('pages.layout.master')
@section('content')
<!--<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Default Modal</h4>
</div>-->
<div class="contentpanel">
<div class="row">
    <div class="col-md-6">
        {!! Form::open(array('url'=>'store','class'=>'form-horizontal'))!!}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><?php //echo $pageTitle; ?></h4>
                </div><!-- panel-heading -->
                <div class="panel-body">
                    <div class="row">
                    	<div class="form-group">
                            <div class="col-sm-6">
                                {!! Form::label('txt_location','Location',array('class'=>'control-label') )!!}
                                {!! Form::text('txt_location','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('txt_location_local','Location Local',array('class'=>'control-label') )!!}
                                {!! Form::text('txt_location_local','',array('class' => 'form-control','style'=>'width:100%;')) !!}
                            </div>
                        </div>
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
                    </div><!-- row -->
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <div class="row">
                        <center>
                        	<div style="display:none;">
                                <?php 
                                    /*$data=array('id'=>'txt_submodule_id','name'=>'txt_submodule_id','value'=>$addId,'class'=>'form-controll input-sm');
                                    echo form_input($data);*/ 
                                ?>
                            </div>
                            <button type="button" id="saveButton" data-save-action="<?php //echo base_url(); ?>admin/menu" class="btn btn-xs btn-success btn-save"><i class="fa fa-check-circle"></i>Save</button>
                            <button type="reset" class="btn btn-xs btn-dark">Reset</button>
                        </center> 
                    </div><!-- row -->
                </div><!-- panel-footer -->
            </div><!-- panel -->
        {!! Form::close() !!}
    </div>
</div><!-- row -->
</div>
@endsection