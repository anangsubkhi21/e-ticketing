<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}

$maskapai= query("SELECT * FROM maskapai");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Maskapai</title>
</head>
<body>

    <?php require '../layouts/sidebar.php'; ?>

    <div class="content">
        <h3>Data maskapai E-Ticketing</h3>
        <a href="tambah_maskapai.php">Tambah</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Logo Maskapai</th>
                <th>Nama Maskapai</th>
                <th>Kapasitas</th>
                <th>Opsi</th>
            </tr>

            <?php $no = 1; ?>
            <?php foreach($maskapai as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><img src="../assets/img/GI.jpg" alt="" src="" width="150"><?= $data["logo_maskapai"]; ?></td>
                <td><?= $data["nama_maskapai"]; ?></td>
                <td><?= $data["kapasitas"]; ?></td>
                <td>
                    <a href="edit_maskapai.php?id=<?= $data["id_maskapai"]; ?>" class="edit">Edit</a>
                    <a href="hapus_maskapai.php?id=<?= $data["id_maskapai"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
        
    </div>

</body>
</html>