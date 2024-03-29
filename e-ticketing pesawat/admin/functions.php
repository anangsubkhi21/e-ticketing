<?php

require '../koneksi.php';

function query($query){

    global $conn;

    $rows = [];

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambahUser($data){
    global $conn;

    $username = htmlspecialchars ($data["username"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $password = htmlspecialchars ($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL,'$username', '$nama_lengkap', '$password', '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editUser($data){
    global $conn;

    $id = htmlspecialchars ($data["id_user"]);
    $username = htmlspecialchars ($data["username"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $password = htmlspecialchars ($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "UPDATE user SET
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    password = '$password',
    roles = '$roles' WHERE id_user = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user ='$id'");
    return mysqli_affected_rows($conn);
}


function tambahMaskapai($data){
    global $conn;

    $logo_maskapai = htmlspecialchars($data["logo_maskapai"]);
    $nama_maskapai = htmlspecialchars($data["nama_maskapai"]);
    $kapasitas = htmlspecialchars($data["kapasitas"]);

    $query = "INSERT INTO maskapai VALUES(NULL, '$logo_maskapai', '$nama_maskapai', '$kapasitas')";

    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}
?>