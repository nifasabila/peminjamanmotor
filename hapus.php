<?php
include("koneksi.php");
$id=$_GET['id_peminjaman'];

$sql = "DELETE FROM tb_motor where id_motor = '$id'";
$query = mysqli_query($koneksi,$sql);
$sql = "DELETE FROM tb_peminjaman where id_peminjaman = '$id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header('Location:tampil.php?status=sukses');
}else{

    die("akses dilarang");
}
?>