@extends('layouts.layout')
@section('title','Group Details')
@section('content')
<?php //$status=array('0'=>'--Select--','1'=>'Active','2'=>'Inactive')?>

	<fieldset style="width:700px;">
    	<legend>Division Details</legend>
    	{!! Form::open(array('url'=>'/division_detail_insert'))!!}
        	<table style="width:650px;">
            	<tr>
                	<td align="right">{!! Form::label('group_name', 'Group Name ') !!}</td>
                    <td width="150px;">{!! Form::text('group_name','',array('class' => 'text_boxes','style'=>'width:150px;')) !!}</td>
                    <td align="right">{!! Form::label('group_name_local', 'Group Name Local ') !!}</td>
                    <td width="150px;">{!! Form::text('group_name_local','',array('class' => 'text_boxes','style'=>'width:150px;')) !!}</td>
                </tr>
                <tr>
                	<td align="right">{!! Form::label('contact_number','Contact Number ') !!}</td>
                    <td>{!! Form::text('contact_number','',array('class' => 'text_boxes_numeric','style'=>'width:150px;')) !!}</td>
                    <td align="right">{!! Form::label('contact_person', 'Contact Person ') !!}</td>
                    <td>{!! Form::text('contact_person','',array('class' => 'text_boxes','style'=>'width:150px;')) !!}</td>
                </tr>
                <tr>
                	<td style="text-align:center;"colspan="4">
                    	{!! Form::submit('Save',array('class' => 'formbutton','style'=>'width:80px;')) !!}
                        {!! Form::submit('Update',array('class' => 'formbutton','style'=>'width:80px;')) !!}
                    </td>
                </tr>
            </table>
        {!! Form::close()!!}
      </fieldset>
      <fieldset style="width:700px;">
      	<legend>List View</legend>
      	<table class="rpt_table" width="700" style="height:200px;"  cellspacing="0" cellpadding="0" border="0" rules="all">
        	<thead>
            	<tr>
                	<th>SL</th>
                    <th>Group Name</th>
                    <th>Contact Person</th>
                    <th>Contact no</th>
                    <th>Website</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>            
        </table>
      </fieldset>

@endsection