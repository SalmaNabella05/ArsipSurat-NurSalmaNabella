                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h2 mb-2 text-gray-800"><a href="<?php echo base_url('Dashboard/index') ?>"><span>Arsip Surat</span></a> <span> >> </span> <a href="<?php echo base_url('Dashboard/lihatSurat') ?>">Lihat</a></h1>
                    <!--                     <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="col-lg-7">
                                <!-- <div class="table-responsive"> -->
                                <div class="widget-content">
                                    <!-- <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Nomor</th>
                                            <td><?= $surat['no_surat']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kategori</th>
                                            <td><?= $surat['kategori']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Judul</th>
                                            <td><?= $surat['judul']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Waktu Unggah</th>
                                            <td><?= $surat['tgl_ubah']; ?></td>
                                        </tr>
                                    </table> -->

                                    Nomor &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= ($surat['no_surat']); ?><br>
                                    Kategori &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?= ($surat['kategori']); ?><br>
                                    Judul &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?= ($surat['judul']); ?><br>
                                    Waktu Unggah &nbsp; : <?= ($surat['tgl_ubah']); ?><br><br>

                                    <iframe src="<?= base_url('assets/img/' . $surat["file"]) ?>" width="900" height="400"></iframe>

                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="<?php echo base_url('Dashboard/index') ?>" class="btn btn-danger btn-sm">
                        << Kembali </a> <a href="<?= base_url('Dashboard/downloadFile/' . $surat["file"]); ?>" class="btn btn-warning btn-sm">Unduh
                    </a>
                    </a>
                    <a href="" class="btn btn-primary btn-sm"> Edit/Ganti Baru
                    </a>
                </div> <!-- /.container-fluid -->
                </div>

                </div>