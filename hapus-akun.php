<?php
session_start();
// membatasi halaman sebelum login 
if (!isset($_SESSION["login"])) {
    echo "<script>
   
    document.location.href = 'login.php';
    </script>";
    exit;
}
include 'config/app.php';

// menerima id akun yang di pilih pengguna
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0) {
    echo "<script>
            alert('data akun berhasil di hapus');
            document.location.href = 'akun.php';
            </script>";
} else {
    echo "<script>
            alert('data akun gagal di hapus');
            document.location.href = 'akun.php';
          </script>";
}
