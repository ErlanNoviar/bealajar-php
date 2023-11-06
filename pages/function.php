<?php
session_start();

// Koneksi Database

session_start();
include '../oop/Database.php';
include '../oop/User.php';

$database = new Database();
$connection = $database->getConnection();

$user = new User($connection);

$username = $_POST['username'];
$password = $_POST['password'];

$storedUser = $user->login($username);

if ($storedUser) {
    $stored_password = $storedUser['password'];

    if ($password === $stored_password || password_verify($password, $stored_password)) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: ../index.php?login_failed=1");
        exit();
    }
} else {
    header("Location: ../index.php?login_failed=1");
    exit();
}


// Tanpa OOP
session_start();
// Koneksi ke database
include 'koneksi-posshop.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    // Cek jika kata sandi sesuai dengan salah satu cara
    if ($password === $stored_password || password_verify($password, $stored_password)) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal
        header("Location: ../index.php?login_failed=1");
        exit();
    }
} else {
    // Pengguna tidak ditemukan
    header("Location: ../index.php?login_failed=1");
    exit();
}

// Tutup koneksi database
mysqli_close($connection);


// Data Statis
//session_start();

// Username & password 
$username = "adminErlanN";
$password = "13112000";
 
    // Periksa apakah form login telah dikirim
    if (isset($_POST["username"]) && isset($_POST["password"])) {  

    // Menangkap nilai yang dikirimkan melalui form
    $inputUser = $_POST["username"];
    $inputPass = $_POST["password"];

    // Periksa apakah inputan sesuai dengan username dan password 
    if ($inputUser == $username && $inputPass == $password) {
        // Autentikasi berhasil
        $_SESSION["username"] = $inputUser;

        // Redirect ke halaman dashboard
        header("Location: ../dashboard.php");
        exit();
    } else {
        // Autentikasi gagal, tetap dihalaman login dan tampilkan pesan error
        header("Location: login-redirect.php?error=1");
        exit(); 
    }
}

// Fungsi register
if (isset($_POST['register'])) {
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $group_id = 3; 

    $username = mysqli_real_escape_string($con, $phone_number);

    $query = "INSERT INTO users (name, email, username, phone_number, password, group_id) 
              VALUES ('$name', '$email', '$username', '$phone_number', '$password', '$group_id')";

    $insert = mysqli_query($con, $query);

    if ($insert) {
        header('location:../index.php');
    } else {
        die("Registration Error: " . mysqli_error($con));
    }
}

// fungsi tambah data barang
if (isset($_POST['tambahbarang'])) {
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_code = $_POST['product_code'];
    $is_active = $_POST['is_active'];
    $created_at = $_POST['created_at'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $unit = $_POST['unit'];
    $discount_amount = $_POST['discount_amount'];
    $stock = $_POST['stock'];

    $imageArray = array(); // Inisialisasi array untuk nama gambar

    foreach ($_FILES['image']['name'] as $key => $image) {
        $tmp_file = $_FILES['image']['tmp_name'][$key];
        $target_directory = "../dist/upload/";

        if (move_uploaded_file($tmp_file, $target_directory . $image)) {
            $imageArray[] = $image; // Tambahkan nama gambar ke dalam array
        } else {
            echo "Gagal mengunggah gambar: $image";
        }
    }

    // Konversi array gambar menjadi JSON
    $imagesJson = json_encode($imageArray);

    // SQL untuk menyimpan data, termasuk JSON gambar
    $insert = mysqli_query($con, "INSERT INTO products (product_name, category_id, product_code, is_active, created_at, description, 
        price, unit, discount_amount, stock, image) VALUES 
        ('$product_name', '$category_id', '$product_code', '$is_active', '$created_at', '$description', '$price', '$unit', '$discount_amount', '$stock', 
        '$imagesJson')");

    if ($insert) {
        header('location: product_pos.php');
    } else {
        echo '<script>alert("Gagal Menambah Product Baru"); 
            window.location.href="product_pos.php"
            </script>';
    }
}

// Fungsi Edit Barang
if (isset($_POST['editbarang'])) {
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    // $product_code = $_POST['product_code'];
    $is_active = $_POST['is_active'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $unit = $_POST['unit'];
    $discount_amount = $_POST['discount_amount'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];
    $id = $_POST['id']; //idproduct

    // Inisialisasi array untuk menyimpan nama file gambar baru
    $new_images = [];

    // Loop dari gambar yang diunggah
    if (!empty($_FILES['image']['name'][0])) {
        $total_images = count($_FILES['image']['name']);
        for ($i = 0; $i < $total_images; $i++) {
            $new_image_name = $_FILES['image']['name'][$i];
            $file_tmp = $_FILES['image']['tmp_name'][$i];
            $target_path = "../dist/upload/" . $new_image_name;

            if (move_uploaded_file($file_tmp, $target_path)) {
                $new_images[] = $new_image_name;
            }
        }
    }

    // Mengganti gambar produk jika ada yang diunggah
    if (!empty($new_images)) {
        // Konversi array gambar baru ke JSON
        $new_images_json = json_encode($new_images);


        $query = mysqli_query($con, " UPDATE products SET product_name='$product_name', category_id='$category_id', is_active='$is_active', description='$description', 
        price='$price', unit='$unit', discount_amount='$discount_amount', stock='$stock', image='$new_images_json' WHERE id=$id");
    } else {
        $query = mysqli_query($con, " UPDATE products SET product_name='$product_name', category_id='$category_id', is_active='$is_active', description='$description', 
        price='$price', unit='$unit', discount_amount='$discount_amount', stock='$stock' WHERE id=$id");
    }

    if ($query) {
        header('location:product_pos.php');
    } else {
        echo '
        <script>alert("Gagal Menambah Product Baru"); 
            window.location.href="product_pos.php"
            </script>';
    }
}


// Hapus Barang
if (isset($_POST['hapusbarang'])) {
    $id = $_POST['id'];

    $query = mysqli_query($con, "DELETE FROM products WHERE id='$id' ");

    if ($query) {
        header('location:product_pos.php');
    } else {
        echo '
        <script>alert("Gagal Menghapus Product Baru"); 
            window.location.href="product_pos.php"
            </script>';
    }
}

// Edit Pelanggan
if (isset($_POST['editpelanggan'])) {
    // $code = $_POST['code'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $is_active = $_POST['is_active'];
    $id = $_POST['id']; //idproduct

    $query = mysqli_query($con, " UPDATE customers SET name='$name', phone_number='$phone_number', email='$email', address='$address', 
    is_active='$is_active' WHERE id=$id");

    if ($query) {
        header('location:dashboard.php');
    } else {
        echo '
    <script>alert("Gagal Menghapus Product Baru"); 
        window.location.href="dashboard.php"
        </script>';
    }
}

// Hapus Pelanggan
if (isset($_POST['hapuspelanggan'])) {
    $id = $_POST['id'];

    $query = mysqli_query($con, "DELETE FROM customers WHERE id='$id' ");

    if ($query) {
        header('location:dashboard.php');
    } else {
        echo '
        <script>alert("Gagal Menghapus Product Baru"); 
            window.location.href="dashboard.php"
            </script>';
    }
}
?>