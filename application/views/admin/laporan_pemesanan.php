<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Laporan Pemesanan Kendaraan | Difatours</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="<?php echo base_url()."assets/";?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url()."assets/";?>plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="<?php echo base_url()."assets/";?>plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap time Picker -->
    <link href="<?php echo base_url()."assets/";?>plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Theme style -->
    <link href="<?php echo base_url()."assets/";?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url()."assets/";?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url()."assets/";?>plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- date time picker -->
    <link href="<?php echo base_url()."assets/";?>dist/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()."assets/";?>dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" /> 
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
            Laporan Pemesanan Kendaraan
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Laporan</a></li>
            <li class="active">Pemesanan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <form class="form-inline" method="POST" action="<?php echo base_url('Admin/cetak_laporan_pemesanan');?>" target="_blank">
                    <div class="form-group">
                      <label for="email">Tanggal Awal:</label>
                      <input type="text" class="form-control" name="tgl_awal" id="embeddingDatePicker" value="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Tanggal Akhir:</label>
                      <input type="text" class="form-control" name="tgl_akhir" id="embeddingDatePicker2" value="<?php echo date('Y-m-d', strtotime("+7 days"));?>" >
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                  </form>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include ('layout/footer.php') ;?>
     <script src="<?php echo base_url()."assets/";?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url()."assets/";?>plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url()."assets/";?>plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url()."assets/";?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url()."assets/";?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."assets/";?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/";?>dist/js/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- datepicker dist-->
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $('#embeddingDatePicker')
        .datepicker({
            format: "yyyy-mm-dd"
        });
        $('#embeddingDatePicker2')
        .datepicker({
            format: "yyyy-mm-dd"
        });
      });
    </script>
  </body>
</html>
