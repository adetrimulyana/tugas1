<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edit Data Payment | Difatours</title>
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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <?php include ('layout/header.php') ;?>

      <!-- Left side column. contains the logo and sidebar -->
      <?php include('layout/sidebar.php') ;?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
      <section class="content-header">
          <h1>
            Tabel Edit Data Payment
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Edit Data Supir</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Edit Payment</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form class="form-horizontal" method="POST" action="<?php echo base_url('owner/simpan_edit_payment');?>">
                  <div class="box-body">

                  <input type="hidden" class="form-control" name="id" placeholder="Nama Cust" value="<?php echo $id ;?>" readonly="">

                  <input type="hidden" class="form-control" name="date" placeholder="Nama Cust" value="<?php echo $date ;?>" readonly="">
                    
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Trip Code</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="Text" class="form-control" name="kode_resv" placeholder="Nama Cust" value="<?php echo $kode_resv ;?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Payment</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="Text" class="form-control" name="payment" placeholder="Nama Cust" value="<?php echo $payment ;?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Discount</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input type="text" class="form-control" name="discount" value="<?php echo $discount ;?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-sm-4 control-label">Method</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <select class="form-control selectpicker" name="method" >
                              <option><?php $a=$method ;if($a==1){ echo "Cash";}else{echo "Transfer";};?></option>
                              <option >-- Pilih --</option>
                              <option value="1">Cash</option>
                              <option value="2">Transfer</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Via</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input type="text" class="form-control" name="via" value="<?php echo $via ;?>">
                        </div>
                      </div>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-xs btn-warning "><i class="glyphicon glyphicon-refresh"></i>  Cancel</button>
                    <button type="submit" class="btn btn-xs btn-success pull-right"><i class="glyphicon glyphicon-ok"></i>  Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include ('layout/footer.php'); ?>
      
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
       //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
        $('#embeddingDatePicker')
        .datepicker({
            format: "yyyy-mm-dd"
        });

      });
    </script>
  </body>
</html>
