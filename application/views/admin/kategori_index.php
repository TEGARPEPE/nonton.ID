<?= $this->session->flashdata('alert');?>
<div>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
		Tambah Kategori
	</button>
</div>
<div class="table-responsive">
	<table class="table text-nowrap mb-0 align-middle">
		<thead class="text-dark fs-4">
			<tr>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">No</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Nama Kategori</h6>
				</th>
				<th class="border-bottom-0">
					<h6 class="fw-semibold mb-0">Aksi</h6>
				</th>
			</tr>
		</thead>
		<?php $no=1; foreach($kategori as $aa): ?>
		<tbody>
			<tr>

				<td><?= $no++ ?></td>
				<td><?= $aa['nama_kategori']?></td>
				<td>
					<a onclick="return confirm('apakah anda ingin menghapus data ini?')"
						href="<?= base_url('admin/kategori/hapus/'.$aa['id_kategori'])?>"
						class="btn btn-danger btn-sm">hapus<i class='fa fa-trash'></i></a>
					<a href="<?= base_url('admin/kategori/edit/'.$aa['id_kategori'])?>" id="delete-button"
						class="btn btn-warning btn-sm"><i class='fa fa-edit'></i>edit</a>
				</td>
			</tr>
		</tbody>
		<?php endforeach; ?>
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Tambah Kategori</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/kategori/simpan'); ?>" method="post">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama Kategori</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Kategori"
							name="nama_kategori">
					</div>
					<div class="modal-footer" >
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
