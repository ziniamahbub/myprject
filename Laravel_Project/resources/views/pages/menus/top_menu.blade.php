<header class="main-header" style=" margin-bottom:15px;">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
           {!! Html::link('/inventory', 'INVENTORY')!!}
           <!--<a href="{{  url('') }}"></a>-->
          </li>
          <!--<li class="dropdown messages-menu">
           {!! Html::link('/hrm', 'HRM')!!} 
          </li>
          <li class="dropdown messages-menu">
           {!! Html::link('/admin', 'ADMIN')!!}
          </li>
          <li class="dropdown messages-menu">
            {!! Html::link('/report', 'REPORT')!!}
          </li>-->   
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="../dist/img/mnzaman.jpg" class="user-image" alt="User Image">-->
              <i class="glyphicon glyphicon-user"></i>
              <span class="hidden-xs">USER</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/mnzaman.jpg" class="img-circle" alt="User Image">
                <p>
                 Md. Nuruzzaman
                  <small>Software Engineer</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>