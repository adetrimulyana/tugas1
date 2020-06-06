<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tambah Reservasi | Difatours</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
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
            TAMBAH RESERVASI
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tambah</a></li>
            <li class="active">Reservasi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            <?php foreach($user as $a) :?>
              <b>Customer Detail :</b>
              <address>
                <strong><?php echo $a['nama'];?></strong><br>
                Phone: <br/>
                Email: 
                Pax : <?php echo $a['pax'];?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Trip Code :</b><br/>
              <p><h2><?php echo $a['kode_resv'];?></h2></p>
              <br/>
              <b>Password : <?php echo $a['pass'];?></b>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- date -->
          <div class="row">
            <div class="col-sm-8">
              <form class="form-inline" method="post">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal Awal</label>
                    <input type="text" class="form-control" name="tgl_awal" value="<?php echo $a['tgl_datang'] ;?>" readonly="">
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal Akhir</label>
                    <input type="text" class="form-control" name="tgl_pulang" value="<?php echo $a['tgl_pulang'] ;?>" readonly="">
                </div>
                <button type="submit" class="btn btn-info" name="submit"><i class="glyphicon glyphicon-plus"></i></button>
              </form>
            </div>
          </div>        
        <?php endforeach ;?>

          <!-- Table row -->
          <div class="row">
            <div class="col-sm-12 table-responsive">

              <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th colspan="5">Detail Pemesanan</th>
                      </tr>
                      <tr>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Type Mobil</th>
                        <th class="text-center">Kota</th>
                        <th class="text-center">Perjalanan</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Supir</th>
                        <th class="text-center">No Mobil</th>
                        <th class="text-center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $d) :?>
                      <tr class="text-center">
                        <td><?php echo $d['tgl'] ;?></td>
                        <td><?php echo $d['type'] ;?></td>
                        <td><?php echo $d['city'] ;?></td>
                        <td><?php echo $d['itinerary'] ;?></td>
                        <td><?php echo $d['total'] ;?></td>
                        <td><?php echo $d['nama_driver'] ;?></td>
                        <td><?php echo $d['no'] ;?></td>
                        <td><?php echo $d['status'] ;?></td>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                  </table>

              <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/simpan_detail_reservasi');?>">
                <div class="table-responsive">
                    <table class="table table-stripped">
                      <thead>
                        <tr>
                          <th colspan="5">Tambah Pemesanan Baru</th>
                        </tr>
                        <tr>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Type Mobil</th>
                          <th class="text-center">Kota</th>
                          <th class="text-center">Perjalanan</th>
                          <th class="text-center">Harga</th>
                          <th class="text-center">Supir</th>
                          <th class="text-center">No Mobil</th>
                          <th class="text-center">Status</th>
                         </tr>
                      </thead>
                      <tbody>
                        <?php
                          if (isset($_POST['submit'])){
                          $tgl_awal = $_POST['tgl_awal'];
                          $tgl_pulang = $_POST['tgl_pulang'];
                          $selisih = ((abs(strtotime ($tgl_awal) - strtotime ($tgl_pulang)))/(60*60*24));
                          for($i=0; $i <=$selisih; $i++){ 
                        ?>
                        <tr class="text-center">
                          <input type="hidden" class="form-control" value="<?php echo $i ;?>" name="jml"/>
                          <?php foreach ($user as $a) :?>
                          <input type="hidden" class="form-control" name="kode_resv[]" value="<?php echo $a['kode_resv'] ;?>"/>
                        <?php endforeach ;?>
                          <td class="text-center">
                            <div class="col-sm-8">
                              <div class="form-group">
                                <input type="text" class="form-control" value="<?php echo $tgl_awal++;?>" name="tanggal[]">
                              </div>
                            </div>
                          </td>
                          <td class="text-center">
                              <select class="form-control selectpicker" name="type[]">
                                <option>--Pilih--</option>
                                  <?php foreach($type as $b) :?>
                                <option value="<?php echo $b['type'];?>"><?php echo $b['type'];?></option>
                                <?php endforeach ;?>
                              </select>
                          </td>
                          <td class="text-center">
                              <select  class="form-control selectpicker" name="city[]">
                                <option>--Pilih--</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Puncak">Puncak</option>
                              </select>
                          </td>
                          <td class="text-center">
                              <textarea  class="form-control" name="itinerary[]"></textarea>
                          </td>
                          <td>
                            <div class="col-sm-8">
                              <div class="form-group">
                                <input type="text" name="total[]">
                              </div>
                            </div>
                          </td>
                          <td class="text-center">
                            <select class="form-control selectpicker" name="driver[]">
                                <option>--Pilih--</option>
                                <?php foreach($supir as $a) :?>
                                <option value="<?php echo $a['id_driver'];?>"><?php echo $a['nama_driver'];?></option>
                                <?php endforeach ;?>
                              </select>
                          </td>
                          <td class="text-center">
                            <select class="form-control selectpicker" name="no_mobil[]">
                                <option>--Pilih--</option>
                                <?php foreach($kend as $a) :?>
                                <option value="<?php echo $a['id_kend'];?>"><?php echo $a['no'];?></option>
                                <?php endforeach ;?>
                              </select>
                          </td>
                          <td class="text-center">
                            <select class="form-control selectpicker" name="status[]">
                                <option>--Pilih--</option>
                                <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                                <option value="Selesai">Selesai</option>
                              </select>
                          </td>
                        </tr>
                          <?php
                              }
                              }?>
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-xs btn-success">Simpan</button>
                </form>
                  
                </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <?php include('layout/footer.php');?>
      <!-- control-->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <!--<div class='control-sidebar-bg'></div>-->
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()."assets/";?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."assets/";?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/";?>dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
