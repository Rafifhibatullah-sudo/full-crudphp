<?php
session_start();
// membatasi halaman sebelum login 
if (!isset($_SESSION["login"])) {
    echo "<script>

    document.location.href = 'login.php';
    </script>";
    exit;
}
$title = 'ubah barang';
include 'layout/header.php';

//mengambil id_barang dari url
$id_barang = (int)$_GET['id_barang'];
$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

//check apakah tombol tambah di tekan
if (isset($_POST['ubah'])) {
    if (update_barang($_POST) > 0) {
        echo "
        <script>
        alert('Data Barang Berhasil di ubah');
        document.location.href='index.php';
        </script>";
    } else {
        echo " <script>
        alert('Data Barang Gagal di ubah');
        document.location.href='index.php';
        </script>";
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-edit"></i>ubah barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">data barang</a></li>
                        <li class="breadcrumb-item active">ubah barang v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
             <form action="" method="post">

        <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama'] ?>" placeholder="Nama Barang..." required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $barang['jumlah'] ?>" placeholder="Jumlah Barang..." required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga'] ?>" placeholder="Harga Barang..." required>
        </div>

         <td width="15%" class="text-center">
        <button type="ubah" name="ubah" class="btn btn-primary mb-2" style="float: right;">Ubah</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
         </td>
    </form>
        </div>
    </section>
    <!-- /.content -->
</div>


<?php include 'layout/footer.php'; ?>