<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>

      <li>
        <a href="<?= site_url('ValidarControl/index') ?>">
          <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Validar</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Pacientes</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= site_url('UsuarioControl/vistaRegistrar') ?>"><i class="fa fa-user-plus" aria-hidden="true"></i></i>Agregar</a></li>
          <li><a href="<?= site_url('UsuarioControl/index') ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Editar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Usuarios</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= site_url('UsuarioControl/vistaRegistrar') ?>"><i class="fa fa-user-plus" aria-hidden="true"></i></i>Agregar</a></li>
          <li><a href="<?= site_url('UsuarioControl/index') ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Editar</a></li>
        </ul>
      </li>

      <li>
        <a href="<?= site_url('EspecialidadControl/index') ?>">
          <i class="fa fa-plus-square" aria-hidden="true"></i> <span>Especialidad</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>

      <li>
        <a href="<?= site_url('EspecialidadControl/index') ?>">
          <i class="fa fa-university" aria-hidden="true"></i> <span>Empresa</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>



      <li class="treeview">
        <a href="#">
          <i class="fa fa-bar-chart" aria-hidden="true"></i>
          <span>UI Elements</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
          <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
          <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
      </li>

      <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>