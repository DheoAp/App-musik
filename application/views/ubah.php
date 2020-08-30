<form action="" method="post" enctype="multipart/form-data">
<h4 style="text-align: center;margin-bottom: 5px;"><i class="fas fa-headphones-alt"></i> Ubah Musik <i class="fas fa-headphones-alt"></i></h4>
<hr>
  <input type="hidden" name="id_musik" value="<?= $tbl_musik['id_musik']?>">
  <div>
    <label for="nama_band">Nama Band</label><br>
    <input type="text" name="nama_band" id="nama_band" value="<?= $tbl_musik['nama_band']?>">
  </div><br>

  <div>
    <label for="judul_musik">Judul Musik</label><br>
    <input type="text" name="judul_musik" id="judul_musik" value="<?= $tbl_musik['judul_musik']?>">
  </div><br>
  
  <div>
    <label>Genre</label>
    <select name="id_genre">
      <option disabled selected>Pilih</option>
      <?php foreach( $tbl_genre  as $g ): ?>
          <option value="<?= $g['id_genre']?>" <?php if($g['id_genre'] == $tbl_musik['id_genre']) echo'selected'?>><?= $g['nama_genre'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <hr>
  <button type="submit" name="tambah">Ubah</button>
  <button type="submit" name="tambah"><a style="text-decoration: none;color:black" rel="stylesheet" href="<?= base_url()?>">batal</a></button>
</form>
