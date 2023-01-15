<?php
//TOILETT



require "functions.php";

// //query toilet
// $toilet = querytoilet("SELECT * FROM toilet WHERE id = $idt")[0];
// //query users
// $users = queryusers("SELECT * FROM users WHERE id = $idu")[0];


//cek tombol udah dipencet atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "Data Berhasil ditambahkan!!";
    } else {
        echo "Data Gagal ditambahkan!!";
        echo "<br>";
        echo mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Toilet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card w-75 mb-3">
            <div class="card-body">
                <h5 class="card-title">Card title</h5><br><br>

                <!-- awal form -->
                <form action="" method="post"">

            <div class=" mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="disable" class="form-control" name="tanggal" id="tanggal" placeholder="<?php
                                                                                                        date_default_timezone_set('Asia/Jakarta');
                                                                                                        echo date('d-m-Y H:i:s');
                                                                                                        ?>">
            </div>
            <div class="mb-5">
                <label for="toilet_id" class="form-label">Toilet_id</label>
                <input type="text" class="form-control" name="toilet_id" id="toilet_id" value="">
            </div>

            <!-- awal form input -->
            <!-- <div class="mb-3">
                <label for="kloset" class="form-label">Kloset</label>
                <input type="text" class="form-control" name="kloset" id="kloset" placeholder="isi 1=Bersih, 2=Kotor, 3=Rusak">
            </div> -->
            <!-- <div class="mb-3">
                <label for="wastafel" class="form-label">Wastafel</label>
                <input type="text" class="form-control" name="wastafel" id="wastafel" placeholder="isi 1=Bersih, 2=Kotor, 3=Rusak">
            </div>
            <div class="mb-3">
                <label for="lantai" class="form-label">Lantai</label>
                <input type="text" class="form-control" name="lantai" id="lantai" placeholder="isi 1=Bersih, 2=Kotor, 3=Rusak">
            </div>
            <div class="mb-3">
                <label for="dinding" class="form-label">Dinding</label>
                <input type="text" class="form-control" name="dinding" id="dinding" placeholder="isi 1=Bersih, 2=Kotor, 3=Rusak">
            </div>
            <div class="mb-3">
                <label for="kaca" class="form-label">Kaca</label>
                <input type="text" class="form-control" name="kaca" id="kaca" placeholder="isi 1=Bersih, 2=Kotor, 3=Rusak">
            </div>
            <div class="mb-3">
                <label for="bau" class="form-label">Bau</label>
                <input type="text" class="form-control" name="bau" id="bau" placeholder="isi 1=Ya, 2=Tidak">
            </div>
            <div class="mb-3">
                <label for="sabun" class="form-label">Sabun</label>
                <input type="text" class="form-control" name="sabun" id="sabun" placeholder="isi 1=Ada, 2=Habis, 3=Hilang">
            </div> -->
            <!-- akhir form input -->
            <!-- awal form select -->
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="kloset" aria-label=".form-select-lg example">
                    <option selected>Kondisi Kloset</option>
                    <option value="1">Bersih</option>
                    <option value="2">Kotor</option>
                    <option value="3">Rusak</option>
                </select>
            </div>
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="wastafel" aria-label=".form-select-lg example">
                    <option selected>Kondisi Wastafel</option>
                    <option value="1">Bersih</option>
                    <option value="2">Kotor</option>
                    <option value="3">Rusak</option>
                </select>
            </div>
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="lantai" aria-label=".form-select-lg example">
                    <option selected>Kondisi Lantai</option>
                    <option value="1">Bersih</option>
                    <option value="2">Kotor</option>
                    <option value="3">Rusak</option>
                </select>
            </div>
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="dinding" aria-label=".form-select-lg example">
                    <option selected>Kondisi Dinding</option>
                    <option value="1">Bersih</option>
                    <option value="2">Kotor</option>
                    <option value="3">Rusak</option>
                </select>
            </div>
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="kaca" aria-label=".form-select-lg example">
                    <option selected>Kondisi Kaca</option>
                    <option value="1">Bersih</option>
                    <option value="2">Kotor</option>
                    <option value="3">Rusak</option>
                </select>
            </div>
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="Bau" aria-label=".form-select-lg example">
                    <option selected>Kondisi Bau</option>
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                </select>
            </div>
            <div class="div mb-4">
                <select class="form-select form-select mb-3" name="sabun" aria-label=".form-select-lg example">
                    <option selected>Kondisi Sabun</option>
                    <option value="1">Ada</option>
                    <option value="2">Habis</option>
                    <option value="3">Hilang</option>
                </select>
            </div>
            <!-- akhir form select -->

            <div class="mb-3">
                <label for="users_id" class="form-label">Users_id</label>
                <input type="text" class="form-control" name="users_id" id="users_id" placeholder="" value="">
            </div>
            <button type=" submit" name="submit" class="btn btn-outline-primary">Simpan</button>
            </form>
            <!-- akhir form -->
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>