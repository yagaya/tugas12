<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data order</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">Nomor Meja</label>

                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="Nomor Meja">

                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pelanggan</label>

                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pelanggan">

                    </div>
                    <div class="form-group">
                        <label for="jk">Pembayran</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jk" value="Debit"> Debit

                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jk" value="Cash"> Cash

                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Nama pesanan</label>

                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Nama Pesanan"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>