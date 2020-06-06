<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tambah Tour Paket | Difatours</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?php echo base_url()."assets/";?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url()."assets/";?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url()."assets/";?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link href="<?php echo base_url()."assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <?php include('layout/header.php') ;?>

      <!-- Left side column. contains the logo and sidebar -->
      <?php include('layout/sidebar.php') ;?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
      <section class="content-header">
          <h1>
            Tabel Data Tour Paket
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tour Paket</a></li>
            <li class="active">Tambah Baru</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tour Paket Baru</h3>
                </div><!-- /.box-header -->
                 <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/simpan_edit_tour_paket');?>">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="hidden" name="id_tour" value="<?php echo $id_tour ;?>">
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Tour Paket</label>
                              <div class="input-group col-sm-8">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="Text" class="form-control" name="nama" placeholder="Nama Tour Paket" required="" value="<?php echo $nama ;?>">
                              </div>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Harga</label>
                              <div class="input-group col-sm-6">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input type="Text" class="form-control" name="harga" placeholder="Harga per Pax" required="" value="<?php echo $harga ;?>">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Minimal Pax</label>
                              <div class="input-group col-sm-6">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="Text" class="form-control" name="minimal" placeholder="Minimal Pax" required="" value="<?php echo $minimal ;?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                      <label class="col-sm-4 control-label">Kota Tujuan</label>
                      <div class="input-group col-sm-6 inputGroupContainer">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="form-control selectpicker" name="kota" required="">
                              <option value="Jakarta"><?php echo $kota;?></option>
                              <option>-- Pilih --</option>
                              <option value="Jakarta">Jakarta</option>
                              <option value="Bandung">Bandung</option>
                              <option value="SPuncak">Puncak</option>
                              <option value="Kota Lain">Kota Lain</option>
                            </select>
                      </div>
                    </div>

                  <div class="form-group">
                        <input type="hidden" class="form-control" name="tanggal" value="<?php echo $tanggal;?>" placeholder="Minimal Pax">
                      </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12">

                  <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 500px" name="isi" required="">
                      <?php echo $isi ;?>
                    </textarea>
                  </div>
                  
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
                  </div>
                  <button type="reset" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-refresh"></i> Batal</button>
                </form>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include ('layout/footer.php') ;?>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."assets/";?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url()."assets";?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."assets/";?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/";?>dist/js/demo.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()."assets/";?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url()."assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>
  </body>
</html>
