<?php 
error_reporting(0);
session_start();   
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user == 'ErlanAdmin' AND $pass == '13112000') {
            // membuat session
            session_start();
            $_SESSION['berhasil'] = true;
            header("location: dashboard.php");
        } else {
            echo "<script>alert('Maaf Username Atau Password Anda Salah'); 
            window.location='../index.php'
            </script>";
             
        }
    }
    ?>
    