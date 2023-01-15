<?php
//koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "dbtoilet");


//mengambil query ceklist
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//mengambil query toilet
function querytoilet($queryt)
{
    global $conn;
    $result = mysqli_query($conn, $queryt);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


//mengambil query Users
function queryusers($queryu)
{
    global $conn;
    $result = mysqli_query($conn, $queryu);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//tambah data checklist
function tambah($data)
{
    global $conn;
    //mengambil data dari form
    $tanggal = $data["tanggal"];
    $toiletid = $data["toilet_id"];
    $kloset = $data["kloset"];
    $wastafel = htmlspecialchars($data["wastafel"]);
    $lantai = $data["lantai"];
    $dinding = $data["dinding"];
    $kaca = $data["kaca"];
    $bau = $data["bau"];
    $sabun = $data["sabun"];
    $usersid = $data["users_id"];

    $query = "INSERT INTO checklist
            VALUES
            ('$tanggal', '$toiletid', '$kloset', '$wastafel', 
            '$lantai', '$dinding', '$kaca', '$bau', '$sabun', '$usersid')
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


//tambah toilet
function tambahtoilet($toilet)
{
    global $conn;
    //mengambil data dari form
    $lokasi = $toilet["lokasi"];
    $keterangan = $toilet["keterangan"];

    $query = "INSERT INTO toilet (lokasi, keterangan)
            VALUES
            ('$lokasi', '$keterangan')
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//tambah users
function tambahusers($users)
{
    global $conn;
    //mengambil data dari form
    $username = $users["username"];
    $password = $users["password"];
    $nama = $users["nama"];
    $email = $users["email"];
    $status = $users["status"];

    // (username, password, nama, email, status)
    $query = "INSERT INTO users 
            VALUES
            ('$username', '$password', '$nama', '$email', '$status')
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


//hapus checklis
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM checklist WHERE id = $id");

    return mysqli_affected_rows($conn);
}


//hapustoilet
function hapustoilet($hapus)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM toilet WHERE id = $hapus");

    return mysqli_affected_rows($conn);
}


//hapus users
function hapususers($hapusu)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id = $hapusu");

    return mysqli_affected_rows($conn);
}

function ubahtoilet($ubaht)
{
    global $conn;
    //mengambil data dari form
    $id = $ubaht["id"];
    $lokasi = htmlspecialchars($ubaht["lokasi"]);
    $keterangan = $ubaht["keterangan"];

    $query = "UPDATE toilet SET
            lokasi = '$lokasi',
            keterangan = '$keterangan'
        WHERE id = $id 
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
