<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
  <title>Difatours Bandung| Laporan Pemeliharaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print()">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <img class="img img-circle" src="<?php echo base_url()."assets/";?>dist/img/logo2.jpg" width="3%" height="3%"><b>DIFATOURS BANDUNG</b>
        <address>
          <br>
          Kp. Pasir Pogor no.41<br>
          Bandung , Indonesia<br>
          Phone : +6821-394-199-522<br>
          Email : info.difatours@gmail.com
          <small class="pull-right">Date: <?php echo date('D, d-m-Y');?></small>
        </address>
          
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
        
        </div>
      <div class="col-sm-12 invoice-col">
        <h2 class="text-center"><b>LAPORAN PEMELIHARAAN KENDARAAN</b></h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th class="text-center">Tanggal Pemeliharaan</th>
            <th class="text-center">No Kendaraan</th>
            <th class="text-center">Jenis Kerusakan</th>
            <th class="text-center">Keterangan</th>
            <th class="text-center">Biaya</th>
            <th class="text-center">Nama Bengkel</th>
          </tr>
          </thead>
          <tbody>
          <tr class="text-center">
                       <?php
                          $tgl_awal=date('Y-m-d');
                          $tgl_akhir=date('Y-m-d', strtotime("+7 days"));
                          if (isset($_POST['submit'])){
                          $tgl_awal = $_POST['tgl_awal'];
                          $tgl_akhir = $_POST['tgl_akhir'];
                        }
                          $selisih = ((abs(strtotime ($tgl_awal) - strtotime ($tgl_akhir)))/(60*60*24));
                          for($i=0; $i <=$selisih; $i++){ 
                        ?>
                       <!--<th colspan="7"><?php echo date('D, d-M-Y',strtotime("$tgl_awal+$i days")) ;?></th>-->
                       </tr>
                       <tr>
                       <?php foreach($laporan_pemeliharaan as $a) :?>
                        <?php if(strtotime("$tgl_awal+$i days") == strtotime ($a['tgl'])){ ?>
                        <td class="text-center"><?php echo $a['tgl'];?></td>
                        <td class="text-center"><?php echo $a['id_kend'];?></td>
                        <td class="text-center"><?php echo $a['jenis_kerusakan'];?></td>
                        <td class="text-center"><?php echo $a['keterangan'];?></td>
                        <td class="text-center"><?php echo "Rp ".number_format($a['biaya'], 0, ',', '.');?></td>
                        <td class="text-center"><?php echo $a['nama_bengkel'];?></td>
                        <?php 
                        }
                        else {continue;}
                        ?>
                         </tr> 
                        <tr>
                        <?php endforeach ;?>
                      <?php 
                        }
                    ?>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
