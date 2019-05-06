<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="header">Anda Login Sebagai:</li>
        <li><a href="{{ url('home') }}"><i class="fa fa-user text-red"></i> <span>{{Auth::user()->users_usertypes->group_user}}</span></a></li>
        <li class="header">MAIN NAVIGATION</li>
		<li><a href="{{ url('home') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i>
			<span>Sekolah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('sekolah') }}"><i class="fa fa-circle-o"></i>Profile Sekolah</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
			<span>Konfigurasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('pengguna') }}"><i class="fa fa-circle-o"></i>Pengguna</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>