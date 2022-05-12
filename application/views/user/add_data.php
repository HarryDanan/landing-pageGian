<form method="POST" action="<?php echo base_url(); ?>user/simpandata" enctype="multipart/form-data">
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="fw-bold"><i class="fa fa-plus"></i> Tambah Data Admin Koperasi </h5>
                </div>
                <div class="col-sm-6">
                    <div class="float-end">
                        <a class="btn btn-secondary btn-sm" href="<?php echo base_url(); ?>User">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Admin Koperasi</h5>
            <div class="mb-3">
                <label for="idKop" class="form-label">ID Koperasi</label>
                <input type="text" class="form-control" id="idKop" name="idKop" required>
                <div id="idKop" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <div id="username" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div id="password" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="nama" name="nama" required>
                <div id="nama" class="form-text"></div>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-end">
                <a class="btn btn-secondary" href="<?php echo base_url(); ?>Koperasi">Batal</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
    </div>
</form>
