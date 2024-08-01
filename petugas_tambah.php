<?php
if(isset($_POST['nama_petugas'])) {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $query = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas,username,password,level) values('$nama_petugas','$username','$password','$level')");
    if($query) {
        echo '<script>alert("Tambah data berhasil")</script>';
    }else{
        echo '<script>alert("Tambah data gagal")</script>';
    }
}
?>

<h1 class="h3 mb-3">Tambah Data Petugas</h3>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="?page=petugas" class="btn btn-primary">Kembali</a>
                    <hr>

                    <form method="POST">
                        <table class="table">
                            <tr>
                                <td width="200">Nama Petugas</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="nama_petugas"></td>
                            </tr>
                            <tr>
                                <td width="200">Username</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td width="200">Password</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td width="200">Level</td>
                                <td width="1">:</td>
                                <td>
                                    <select name="level" class="form-select">
                                        <option value="petugas">Petugas</optiion>
                                        <option value="admin">Administrator</optiion>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-success" type="submit">Simpan</button></td>
                            </tr>
                </div>
            </div>
        </div>
    </div>