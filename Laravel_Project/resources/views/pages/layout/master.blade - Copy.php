<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $page_title or "ADMIN Dashboard" }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
  {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
  <!-- Ionicons -->
  {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
  <!-- Theme style -->
  {!! Html::style('dist/css/AdminLTE.min.css') !!}
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  {!! Html::style('dist/css/skins/_all-skins.min.css') !!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <?php //$pathsss=explode("/",Request::path()); ?>
  @php $pathsss=explode("/",Request::path()) @endphp
  @include('pages.layout.top_menu');
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('pages.layout.side_menu');
  <!-- side menu lood-->
  @if($pathsss[0] ==="hrm")
   @include('pages.menus.side_menu')
  @elseif ($pathsss[0] ==="report")
    @include('pages.menus.side_menu2')
  @elseif ($pathsss[0] ==="admin")
    @include('pages.menus.side_menu1')
  @elseif ($pathsss[0] ==="library")
    @include('pages.menus.side_menu3')
  @elseif ($pathsss[0] ==="inventory" || $pathsss[0] ==="customer" || $pathsss[0] ==="supplier")
    @include('pages.menus.inventory_menu')
  @endif
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>Page Header<small>Optional description</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>-->

    <!-- Main content -->
    <section class="content">
    <!-- Your Page Content Here -->
    <div class="row">
        <div class="col-md-12">
			<?php
            if($alert_success !="")
            {
                ?>
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                su..re
                </div>
                <?php
            }
            ?>
            <div id="page-content">        
            	@yield('content')
            </div>
        </div>
    </div>      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Md. Nuruzzaman</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!--<div class="control-sidebar-bg"></div>-->
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
{!! Html::script('plugins/jQuery/jquery-2.2.3.min.js') !!}
<!-- jQuery UI 1.11.4 -->
<!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
{!! Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<!-- Morris.js charts -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') !!}
<!--<script src="plugins/morris/morris.min.js"></script>-->
{!! Html::script('plugins/morris/morris.min.js') !!}
<!-- Sparkline -->
{!! Html::script('plugins/sparkline/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!! Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
<!-- jQuery Knob Chart -->
{!! Html::script('plugins/knob/jquery.knob.js') !!}
<!-- daterangepicker -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>-->
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js') !!}
{!! Html::script('plugins/daterangepicker/daterangepicker.js') !!}
<!-- datepicker -->
{!! Html::script('plugins/datepicker/bootstrap-datepicker.js') !!}
<!-- Bootstrap WYSIHTML5 -->
{!! Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
<!-- Slimscroll -->
{!! Html::script('plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('plugins/fastclick/fastclick.js') !!}
<!-- AdminLTE App -->
{!! Html::script('dist/js/app.min.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--{!! Html::script('dist/js/pages/dashboard.js') !!}-->
<!-- AdminLTE for demo purposes -->
{!! Html::script('dist/js/demo.js') !!} 
{!! Html::script('bootstrap/js/my_js.js') !!}
<script>
	/*$('#form_container').css('display', 'none');
	function fnc_add_data()
	{
		//alert("su..re");
		$('#form_container').css('display', 'block');
	}*/
	
$(document).on("click", "#btn-edit", function (e) {
	//alert("su..re");
	e.preventDefault();
	$('#form_container').css('display', 'block');
	var id=$(this).attr("data-edit-id");
	var edit_url=$(this).attr("data-edit-url");
	var form_id=$('#btn-save').attr("data-form-id");
	var update_url=$('#btn-save').attr("data-update-url");

	$.ajax({
		type		: 'GET',
		url			: "{{ url('') }}"+'/'+edit_url+'/{id}',
		data		: { id:id },
		success: function(data){
			//alert(data);
			//$('#form_supplier').removeAttr('action').attr('action',"{!! action('Supplier@update', ['id'=>1]) !!}");
			$('#'+form_id).removeAttr('action');
			//$('#btn-save').removeAttr('type').attr('type','button').attr('onclick','fnc_update('+id+')');
			//$('#btn-save').removeAttr('type').attr('type','button').removeAttr('data-save-url').attr('data-save-url',update_url);
			$('#btn-save').removeAttr('data-save-url').attr('data-save-url',update_url);
			eval(data);
		},
		error: function(data){
			alert("Error Occured");
		}
	});
});

$(document).on("click", "#btn-save", function (e) {
	//alert("su..re");
	e.preventDefault();
	var id=1;
	var form_id=$(this).attr("data-form-id");
	var formData=$('#'+form_id).serialize();
	var save_url=$(this).attr("data-save-url");
	$.ajax({
		type		: 'POST',
		url			: "{{ url('') }}"+'/'+save_url,
		data		: formData+'&id='+id,
		success: function(data){
			alert("Data Updated Successfully...!");
			$('#page-content').html(data);
		},
		error: function(data){
			alert("Error Occured");
		}
	});
});
</script>
</body>
</html>