Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container theme-showcase" role="main">


<!-- form tambah data peserta -->
  <br>
  <div class="page-header">
    <h1>Data Peserta Sertifikasi</h1>
  </div>
  <center><?php echo anchor('crud','Tambah Data'); ?></center>
  <table id="tabel_peserta" class="table table-bordered" style="margin:20px auto;" border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIK</th>
      <th>No HP</th>
      <th>E-mail</th>
      <th>Skema sertifikasi</th>
      <th>Tempat Uji Kompetensi</th>
      <th>Rekomendasi</th>
      <th>Tanggal Terbit Sertifikasi</th>
      <th>Tanggal Lahir</th>
      <th>Organisasi</th>
      <th>Aksi</th>
    </tr>
    <?php 
    $no = 1;
    foreach($tampil as $list){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $list->nama ?></td>
      <td><?php echo $list->nik ?></td>
      <td><?php echo $list->no_hp ?></td>
      <td><?php echo $list->email ?></td>
      <td><?php 
      if($list->skema_sertifikasi == '1'){
        echo 'Programmer Madya';
      }
      elseif ($list->skema_sertifikasi== '2') {
        echo 'Network Administrator';
      }
      elseif ($list->skema_sertifikasi== '3') {
        echo 'Multimedia Madya';
      }

      ?></td>
      <td><?php 
      if($list->tmpt_uji == '1'){
        echo 'Jambi';
      }
      elseif ($list->skema_sertifikasi== '2') {
        echo 'Padang';
      }
      elseif ($list->skema_sertifikasi== '3') {
        echo 'Lampung';
      }?></td>
      <td><?php 
      if($list->rekomendasi == '1'){
        echo 'Ya';
      }
      elseif ($list->rekomendasi== '0') {
        echo 'Tidak';
      } ?></td>
      <td><?php echo $list->tanggal_terbit_sertifikasi ?></td>
      <td><?php echo $list->tanggal_lahir ?></td>
      <td><?php echo $list->organisasi ?></td>
      <td><?php echo anchor('crud/edit/'.$list->kode_peserta,'Edit'); ?> <?php echo anchor('crud/hapus/'.$list->kode_peserta,'Hapus'); ?></td>
    </tr>
    <?php } ?>
  </table>
<p>Jumlah Data : <?php  echo $this->db 
                    ->count_all_results('tb_peserta'); ?> Orang</p>
<p>Jumlah Skema Programmer Madya: <?php  echo $this->db
                    ->where('skema_sertifikasi','1')
                    ->count_all_results('tb_peserta'); ?> Orang || Jumlah Skema Netwok Administrator: <?php  echo $this->db
                    ->where('skema_sertifikasi','2')
                    ->count_all_results('tb_peserta'); ?> Orang || Jumlah Skema Multimedia Madya : <?php  echo $this->db
                    ->where('skema_sertifikasi','3')
                    ->count_all_results('tb_peserta'); ?> Orang</p>
<p>Jumlah Peserta Rekomendasi : <?php  echo $this->db
                    ->where('rekomendasi','0')
                    ->count_all_results('tb_peserta'); ?> Orang || Jumlah Peserta Tidak Di Rekomendasi : <?php  echo $this->db
                    ->where('rekomendasi','1')
                    ->count_all_results('tb_peserta'); ?> Orang</p>



</div> <!-- /container