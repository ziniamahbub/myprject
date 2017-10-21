<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Location</h4>
</div>
<div class="modal-body">
	{!! Form::model($location, array('route' => array('location.update', $location->id), 'method' => 'PUT', 'class'=>'form-horizontal')) !!}
    <div class="form-group has-feedback">
        {!! Form::label('txt_location','Location',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_location',$location->location,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
        {!! Form::label('txt_location_local','Location Local',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_location_local',$location->location_local,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('txt_contact_person','Contact Person',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_contact_person',$location->contact_person,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
        {!! Form::label('txt_contact_no','Contact No',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_contact_no',$location->contact_no,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('txt_email','E-mail',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_email',$location->email,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
        {!! Form::label('txt_website','Website',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_website',$location->website,array('class'=>'form-control','style'=>'width:100%;')) !!}
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('txt_address','Address',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_address',$location->address,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
        {!! Form::label('txt_remarks','Remarks',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::text('txt_remarks',$location->remarks,array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('cbo_company_id','Company',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::select('cbo_company_id',config('common_array.company_array'), $location->company_id, array('class' => 'form-control','style'=>'width:100%;')) !!}
        </div>
        {!! Form::label('cbo_status','Status',array('class'=>'col-sm-2 control-label') ) !!}
        <div class="col-sm-4">
            {!! Form::select('cbo_status', config('common_array.status_active'), $location->status, array('class' => 'form-control','style'=>'width:100%;')) !!}
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
