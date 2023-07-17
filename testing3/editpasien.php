<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pasien</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idPasien">Nomor Meja</label>
                            <input type="text" class="form-control mb3" name="idPasien" value="<?= $row['idPasien'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nmPasien">Nama Pelanggan</label>
                            <input type="text" class="form-control mb3" name="nmPasien" value="<?= $row['nmPasien'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jk">Pembayaran</label>
                            <div class="form-check">
                                <input type="radio" class="form-checkinput" name="jk" value="debit" <?php if (($row['jk']) === "debit") {

                                                                                                            echo "checked";
                                                                                                        } ?>> Debit
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-checkinput" name="jk" value="cash" <?php if (($row['jk']) === "cash") {

                                                                                                            echo "checked";
                                                                                                        } ?>> Cash
                            </div>
                            <div class="form-group mt-3">
                                <label for="alamat">Nama pesanan</label>
                                <textarea class="form-control mb3" name="alamat" id="alamat" cols="5" rows="3" placeholder="Nama Pesanan"><?= $row['alamat'] ?></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>