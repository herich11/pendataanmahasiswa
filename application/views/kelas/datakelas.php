<a href="<?= site_url('kelas/tambah/'); ?>">Tambah</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Aksi</td>
    </tr>
    <?php
    foreach ($datakelas as $key => $row) { ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $row->namakelas; ?></td>
            <td>
                <a href="<?= site_url('kelas/edit/' . $row->id); ?>">Edit</a>
                <a href="<?= site_url('kelas/hapus/' . $row->id); ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

<?php
echo rupiah(10000);
echo getNamaHari("20200104");
?>