<?php
if (isset($_POST['button_create'])) {

    $database = new Database();
    $db = $database->getConnection();
    $IdAtlit = $_POST['Id_Atlit'];
    $NamaAtlit = $_POST['Nama_Atlit'];
    $Cabor = $_POST['Cabang_Olahraga'];
    
    $insertSql = "INSERT INTO data_cabang_olahraga VALUES ( '$IdAtlit', '$NamaAtlit', '$Cabor')";
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
                <h1>Tambah Data Cabang Olahraga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_pengurus_cabang_olahragaread">Data cabang Olahraga</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Cabang Olahraga</h3>
        </div>
    
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Id_Atlit">Id Atlit</label>
                    <input type="text" class="form-control" name="Id_Atlit">

                    <label for="Nama_Atlit">Nama Atlit</label>
                    <input type="text" class="form-control" name="Nama_Atlit">

                    <label for="Cabang_Olahraga">Cabang Olahraga</label>
                    <input type="text" class="form-control" name="Cabang_Olahraga">

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