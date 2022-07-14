<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Paket Kelas <strong><?= $data['paket']->name_paket ?></strong></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Paket Kelas</li>
                    </ol>
                </div>
            </div>
            <?php
            if ($this->session->userdata('success')) {
            ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                    <?= $this->session->userdata('success') ?>
                </div>
            <?php
            }
            ?>
            <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-success mt-3"><i class="fas fa-plus-circle"></i> Add Detail Paket Kelas</button>

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Paket Pembelajaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama Item</th>
                                        <th class="text-center">Biaya</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['detail'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td class="text-center"><strong><?= $value->jenis_pembayaran ?></strong></a></td>
                                            <td class="text-center">Rp. <?= number_format($value->price)  ?></td>
                                            <td class="text-center">
                                                <button type="button" data-toggle="modal" data-target="#edit<?= $value->id_detailpaket ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <a href="<?= base_url('cDataPaket/delete/' . $value->id_detailpaket) ?>" class="btn btn-app">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama Item</th>
                                        <th class="text-center">Biaya</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <form action="<?= base_url('cDataPaket/adddetailpaket/' . $data['paket']->id_paket) ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Data Detail Paket Kelas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Item</label>
                        <input type="text" name="item" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Item Pembayaran" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya</label>
                        <input type="number" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Biaya Item" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
foreach ($data['detail'] as $key => $value) {
?>
    <div class="modal fade" id="edit<?= $value->id_detailpaket ?>">
        <div class="modal-dialog">
            <form action="<?= base_url('cDataPaket/updatedetailpaket/' . $value->id_detailpaket . '/' . $value->id_paket) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Paket Pembelajaran</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Item</label>
                            <input type="text" name="item" value="<?= $value->jenis_pembayaran ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Item Pembayaran" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Biaya</label>
                            <input type="number" name="harga" value="<?= $value->price ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Biaya Item" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php
}
?>