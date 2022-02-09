<?php
if (isset($_POST['button_create'])) {

    $database = new Database();
    $db = $database->getConnection();
    $IdPengurus = $_POST['Id_Pengurus'];
    $NamaPengurus = $_POST['Nama_Pengurus'];
    $TempatLahir = $_POST['Tempat_Lahir'];
    $TanggalLahir = $_POST['Tanggal_Lahir'];
    $JenisKelamin = $_POST['Jenis_Kelamin'];
    $Agama = $_POST['Agama'];
    $Cabor = $_POST['Cabang_Olahraga'];
    $Jabatan = $_POST['Jabatan'];
    $Alamat = $_POST['Alamat'];
    $Nohp = $_POST['No_Hp'];
    
    $insertSql = "INSERT INTO data_pengurus_cabang_olahraga VALUES ( '$IdPengurus', '$NamaPengurus', '$TempatLahir', '$TanggalLahir', '$JenisKelamin', '$Agama', '$Cabor', '$Jabatan', '$Alamat', '$Nohp')";
    $stmt = $db->prepare($insertSql);
    if ($stmt->execute()) {
        echo "Simpan Berhasil";
    } else {
        echo "Simpan Gagal";
    }
}
?>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb2">
            <div class="col-sm-6">
                <h1>Tambah Data Pengurus</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_pengurus_cabang_olahragaread">Data Pengurus</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Pengurus</h3>
        </div>
    
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Id_Pengurus">Id Pengurus</label>
                    <input type="text" class="form-control" name="Id_Pengurus">

                    <label for="Nama_Pengurus">Nama Pengurus</label>
                    <input type="text" class="form-control" name="Nama_Pengurus">

                    <label for="Tempat_Lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="Tempat_Lahir">

                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="Tanggal_Lahir">

                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="Jenis_Kelamin">

                    <label for="Agama">Agama</label>
                    <input type="text" class="form-control" name="Agama">

                    <label for="Cabang_Olahraga">Cabang Olahraga</label>
                    <input type="text" class="form-control" name="Cabang_Olahraga">

                    <label for="Jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="Jabatan">

                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" name="Alamat">

                    <label for="No_Hp">No Hp</label>
                    <input type="text" class="form-control" name="No_Hp">

                </div>
                <a href="?page=data_pengurus_cabang_olahragaread" class="btn btn-danger btn-sm float-right">
                    <i class="fa fa-times"></i> Batal
                </a>
                <button type="submit" name="button_create" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>
</section>
<?php include_once "partials/scripts.php" ?>