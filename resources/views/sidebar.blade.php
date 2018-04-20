<?php
    if (Auth::guest()) {
       return redirect('auth.login');
    }else{

?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/bower_components/AdminLTE/dist/img/cat.jpg") }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">List Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="/"><span>Dashboard</span></a></li>

      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-tree-deciduous"></i> <span>Opsi Bantuan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="beri_bantuan"><i class="glyphicon glyphicon-adjust"></i> <span>Beri Bantuan</span></a></li>
          <li class="active"><a href="butuh_bantuan"><i class="glyphicon glyphicon-adjust"></i> <span>Butuh Bantuan</span></a></li>
        </ul>
      </li>

      <li><a href="chartjs"><span>Chart</span></a></li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<?php
}
?>