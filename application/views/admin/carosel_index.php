<?= $this->session->flashdata('alert')?>
<div class="card">
	<form action="<?= base_url('admin/carosel/simpan') ?>" method="post" enctype="multipart/form-data">
		<h5 class="card-header">File input</h5>
		<div class="card-body">
			<div class="mb-3">
				<label for="nama" class="form-label">Judul</label>
				<input type="text" class="form-control" id="nama" placeholder="Masukkan Judul Foto" name="judul">
			</div>
			<div class="mb-3">
				<label for="formFile" class="form-label">Pilih Foto Dengan Ukuran 1:3</label>
				<input class="form-control" type="file" id="formFile" name="foto">
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</form>
</div>

<?php foreach ($carosel as $aa) {?>
<div class="col-md-12 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/carousel/').$aa['foto']?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul']?></h5>
			<a onclick="return confirm('apakah anda ingin menghapus data ini?')"
				href="<?= base_url('admin/carosel/hapus/'.$aa['foto'])?>" class="btn btn-danger btn-sm">hapus<i
					class='fa fa-trash'></i></a>
		</div>
	</div>
</div>
<?php }?>
