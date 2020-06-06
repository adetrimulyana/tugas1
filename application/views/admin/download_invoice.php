<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Difatours Bandung| Invoice</title>
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
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> DIFATOURS BANDUNG
          <small class="pull-right">Date: <?php echo date('d-m-Y');?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Difatours Bandung</strong><br>
          Kp. Pasir Pogor no.41<br>
          Bandung, Indonesia<br>
          Phone: +6821-394-199-522<br>
          Email: info.difatours@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
         <?php foreach($data as $a) :?>
          <strong><?php echo $a['nama'];?></strong><br>
          Phone: <?php echo $a['no_hp'];?><br>
          Email: <?php echo $a['email'];?><br>
          Country: <?php echo $a['negara'];?>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice</b><br>
        <br>
        <b>Order ID:</b><?php echo $a['kode_resv'];?> <br>
        <b>Pax:</b><?php echo $a['pax'];?><br>
      </div>

      <?php endforeach ;?>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th class="text-center">Date</th>
            <th class="text-center">Car Type</th>
            <th class="text-center">City</th>
            <th class="text-center">Itinerary</th>
            <th class="text-center">Price</th>
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
          </tr>
          <?php endforeach ;?>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-sm-8">
      </div>
      <!-- /.col -->

            <div class="col-sm-4">
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

                  <tr>
                    <th>Total</th>
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
