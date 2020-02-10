 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
          <li>
            <a href="{{ url('/frontend/categories') }}">
              <i class="fa fa-users"></i> <span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/frontend/products') }}">
              <i class="fa fa-ticket"></i> <span>Products</span>
            </a>
          </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  