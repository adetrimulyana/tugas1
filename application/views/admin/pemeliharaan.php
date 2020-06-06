<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Data Pemeliharaan Kendaraan | Difatours</title>
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
            Tabel Pemliharaan Data Kendaraan
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Data Pemeliharaan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Pemeliharaan Kendaraan</h3>
                  <?php echo "<h2>".$this->session->flashdata('sukses')."</h2>";?>
                  <?php echo "<h2>".$this->session->flashdata('gagal')."</h2>";?>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr >
                        <th class="text-center">Tgl Masuk</th>
                        <th class="text-center">No Kendaraan</th>
                        <th class="text-center">Jenis Kerusakan</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Nama Bengkel</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pemeliharaan as $a) : ?>
                      <tr class="text-center">
                        <td><?php echo $a['tgl'];?></td>
                        <td><?php echo $a['no'];?></td>
                        <td><?php echo $a['jenis_kerusakan'];?></td>
                        <td><?php echo $a['keterangan'];?></td>
                        <td><?php echo $a['biaya'];?></td>
                        <td><?php echo $a['nama_bengkel'];?></td>
                        <td><a href="<?php echo base_url('Admin/hapus_pemeliharaan/'.$a['id_pemeliharaan'].'');?>"><button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>  Hapus</button></a> | <button type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i>  Edit</button>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                    <tfoot>
                      <tr >
                        <th class="text-center">Tgl Masuk</th>
                        <th class="text-center">No Kendaraan</th>
                        <th class="text-center">Jenis Kerusakan</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Nama Bengkel</th>
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
      <div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Form Input Kendaraan</h4>
            </div>
          <div class="modal-body">
            <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <!-- form start-->
                <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/simpan_pemeliharaan');?>">
                  <div class="box-body">
                    <div class="form-group">      
                      <label class="col-sm-4 control-label">Tanggal Perawatan</label>
                      <div class="date col-sm-6 inputGroupContainer" >
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="text" class="form-control" value="<?php echo date('Y-m-d');?>" name="tgl" placeholder="Tanggal" id="embeddingDatePicker">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">No Kendaraan</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="form-control" name="id">
                              <option>-- Pilih Type Kendaraan --</option>
                              <?php foreach ($no as $a) : ;?>
                              <option value="<?php echo $a['id_kend'];?>"><?php echo $a['no'];?></option>
                              <?php endforeach ;?>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Kerusakan</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input type="text" class="form-control" name="jenis" placeholder="Jenis Kerusakan" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Keterangan</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Biaya</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input type="text" class="form-control" name="biaya" placeholder="Biaya" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Bengkel</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-wrench"></i></span>
                            <input type="text" class="form-control" name="bengkel" placeholder="Nama Bengkel" required="">
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
      <!-- Modal tambah data type kendaraan -->
      <div id="tambah_type" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Form Input Type Kendaraan</h4>
            </div>
          <div class="modal-body">
            <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/s_type');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Type Kendaraan</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <input type="Text" class="form-control" name="type" placeholder="Type Kendaraan" required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Harga Sewa</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input type="text" class="form-control" name="harga" placeholder="Harga Sewa" required="">
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
    <!-- datepicker dist-->
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."assets/";?>dist/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
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
      $('#embeddingDatePicker')
        .datepicker({
            format: "yyyy-mm-dd"
        });
      });
    </script>
  </body>
</html>
