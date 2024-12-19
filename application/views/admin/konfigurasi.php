	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Konfigurasi</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
					<div class="mb-3 mt-5">
						<label for="nama" class="form-label">Judul Website</label>
						<input type="text" class="form-control" id="nama"  name="judul" value="<?= $konfig->judul_web;?>">
					</div>
					<div class="mb-3 mt-3">
						<label for="nama" class="form-label">Profile Website</label>
						<textarea   class="form-control" id="nama" name="profil"><?= $konfig->profil_web;?></textarea>
					</div>
					<div class="mb-3 mt-3">
						<label for="nama" class="form-label">Facebook</label>
						<input type="text" class="form-control" id="nama"  name="facebook" value="<?= $konfig->facebook?>">
					</div>
					<div class="mb-3 mt-3">
						<label for="nama" class="form-label">Instagram</label>
						<input type="text" class="form-control" id="nama"  name="instagram" value="<?= $konfig->instagram;?>">
					</div>
					<div class="mb-3 mt-3">
						<label for="nama" class="form-label">Email</label>
						<input type="text" class="form-control" id="nama"  name="email" value="<?= $konfig->email;?>">
					</div>
					<div class="mb-3 mt-3">
						<label for="nama" class="form-label">Alamat</label>
						<input type="text" class="form-control" id="nama"  name="alamat" value="<?= $konfig->alamat;?>">
					</div>
					<div class="mb-3 mt-3">
						<label for="nama" class="form-label">WhatsApp</label>
						<input type="text" class="form-control" id="nama"  name="no_wa" value="<?= $konfig->no_wa;?>">
					</div>
					<div class="modal-footer mt-5">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>