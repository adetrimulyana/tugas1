<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Data Detail Pelanggan | Difatours</title>
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
            Tabel Data Detail Pelanggan
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Detail Pelanggan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-6">
              <div class="box">
                <div class="box-header">
                <h3 class="box-title">Tabel Data Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-responsive">
                    <thead>
                    <?php foreach($pel as $a) : ?>
                      <tr >
                        <th class="text-center">Nama Pelanggan</th>
                        <td>:</td>
                        <td><?php echo $a['nama'] ;?></td>
                      </tr>
                      <tr>
                        <th class="text-center">No Hp</th>
                        <td>:</td>
                        <td><?php echo $a['no_hp'] ;?></td>
                      </tr>
                      <tr>
                        <th class="text-center">Email</th>
                        <td>:</td>
                        <td><?php echo $a['email'] ;?></td>
                      </tr>
                      <tr>
                        <th class="text-center">Negara</th>
                        <td>:</td>
                        <td><?php echo $a['negara'] ;?></td>
                      </tr>
                     <?php endforeach ;?>
                    </thead>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel History Pemesanan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="type" class="table table-bordered table-striped">
                    <thead>
                      <tr >
                        <th class="text-center">Kode Reservasi</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Tanggal Datang</th>
                        <th class="text-center">Tanggal Pulang</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($pemesanan as $a) : ?>
                      <tr>
                        <td class="text-center"><?php echo $a['kode_resv'];?></td>
                        <td class="text-center"><?php echo $a['pass'];?></td>
                        <td class="text-center"><?php echo $a['pax'];?></td>
                        <td class="text-center"><?php echo $a['tgl_datang'];?></td>
                        <td class="text-center"><?php echo $a['tgl_pulang'];?></td>
                      </tr>
                     <?php endforeach ;?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="text-center">Kode Reservasi</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Tanggal Datang</th>
                        <th class="text-center">Tanggal Pulang</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include ('layout/footer.php') ;?>
     
     <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."assets/";?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url()."assets/";?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."assets/";?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/";?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    <script type="text/javascript">
      $(function () {
        $("#type").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>
