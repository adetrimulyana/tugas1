,<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Difatours | Detail | Invoice</title>
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
            Invoice
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Detail</a></li>
            <li class="active">Invoice</li>
          </ol>
        </section>

        <div class="pad margin no-print">
          <div class="callout callout-info" style="margin-bottom: 0!important;">                        
            <h2><i class="fa fa-info"></i> #Invoice</h2>
          </div>
        </div>


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

            <?php foreach($data as $a) :?>
              <b>Customer Detail :</b>
              <address>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <td>:</td>
                      <td><strong><?php echo $a['nama'];?></strong></td>
                    </tr>
                    <tr>
                      <th>No Handphone</th>
                      <td>:</td>
                      <td><?php echo $a['no_hp'];?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>:</td>
                      <td><?php echo $a['email'];?></td>
                    </tr>
                    <tr>
                      <th>Pax</th>
                      <td>:</td>
                      <td><?php echo $a['pax'];?></td>
                    </tr>
                  </thead>
                </table>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Trip Code :</b><br/>
              <p><h2><?php echo $a['kode_resv'];?></h2></p>
              <br/>
            </div><!-- /.col -->
          </div><!-- /.row -->      
        <?php endforeach ;?>

          <!-- Table row -->
          <div class="row">
            <div class="col-sm-12 table-responsive">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/simpan_detail_reservasi');?>">
                <div class="table-responsive">
                  <caption><b>Transport Details</b></caption><br/>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Type Kendaraan</th>
                          <th class="text-center">Kota</th>
                          <th class="text-center">Perjalanan</th>
                          <th class="text-center">Harga Sewa</th>
                          <th class="text-center">Supir</th>
                          <th class="text-center">No Mobil</th>
                          <th class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($detail as $a) :?>
                        <tr class="text-center">
                          <td><?php echo $a['tgl'];?></td>
                          <td><?php echo $a['type'];?></td>
                          <td><?php echo $a['city'];?></td>
                          <td><?php echo $a['itinerary'];?></td> 
                          <td><?php echo "Rp. ".number_format($a['total'], 0, ',', '.');?></td>
                          <td><?php echo $a['nama_driver'];?></td>
                          <td><?php echo $a['no'];?></td>
                          <td><?php echo $a['status'];?></td>
                        </tr>
                          <?php endforeach ;?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <img src="<?php echo base_url()."assets/";?>img/transfer/bca.png" alt="bca" width="15%"/>
              <!--<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">-->
                <table class="table table-responsive">
                  <tr>
                    <th>Transfer Code</th>
                    <td>:</td>
                    <td>CENAIDJA</td>
                  </tr>
                  <tr>
                    <th>DADANG ROHIKMAT</th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>No Rekening</th>
                    <td>:</td>
                    <td>7770698701</td>
                  </tr>
                </table>
              </p>
            </div><!-- /.col -->

            <div class="col-xs-6">
              <p class="lead">Payment History</p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal</th>
                    <td>:</td>                 
                    <td>
                    <!--<?php foreach ($detail as $a):?>-->
                    <?php $where=$a['kode_resv']; ?>
                    <!--<?php endforeach ;?>-->
                    <?php
                    $this->db->select('SUM(total) as jml');
                    $this->db->from('detail_reservasi');
                    $this->db->where('kode_resv',$where);
                    echo "Rp. ".number_format($this->db->get()->row()->jml, 0, ',', '.');
                    ?>
                      
                    </td>
                  </tr>
                  <tr>
                    <th>Downpayment</th>
                    <td>:</td>
                    <?php foreach ($pemb as $a) :?>
                    <td><?php echo "Rp. ".number_format($a['payment'], 0, ',', '.');?></td>
                  <?php endforeach ;?>
                  </tr>
                  <tr>
                    <th>Discount</th>
                    <td>:</td>
                    <?php foreach ($pemb as $a) :?>
                    <td><?php echo "Rp. ".number_format($a['discount'], 0, ',', '.');?></td>
                    <?php endforeach ;?>
                  </tr>
                  <!-- Menghitung total -->
                  <form>
                    <input type="hidden" name="" id="">
                  </form>
                  <!-- end menghitung -->
                  <tr>
                    <th>Balance</th>
                    <td>:</td>
                    <td>
                      <!--<?php foreach ($detail as $a):?>-->
                    <?php $where=$a['kode_resv']; ?>
                    <!--<?php endforeach ;?>-->
                    <?php foreach($pemb as $p):?>
                    <?php
                    $this->db->select('SUM(total) as jml');
                    $this->db->from('detail_reservasi');
                    $this->db->where('kode_resv',$where);
                    $a=$this->db->get()->row()->jml;
                    $t=$a - $p['payment'] - $p['discount'];
                    echo "Rp. ".number_format($t,0, ',', '.');
                    //echo "$a";
                    ?>

                    </td>
                  </tr>
                <?php endforeach ;?>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
            <?php foreach ($pemb as $a) :?>
              <a href="<?php echo base_url('Admin/download_invoice/'.$a['kode_resv'].'');?>" target="_blank"><button class="btn btn-primary pull-right" ><i class="fa fa-download"></i> Download Invoice</button></a>
              <a href="<?php echo base_url('Admin/cetak_invoice/'.$a['kode_resv'].'');?>" target="_blank"><button class="btn btn-info pull-right" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</button></a>
            <?php endforeach ;?>
              <button class="btn btn-info pull-right" data-toggle="modal" data-target="#tambah" style="margin-right: 5px;"><i class="fa fa-usd"></i> Payment</button>
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <?php include('layout/footer.php');?>
      <!-- control-->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <!--<div class='control-sidebar-bg'></div>-->
    </div><!-- ./wrapper -->

    <!--Modal Insert-->
      <div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Form Input Pembayaran</h4>
            </div>
          <div class="modal-body">
            <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php foreach($data as $b) :?>
                <form class="form-horizontal" method="POST" action="<?php echo base_url('Admin/simpan_pembayaran');?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Trip Code</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                            <input type="Text" class="form-control" name="kode_resv" value="<?php echo $b['kode_resv'];?>" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Date</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="text" class="form-control" name="tanggal" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Payment</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input type="text" class="form-control" name="payment" placeholder="Payment" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Discount</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                            <input type="text" class="form-control" name="discount" placeholder="Payment" required="">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Payment Method</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="form-control selectpicker" name="method">
                              <option>-- Pilih --</option>
                              <option value="1">Bank Transfer</option>
                              <option value="2">Cash</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Via</label>
                      <div class="col-sm-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" class="form-control" name="via" placeholder="Via">
                        </div>
                      </div>
                    </div>
                  <?php endforeach ;?>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-xs btn-warning "><i class="glyphicon glyphicon-refresh"></i>  Cancel</button>
                    <button type="submit" class="btn btn-xs btn-success pull-right"><i class="glyphicon glyphicon-ok"></i>  Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>  Close</button>
          </div>
        </div>
        </div>
      </div>
      <!--End Modal-->

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
