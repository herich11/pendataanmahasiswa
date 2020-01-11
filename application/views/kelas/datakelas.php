<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <a class="btn btn-success" href="<?= site_url('kelas/tambah/'); ?>" class="btn-block btn-outline-success">Tambah</a>
        <table class="table" border="0">
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
                        <a class="btn btn-primary" href="<?= site_url('kelas/edit/' . $row->id); ?>">Edit</a>
                        <a class="btn btn-warning" href="<?= site_url('kelas/hapus/' . $row->id); ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->



<?php
echo rupiah(10000);
echo getNamaHari("20200104");
?>