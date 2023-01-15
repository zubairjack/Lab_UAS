<?php

require 'functions.php';

$hapus = $_GET["id"];

if (hapustoilet($hapus) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'toilet.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'toilet.php';
        </script>
    ";
}
