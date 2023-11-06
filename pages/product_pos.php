<?php
include 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar PHP | Product POS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <?php
              function konversi()
              {
                date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                $hari = date('l');
                $tanggal = date('j');
                $bulan = date('F');
                $tahun = date('Y');
                $jam = date('H');
                $menit = date('i');
                $detik = date('s');

                $hasil = "$hari, $tanggal $bulan $tahun | $jam:$menit:$detik";
                return $hasil;
              }
              $hasil = konversi();
              echo $hasil;
              ?>
            </li>
          </ol>
        </nav>
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
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
              <a href="../index.php" class="nav-link">
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
              <h1>Data Product | CRUD</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Product</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- create/tambah data -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <!-- Button to Open the Modal -->
              <button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#myModal">
                Tambah Product Baru
              </button>

              <!-- Form Pencarian Data -->
              <div class="card-tools">
                <form method="post" action="">
                  <div class="input-group input-group-mb">
                    <input type="text" name="cari" id="search-input" class="form-control float-right"
                      placeholder="Search" autofocus autocomplete="off">
                    <div class="input-group-append">
                      <button type="submit" name="tombol_cari" class="btn btn-default" value="cari">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.Akhir form Pencarian Data -->
            </div>


            <!-- akhir create/tambah data -->

            <!-- main content -->
            <div class="col-12 mt-2">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar Product</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr style="text-align:center">
                        <th>No</th>
                        <th>Nama Product</th>
                        <th>Categori ID</th>
                        <th>Code Product</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Unit</th>
                        <th>Discount</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Option</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      // pagination & Limit
                      $jumlahDataPerHalaman = 5;
                      $result = mysqli_query($con, 'SELECT * FROM products');
                      $jumlahData = mysqli_num_rows($result);
                      $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                      $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
                      $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
                      // akhir pagination
                      
                      $get = mysqli_query($con, "SELECT * FROM products LIMIT $awalData, $jumlahDataPerHalaman");


                      // Array Kategori 
                      $categories = array(
                        1 => 'Sport',
                        2 => 'Daily',
                        3 => 'Accessories',
                      );


                      //search
                      if (isset($_POST['tombol_cari'])) {
                        $cari = ($_POST['cari']);
                        $query = "SELECT * FROM products 
                                  WHERE product_name LIKE '%$cari%'
                                  OR category_id LIKE '%$cari%'
                                  OR description LIKE '%$cari'
                                  OR category_id LIKE '%$cari'
                                  ";
                      } else {
                        $query = "SELECT * FROM products  ";
                      }
                      $result = mysqli_query($con, $query);

                      $i = 1;
                      while ($p = mysqli_fetch_array($get)) {
                        $product_name = $p['product_name'];
                        $category_id = $categories[$p["category_id"]];
                        $product_code = $p['product_code'];
                        $is_active = $p['is_active'];
                        $description = $p['description'];
                        $price = $p['price'];
                        $unit = $p['unit'];
                        $discount_amount = $p['discount_amount'];
                        $stock = $p['stock'];

                        ?>
                        <tr>
                          <td>
                            <?= $i++ ?>
                          </td>
                          <td>
                            <?= $product_name ?>
                          </td>
                          <td>
                            <?= $category_id ?>
                          </td>
                          <td>
                            <?= $product_code ?>
                          </td>
                          <td>
                            <?= $is_active ?>
                          </td>
                          <td>
                            <?= $description ?>
                          </td>
                          <td>Rp.
                            <?= number_format($price) ?>
                          </td>
                          <td>
                            <?= $unit ?>
                          </td>
                          <td>
                            <?= $discount_amount ?>
                          </td>
                          <td>
                            <?= $stock ?>
                          </td>
                          <td>
                            <?php
                            // uraikan JSON gambar menjadi array
                            $imagesArray = json_decode($p["image"], true);
                            $id = $p['id'];
                            // periksa apakah ada gambar dalam array
                            if (!empty($imagesArray)) {
                              // Loop 
                              foreach ($imagesArray as $image) {
                                echo '<div style="margin-bottom: 10px;">';
                                echo '<img src="../dist/upload/' . $image . '" alt="' . $image . '" style="width: 100px; height: 100px;">';
                                echo '</div>';
                              }
                            } else {
                              // Tampilkan pesan jika tidak ada gambar
                              echo 'Tidak ada gambar';
                            }
                            ?>
                          </td>
                          <td>
                            <button type="button" class="btn btn-warning mb-2" data-toggle="modal"
                              data-target="#edit<?= $id; ?>">
                              Update
                            </button>
                            <button type="button" class="btn btn-danger mb-2" data-toggle="modal"
                              data-target="#delete<?= $id; ?>">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Modal Update Barang -->
                        <div class="modal fade" id="edit<?= $id; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Form Update Barang</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <form method="post" enctype="multipart/form-data">
                                <!-- Modal body Update Barang -->
                                <div class="modal-body">
                                  <input type="text" name="product_name" class="form-control mt-2"
                                    placeholder="Nama Product" value="<?= $product_name ?>">
                                  <div class="form-group">
                                    <label for="category_id">Category:</label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                      <option value="1" <?php if ($category_id == 1)
                                        echo 'selected'; ?>>Sports</option>
                                      <option value="2" <?php if ($category_id == 2)
                                        echo 'selected'; ?>>Daily</option>
                                      <option value="3" <?php if ($category_id == 3)
                                        echo 'selected'; ?>>Accessories
                                      </option>
                                    </select>
                                  </div>
                                  <input type="hidden" name="product_code" class="form-control mt-2"
                                    placeholder="Code Produk" value="<?= $product_code ?>">
                                  <input type="text" name="is_active" class="form-control mt-2" placeholder="Status"
                                    value="<?= $is_active ?>">
                                  <input type="text" name="description" class="form-control mt-2" placeholder="Deskripsi"
                                    value="<?= $description ?>">
                                  <input type="text" name="price" class="form-control mt-2" placeholder="Harga"
                                    value="<?= $price ?>">
                                  <input type="text" name="unit" class="form-control mt-2" placeholder="Unit"
                                    value="<?= $unit ?>">
                                  <input type="text" name="discount_amount" class="form-control mt-2"
                                    placeholder="Besar Diskon" value="<?= $discount_amount ?>">
                                  <input type="text" name="stock" class="form-control mt-2" placeholder="Stock"
                                    value="<?= $stock ?>">
                                  <input type="file" name="image[]" class="form-control" accept=".jpg, .jpeg, .png, .gif"
                                    multiple required><br>
                                  <div style="display: flex;">
                                    <?php
                                    $imagesArray = json_decode($image, true);
                                    if (!empty($imagesArray)) {
                                      foreach ($imagesArray as $img) {
                                        echo '<img src="../dist/upload/' . $img . '" alt="image" width="100" height="100" style="margin-right: 10px;"><br>';
                                      }
                                    }
                                    ?>
                                  </div>
                                  <input type="hidden" name="id" value="<?= $id; ?>">
                                </div>

                                <!-- Modal footer Tambah Barang -->
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" name="editbarang">Simpan</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                              </form>

                            </div>
                          </div>
                        </div>

                        <!-- Modal Delete Barang -->
                        <div class="modal fade" id="delete<?= $id; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Hapus Barang
                                  <?= $product_name ?>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <form method="post">
                                <!-- Modal body Update Barang -->
                                <div class="modal-body">
                                  Apakah Anda yakin Menghapus Barang Ini...!!!
                                  <input type="hidden" name="id" value="<?= $id; ?>">
                                </div>

                                <!-- Modal footer Tambah Barang -->
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-success" name="hapusbarang">Hapus</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                              </form>

                            </div>
                          </div>
                        </div>

                        <?php
                      }
                      ; //end of while
                      ?>

                    </tbody>

                    <!-- navigasi Pagination -->
                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                      <a href="?halaman=<?= $i; ?>">
                        <?= $i; ?>
                      </a>
                    <?php endfor; ?>
                    <!-- Akhir navigasi Pagination -->
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- akhir main content -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
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
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../plugins/jszip/jszip.min.js"></script>
  <script src="../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
