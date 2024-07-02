<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- jsPDF and jsPDF AutoTable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- (Sidebar content here) -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- (Topbar content here) -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row animated--grow-in">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                SEDANG BERJALAN</div>
                                            <div class="h5 mb-0 font-weight-bold text-primary"><?php echo ($count); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fas fa-bars fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                DIEDIT</div>
                                            <div class="h5 mb-0 font-weight-bold text-warning">
                                                <?php echo ($count_edited); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-edit fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                SELESAI</div>
                                            <div class="h5 mb-0 font-weight-bold text-success">
                                                <?php echo ($count_completed); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check-circle fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                DITOLAK</div>
                                            <div class="h5 mb-0 font-weight-bold text-danger">
                                                <?php echo ($count_rejected); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-times-circle fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Ubah col-lg-6 menjadi col-lg-12 -->
                            <!-- Default Card Example -->

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-10">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">PENGAJUAN TERBARU</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="dataPengajuanTerbaru"
                                            width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Judul</th>
                                                    <th>Penulis</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($recent as $rct): ?>
                                                    <tr>
                                                        <td><?= $rct['JUDUL'] ?></td>
                                                        <td><?= $rct['NAMA_PENULIS'] ?></td>
                                                        <td><?= $rct['STATUS'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- (Footer content here) -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- jsPDF script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const {
                jsPDF
            } = window.jspdf;

            document.getElementById('generateReport').addEventListener('click', function (event) {
                event.preventDefault(); // Mencegah link default

                const doc = new jsPDF();

                // Menambahkan judul
                doc.setFontSize(18);
                doc.text('Dashboard Report', 10, 10);

                // Menambahkan ringkasan
                doc.setFontSize(12);
                doc.text('Ringkasan:', 10, 20);
                doc.text('SEDANG BERJALAN: ' + <?php echo json_encode($count); ?>, 10, 30);
                doc.text('DIEDIT: ' + <?php echo json_encode($count_edited); ?>, 10, 40);
                doc.text('SELESAI: ' + <?php echo json_encode($count_completed); ?>, 10, 50);
                doc.text('DITOLAK: ' + <?php echo json_encode($count_rejected); ?>, 10, 60);

                // Menambahkan tabel
                doc.text('Pengajuan Terbaru:', 10, 70);
                const headers = [
                    ['Judul', 'Penulis', 'Status']
                ];
                const rows = <?php echo json_encode(array_map(function ($rct) {
                    return [$rct['JUDUL'], $rct['NAMA_PENULIS'], $rct['STATUS']];
                }, $recent)); ?>;

                doc.autoTable({
                    head: headers,
                    body: rows,
                    startY: 80,
                    theme: 'striped'
                });

                // Download PDF
                doc.save('dashboard_report.pdf');
            });
        });
    </script>

</body>

</html>