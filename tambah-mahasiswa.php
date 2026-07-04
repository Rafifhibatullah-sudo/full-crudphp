<?php
session_start();

// membatasi halaman sebelum login 
if (!isset($_SESSION["login"])) {
    echo "<script>

    document.location.href = 'login.php';
    </script>";
    exit;
}
$title = 'tambah mahasiswa';

include 'layout/header.php';

//check apakah tombol tambah di tekan
if (isset($_POST['tambah'])) {
    if (create_mahasiswa($_POST) > 0) {
        echo "
        <script>
        alert('Data mahasiswa Berhasil di tambahkan');
        document.location.href='mahasiswa.php';
        </script>";
    } else {
        echo " <script>
        alert('Data mahasiswa Gagal di tambahkan');
        document.location.href='mahasiswa.php';
        </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Tambah mahasiswa</h1>

    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama mahasiswa..." required>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" id="prodi" class="form-control" required>
                    <option value="">-- pilih prodi --</option>
                    <option value="teknik informatika">Teknik Informatika</option>
                    <option value="teknik mesin">Teknik Mesin</option>
                    <option value="teknik listrik">Teknik Listrik</option>
                </select>
            </div>

            <div class="mb-3 col-md-6">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="">-- pilih jenis kelamin --</option>
                    <option value="laki laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">telepon mahasiswa</label>
            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="masukan telepon" required>
        </div>

         <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <textarea name="alamat" id="alamat"></textarea>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email mahasiswa</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="masukan email" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">foto mahasiswa</label>
            <input type="file" class="form-control" id="foto" name="foto" placeholder="masukan foto" onchange="previewImg()">

            <img src="" alt="" class="img-thumbnail img-preview mt-2" width="100px">
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
    </form>
</div>


<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const imgPreview =  document.querySelector('.img-preview');

        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?php include 'layout/footer.php'; ?>