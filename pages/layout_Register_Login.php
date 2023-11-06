<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Navbar & Tabs</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index3.html" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Welcome</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Erlan Noviar</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="dashboard.php" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <!-- my-product -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon 	fas fa-shopping-basket"></i>
                                <p>
                                    Product
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="productvariabel.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Variabel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="productarray.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Array</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- Akhir my-product -->

                        <!-- Product POS -->
                        <li class="nav-item menu-open">
                            <a href="product_pos.php" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Product POS
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <!-- Akhir Product POS -->

                        <!-- Login-layout -->
                        <li class="nav-item menu-open">
                            <a href="layout_Register_Login.php" class="nav-link">
                                <i class="nav-icon 	fas fa-spa"></i>
                                <p>
                                    Desain
                                </p>
                            </a>
                        </li>
                        <!-- Akhir Login-layout -->

                        <!-- Logout-layout -->
                        <li class="nav-item menu-open">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Log-out
                                </p>
                            </a>
                        </li>
                        <!-- Akhir Logout -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                Layout Login & Register
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Login & Register</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Register -->
                        <div class="col-12 col-sm-6">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill"
                                                href="#custom-tabs-two-home" role="tab"
                                                aria-controls="custom-tabs-two-home" aria-selected="true">Register</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Akhir Register -->
                                <!-- Layout Register -->
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-home-tab">
                                            <div class="register-box">
                                                <div class="register-logo">
                                                    <a href="#"><b>Admin</b>LTE</a>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body register-card-body">
                                                        <p class="login-box-msg">Register a new membership</p>

                                                        <form action="#" method="post">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Full name">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-user"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-users"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-envelope"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-lock"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Retype password">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-lock"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="icheck-primary">
                                                                        <input type="checkbox" id="agreeTerms"
                                                                            name="terms" value="agree">
                                                                        <label for="agreeTerms">
                                                                            I agree to the <a href="#">terms</a>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-4">
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-block">Register</button>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                        </form>

                                                        <div class="social-auth-links text-center">
                                                            <p>- OR -</p>
                                                            <a href="#" class="btn btn-block btn-primary">
                                                                <i class="fab fa-facebook mr-2"></i>
                                                                Sign up using Facebook
                                                            </a>
                                                            <a href="#" class="btn btn-block btn-danger">
                                                                <i class="fab fa-google-plus mr-2"></i>
                                                                Sign up using Google+
                                                            </a>
                                                        </div>

                                                        <a href="../pages/login-layout.php" class="text-center">I
                                                            already have a membership</a>
                                                    </div>
                                                    <!-- /.form-box -->
                                                </div><!-- /.card -->
                                            </div>
                                            <!-- /.register-box -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- Akhir Layout Register -->

                        <!-- Content Login -->
                        <div class="col-12 col-sm-6">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                                href="#custom-tabs-one-home" role="tab"
                                                aria-controls="custom-tabs-one-home" aria-selected="true">Login</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Akhir Content Login -->
                                <!-- Layout Login -->
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-home-tab">
                                            <div class="register-box">
                                                <div class="register-logo">
                                                    <a href="#"><b>Admin</b>LTE</a>
                                                </div>

                                                <div class="card">
                                                    <div class="card-body login-card-body">
                                                        <p class="login-box-msg">Sign in to start your session</p>
                                                        <form action="#" method="post">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" name="username">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-user-circle"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" name="password">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-lock"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="icheck-primary">
                                                                        <input type="checkbox" id="remember">
                                                                        <label for="remember">
                                                                            Remember Me
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-4">
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-block"
                                                                        name="login">Sign In</button>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                        </form>

                                                        <div class="social-auth-links text-center mb-3">
                                                            <p>- OR -</p>
                                                            <a href="#" class="btn btn-block btn-primary">
                                                                <i class="fab fa-facebook mr-2"></i> Sign in using
                                                                Facebook
                                                            </a>
                                                            <a href="#" class="btn btn-block btn-danger">
                                                                <i class="fab fa-google-plus mr-2"></i> Sign in using
                                                                Google+
                                                            </a>
                                                        </div>
                                                        <!-- /.social-auth-links -->

                                                        <p class="mb-1">
                                                            <a href="forgot-password.php">I forgot my password</a>
                                                        </p>
                                                        <p class="mb-0">
                                                            <a href="register-layout.php" class="text-center">Register a
                                                                new membership</a>
                                                        </p>
                                                    </div>
                                                    <!-- /.login-card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.register-box -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- Akhir Layout Login -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>