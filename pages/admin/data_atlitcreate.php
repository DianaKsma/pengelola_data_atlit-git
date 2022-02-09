<?php
if (isset($_POST['button_create'])) {

    $database = new Database();
    $db = $database->getConnection();

    $validateSql = "SELECT * FROM data_atlit WHERE Id_Atlit = ?";
    $stmt = $db->prepare($validateSql);
    $stmt->bindParam(1, $_POST['Id_Atlit']);
    $stmt->execute();
    if($stmt->rowCount() > 0){
?>
        <div class="alert alert-danger alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
             <h5><i class="icon fas fa-ban"></i>Gagal</h5>
              Id Atlit sama sudah ada
        </div>
<?php
    } else {
        
        $IdAtlit = $_POST['Id_Atlit'];
        $NamaAtlit = $_POST['Nama_Atlit'];
        $JenisKelamin = $_POST['Jenis_Kelamin'];
        $TempatLahir = $_POST['Tempat_Lahir'];
        $Tanggallahir = $_POST['Tanggal_lahir'];
        $Agama = $_POST['Agama'];
        $Alamat = $_POST['Alamat'];
        $NoHp = $_POST['No_Hp'];
    
          $insertSql = "INSERT INTO data_atlit VALUES ( '$IdAtlit', '$NamaAtlit', '$JenisKelamin', '$TempatLahir', '$Tanggallahir', '$Agama', '$Alamat', '$NoHp')";
          $stmt = $db->prepare($insertSql);
          $stmt->bindParam(1, $_POST['Id_Atlit']);
          if ($stmt->execute()) {
            $_SESSION['hasil'] = true;
            $_SESSION['pesan'] = "Berhasil simpan data";
          } else {
            $_SESSION['hasil'] = false;
            $_SESSION['pesan'] = "Gagal simpan data";
          }
          echo "<meta http-equiv='refresh' content='0;url=?pagedata_atlitread'>";
    }
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb2">
            <div class="col-sm-6">
                <h1>Tambah Data Atlit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_atlitread">Data Atlit</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Atlit</h3>
        </div>
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

                    <label for="Tempat_Lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="Tempat_Lahir">

                    <label for="Tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="Tanggal_lahir">

                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" name="Alamat">

                    <label for="Agama">Agama</label>
                    <input type="text" class="form-control" name="Agama">
                    
                    <label for="No_Hp">No Hp</label>
                    <input type="text" class="form-control" name="No_Hp">      
                </div>
                <a href="?page=data_atlitread" class="btn btn-danger btn-sm float-right">
                    <i class="fa fa-times"></i> Batal
                </a>
                <button type="submit" name="button_create" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </form>
         </div>
</section>
<?php include_once "partials/scripts.php" ?>