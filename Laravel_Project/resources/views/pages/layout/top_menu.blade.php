<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
           {!! Html::link('/inventory', 'INVENTORY') !!}
           <!--<a href="{{  url('') }}"></a>-->
           <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory</a>-->
          </li>
          <li class="dropdown messages-menu">
          {!! Html::link('/logout', 'LOGOUT') !!}
          <!--<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>LOGOUT</a>-->
          </li>
        </ul>
      </div>
    </nav>
</header>