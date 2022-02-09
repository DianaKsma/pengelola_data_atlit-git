<?php
if (Isset($_GET['Id_Atlit'])) {
    $IdAtlit = $_GET['Id_Atlit'];

    $database = new Database();
    $db = $database->getConnection();

    $deleteSql = "DELETE * FROM data_atlit WHERE Id_Atlit = ?";
    $stmt = $db->prepare($deleteSql);
    $stmt->bindParam(1, $_GET['Id_Atlit']);
    $stmt->bindParam(2, $_GET['Nama_Atlit']);
    $stmt->bindParam(3, $_GET['Jenis_Kelamin']);
    $stmt->bindParam(4, $_GET['Tempat_Lahir']);
    $stmt->bindParam(5, $_GET['Tanggal_lahir']);
    $stmt->bindParam(6, $_GET['Alamat']);
    $stmt->bindParam(7, $_GET['Agama']);
    $stmt->bindParam(8, $_GET['No_Hp']);
    if ($stmt->execute()) {
        $_SESSION['hasil'] = true;
    } else {
        $_SESSION['hasil'] = false;
    }
}
echo "<meta http-equiv='refresh' content='0;url=?page=data_atlitread'>";