<!-- <?php
        $i = 1;
        foreach ($data as $row) {
        ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row->namaKoperasi ?></td>
        <td><?php echo $row->nomorBadanHukum ?></td>
        <td><?php echo $row->tglPerubahan_terbaru ?></td>
        <td><?php echo $row->alamatKoperasi ?></td>
        <td><?php echo $row->kecamatan ?></td>
        <td><?php echo $row->nikKoperasi ?></td>
        <td><?php echo $row->statusNIK ?></td>
        <td><button class="btn btn-success view-dataKoperasi" data-bs-toggle="modal" data-bs-target="#modal-view" data-bs-id="<?php echo $row->id; ?>">Detail</button></td>
    </tr>
<?php } ?> -->
<?php
foreach ($dataKoperasi as $row) {
?>
    <tr>
        <td style="min-width:230px;"><?php echo $row->namaKoperasi; ?></td>
        <td><?php echo $row->nomorBadanHukum ?></td>
        <td><?php echo $row->tglPerubahan_terbaru ?></td>
        <td><?php echo $row->alamatKoperasi ?></td>
        <td><?php echo $row->kecamatan ?></td>
        <td><?php echo $row->nikKoperasi ?></td>
        <td><?php echo $row->statusNIK ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $row->id; ?>"><i class="glyphicon glyphicon-repeat"></i>Edit </button>
            <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $row->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i>Delete </button>
        </td>
    </tr>
<?php
}
?>