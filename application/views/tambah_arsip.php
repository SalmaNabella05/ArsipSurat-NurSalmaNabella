                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h2 mb-2 text-gray-800"><a href="<?php echo base_url('Dashboard/index') ?>"><span>Arsip Surat</span></a> <span> >> </span> <a href="<?php echo base_url('Dashboard/tambahArsip') ?>">Unggah</a></h1>
                    <h1 class="h6 mb-2 text-gray-800">Unggah surat yang telah terbit pada form ini untuk diarsipkan.</h1>
                    <h1 class="h6 mb-2 text-gray-800">Catatan :</h1>
                    <h1 class="h6 mb-2 text-gray-800"> * Gunakan file berformat PDF</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="p-">
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <form action="<?= base_url('Dashboard/tambahArsip') ?>" method="post" enctype="multipart/form-data">
                                    <form class="user">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-sm-0">
                                                <label for="no_surat">Nomor Surat</label>
                                                <input type="text" class="form-control form-control-user" id="no_surat" name="no_surat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="kategori">Kategori</label>
                                                <select class="form-control" id="kategori" name="kategori">
                                                    <option value="0_jabatan">--- Pilih Kategori ---</option>
                                                    <option value="Undangan">Undangan</option>
                                                    <option value="Pengumuman">Pengumuman</option>
                                                    <option value="Nota Dinas">Nota Dinas</option>
                                                    <option value="Pemberitahuan">Pemberitahuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control form-control-user" id="judul" name="judul">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-4">
                                                <label for="file">File Surat (PDF)</label>
                                                <input type="file" class="form-control" id="file" name="file">
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden="true">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tgl_ubah">Tanggal Ubah</label>
                                                <input type="text" class="form-control form-control-user" id="tgl_ubah" name="tgl_ubah" value="<?php echo date("d-m-Y H:i:s") ?>">
                                            </div>
                                        </div>

                                        <a href="<?php echo base_url('Dashboard/index') ?>" class="btn btn-danger btn-sm" class="btn btn-warning btn-sm">
                                            << Kembali </a> <button type="submit" name="submit" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Simpan
                                                </button>
                                    </form>
                                </form>
                            </div>
                            <!-- </div>
                            </div> -->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->