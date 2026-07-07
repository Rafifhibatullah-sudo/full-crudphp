<?php
session_start();
// membatasi halaman sebelum login 
if (!isset($_SESSION["login"])) {
    echo "<script>

    document.location.href = 'login.php';
    </script>";
    exit;
}
$title = 'kirim email';
include 'layout/header.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-envelope"></i>kirim email</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">kirim email</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="email-proses.php" method="post">
                <div class="mb-3">
                    <label for="email penerima" class="form-label">email penerima</label>
                    <input type="email" class="form-control" id="email_penerima" name="email_penerima" placeholder="Email penerima..." required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="subject..." required>
                </div>

                <div class="mb-3">
                    <label for="pesan" class="form-label">pesan</label>
                    <textarea name="pesan" id="pesan" rows="10" class="form-control"></textarea>
                </div>


                <button type="submit" name="kirim" class="btn btn-primary" style="float: right;">kirim</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>

            </form>
        </div>
    </section>
    <!-- /.content -->
</div>


<?php include 'layout/footer.php'; ?>