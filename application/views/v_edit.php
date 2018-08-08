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
    <h1>Edit Data</h1><?php echo anchor('index','Kembali'); ?>
  </div>
  <?php foreach($tampil as $list){ ?>
  <form action="<?php echo site_url('crud/tambah_aksi'); ?>" method="POST">
    <input type="text" class="form-control" id="kode_peserta" name="kode_peserta" value="<?php echo $list->kode_peserta ?>" placeholder="Masukkan nama anda" hidden required="">
    <fieldset class="form-group">
      <label for="exampleInputEmail1">Nama Peserta</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $list->nama ?>" placeholder="Masukkan nama anda" required="">
      <!-- <small class="text-muted">We'll never share your email with anyone else.</small> -->
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">NIK</label>
      <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $list->nik ?>" placeholder="Masukkan NIK anda" required="">
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">No. HP</label>
      <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $list->no_hp ?>" placeholder="Masukkan No. HP anda" required="">
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $list->email ?>" placeholder="Masukkan Email anda" required="">
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">Skema Sertifikasi</label>
      <select class="form-control" id="skema_sertifikasi" name="skema_sertifikasi" required="">
        <option value="">Pilih Skema</option>
        <option value="1" <?php if($list->skema_sertifikasi=='1'){
          echo 'selected';
        } ?>>Programmer Madya</option>
        <option value="2"<?php if($list->skema_sertifikasi=='2'){
          echo 'selected';
        } ?>>Network Administrator</option>
        <option value="3" <?php if($list->skema_sertifikasi=='3'){
          echo 'selected';
        } ?>>Multimedia Madya</option>
      </select>
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">Tempat Uji Kompetensi</label>
      <select class="form-control" id="tmpt_uji" name="tmpt_uji" required="">
        <option value="">Pilih Tempat Uji Kompetensi</option>
        <option value="1" <?php if($list->tmpt_uji=='1'){
          echo 'selected';
        } ?>>Jambi</option>
        <option value="2" <?php if($list->tmpt_uji=='2'){
          echo 'selected';
        } ?>>Padang</option>
        <option value="3" <?php if($list->tmpt_uji=='3'){
          echo 'selected';
        } ?>>Lampung</option>
      </select>
    </fieldset>
    <label for="exampleInputPassword1">Rekomendasi</label>
    <div class="radio">
      <label>
        <input type="radio" name="rekomendasi" id="rekomendasi" value="1" required="" <?php if($list->rekomendasi=='1'){
          echo 'checked';
        } ?>>
        Ya
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="rekomendasi" id="rekomendasi" value="0" required="" <?php if($list->rekomendasi=='0'){
          echo 'checked';
        } ?>>Tidak
      </label>
    </div>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">Tanggal Terbit Sertifikasi</label>
      <input type="text" class="form-control" id="tanggal_terbit_sertifikasi" name="tanggal_terbit_sertifikasi" value="<?php echo $list->tanggal_terbit_sertifikasi; ?>" placeholder="Tanggal Terbit Sertifikasi" required="">
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">Tanggal Lahir</label>
      <input type="text" class="form-control" id="tanggal_lahir" value="<?php echo $list->tanggal_lahir ?>" name="tanggal lahir" placeholder="Tanggal Lahir" required="">
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleInputPassword1">Organisasi</label>
      <input type="text" class="form-control" id="organisasi" name="organisasi" value="<?php echo $list->organisasi ?>" placeholder="Masukkan Organisasi anda" required="">
    </fieldset>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger">Batal</button>
  </form>
<?php } ?>


</div> <!-- /container