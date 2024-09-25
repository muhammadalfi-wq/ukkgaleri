<?php
include 'koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $namalengkap = $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
}

    
    $sql = mysqli_query($koneksi, "INSERT INTO user (username, password, email, namalengkap, alamat) 
    VALUES ('$username','$password','$email','$namalengkap','$alamat')");

    
    if ($sql) {
        echo "<script>
        alert('Pendaftaran akun berhasil');
        location.href='../login.php';
        </script>";
    }