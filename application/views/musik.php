<div class="body">
	
	<h3><i class="fas fa-music"></i> Playlist Musik Saya</h3>
	<hr class="hr">
	<?php if( $this->session->flashdata('flash')): ?>
			<div style="color: green;">
				Data musik <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
			</div>
	<?php endif; ?>
	<table>
		<thead class="text-center">
			<tr>
			<th>Nama Band</th>
			<th>Judul Musik</th>
			<th>Genre</th>
			<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $tbl_musik  as $m ): ?>
				<tr>
				<td><?= $m->nama_band;?></td>
				<td><?= $m->judul_musik;?></td>
				<td><?= $m->nama_genre;?></td>
				<td>
					<a rel="stylesheet" onClick="return confirm('Hapus Musik?')" href="<?= base_url()?>musik/hapus/<?= $m->id_musik?>">Hapus</a>
					<a rel="stylesheet" href="<?= base_url()?>musik/ubah/<?= $m->id_musik?>">Ubah</a>
				</td>
			</tr>
			<?php endforeach; ?>			
		</tbody>
	</table>
</div>
