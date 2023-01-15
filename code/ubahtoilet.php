<?php

require "functions.php";


//TOILETT

// ambil data id di url
$idt = $_GET["id"];
// var_dump($idt);

// ambil query id toilet
$toilet = querytoilet("SELECT * FROM toilet WHERE id = $idt")[0];
// var_dump($toilet["keterangan"]);

//cek tombol udah dipencet atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if (ubahtoilet($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Di Edit!');
            document.location.href = 'toilet.php'
        </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Di Edit!');
            </script>
        ";
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
                <h5 class="card-title">Pilih Lokasi Checklist Toilet</h5><br><br>

                <!-- id hidden -->
                <input type="hidden" name="id" value="<?= $toilet['id']; ?>">

                <!-- awal form -->
                <form action="" method="post"">
                <div class=" mb-3">
                    <label for="lokasi" class="form-label">Lokasi Toilet</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Zona Toilet" value="<?= $toilet['lokasi']; ?>">
            </div>
            <div class=" mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="" value="<?= $toilet['keterangan']; ?>">
            </div>

            <!-- pilihan -->
            <!-- <div class=" div">
                <select class="form-select form-select-lg mb-3" name="lokasi" aria-label=".form-select-lg example">
                    <option selected>Lokasi Toilet</option>
                    <option value="Zona 1">Zona1</option>
                    <option value="Zona 2">Zona2</option>
                    <option value="Zona 3">Zona3</option>
                </select>
            </div> -->

            <!-- <div class="div">
                <label for="Keterangan" class="form-label">Keterangan</label>
                <select class="form-select form-select-lg mb-3" name="keterangan" aria-label=".form-select-lg example">
                    <option selected></option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select> -->
        </div>
        <button type="submit" name="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
        <!-- akhir form -->
    </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>