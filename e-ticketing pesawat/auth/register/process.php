<?php 

require '../../koneksi.php';

$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$roles = htmlspecialchars($_POST["roles"]);

$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$username', '$nama_lengkap', '$password', '$roles' )");

if($query){
    echo "
        <script type='text/javascript'>
            alert('Yay! Register berhasil, silahkan login, ya!');
            window.location = '../login/index.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Yhaa.. register gagal, cek lagi data-datanya, ya!');
        window.location = 'index.php';
    </script>
";
}

?>