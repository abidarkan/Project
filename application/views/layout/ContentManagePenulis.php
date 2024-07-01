<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Penulis</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Penulis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Induk</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Induk</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                                            $no = 1;
                                            foreach ($penulis as $d) :
                                            ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['NOMOR_INDUK'] ?></td>
                            <td><?= $d['NAMA'] ?></td>
                            <td><?= $d['EMAIL'] ?></td>
                            <td><?= $d['ROLE'] ?></td>
                        </tr>
                        <?php
                                            endforeach;
                                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->