<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Data Siswa/Siswi SMPT GRAHA QUR'AN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Data Siswa Siswi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Input Data Siswa/Siswi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('cDataSiswa/updatesiswa/' . $siswa->nis) ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Induk Siswa / Siswi</label>
                                    <input type="number" name="nis" value="<?= $siswa->nis ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor Induk Siswa / Siswi">
                                    <?= form_error('nis', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Lengkap</label>
                                    <input type="text" name="nama" value="<?= $siswa->name ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Lengkap">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                                    <select class="form-control" name="jk">
                                        <option value="">---Pilih Jenis Kelamin---</option>
                                        <option value="1" <?php if ($siswa->gender == '1') {
                                                                echo 'selected';
                                                            } ?>>Perempuan</option>
                                        <option value="2" <?php if ($siswa->gender == '2') {
                                                                echo 'selected';
                                                            } ?>>Laki-Laki</option>
                                    </select>
                                    <?= form_error('jk', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tempat Lahir</label>
                                            <input type="text" value="<?= $siswa->tempat_lahir ?>" name="tempat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
                                            <?= form_error('tempat', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Lahir</label>
                                            <input type="date" name="tgl" value="<?= $siswa->tanggal_lahir ?>" class="form-control" id="exampleInputPassword1">
                                            <?= form_error('tgl', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa / Siswi"><?= $siswa->address ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
                                <a href="<?= base_url('cDataSiswa') ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>