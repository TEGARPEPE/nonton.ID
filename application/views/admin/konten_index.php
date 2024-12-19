<?= $this->session->flashdata('alert');?>
<div>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
		Tambah Konten
	</button>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Tambah Konten</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konten/simpan'); ?>" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="nama" class="form-label">Judul</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Judul" name="judul">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Kategori</label>
                        <select name="id_kategori" class="form-control" id="">
                        <?php foreach($kategori as $aa){ ?>
                            <option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
                            <?php }?>
                        </select>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Keterangan</label>
						<textarea  placeholder="Masukkan Keterangan" class="form-control" id="nama" name="keterangan"></textarea>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Tahun</label>
						<input type="text" class="form-control" id="" placeholder="Masukkan Tahun" name="tahun">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Link Download</label>
						<input type="text" class="form-control" id="" placeholder="Masukkan Link" name="link">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Video</label>
                        <input type="file" class="form-control" name="video" accept="video/mp4, video/WebM">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="table-responsive">
	<table class="table text-nowrap mb-0 align-middle">
		<thead class="text-dark fs-4">
			<tr>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">No</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Judul</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Kategori Konten</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Keterangan</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Tanggal</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Kreator</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Foto</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Aksi</h6>
				</th>
			</tr>
		</thead>
		<?php $no=1; foreach($konten as $aa): ?>
		<tbody>
			<tr>
		
				<td><?= $no++ ?></td>
				<td><?= $aa['judul']?></td>
				<td><?= $aa['nama_kategori']?></td>
				<td>	<button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#keterangan<?= $no;?>">
		Baca Keterangan
	</button>
				
				<!-- Modal -->
				<div class="modal fade" id="keterangan<?= $no;?>" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="tambahUserModalLabel">Keterangan</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/konten/update'); ?>" method="post" enctype="multipart/form-data">
								<input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
									
									<div class="mb-3">
										<textarea class="form-control" id="nama" readonly><?= $aa['keterangan']?></textarea>
									</div>
									
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				</td>
				<td><?= $aa['tgl']?></td>
				<td><?= $aa['username']?></td>
				<td><a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank" class="btn btn-light btn-sm">Lihat Foto</a>

				</td>
				<td style="display: flex; justify-content:space-between;">
					<a onclick="return confirm('apakah anda ingin menghapus data ini?')"
						href="<?= base_url('admin/konten/hapus/'.$aa['foto'])?>"
						class="btn btn-danger btn-sm">hapus<i class='fa fa-trash'></i></a>
						<div>
	<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Edit<?= $no;?>">
		edit
	</button>
</div>
<!-- Modal -->
<div class="modal fade" id="Edit<?= $no;?>" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Edit</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
				<input type="hidden" name="id_konten" value="<?= $aa['id_konten']?>">

				<div class="mb-3">
						<label for="nama" class="form-label">Judul</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Judul" name="judul" value="<?= $aa['judul']?>">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Kategori</label>
                        <select name="id_kategori" class="form-control" id="">
                        <?php foreach($kategori as $uu){ ?>
                            <option 
							<?php if($uu['id_kategori']==$aa['id_kategori']){echo "selected"; }?>
							value="<?= $uu['id_kategori']?>"><?= $uu['nama_kategori']?></option>
                            <?php }?>
                        </select>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Keterangan</label>
						<textarea  placeholder="Masukkan Keterangan" class="form-control" id="nama" name="keterangan" ><?= $aa['keterangan']?></textarea>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Tahun</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Tahun" name="tahun" value="<?= $aa['tahun']?>">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Link</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Link" name="link" value="<?= $aa['link']?>">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/png, image/jpeg">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
				</td>
			</tr>
		</tbody>
		<?php endforeach; ?>
	</table>
</div>
