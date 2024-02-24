<?php

require 'functions.php';

$id = $_GET["id"];

if(hapusUser($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data User Berhasil Dihapus')
        window.location = 'user.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data User Gagal Dihapus')
        window.location = 'user.php';
</script>
    ";
}
?>