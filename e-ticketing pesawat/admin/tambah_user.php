<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data User Berhasil Ditambahkan')
            window.location = 'user.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data User Gagal Ditambahkan')
            window.location = 'user.php';
    </script>
        ";
    }
}

?>

<?php require '../layouts/sidebar.php'?>

<div class="main">
    <div class="box">
        <h3>Tambah Data User</h3>

        <form action="" method="POST">

            <label for="useranme">Username</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">

            <label for="roles">Roles</label>
            <select name="roles" id="roles" class="form-control">

                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option>
                <option value="Penumpang">Penumpang</option>

            </select>
            <button tytpe="submit" name="kirim">Tambah</button>
        </form>
    </div>
</div>