<?php foreach($user as $aa){ ?>
        <h2 class="mb-4">Edit User</h2>
        <form action="<?= base_url('admin/user/update')?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" value="<?= $aa['nama'];?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" value="<?= $aa['username'];?>" readonly>
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id_user" value="<?= $aa['id_user'];?>">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" id="level" name="level">
                    <option value="Admin" <?php if($aa['level']=='Admin'){ echo 'selected';}?>>Admin</option>
                    <option value="User" <?php if($aa['level']=='User'){ echo 'selected';}?>>User</option>
                </select>
            </div>
            <a  href="<?= base_url('admin/user')?>" ><button type="button" class="btn btn-secondary" data-bs-dismiss="">Batal</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php }?>