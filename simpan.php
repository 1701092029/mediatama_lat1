<?php
include "koneksi.php";
$simpan = $con->query("INSERT into tb_user (nama,username,password) values ('$_POST[nama]','$_POST[username]','$_POST[password]')");

if ($simpan == true) {
    echo json_encode(['pesan' => 'berhasil']);
} else {
    echo json_encode(['pesan' => 'eror']);
}
