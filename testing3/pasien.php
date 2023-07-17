<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iiii</title>

    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="pp.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Cashier Pekok
    </a>
  </div>
</nav>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Order</h3>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="tambahpasien.php" class="btn btn-dark">Tambah Data</a>
                <a href="index.php" class="btn btn-dark">Keluar</a>
                <a href="cetak.php" class="btn btn-dark">Cetak</a>
            </div>
            
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <th>No</th>
                        <th>Nomor Meja</th>
                        <th>Nama pelanggan</th>
                        <th>pembayaran</th>
                        <th>Nama pesanan</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM pasien");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['idPasien']; ?></td>
                            <td><?= $row['nmPasien']; ?></td>
                            <td><?= $row['jk']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td>
                                <a href="editpasien.php?edit=<?= $row['idPasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['idPasien']; ?>">
                                    Hapus
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusModal<?= $row['idPasien']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="koneksi.php?idPasien=<?= $row['idPasien']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script src="assest/js/bootstrap.bundle.min.js"></script>
</body>

</html>