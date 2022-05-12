<form method="POST" action="<?php echo base_url(); ?>admin/simpandata" enctype="multipart/form-data">
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="fw-bold"><i class="fa fa-plus"></i> Tambah Data Admin </h5>
                </div>
                <div class="col-sm-6">
                    <div class="float-end">
                        <a class="btn btn-secondary" href="<?php echo base_url(); ?>Admin">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Admin</h5>
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
                <input type="text" class="form-control" id="nama" name="nama" required>
                <div id="nama" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" aria-label="role" id="role" name="role" required>
                    <option selected value="-">Open this select menu</option>
                    <option value="Admin Super" name="Admin Super">Admin Super</option>
                    <option value="Admin Bidang" name="Admin Bidang">Admin Bidang</option>
                </select>
                <div id="role" class="form-text"></div>
            </div>
            <div id="div-bidang" class="mb-3 d-none">
                <label for="tipe_bidang" class="form-label">Bidang</label>
                <select class="form-select" aria-label="tipe_bidang" id="tipe_bidang" name="tipe_bidang">
                    <option selected value="-">Open this select menu</option>
                    <option value="Bidang A" name="Bidang A">Bidang A</option>
                    <option value="Bidang B" name="Bidang B">Bidang B</option>
                    <option value="Bidang C" name="Bidang C">Bidang C</option>
                    <option value="Bidang D" name="Bidang D">Bidang D</option>
                </select>
                <div id="role" class="form-text"></div>
            </div>

        </div>
        <div class="card-footer">
            <div class="float-end">
                <a class="btn btn-secondary" href="<?php echo base_url(); ?>Admin">Batal</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
    </div>
</form>
<script>
    $("#role").change(function() {
        if ($("#role").val() == 'Admin Bidang') {
            $('#div-bidang').removeClass('d-none').addClass('d-block');
        }else if ($("#role").val() == 'Admin Super'){
            $('#div-bidang').removeClass('d-block').addClass('d-none');
        }
    });
</script>