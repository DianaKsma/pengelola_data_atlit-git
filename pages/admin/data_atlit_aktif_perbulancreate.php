<?php
if (isset($_POST['button_create'])) {

    $database = new Database();
    $db = $database->getConnection();
    $IdAtlit = $_POST['Id_Atlit'];
    $NamaAtlit = $_POST['Nama_Atlit'];
    $JenisKelamin = $_POST['Jenis_Kelamin'];
    $Cabor = $_POST['Cabang_Olahraga'];
    $Bulan = $_POST['Bulan'];
    
    $insertSql = "INSERT INTO data_atlit_aktif_perbulan VALUES ( '$IdAtlit', '$NamaAtlit', '$JenisKelamin', '$Cabor', '$Bulan')";
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
                <h1>Tambah Data Atlit Aktif Perbulan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_atlit_aktif_perbulanread">Data Atlit Aktif</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Atlit Aktif Perbulan</h3>
        </div>
    
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Id_Atlit">Id Atlit</label>
                    <input type="text" class="form-control" name="Id_Atlit">

                    <label for="Nama_Atlit">Nama Atlit</label>
                    <input type="text" class="form-control" name="Nama_Atlit">

                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="Jenis_Kelamin">
                    
                    <label for="Cabang_Olahraga">Cabang Olahraga</label>
                    <input type="text" class="form-control" name="Cabang_Olahraga">

                    <label for="Bulan">Bulan</label>
                    <input type="text" class="form-control" name="Bulan">      
                </div>
                <a href="?page=data_atlit_aktif_perbulanread" class="btn btn-danger btn-sm float-right">
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