<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Data Kendaraan | Difatours</title>
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
            Tabel Data Kendaraan
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Data Kendaraan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Kendaraan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr >
                        <th class="text-center">Type Kendaraan</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">No Kendaraan</th>
                        <th class="text-center">Kapasitas</th>
                        <th class="text-center">Tahun Pembuatan</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($kendaraan as $a) : ?>
                      <tr class="text-center">
                        <td><?php echo $a['type'];?></td>
                        <td><?php echo $a['jenis'];?></td>
                        <td><?php echo $a['no'];?></td>
                        <td><?php echo $a['kapasitas'];?></td>
                        <td><?php echo $a['tahun'];?></td>
                        <td>
                          <a href="<?php echo base_url('Admin/hapus_kendaraan/'.$a['id_kend'].'');?>"><button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button> </a>| 
                          <a href="<?php echo base_url('Admin/edit_kendaraan/'.$a['id_kend'].'');?>"><button type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button> </a>| 
                          <button type="button" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-file"></i> Detail</button>
                        </td>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="text-center">Type Kendaraan</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">No Kendaraan</th>
                        <th class="text-center">Kapasitas</th>
                        <th class="text-center">Tahun Pembuatan</th>
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

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Type Kendaraan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="type" class="table table-bordered table-striped">
                    <thead>
                      <tr >
                        <th class="text-center">Type Kendaraan</th>
                        <th class="text-center">Harga Sewa</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($type as $a) : ?>
                      <tr class="text-center">
                        <td><?php echo $a['type'];?></td>
                        <td><?php echo $a['harga_sewa'];?></td>
                        <td><a href="<?php echo base_url('Admin/hapus_type_kendaraan/'.$a['harga_sewa'].'');?>"><button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>  Hapus</button></a> | <button type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i>  Edit</button></td>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="text-center">Type Kendaraan</th>
                        <th class="text-center">Harga Sewa</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </tfoot>
                  </table>
                  <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#tambah_type"><i class="glyphicon glyphicon-plus"></i>  Tambah Type Kendaraan</button>
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
                <form class="form-horizontal" method="POST" action="<?php echo base_url('owner/simpan_kendaraan');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Type Kendaraan</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="form-control" name="type">
                              <option>-- Pilih Type Kendaraan --</option>
                              <?php foreach ($type as $a) : ;?>
                              <option><?php echo $a['type'];?></option>
                              <?php endforeach ;?>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis</label>
                      <div class="col-sm-6 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input type="text" class="form-control" name="jenis" placeholder="Jenis">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">No Kendaraan</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                            <input type="text" class="form-control" name="no" placeholder="No Kendaraan">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kapasitas</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tahun</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="Text" class="form-control" name="tahun" placeholder="Tahun">
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
                <form class="form-horizontal" method="POST" action="<?php echo base_url('owner/simpan_type_kendaraan');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Type Kendaraan</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <input type="Text" class="form-control" name="type" placeholder="Type Kendaraan">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Harga Sewa</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input type="text" class="form-control" name="harga" placeholder="Harga Sewa">
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
