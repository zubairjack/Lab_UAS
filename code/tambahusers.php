<?php
//TOILETT


require "functions.php";
//cek tombol udah dipencet atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahusers($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Di Tambahkan!');
            document.location.href = 'users.php'
        </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Di Tambahkan!');
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
                <h5 class="card-title">Masukan Data User</h5><br><br>

                <!-- awal form -->
                <form action="" method="post"">
                <div class=" mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan Password">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="nama" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <!-- <div class=" div">
                <select class="form-select form-select-lg mb-3" name="lokasi" aria-label=".form-select-lg example">
                    <option selected>Lokasi Toilet</option>
                    <option value="Zona 1">Zona1</option>
                    <option value="Zona 2">Zona2</option>
                    <option value="Zona 3">Zona3</option>
                </select>
            </div> -->
            <div class="div">
                <label for="status" class="form-label">Status</label>
                <select class="form-select form-select-lg mb-3" name="status" aria-label=".form-select-lg example">
                    <option selected></option>
                    <option value="1">Aktif</option>
                </select>
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