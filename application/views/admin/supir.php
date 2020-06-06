<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Data Supir | Difatours</title>
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
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <script language="javascript">
    function Confirm(){
      if(confirm("KONFIRMASI PENGHAPUSAN DATA\nTekan OK untuk melanjutkan penghapusan data")==true){
        return true;
      }else{
         return false;
        }
      }
</script>


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
            Tabel Data Supir
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Supir</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Data Supir</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr >
                        <th class="text-center">Nama Supir</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">No Hp</th>
                        <th class="text-center">Type SIM</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                    <?php foreach ($supir as $a) : ?>
                      <tr class="text-center">
                        <td><?php echo $a['nama_driver'];?></td>
                        <td><?php echo $a['alamat'];?></td>
                        <td><?php echo $a['no_hp'];?></td>
                        <td><?php echo $a['type_sim'];?></td>
                        <td>
                        <a href="<?php echo base_url('Admin/hapus_supir/'.$a['id_driver'].'');?>")><button type="button" class="btn btn-xs btn-danger" onclick="Confirm()"><i class='glyphicon glyphicon-trash'></i> Hapus</button></a> | 
                        <a href="<?php echo base_url('Admin/edit_supir/'.$a['id_driver'].'');?>"><button type="button" class="btn btn-xs btn-info"><i class='glyphicon glyphicon-pencil'></i> Edit</button></a></td>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                  </table>
                  <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#tambah"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</button>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include ('layout/footer.php') ;?>
      <!--Modal-->
      <div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Form Input Supir</h4>
            </div>
          <div class="modal-body">
            <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/simpan_supir');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Driver</label>
                      <div class="input-group col-sm-6">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="Text" class="form-control" name="nama" placeholder="Nama Driver" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Alamat</label>
                      <div class="input-group col-sm-6">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">No HP</label>
                      <div class="input-group col-sm-6">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="text" class="form-control" name="no_hp" placeholder="+621 1234567" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Type SIM</label>
                      <div class="input-group col-sm-6 inputGroupContainer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="form-control selectpicker" name="type_sim">
                              <option>-- Pilih --</option>
                              <option value="SIM A">SIM A</option>
                              <option value="SIM B I">SIM B I</option>
                              <option value="SIM B I Umum">SIM B I Umum</option>
                              <option value="SIM B II">SIM B II</option>
                            </select>
                      </div>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-xs btn-warning pull-left"><i class="glyphicon glyphicon-refresh"></i>  Reset</button>
                    <button type="submit" class="btn btn-info btn-xs pull-right"><i class="glyphicon glyphicon-ok"></i>  Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-xs btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>  Close</button>
          </div>
        </div>
        </div>
      </div>
      <!--End Modal-->
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
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url()."assets/";?>plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
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
    <!-- datepicker dist-->
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

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
        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

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
