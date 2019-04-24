<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
			<span>Halaman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-circle-o"></i>Admin</a></li>
            <li><a href="{{ url('/walikelas') }}"><i class="fa fa-circle-o"></i>Wali Kelas</a></li>
			<li><a href="{{ url('/guru') }}"><i class="fa fa-circle-o"></i>Guru</a></li>
            <li><a href="{{ url('/siswa') }}"><i class="fa fa-circle-o"></i>Siswa</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>