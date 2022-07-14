<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        Pembayaran Harus Segera Dibayarkan Sebelum Tanggal 10!
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Detail Pembayaran Siswa / Siswi SMP T GRAHA QURAN
                                    <small class="float-right">Date: <?= date('Y-m-d') ?></small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Siswa / Siswi
                                <address>
                                    <strong><?= $detail['siswa']->name ?></strong><br>
                                    <?= $detail['siswa']->address ?><br>

                                </address>
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-6 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Item</th>
                                            <th>Biaya</th>
                                            <th>Sisa Pembayaran</th>
                                            <th>Create At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $biaya = 0;
                                        $tagihan = 0;
                                        foreach ($detail['pembayaran'] as $key => $value) {
                                            $biaya += $value->price;
                                            $tagihan += $value->tagihan;
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value->jenis_pembayaran ?></td>
                                                <td>Rp. <?= number_format($value->price) ?></td>
                                                <td><strong>Rp. <?= number_format($value->tagihan)  ?></strong></td>
                                                <td><?= $value->update_at ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pembayaran Item</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Pay Update</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $valid = 0;
                                        foreach ($detail['payment'] as $key => $value) {
                                            $valid += $value->jml_bayar;
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value->jenis_pembayaran ?></td>
                                                <td><?= $value->tgl_bayar ?></td>
                                                <td><strong>Rp. <?= number_format($value->jml_bayar)  ?></strong></td>
                                                <td><?= $value->pay_update ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">

                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Informasi Total Pembayaran</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Sisa Pembayaran:</th>
                                            <td>Rp. <?= number_format($tagihan) ?></td>
                                        </tr>
                                        <tr>
                                            <th>Pembayaran Valid:</th>
                                            <td>Rp. <?= number_format($valid) ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width:50%">Total Pembayaran:</th>
                                            <td>Rp. <?= number_format($biaya)  ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <div class="row">

                            <!-- /.col -->
                        </div>

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                    Payment
                                </button>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>