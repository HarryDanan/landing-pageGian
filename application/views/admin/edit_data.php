<form method="POST" action="<?php echo base_url(); ?>admin/updatedata" enctype="multipart/form-data">
  <div class="card shadow mb-4">
    <div class="card-header">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="fw-bold"><i class="fa fa-edit"></i> Edit Data <?php echo $dataAdmin->nama ?> </h5>
        </div>
        <div class="col-lg-6">
          <div class="float-end">
            <a class="btn btn-secondary btn-sm" href="<?php echo base_url(); ?>Admin">Kembali</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">

      <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Admin</h5>
      <div class="mb-3">
        <input type="hidden" name="id" value="<?php echo $dataAdmin->id; ?>">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $dataAdmin->username; ?>">
        <div id="username" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" value="<?php echo $dataAdmin->password; ?>">
        <div id="password" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataAdmin->nama; ?>">
        <div id="nama" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select class="form-select" aria-label="role" id="role" name="role">
          <option value="-" <?php if ($dataAdmin->role == '-') {
                              echo ' selected="selected"';
                            } ?>>Open this select menu</option>
          <option value="Admin Super" name="Admin Super" <?php if ($dataAdmin->role == 'Admin Super') {
                                                            echo ' selected="selected"';
                                                          } ?>>Admin Super</option>
          <option value="Admin Bidang" name="Admin Bidang" <?php if ($dataAdmin->role == 'Admin Bidang') {
                                                              echo ' selected="selected"';
                                                            } ?>>Admin Bidang</option>
        </select>
        <div id="role" class="form-text"></div>
      </div>
      <div id="div-bidang" class="mb-3">
        <label for="role" class="form-label">Tipe Bidang</label>
        <select class="form-select" aria-label="role" id="role" name="role">
          <option value="-" <?php if ($dataAdmin->tipe_bidang == '-') {
                              echo ' selected="selected"';
                            } ?>>Open this select menu</option>
          <option value="Bidang A" name="Bidang A" <?php if ($dataAdmin->tipe_bidang == 'Bidang A') {
                                                      echo ' selected="selected"';
                                                    } ?>>Bidang A</option>
          <option value="Bidang B" name="Bidang B" <?php if ($dataAdmin->tipe_bidang == 'Bidang B') {
                                                      echo ' selected="selected"';
                                                    } ?>>Bidang B</option>
          <option value="Bidang C" name="Bidang C" <?php if ($dataAdmin->tipe_bidang == 'Bidang C') {
                                                      echo ' selected="selected"';
                                                    } ?>>Bidang C</option>
          <option value="Bidang D" name="Bidang D" <?php if ($dataAdmin->tipe_bidang == 'Bidang D') {
                                                      echo ' selected="selected"';
                                                    } ?>>Bidang D</option>
        </select>
        <div id="role" class="form-text"></div>
      </div>
      <div class="card-footer">
        <div class="float-end">
          <a class="btn btn-secondary" href="<?php echo base_url(); ?>Admin">Batal</a>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
        </div>
      </div>
    </div>
</form>

<script>
  function check_tipe() {
    if ($("#role").val() == 'Admin Bidang') {
      $('#div-bidang').removeClass('d-none').addClass('d-block');
    } else if ($("#role").val() == 'Admin Super') {
      $('#div-bidang').removeClass('d-block').addClass('d-none');
    }
  }
  check_tipe();
  $("#role").change(function() {
    check_tipe();
  });
</script>