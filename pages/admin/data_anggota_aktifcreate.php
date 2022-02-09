<?php
if (isset($_POST['button_create'])) {

    $database = new Database();
    $db = $database->getConnection();
    $IdAtlit = $_POST['Id_Atlit'];
    $NamaAtlit = $_POST['Nama_Atlit'];
    $TempatLahir = $_POST['Tempat_Lahir'];
    $TanggalLahir = $_POST['Tanggal_Lahir'];
    $JenisKelamin = $_POST['Jenis_Kelamin'];
    $Alamat = $_POST['Alamat'];
    $Cabor = $_POST['Cabang_Olahraga'];
    $TglHdr = $_POST['Tanggal_Hadir'];
    $Status = $_POST['Status'];
    
    $insertSql = "INSERT INTO data_anggota_aktif VALUES ( '$IdAtlit', '$NamaAtlit', '$TempatLahir', '$TanggalLahir', '$JenisKelamin', '$Alamat', '$Cabor', '$TglHdr', '$Status')";
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
                <h1>Tambah Data Anggota Aktif</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_anggota_aktifread">Data Anggota Aktif</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Anggota Aktif</h3>
        </div>
    
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Id_Atlit">Id Atlit</label>
                    <input type="text" class="form-control" name="Id_Atlit">

                    <label for="Nama_Atlit">Nama Atlit</label>
                    <input type="text" class="form-control" name="Nama_Atlit">

                    <label for="Tempat_Lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="Tempat_Lahir">

                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="Tanggal_Lahir">

                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="Jenis_Kelamin">

                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" name="Alamat">

                    <label for="Cabang_Olahraga">Cabang Olahraga</label>
                    <input type="text" class="form-control" name="Cabang_Olahraga">

                    <label for="Tanggal_Hadir">Tanggal Hadir</label>
                    <input type="text" class="form-control" name="Tanggal_Hadir">
                    
                    <label for="Status">Status</label>
                    <input type="text" class="form-control" name="Status">      
                </div>
                <a href="?page=data_anggota_aktifread" class="btn btn-danger btn-sm float-right">
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