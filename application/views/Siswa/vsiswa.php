<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Siswa Siswi SMPT GRAHA QUR'AN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa Siswi</li>
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

            <a href="<?= base_url('cDataSiswa/add_siswa') ?>" class="btn btn-success mt-3"><i class="fas fa-plus-circle"></i> Add Siswa Siswi</a>

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Siswa Siswi SMPT GRAHA QUR'AN</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nomor Induk Siswa</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Tanggal Lahir</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($siswa as $key => $value) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?>.</td>
                                            <td><strong><?= $value->nis ?></strong></td>
                                            <td><?= $value->name ?></td>
                                            <td><?php if ($value->gender == '1') {
                                                    echo 'Perempuan';
                                                } else {
                                                    echo 'Laki - Laki';
                                                }
                                                ?></td>
                                            <td><?= $value->tempat_lahir ?>, <?= $value->tanggal_lahir ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('cDataSiswa/updatesiswa/' . $value->nis) ?>" class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="<?= base_url('cDataSiswa/deletesiswa/' . $value->nis) ?>" class="btn btn-app">
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
                                        <th class="text-center">Nomor Induk Siswa</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Tanggal Lahir</th>
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