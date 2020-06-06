<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()."assets/";?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo"<h3>" .$this->session->userdata('kode_resv')."</h3>";?><br/>
                  </p>

              <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">DIFATOURS MANAGEMENT</li>
            <li class="active treeview">
              <a href="<?php echo base_url('Admin');?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('user/detail_pemesanan/'.$this->session->userdata('kode_resv'));?>">
                <i class="fa fa-th"></i> <span>Detail Pemesanan</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('user/logout');?>">
                <i class="fa fa-th"></i> <span>Logout</span>
              </a>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>
