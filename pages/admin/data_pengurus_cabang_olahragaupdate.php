<?php 
if (isset($_GET['Id_Pengurus'])) {

    $database = new Database();
    $db = $database->getConnection();

    $Id = $_GET['Id_Pengurus'];
    $findSql = "SELECT * FROM data_pengurus_cabang_olahraga WHERE Id_Pengurus = ?";
    $stmt = $db->prepare($findSql);
    $stmt->bindParam(1, $_GET['Id_Pengurus']);
    $stmt->execute();
    $row = $stmt->fetch();
    if (isset($row['Id_Pengurus'])) {
        if (isset($_POST['button_update'])) {

            $database = new Database();
            $db = $database->getConnection();

            $validateSql = "SELECT * FROM data_pengurus_cabang_olahraga WHERE Nama_Pengurus = ?";
            $stmt = $db->prepare($validateSql);
            $stmt->bindParam(1, $_POST['Nama_Pengurus']);
            $stmt->bindParam(2, $_POST['Id_pengurus']);
            $stmt->bindParam(3, $_POST['Tempat_Lahir']);
            $stmt->bindParam(4, $_POST['Tanggal_Lahir']);
            $stmt->bindParam(5, $_POST['Jenis_Kelamin']);
            $stmt->bindParam(6, $_POST['Agama']);
            $stmt->bindParam(7, $_POST['Cabang_Olahraga']);
            $stmt->bindParam(8, $_POST['Jabatan']);
            $stmt->bindParam(9, $_POST['Alamat']);
            $stmt->bindParam(10, $_POST['No_Hp']);
            $stmt->execute();
            if($stmt->rowCount() > 0) {
?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h5><i class="icon fas fa-ban"></i>Gagal</h5>
                    Id Pengurus sama sudah ada
                </div>
        <?php
        } else {
            $updatetSql = "UPDATE data_pengurus_cabang_olahraga SET Nama_Pengurus= ? WHERE Id_Pengurus = ?";
            $stmt = $db->prepare($updateSql);
            $stmt->bindParam(1, $_POST['Nama_Pengurus']);
            $stmt->bindParam(2, $_POST['Id_Pengurus']);
            $stmt->bindParam(3, $_POST['Tempat_Lahir']);
            $stmt->bindParam(4, $_POST['Tanggal_Lahir']);
            $stmt->bindParam(5, $_POST['Jenis_Kelamin']);
            $stmt->bindParam(6, $_POST['Agama']);
            $stmt->bindParam(7, $_POST['Cabang_Olahraga']);
            $stmt->bindParam(8, $_POST['Jabatan']);
            $stmt->bindParam(9, $_POST['Alamat']);
            $stmt->bindParam(10, $_POST['No_Hp']);
            if ($stmt->execute()) {
                $_SESSION['hasil'] = true;
                $_SESSION['pesan'] = "Berhasil ubah data";
            } else {
                $_SESSION['hasil'] = false;
                $_SESSION['pesan'] = "Gagal ubah data";
            }
            echo "<meta http-equiv='refresh' content='0;url=?pagedata_pengurus_cabang_olahragaread'>";
        }
    
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb2">
            <div class="col-sm-6">
                <h1>Ubah Data Pengurus</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_pengurus_cabang_olahragaread">Pengurus Cabang Olahraga</a></li>
                    <li class="breadcrumb-item active">Ubah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Pengurus</h3>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Nama_Pengurus">Nama Pengurus</label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    <input type="text" class="form-control" name="Nama_Pengurus" value="<?php echo $row['Nama_Pengurus']?>"> 
                </div>
                <a href="?page=data_pengurus_cabang_olahragaread" class="btn btn-danger btn-sm float-right">
                    <i class="fa fa-times"></i> Batal
                </a>
                <button type="submit" name="button_update" class="btn btn-success btn-sm float-right">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>
</section>
<?php
    } else {
        echo "<meta http-equiv='refresh content='0;url=?page=data_pengurus_cabang_olahragaread'>";
    }
} else {
    echo "<meta http-equiv='refresh' content='0;url=?page=data_pengurus_cabang_olahragaread'>";
}