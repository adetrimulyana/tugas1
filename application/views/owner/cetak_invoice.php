<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> </title>

	<title></title>
</head>
<body>
  <span style="text-align: justify"></span>  <span style="font-size: 9px"></span>
 <?php 
    foreach($pegawai as $peg) {
    ?>
  <table width="1273" border="0" cellspacing="0">
   
      <tbody>
        <tr>
          <td colspan="23" align="center"><img src="<?php echo base_url('assets/img/National_emblem_of_Indonesia_Garuda_Pancasila.svg.png')?>" width="78" height="72" alt=""/></td>
        </tr>
        <tr>
          <td colspan="23" align="center" ><h5 >BADAN KEPEGAWAIAN NEGARA</h5></td>
        </tr>
        <tr>
          <td colspan="23" align="center"><h6>Jl. LET. JEND. SOETOYO 12, JAKARTA 13640</h6></td>
        </tr>
        <tr>
          <td colspan="3" style="font: 9px;" font size="3"><span style="font-size: 9px">INSTANSI INDUK</span>            </td>
          <td width="4" style="font-size: 9px">:</td>
          <td colspan="19" style="font-size: 9px">DINAS PENDIDIKAN</td>
        </tr>
        <tr>
          <td colspan="3" style="font-size: 9px">PROVINSI</td>
          <td style="font-size: 9px">:</td>
          <td colspan="19" style="font-size: 9px">JAWA BARAT</td>
        </tr>
        <tr>
          <td colspan="3" style="font-size: 9px">KAB/KOTA MADYA</td>
          <td style="font-size: 9px">:</td>
          <td colspan="19" style="font-size: 9px">GARUT</td>
        </tr>
        <tr>
          <td colspan="3" style="font-size: 9px">UNIT KERJA</td>
          <td style="font-size: 9px">:</td>
          <td colspan="19" style="font-size: 9px">SDN BINAKARYA 1</td>
        </tr>
        <tr>
          <td colspan="3" style="font-size: 9px">PEMBAYARAN</td>
          <td style="font-size: 9px">:</td>
          <td colspan="19" style="font-size: 9px">KANTOR BJB GARUT</td>
        </tr>
        <tr>
          <td colspan="23" align="center" style="font-size: 9px">DATA PERORANGAN CALON PENERIMA PENSIUN (DPCP) PEGAWAI NEGERI SIPIL YANG MENCAPAI BATAS USIA PENSIUN</td>
        </tr>
        <tr style="font-size: 9px">
          <td width="15">1.</td>
          <td colspan="22">KETERANGAN PRIBADI</td>
        </tr>
        <tr>
          <td style="font-size: 9px">&nbsp;</td>
          <td colspan="8" style="font-size: 9px">&nbsp;</td>
          <td width="6" style="font-size: 9px">&nbsp;</td>
          <td colspan="5" style="font-size: 9px">&nbsp;</td>
          <td width="14" style="font-size: 9px">B.</td>
          <td colspan="7" style="font-size: 9px">NAMA ANAK</td>
        </tr>
        <tr>
          <td style="font-size: 9px">A.</td>
          <td colspan="8" style="font-size: 9px">NAMA:</td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px"><?php echo $peg->nama; ?></td>
          <td style="font-size: 9px">NO</td>
          <td width="106" style="font-size: 9px">NAMA</td>
          <td width="84" style="font-size: 9px">TGL LAHIR </td>
          <td width="89" style="font-size: 9px">ANAK KANDUNG</td>
          <td width="58" style="font-size: 9px">ANAK TIRI</td>
          <td width="78" style="font-size: 9px">ANAK ANGKAT </td>
          <td width="89" style="font-size: 9px">NAMA AYAH /IBU </td>
          <td width="34" style="font-size: 9px">KET</td>
        </tr>
        <tr>
          <td style="font-size: 9px">B.</td>
          <td colspan="8" style="font-size: 9px">NIP:</td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px"><?php echo $peg->nip; ?></td>
          <td style="font-size: 9px">1.</td>
          <td rowspan="5" style="font-size: 9px">&nbsp;</td>
          <td rowspan="5" style="font-size: 9px">&nbsp;</td>
          <td rowspan="5" style="font-size: 9px">&nbsp;</td>
          <td rowspan="5" style="font-size: 9px">&nbsp;</td>
          <td rowspan="5" style="font-size: 9px">&nbsp;</td>
          <td rowspan="5">&nbsp;</td>
          <td rowspan="5">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">C.</td>
          <td colspan="8" style="font-size: 9px">TEMPAT/TANGGAL LAHIR:</td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px"><?php echo $peg->tempat_lahir;?></td>
          <td style="font-size: 9px">2.</td>
        </tr>
        <tr>
          <td style="font-size: 9px">D.</td>
          <td colspan="8" style="font-size: 9px">JABATAN/PEKERJAAN</td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px"><?php echo $peg->pankat;?></td>
          <td style="font-size: 9px">3.</td>
        </tr>
        <tr>
          <td style="font-size: 9px">E.</td>
          <td colspan="8" style="font-size: 9px">PANGKAT/GOLONGAN.RUANG</td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px"><?php echo $peg->gol;?></td>
          <td style="font-size: 9px">4.</td>
        </tr>
        <tr>
          <td style="font-size: 9px">F.</td>
          <td colspan="8" style="font-size: 9px">GAJI POKOK YERAKHIR</td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">.5.</td>
        </tr>
        <tr>
          <td style="font-size: 9px">G.</td>
          <td colspan="8" style="font-size: 9px">MASA KERJA GOLONGAN</td>
          <td style="font-size: 9px">:</td>
          <td width="39" style="font-size: 9px">&nbsp;</td>
          <td width="39" style="font-size: 9px; text-align: center;">TAHUN</td>
          <td width="24" style="font-size: 9px">&nbsp;</td>
          <td width="88" style="font-size: 9px">BULAN PADA TGL</td>
          <td width="81" style="font-size: 9px">:</td>
          <td colspan="8" style="font-size: 9px">&nbsp;</td>
        </tr>
        <tr style="font-size: 9px; text-align: center;">
          <td style="font-size: 9px">H.</td>
          <td colspan="8" style="font-size: 9px; text-align: left;">MASA KERJA PENSIUN</td>
          <td>:</td>
          <td>&nbsp;</td>
          <td  style="font-size: 9px">TAHUN</td>
          <td>&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">I.</td>
          <td colspan="8" style="font-size: 9px">MASA KERJA SEBELUM </td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">DARI</td>
          <td style="font-size: 9px">-</td>
          <td style="font-size: 9px">SD</td>
          <td style="font-size: 9px">-</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">&nbsp;</td>
          <td colspan="8" style="font-size: 9px">DIANGKAT SEBAGAI PNS </td>
          <td style="font-size: 9px">&nbsp;</td>
          <td colspan="5" style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">J.</td>
          <td colspan="8" style="font-size: 9px">PENDIDIKAN SEBAGAI DASAR </td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" rowspan="2" style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">&nbsp;</td>
          <td colspan="8" style="font-size: 9px">PENGANGKATAN PERTAMA </td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px"><span style="font-size: 9px">K</span>.</td>
          <td colspan="8" style="font-size: 9px">MULAI MASUK PNS </td>
          <td style="font-size: 9px">:</td>
          <td colspan="5" style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">3.</td>
          <td style="font-size: 9px">ALAMAT</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">&nbsp;</td>
          <td colspan="3" style="font-size: 9px">&nbsp;</td>
          <td colspan="2" style="font-size: 9px">&nbsp;</td>
          <td colspan="2" style="font-size: 9px">&nbsp;</td>
          <td colspan="2" style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">A</td>
          <td style="font-size: 9px">ALAMAT SEKARANG</td>
          <td colspan="6" style="font-size: 9px">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">2.</td>
          <td colspan="3" style="font-size: 9px">KETERANGAN KELUARGA </td>
          <td colspan="2" style="font-size: 9px">&nbsp;</td>
          <td colspan="2" style="font-size: 9px">&nbsp;</td>
          <td colspan="2" style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">KECAMATAN</td>
          <td style="font-size: 9px">BANYURESMI</td>
          <td style="font-size: 9px">KAB/KOTA</td>
          <td style="font-size: 9px">: GARUT</td>
          <td style="font-size: 9px">PROVINSI</td>
          <td>: <span style="font-size: 9px">JAWABARAT</span></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size: 9px">A.</td>
          <td colspan="22" style="font-size: 9px">NAMA ISTRI SUAMI </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="17" style="font-size: 9px">NO</td>
          <td colspan="2" style="font-size: 9px">NAMA</td>
          <td colspan="2" style="font-size: 9px">TGL LAHIR</td>
          <td colspan="2" style="font-size: 9px">KAWIN TGL</td>
          <td colspan="2" style="font-size: 9px">ISTRI SUAMI KE</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">&nbsp;</td>
          <td style="font-size: 9px">B</td>
          <td colspan="7" style="font-size: 9px">ALAMAT SESUDAH PENSIUN </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td style="font-size: 9px">1.</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td style="font-size: 9px">KECAMATAN</td>
          <td>:</td>
          <td style="font-size: 9px">KAB/KOTA</td>
          <td>:</td>
          <td style="font-size: 9px">PROVINSI</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td style="font-size: 9px">2.</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td style="font-size: 9px">KODE POS</td>
          <td>:</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td style="font-size: 9px">3.</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td style="font-size: 9px">4.</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="101">&nbsp;</td>
          <td>&nbsp;</td>
          <td width="105">&nbsp;</td>
          <td width="6">&nbsp;</td>
          <td width="60">&nbsp;</td>
          <td width="2">&nbsp;</td>
          <td width="88">&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4" style="font-size: 9px; text-align: center;">MENGETAHUI</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="5" style="font-size: 9px">GARUT,</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4" rowspan="3">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="5" style="font-size: 9px">PEGAWAI NEGERI SIPIL YANG BERSANGKUTAN </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" rowspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4" style="text-align: center; font-size: 9px;">ddd</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" style="font-size: 9px; text-align: center;"><?php echo $peg->nama?></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4" style="text-align: center; font-size: 9px;">NIP.</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" style="text-align: center; font-size: 9px;">NIP.<?php echo $peg->nip?></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </h6>
</table>

  <?php }?>
   
</body>
</html>
</html>
</html>