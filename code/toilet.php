<?php


require 'functions.php';


//ambil data dari table checklist
$datas = querytoilet("SELECT * FROM toilet");
//var_dump($result);

//ambil data objeck dari result
// $data = mysqli_fetch_assoc($result);
// 
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Toilet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <!-- tombol home -->
        <div>
            <nav class="navbar navbar-expand-lg bg-light mb-5">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Home</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li> -->
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <div class="card ">
            <h2 class="card-header" style="text-align: center;">Data Toilet</h2>
            <div class="card-body">
                <!-- Button trigger tambah data -->

                <a href="tambahtoilet.php"><button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        Tambah Data
                    </button></a>
                <table class="table table-success table-striped">
                    <tr>
                        <th>No</th>
                        <th>Lokasi Toilet</th>
                        <th>Keterangan</th>
                        <th></th>
                    </tr>


                    <?php
                    //persiapan menampilkan data
                    $no = 1;
                    foreach ($datas as $data) :
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['lokasi'] ?></td>
                            <td><?= $data['keterangan'] ?></td>
                            <td>
                                <a href="ubahtoilet.php?id=<?= $data["id"]; ?>" class=" btn btn-outline-success">Ubah</a>
                                <a href="hapustoilet.php?id=<?= $data["id"]; ?>" class="btn btn-outline-secondary">Hapus</a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>