</body>



<!-- Modal Tambah Barang -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form Tambah Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="post" enctype="multipart/form-data">
        <!-- Modal body Tambah Barang -->
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="product_name" class="form-control mt-2" placeholder="Nama Product">
            <div class="form-group">
              <label for="category_id">Category</label>
              <select id="category_id" name="category_id" class="form-control" required>
                <option value="" selected>Select</option>
                <option value="1">Sports</option>
                <option value="2">Daily</option>
                <option value="3">Accessories</option>
              </select>
            </div>
            <input type="text" name="product_code" class="form-control mt-2" placeholder="Code Produk">
            <input type="text" name="is_active" class="form-control mt-2" placeholder="Status">
            <input type="date" name="created_at" class="form-control mt-2" placeholder="Tanggal Dibuat">
            <input type="text" name="description" class="form-control mt-2" placeholder="Deskripsi">
            <input type="text" name="price" class="form-control mt-2" placeholder="Harga">
            <input type="text" name="unit" class="form-control mt-2" placeholder="Unit">
            <input type="text" name="discount_amount" class="form-control mt-2" placeholder="Besar Diskon">
            <input type="text" name="stock" class="form-control mt-2" placeholder="Stock">
            <input type="file" name="image[]" class="form-control" accept=".jpg, .jpeg, .png, .gif" multiple required>
          </div>
        </div>

        <!-- Modal footer Tambah Barang -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="tambahbarang">Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </form>

    </div>
  </div>
</div>

</html>