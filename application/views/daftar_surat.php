                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h2 mb-2 text-gray-800">Arsip Surat</h1>
                    <h1 class="h6 mb-2 text-gray-800">Berikut ini adalah surat-surat yang telah diterbit dan diarsipkan.</h1>
                    <h1 class="h6 mb-2 text-gray-800">Klik "Lihat" pada kolom aksi untuk menampilkan surat</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor Surat</th>
                                            <th>Kategori</th>
                                            <th style="width: 300px;">Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th style="width: 190px;"> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($surat as $u) { ?>
                                            <tr>
                                                <td><?php echo $u->no_surat ?></td>
                                                <td><?php echo $u->kategori ?></td>
                                                <td><?php echo $u->judul ?></td>
                                                <td><?php echo $u->tgl_ubah ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>Dashboard/hapusSurat/<?= $u->id_surat; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data Surat dengan judul (<?php echo $u->judul ?>) akan dihapus? ?')">Hapus
                                                    </a>
                                                    <a href="<?= base_url('Dashboard/downloadFile/' . $u->file); ?>" class="btn btn-warning btn-sm">Unduh
                                                    </a>
                                                    <a href="<?= base_url(); ?>Dashboard/lihatSurat/<?= $u->id_surat; ?>" class="btn btn-primary btn-sm">Lihat >>
                                                    </a>

                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a href="<?php echo base_url('Dashboard/tambahArsip') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-folder-plus"></i>
                            </span>
                            <span class="text">Arsipkan Surat</span>
                        </a>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>