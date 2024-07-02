<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Kerja</h1>

</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-12">
        <!-- Default Card Example -->

        <!-- Basic Card Example -->
        <div class="card shadow mb-4 animated--grow-in">
            <div class="card-body">
                <div class="mb-3">
                    <a href="<?= site_url('Staff/pengajuan?statusFilter=') ?>"
                        class="btn btn-primary <?= !isset($_GET['statusFilter']) ? 'active' : '' ?>">Semua</a>
                    <a href="<?= site_url('Staff/pengajuan?statusFilter=DIAJUKAN') ?>"
                        class="btn btn-primary <?= isset($_GET['statusFilter']) && $_GET['statusFilter'] == 'DIAJUKAN' ? 'active' : '' ?>">Sedang
                        dikerjakan</a>
                    <a href="<?= site_url('Staff/pengajuan?statusFilter=DIAJUKAN') ?>"
                        class="btn btn-primary <?= isset($_GET['statusFilter']) && $_GET['statusFilter'] == 'DIAJUKAN' ? 'active' : '' ?>">Belum Dikerjakan</a>

                    <a href="<?= site_url('Staff/pengajuan?statusFilter=DITERIMA') ?>"
                        class="btn btn-primary <?= isset($_GET['statusFilter']) && $_GET['statusFilter'] == 'DITERIMA' ? 'active' : '' ?>">Tuntas</a>

                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <!-- <tbody>
                            <?php
                            $no = 1;
                            foreach ($all_pengajuan as $ap):
                                ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $ap['JUDUL'] ?></td>
                                <td><?= $ap['NAMA_PENULIS'] ?></td>
                                <td><?= $ap['STATUS'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>" title="Edit" class="btn btn-primary btn-sm"
                                        data-toggle="modal" data-target="#exampleModal<?= $ap['ID_BUKU'] ?>">
                                        <i class="fas fa-pen-alt"></i>
                                    </a>
                                    <a href="" class="btn btn-primary btn-sm" title="Assign Editor" data-toggle="modal"
                                        data-target="#reviewModal<?= $ap['ID_BUKU'] ?>">
                                        <i class="fas fa-tasks"></i>
                                    </a>
                                    <a href="<?= site_url('Staff/del_pengajuan/' . $ap['ID_BUKU']) ?>" title="trash"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fas fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>

               <!-- <?php foreach ($all_pengajuan as $ap): ?>
                <div class="modal fade bd-example-modal-lg" id="exampleModal<?= $ap['ID_BUKU'] ?>" tabindex="-1"
                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Pengajuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= site_url('Staff/update_pengajuan/' . $ap['ID_BUKU']) ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputJudul<?= $ap['ID_BUKU'] ?>">Judul</label>
                                                <input type="text" class="form-control"
                                                    id="InputJudul<?= $ap['ID_BUKU'] ?>" name="judul"
                                                    value="<?= $ap['JUDUL'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputNama<?= $ap['ID_BUKU'] ?>">Nama Penulis</label>
                                                <input type="text" class="form-control"
                                                    id="InputNama<?= $ap['ID_BUKU'] ?>" name="nama_penulis"
                                                    value="<?= $ap['NAMA_PENULIS'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputEdisi<?= $ap['ID_BUKU'] ?>">Edisi</label>
                                                <input type="text" class="form-control"
                                                    id="InputEdisi<?= $ap['ID_BUKU'] ?>" name="edisi"
                                                    value="<?= $ap['EDISI'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputSeri<?= $ap['ID_BUKU'] ?>">Seri</label>
                                                <input type="text" class="form-control"
                                                    id="InputSeri<?= $ap['ID_BUKU'] ?>" name="seri"
                                                    value="<?= $ap['SERI'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputTahunTerbit<?= $ap['ID_BUKU'] ?>">Tahun Terbit</label>
                                                <input type="text" class="form-control"
                                                    id="InputTahunTerbit<?= $ap['ID_BUKU'] ?>" name="tahun_terbit"
                                                    value="<?= $ap['TAHUN_TERBIT'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputJumlahHalaman<?= $ap['ID_BUKU'] ?>">Jumlah
                                                    Halaman</label>
                                                <input type="text" class="form-control"
                                                    id="InputJumlahHalaman<?= $ap['ID_BUKU'] ?>" name="jumlah_halaman"
                                                    value="<?= $ap['JUMLAH_HALAMAN'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputTinggiBuku<?= $ap['ID_BUKU'] ?>">Tinggi Buku</label>
                                                <input type="text" class="form-control"
                                                    id="InputTinggiBuku<?= $ap['ID_BUKU'] ?>" name="tinggi_buku"
                                                    value="<?= $ap['TINGGI_BUKU'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputKategori<?= $ap['ID_BUKU'] ?>">Kategori</label>
                                                <input type="text" class="form-control"
                                                    id="InputKategori<?= $ap['ID_BUKU'] ?>" name="kategori"
                                                  
                                                  
                                                    value="<?= $ap['KATEGORI'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputJenis<?= $ap['ID_BUKU'] ?>">Jenis</label>
                                                <select class="custom-select" id="InputJenis<?= $ap['ID_BUKU'] ?>"
                                                    name="jenis">
                                                    <option value="Biografi"
                                                        <?= $ap['JENIS'] == 'Biografi' ? 'selected' : '' ?>>Biografi
                                                    </option>
                                                    <option value="Novel"
                                                        <?= $ap['JENIS'] == 'Novel' ? 'selected' : '' ?>>Novel</option>
                                                    <option value="Cerpen"
                                                        <?= $ap['JENIS'] == 'Cerpen' ? 'selected' : '' ?>>Cerpen
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputMedia<?= $ap['ID_BUKU'] ?>">Media</label>
                                                <input type="text" class="form-control"
                                                    id="InputMedia<?= $ap['ID_BUKU'] ?>" name="media"
                                                    value="<?= $ap['MEDIA'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputFileBuku<?= $ap['ID_BUKU'] ?>">File Buku</label>
                                                <input type="file" class="form-control"
                                                    id="InputFileBuku<?= $ap['ID_BUKU'] ?>" name="file_buku">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputFileLampiran<?= $ap['ID_BUKU'] ?>"
                                                    class="form-label">Lampiran
                                                    Pendukung</label>
                                                <input class="form-control" type="file"
                                                    id="InputFileLampiran<?= $ap['ID_BUKU'] ?>"
                                                    name="lampiran_pendukung[]" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-group">
                                                <label for="InputKeterangan<?= $ap['ID_BUKU'] ?>">Keterangan</label>
                                                <input type="text" class="form-control"
                                                    id="InputKeterangan<?= $ap['ID_BUKU'] ?>" name="keterangan"
                                                    value="<?= $ap['KETERANGAN'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <?php foreach ($all_pengajuan as $ap): ?>
                <div class="modal fade" id="reviewModal<?= $ap['ID_BUKU'] ?>" tabindex="-1" role="dialog"
                    aria-labelledby="reviewModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="reviewModalLabel">Assign Editor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo site_url('Form_Control/submit'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="A_id_buku<?= $ap['ID_BUKU'] ?>">ID BUKU</label>
                                        <input type="text" name="id_buku" id="A_id_buku<?= $ap['ID_BUKU'] ?>"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_buku">ID Buku:</label>
                                        <input type="text" name="id_buku" id="id_buku" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?> -->
                </div>
            </div>
        </div>
    </div>
    </script>
    <!-- Add Data Modal -->
    <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data Pengajuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url('Staff/add_pengajuan') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="In Progress">Sedang Berlangsung</option>
                                <option value="Edited">Edited</option>
                                <option value="Completed">Selesai</option>
                                <option value="Rejected">Ditolak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">Upload File</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>