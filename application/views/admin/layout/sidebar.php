<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()."assets/";?>dist/img/user.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('username');?></p>

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
              <!--<ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>-->
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-car"></i> <span>Data Master</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('Admin/view_pelanggan');?>"><i class="fa fa-user"></i> Pelanggan</a></li>
                <li><a href="<?php echo base_url('Admin/view_supir');?>"><i class="fa fa-user"></i> Supir</a></li>
                <li><a href="<?php echo base_url('Admin/view_kendaraan');?>"><i class="fa fa-bus"></i> Kendaraan</a></li>
                <li><a href="<?php echo base_url('Admin/view_reservasi');?>"><i class="fa fa-book"></i> Reservasi</a></li>
                <li><a href="<?php echo base_url('Admin/view_user')?>"><i class="fa fa-user"></i> User</a></li>
                <li><a href="<?php echo base_url('Admin/view_mail')?>"><i class="fa fa-check"></i> Mail</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-car"></i> <span>Modul</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('Admin/view_alokasi');?>"><i class="fa fa-book"></i> Pemesanan</a></li>
                <li><a href="<?php echo base_url('Admin/view_pemeliharaan');?>"><i class="fa fa-wrench"></i> Pemeliharaan</a></li>
                <li><a href="<?php echo base_url('Admin/view_tour_paket');?>"><i class="fa fa-file-text-o"></i>Tour Paket</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('Admin/view_laporan_pemesanan');?>"><i class="fa fa-user"></i> Pemesanan</a></li>
                <li><a href="<?php echo base_url('Admin/view_laporan_keuangan');?>"><i class="fa fa-usd"></i> Keuangan</a></li>
                <li><a href="<?php echo base_url('Admin/view_laporan_pemeliharaan');?>"><i class="fa fa-wrench"></i>Pemeliharaan</a></li>
              </ul>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>
