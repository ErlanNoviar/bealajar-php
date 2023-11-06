<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP | Product Variabel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
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
                    <a href="dashboard.php" class="nav-link">Home</a>
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
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard.php" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Welcome</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
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
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <!-- my-product -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
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
                                    <a href="productarray.php" class="nav-link">
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
                        <!-- /.sidebar-menu -->
                    </ul>
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
                            <h1>Product Variabel</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Product</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">List Product</h4>
                                </div>
                                <!-- product -->
                                <div class="card-body">
                                    <div class="card-deck">
                                        <!-- penyimpanan data Variabel Product -->
                                        <?php
                                        // Variabel Data Produk
                                        $gambar = array('../dist/img/product/Hoodie.jpg', "../dist/img/product/J.jpg", "../dist/img/product/Baseball.jpg", "../dist/img/product/jenas.jpg", "../dist/img/product/sepatu.jpg", "../dist/img/product/S.Putih.jpg", "../dist/img/product/PARAYU.jpg", "../dist/img/product/Converse.jpg");
                                        $nama = array("Jaket Zipper Pria Terkini", "Jaket Parasut Pria", "Jaket Baseball Pria Terkini", "Jaket Pria Model Jeans", "SEPATU SANTAI PRIA ARDIVO", "Sepatu Pria Running", "Parayu Sepatu Sneakers Kets Pria", "Converse 70s Ox Black White gret Premium Quality");
                                        $description = array("Jaket Pantai Motif Blue Sea Onesize", "Bahan Despo lembut, Tersedia ukuran M, L & XL", "Tersedia ukuran M ,L & XL", "Cocok untuk hunting. <br> Tersedia ukuran M, L & XL", "SNEAKERS - KASUAL TERBARU 2023", "Sneakers Model Terbaru 2021", "Hight Elve Sport", "Made In Vietnam");
                                        $harga = array("Rp. 80.000", "Rp. 120.000", "Rp. 150.000", "Rp. 160.000", "Rp500.000", "Rp150.000", "Rp170.000", "Rp180.000");
                                        ?>
                                        <div class="card">
                                            <img src="<?php echo $gambar[0]; ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <?php echo $nama[0]; ?>
                                                </h5>
                                                <p class="card-text">
                                                    <?php echo $description[0]; ?>
                                                </p>
                                                <p>
                                                    <?php echo $harga[0]; ?>
                                                </p>
                                                <a href="#" class="btn btn-primary">BUY</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[1]; ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <?php echo $nama[1]; ?>
                                                </h5>
                                                <p class="card-text">
                                                    <?php echo $description[1]; ?>
                                                </p>
                                                <p>
                                                    <?php echo $harga[1]; ?>
                                                </p>
                                                <a href="#" class="btn btn-primary">BUY</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[2]; ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <?php echo $nama[2]; ?>
                                                </h5>
                                                <p class="card-text">
                                                    <?php echo $description[2]; ?>
                                                </p>
                                                <p>
                                                    <?php echo $harga[2]; ?>
                                                </p>
                                                <a href="#" class="btn btn-primary">BUY</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[3]; ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <?php echo $nama[3]; ?>
                                                </h5>
                                                <p class="card-text">
                                                    <?php echo $description[3]; ?>
                                                </p>
                                                <p>
                                                    <?php echo $harga[3]; ?>
                                                </p>
                                                <a href="#" class="btn btn-primary">BUY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-deck">
                                    <div class="card">
                                        <img src="<?php echo $gambar[4]; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <?php echo $nama[4]; ?>
                                            </h5>
                                            <p class="card-text">
                                                <?php echo $description[4]; ?>
                                            </p>
                                            <p>
                                                <?php echo $harga[4]; ?>
                                            </p>
                                            <a href="#" class="btn btn-primary">BUY</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="<?php echo $gambar[5]; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <?php echo $nama[5]; ?>
                                            </h5>
                                            <p class="card-text">
                                                <?php echo $description[5]; ?>
                                            </p>
                                            <p>
                                                <?php echo $harga[5]; ?>
                                            </p>
                                            <a href="#" class="btn btn-primary">BUY</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="<?php echo $gambar[6]; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <?php echo $nama[6]; ?>
                                            </h5>
                                            <p class="card-text">
                                                <?php echo $description[6]; ?>
                                            </p>
                                            <p>
                                                <?php echo $harga[6]; ?>
                                            </p>
                                            <a href="#" class="btn btn-primary">BUY</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="<?php echo $gambar[7]; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <?php echo $nama[7]; ?>
                                            </h5>
                                            <p class="card-text">
                                                <?php echo $description[7]; ?>
                                            </p>
                                            <p>
                                                <?php echo $harga[7]; ?>
                                            </p>
                                            <a href="#" class="btn btn-primary">BUY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir Product -->
                        </div>
                    </div>
                </div>
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="https://github.com/ErlanNoviar">Erlan Noviar</a>.</strong>
        <div class="float-right d-none d-sm-inline-block">
            SIB - PT. Arkatama Multi Solusindo
        </div>
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
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- Filterizr-->
    <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
</body>

</html>