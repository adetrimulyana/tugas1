<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Reservasi | Difatours</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- daterange picker -->
    <link href="<?php echo base_url()."assets/";?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap time Picker -->
    <link href="<?php echo base_url()."assets/";?>plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>

    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()."assets/";?>plugins/datapicker/datepicker3.css" rel="stylesheet" type="text/css" />

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
      
      <?php include('layout/header.php') ;?>

      <!-- Left side column. contains the logo and sidebar -->
      <?php include('layout/sidebar.php') ;?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
      <section class="content-header">
          <h1>
            Tabel Data Master Reservasi
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Reservasi</li>
          </ol>
        </section>

         <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Data Reservasi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr >
                        <th class="text-center">Kode Reservasi</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Nama Pelanggan</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Tanggal Datang</th>
                        <th class="text-center">Tanggal Pulang</th>
                        <th class="text-center">Notes</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($reservasi as $a) : ?>
                      <tr class="text-center">
                        <td><?php echo $a['kode_resv'];?></td>
                        <td><?php echo $a['pass'];?></td>
                        <td><?php echo $a['nama'];?></td>
                        <td><?php echo $a['pax'];?></td>
                        <td><?php echo $a['tgl_datang'];?></td>
                        <td><?php echo $a['tgl_pulang'];?></td>
                        <td><?php echo $a['notes'];?></td>
                        <td>
                          <a href="<?php echo base_url('Admin/hapus_reservasi/'.$a['kode_resv'].'');?>"><button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button></a> | 
                          <a href="<?php echo base_url('Admin/edit_Reservasi/'.$a['kode_resv'].'');?>"><button type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button></a> |
                          <a href="<?php echo base_url('Admin/tambah_reservasi/'.$a['kode_resv'].'');?>"><button type="button" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-file"></i> Detail</button></a>
                        </td>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="text-center">Kode Reservasi</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Nama Pelanggan</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Tanggal Datang</th>
                        <th class="text-center">Tanggal Pulang</th>
                        <th class="text-center">Notes</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </tfoot>
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
       <?php
function randomPrefix($length)
{
$random= "";
srand((double)microtime()*1000000);
 
$d = "AbcDE123IJKLMN67QRSTUVWXYZ";
$d .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
$d .= "0FGH45OP89";
 
for($i = 0; $i < $length; $i++)
{
$random .= substr($d, (rand()%(strlen($d))), 1);
}
 
return $random;
}
$a = randomPrefix(6);
?>

<?php
function passAcak($panjang)
{
 $karakter = '';
// $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // karakter alfabet
 $karakter .= '1234567890'; // karakter numerik
 
 $string = '';
 for ($i=0; $i < $panjang; $i++) { 
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
 }
 return $string;
}
?>
      <div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Form Tambah Reservasi</h4>
            </div>
          <div class="modal-body">
            <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <!-- form start-->
                <form class="form-horizontal" method="POST" action="<?php echo base_url('owner/simpan_reservasi');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kode Reservasi</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input type="text" class="form-control" name="kode" value="<?php echo strtoupper($a) ;?>" readonly>
                        </div>
                      </div>
                    </div>

                        <div class="input-group">
                            <input type="hidden" class="form-control" name="pass" value="<?php echo strtoupper (passAcak(4));?>" readonly>
                        </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Pemesan</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="form-control" name="id_cust">
                              <option>-- Pilih Nama Pemesan --</option>
                              <?php foreach ($pel as $a) : ;?>
                              <option value="<?php echo $a['id_cust'];?>"><?php echo $a['nama'];?></option>
                              <?php endforeach ;?>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah Pax</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="pax" placeholder="Jumlah Pax" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">      
                      <label class="col-sm-4 control-label">Tanggal Kedatangan</label>
                      <div class="date col-sm-6 inputGroupContainer" >
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="text" class="form-control" name="tgl_datang" placeholder="Tanggal Kedatangan" id="embeddingDatePicker">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">      
                      <label class="col-sm-4 control-label">Tanggal Keberangkatan</label>
                      <div class="date col-sm-6 inputGroupContainer" >
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="text" class="form-control" name="tgl_pulang" placeholder="Tanggal Kedatangan" id="embeddingDatePicker2">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Notes</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                            <input type="text" class="form-control" name="notes" placeholder="Notes">
                        </div>
                      </div>
                    </div>


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-xs btn-warning "><i class="glyphicon glyphicon-refresh"></i>  Cancel</button>
                    <button type="submit" class="btn btn-xs btn-success pull-right"><i class="glyphicon glyphicon-ok"></i>  Simpan</button>
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
     <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."assets/";?>plugins/jQuery/jQuery-2.1.4.min.js"></script>>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js" type="text/javascript"></script>

    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- date range -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url()."assets/";?>plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url()."assets/";?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."assets/";?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/";?>dist/js/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
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
