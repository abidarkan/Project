<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .card {
            max-width: 600px;
            width: 130%;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.8);
            /* White background with 80% opacity */
        }

        .tab-content {
            padding-top: 20px;
        }

        @media (max-width: 767px) {
            .card {
                margin: 20px;
            }

            .p-5 {
                padding: 2rem !important;
            }
        }
    </style>
</head>

<body class="bg-image"
    style="background-size: cover; background-repeat: no-repeat; background-image: url('<?php echo base_url('assets/img/Background.jpg'); ?>'); height: 100vh"
    onload="onLoad()">

    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login"
                                                role="tab" aria-controls="login" aria-selected="true">Login Staff</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                                role="tab" aria-controls="register" aria-selected="false">Login
                                                Editor</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content" id="myTabContent">
                                        <!-- Login Staff Section -->
                                        <div class="tab-pane fade show active" id="login" role="tabpanel"
                                            aria-labelledby="login-tab">
                                            <form class="user mt-4"
                                                action="<?php echo site_url('Login_Control/cek_login_Staff'); ?>"
                                                method="post">
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user"
                                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                                        placeholder="Email" name="emailStaff">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="exampleInputPassword" placeholder="Password"
                                                        name="passwordStaff">
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Login
                                                </button>
                                                <hr>
                                                <a href="#" class="btn btn-google btn-user btn-block"
                                                    onclick="signInWithGoogle()">
                                                    <i class="fab fa-google fa-fw"></i> Login Dengan Email PCR
                                                </a>
                                            </form>
                                        </div>
                                        <!-- Login Editor Section -->
                                        <div class="tab-pane fade" id="register" role="tabpanel"
                                            aria-labelledby="register-tab">
                                            <form class="user mt-4"
                                                action="<?php echo site_url('Login_Control/cek_login_Editor'); ?>"
                                                method="post">
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user"
                                                        id="exampleInputEmail2" aria-describedby="emailHelp"
                                                        placeholder="Email" name="emailEditor">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="exampleInputPassword2" placeholder="Password"
                                                        name="passwordEditor">
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Login
                                                </button>
                                                <hr>
                                                <a href="#" class="btn btn-google btn-user btn-block"
                                                    onclick="signInWithGoogle()">
                                                    <i class="fab fa-google fa-fw"></i> Login Dengan Email PCR
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <?php if ($this->session->flashdata('error')): ?>
        <script>
            Swal.fire({
                title: 'Oops...',
                text: '<?php echo $this->session->flashdata('error'); ?>',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success')): ?>
        <script>
            Swal.fire({
                title: 'Sukses',
                text: '<?php echo $this->session->flashdata('success'); ?>',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

    <!-- Google Platform Library -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script>
        function onLoad() {
            gapi.load('auth2', function () {
                gapi.auth2.init({
                    client_id: '32560699373-kuvhb8rpcpublvoi5ubk5cm1hj8j2nqc.apps.googleusercontent.com',
                });
            });
        }

        function signInWithGoogle() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signIn().then(function (googleUser) {
                var profile = googleUser.getBasicProfile();
                console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log('Name: ' + profile.getName());
                console.log('Image URL: ' + profile.getImageUrl());
                console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

                // You can also get the ID token to send to your backend
                var id_token = googleUser.getAuthResponse().id_token;
                console.log('ID Token: ' + id_token);

                // Redirect or perform other actions
                window.location.href = 'http://localhost/Project/index.php/Welcome/index.#'; // Your redirect URI
            });
        }
    </script>


</body>

</html>