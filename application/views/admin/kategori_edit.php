<?php foreach($kategori as $aa){ ?>
        <h2 class="mb-4">Edit Kategori</h2>
        <form action="<?= base_url('admin/kategori/update')?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama" name="nama_kategori" placeholder="Masukkan Nama Kategori" value="<?= $aa['nama_kategori'];?>">
            </div>
            <div class="mb-3">
                <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
            </div>
            <a  href="<?= base_url('admin/kategori')?>" ><button type="button" class="btn btn-secondary" data-bs-dismiss="">Batal</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php }?>