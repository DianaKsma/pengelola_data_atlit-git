<?php include_once "partials/cssdatatables.php" ?>

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Anggota Aktif</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="?page=home">Home</a>
              </li>
              <li class="breadcrumb-item">Anggota Aktif</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-tittle">Data Anggota Aktif</h3>
          <a href="?page=data_anggota_aktifcreate"
              class="btn btn-success btn-sm float-right">
              <i class="fas fa-plus-circle"></i>Tambah Data</a>
        </div>
        <div class="card-body">
        <table id="mytable"  class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id Atlit</th>
              <th>Nama Atlit</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Cabang Olahraga</th>
              <th>Tanggal Hadir</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id Atlit</th>
              <th>Nama Atlit</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Cabang Olahraga</th>
              <th>Tanggal Hadir</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $database = new Database();
            $db = $database->getConnection();

            $selectSql = "SELECT * FROM data_anggota_aktif";
            $stmt = $db->prepare($selectSql);
            $stmt->execute();

            $no = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['Nama_Atlit'] ?></td>
              <td><?php echo $row['Tempat_Lahir'] ?></td>
              <td><?php echo $row['Tanggal_Lahir'] ?></td>
              <td><?php echo $row['Jenis_Kelamin'] ?></td>
              <td><?php echo $row['Alamat'] ?></td>
              <td><?php echo $row['Cabang_Olahraga'] ?></td>
              <td><?php echo $row['Tgl_Hadir'] ?></td>
              <td><?php echo $row['Status'] ?></td>
              <td>
                <a href="?page=data_anggota_aktiftupdate&id=<?php echo $row['id'] ?>"
                  class="btn btn-primary btn-sm mr-1">
                    <i class="fas fa-edit"></i> Ubah
                </a>
                <a href="?page=data_anggota_aktifdelete&id=<?php echo $row['id'] ?>"
                  class="btn btn-danger btn-sm"
              onClick="javascript: return confirm('Konfirmasi data akan dihapus?');">
                      <i class="fa fa-trash"></i> Hapus

                </a>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>  


        </div>
      </div>
    </div>

    <?php include_once "partials/scripts.php" ?>
    <?php include_once "partials/scriptsdatatables.php" ?>
    <script>
      $(function() {
        $('#mytable').DataTable()
      });
    </script>