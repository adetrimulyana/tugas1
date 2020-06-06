<header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>MGT</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>DIFATOURS BDG </b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<img src="<?php echo base_url()."assets/";?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>-->
                  
                  <span class="hidden-xs">
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $a=time();
                  $hour= date('G',$a);
                  if($hour >=0 && $hour<=11){
                    echo " Selamat Pagi ".$this->session->userdata('username');
                  }elseif($hour>=12 && $hour<=14){
                    echo " Selamat Siang ".$this->session->userdata('username');
                  }elseif($hour>= 13 && $hour<=18){
                    echo " Selamat Sore ".$this->session->userdata('username');
                  }elseif($hour >=17 && $hour<=23){
                    echo "Selamat Malam ".$this->session->userdata('username');
                  }
                  ?> </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()."assets/";?>dist/img/user.png" class="img-circle" alt="User Image" />
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left profile-userbuttons">
                      <a href="#" class="btn btn-success btn-sm btn-flat">Profile</a>
                    </div>
                    <div class="pull-right profile-userbuttons">
                      <a href="<?php echo base_url('Admin/logout');?>" class="btn btn-danger btn-sm btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>