<?php 
if (isset($_GET['Id_Atlit'])) {

    $database = new Database();
    $db = $database->getConnection();

    $id = $_GET['Id_Atlit'];
    $findSql = "SELECT * FROM data_atlit WHERE Id_Atlit = ?";
    $stmt = $db->prepare($findSql);
    $stmt->bindParam(1, $_GET['Id_Atlit']);
    $stmt->execute();
    $row = $stmt->fetch();
    if (isset($row['Id_Atlit'])) {
        if (isset($_POST['button_update'])) {

            $database = new Database();
            $db = $database->getConnection();

            $validateSql = "SELECT * FROM data_atlit WHERE Nama_Atlit = ? AND id !=?";
            $stmt = $db->prepare($validateSql);
            $stmt->bindParam(1, $_POST['Nama_Atlit']);
            $stmt->bindParam(2, $_POST['Id_Atlit']);
            $stmt->bindParam(3, $_POST['Jenis_Kelamin']);
            $stmt->bindParam(4, $_POST['Tempat_Lahir']);
            $stmt->bindParam(5, $_POST['Tanggal_lahir']);
            $stmt->bindParam(6, $_POST['Alamat']);
            $stmt->bindParam(7, $_POST['Agama']);
            $stmt->bindParam(8, $_POST['No_Hp']);
            $stmt->execute();
            if($stmt->rowCount() > 0) {
?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h5><i class="icon fas fa-ban"></i>Gagal</h5>
                    Id sama sudah ada
                </div>
        <?php
        } else {
            $updateSql = "UPDATE data_atlit SET Nama_Atlit= ? WHERE Id_Atlit = ?";
            $stmt = $db->prepare($updateSql);
            $stmt->bindParam(1, $_POST['Nama_Atlit']);
            $stmt->bindParam(2, $_POST['Id_Atlit']);
            $stmt->bindParam(3, $_POST['Jenis_Kelamin']);
            $stmt->bindParam(4, $_POST['Tempat_Lahir']);
            $stmt->bindParam(5, $_POST['Tanggal_lahir']);
            $stmt->bindParam(6, $_POST['Alamat']);
            $stmt->bindParam(7, $_POST['Agama']);
            $stmt->bindparam(8, $_POST['No_Hp']);
            if ($stmt->execute()) {
                $_SESSION['hasil'] = true;
                $_SESSION['pesan'] = "Berhasil ubah data";
            } else {
                $_SESSION['hasil'] = false;
                $_SESSION['pesan'] = "Gagal ubah data";
            }
            echo "<meta http-equiv='refresh' content='0;url=?pagedata_atlitread'>";
        }
    
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb2">
            <div class="col-sm-6">
                <h1>Ubah Data Atlit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=data_atlitread">Atlit</a></li>
                    <li class="breadcrumb-item active">Ubah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Atlit</h3>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="Nama_Atlit">Nama Atlit</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="Nama_Atlit" value="<?php echo $row['Nama_Atlit']?>"> 
                </div>

                <div class="form-group">
                    <label for="Jenis Kelamin">Jenis Kelamin</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="Jenis_Kelamin" value="<?php echo $row['Jenis_Kelamin']?>"> 
                </div>

                <div class="form-group">
                    <label for="Tempat_Lahir">Tempat Lahir</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="Tempat_Lahir" value="<?php echo $row['Tempat_Lahir']?>"> 
                </div>

                <div class="form-group">
                    <label for="Tanggal_lahir">Tanggal Lahir</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="Tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>"> 
                </div>

                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="Alamat" value="<?php echo $row['Alamat']?>"> 
                </div>

                <div class="form-group">
                    <label for="Agama">Agama</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="Agama" value="<?php echo $row['Agama']?>"> 
                </div>

                <div class="form-group">
                    <label for="No_Hp">No Hp</label>
                    <input type="hidden" class="form-control" name="Id_Atlit" value="<?php echo $row['Id_Atlit'] ?>">
                    <input type="text" class="form-control" name="No_Hp" value="<?php echo $row['No_Hp']?>"> 
                </div>
                <a href="?page=dataatlitread" class="btn btn-danger btn-sm float-right">
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
        echo "<meta http-equiv='refresh content='0;url=?page=data_atlitread'>";
    }
} else {
    echo "<meta http-equiv='refresh' content='0;url=?page=data_atlitread'>";
}