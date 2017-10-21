@extends('pages.layout.master')
@section('content')
	<!-- Content Wrapper. Contains page content -->
    <!-- Trigger the modal with a button -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <!--<div class="float_right" style="float:right;">-->
                <!--<span id="addButton" class="btn btn-xs btn-success btn-smglyphicon-plus" data-add-action=""><i class="fa fa-plus"></i> Add New</span>-->
                <!--<a href="##" class="btn btn-xs btn-success btn-smglyphicon-plus" data-target="#myModal" data-toggle="modal"><i class="fa fa-plus"></i> Add New</i></a>-->
                <button class="btn btn-xs btn-success btn-smglyphicon-plus pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add New</button>
                <!--<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">@lang("messages.Add Battalion")</button>-->
            <!--</div>-->
        <h4 class="panel-title">{!! $page_title !!}</h4>
        </div><!-- panel-heading -->
        <div class="panel-body">
        <table id="tblView" class="table btn-xs table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
            <thead class="">
                <tr>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($customer as $row)
                <tr>
                    <td>{!! $row['customer_id'] !!}</td>
                    <td>{!! $row['customer_name'] !!}</td>
                    <td>{!! array_get(config('common_array.status_active'), $row['status_active']) !!}</td>
                    <td>
                        <a href="{!! route('customer_edit.edit',$row['id']) !!}" class="btn btn-xs btn-warning" data-target="#myModal_edit" data-toggle="modal"><i class="fa fa-edit"></i></a>
                        <a href="{!! route('customer_show.show',$row['id']) !!}" class="btn btn-xs btn-info" data-target="#myModal_show" data-toggle="modal"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            	@endforeach
            </tbody>
        </table>
        </div>
    </div><!-- panel -->
    <!-- Modal -->
    <!--<div id="myModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel">-->
    <div id="myModal_edit" class="modal fade" role="dialog">
      <!--<div class="modal-dialog" role="document">-->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default Modal</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
@endsection