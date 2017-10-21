<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Customer</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>{!! Html::link("/customer","Customer")!!}</li>
          <li>{!! Html::link("/supplier","Supplier")!!}</li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>{!! Html::link("/product_category","Product Category")!!}</li>
          <li>{!! Html::link("/product_group","Product Group")!!}</li>
          <li>{!! Html::link("/product_list","Product List")!!}</li>
          <li>{!! Html::link("/product_unit","Product Unit")!!}</li>
          <li>{!! Html::link("/product_brand","Product Brand")!!}</li>
          <li>{!! Html::link("/product_model","Product Model")!!}</li>
          <li>{!! Html::link("/product","Product")!!}</li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-dashboard"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li>{!! Html::link("/sales","Sales")!!}</li>
        </ul>
      </li>
      <!--<li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Category One</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>{!! Html::link("/library/group","Sample one")!!}</li>
          <li>{!! Html::link("/library/division","Sample one")!!}</li>
          
        </ul>
      </li>-->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>