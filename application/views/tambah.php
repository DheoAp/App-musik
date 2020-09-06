<form action="" method="post" enctype="multipart/form-data">
  <?php if( validation_errors() ): ?>
    <div style="color: red;border:1px solid red">
      <?= validation_errors();?>
    </div>
  <?php endif; ?>
  
  <h4 style="text-align: center;margin-bottom: 5px;"><i class="fas fa-headphones-alt"></i> Tambah Musik</h4>
  <hr>
  <div style="margin-top: 25px;">
    <label for="nama_band">Nama Band</label><br>
    <input  type="text" name="nama_band" id="nama_band" autocomplete="off" autofocus>
  </div><br>

  <div>
    <label for="judul_musik">Judul Musik</label><br>
    <input type="text" name="judul_musik" id="judul_musik" >
  </div><br>
  
  <div>
  <label>Genre</label>
    <select name="id_genre">
      <option disabled selected>Pilih</option>
      <?php foreach( $tbl_genre  as $g ): ?>
          <option value="<?= $g['id_genre']?>"><?= $g['nama_genre'];?></option>
      <?php endforeach; ?>
    </select>
  </div><br>
  <hr>
  <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
</form>
