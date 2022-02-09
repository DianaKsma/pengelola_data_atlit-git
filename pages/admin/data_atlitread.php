<?php include_once "partials/cssdatatables.php" ?>

<div class="content-header">
      <div class="container-fluid">
          <?php
          if(isset($_SESSION["hasil"])) {
            if ($_SESSION["hasil"]) {
          ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  <h5><i class="icon fas fa-check"></i>Berhasil</h5>
                  <?php echo $_SESSION["pesan"] ?>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  <h5><i class="icon fas fa-ban"></i>Gagal</h5>
                  <?php echo $_SESSION["pesan"] ?>
                </div>
          <?php
            }
            unset($_SESSION['hasil']);
            unset($_SESSION['pesan']);
          }
          ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Atlit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="?page=home">Home</a>
              </li>
              <li class="breadcrumb-item">Atlit</li>
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
          <h3 class="card-tittle">Data Atlit</h3>
          <a href="?page=data_atlitcreate"
              class="btn btn-success btn-sm float-right">
              <i class="fas fa-plus-circle"></i>Tambah Data</a>
        </div>
        <div class="card-body">
        <table id="mytable"  class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id Atlit</th>
              <th>Nama Atlit</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>No Hp</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id Atlit</th>
              <th>Nama Atlit</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>No Hp</th>
              <th>Opsi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $database = new Database();
            $db = $database->getConnection();

            $selectSql = "SELECT * FROM data_atlit";
            $stmt = $db->prepare($selectSql);
            $stmt->execute();

            $no = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['Nama_Atlit'] ?></td>
              <td><?php echo $row['Jenis_Kelamin'] ?></td>
              <td><?php echo $row['Tempat_Lahir'] ?></td>
              <td><?php echo $row['Tanggal_lahir'] ?></td>
              <td><?php echo $row['Alamat'] ?></td>
              <td><?php echo $row['Agama'] ?></td>
              <td><?php echo $row['No_Hp'] ?></td>
              <td>
                <a href="?page=data_atlitupdate&id=<?php echo $row['Id_Atlit'] ?>"
                  class="btn btn-primary btn-sm mr-1">
                    <i class="fas fa-edit"></i> Ubah
                </a>
                <a href="?page=data_atlitdelete&id=<?php echo $row['Id_Atlit'] ?>"
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