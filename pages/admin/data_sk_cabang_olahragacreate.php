<?php
if (isset($_POST['button_create'])) {

    $database = new Database();
    $db = $database->getConnection();
    $Cabor = $_POST['Cabang_Olahraga'];
    $SK = $_POST['SK'];
    
    $insertSql = "INSERT INTO data_sk_cabang_olahraga VALUES ( '$Cabor', '$SK')";
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
                <h1>Tambah Data SK Cabang Olahraga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_sk_cabang_olahragaread">Data SK Cabang Olahraga</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data SK Cabang Olahraga</h3>
        </div>
    
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Cabang_Olahraga">Cabang Olahraga</label>
                    <input type="text" class="form-control" name="Cabang_Olahraga">    
                    
                    <label for="SK">SK</label>
                    <input type="text" class="form-control" name="SK">
                </div>
                <a href="?page=data_sk_cabang_olahragaread" class="btn btn-danger btn-sm float-right">
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