<?php

require 'functions.php';

$hapusu = $_GET["id"];

if (hapususers($hapusu) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'users.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'users.php';
        </script>
    ";
}
