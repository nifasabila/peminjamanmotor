<?php
include("koneksi.php");
if(!isset($_GET['id_peminjaman'])){
    header("Location:tampil.php?");
}
$id=$_GET['id_peminjaman'];
$sql= "SELECT * FROM tb_peminjaman INNER JOIN tb_motor ON tb_peminjaman.id_motor = tb_motor.id_motor WHERE tb_peminjaman.id_peminjaman='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="tampil.php"><input type="button" value="Kembali"></a>
    <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id_peminjaman" value="<?php echo $row['id_peminjaman']?>" />
                <p>
        <label for="nama_peminjam"> Nama peminjam : </label>
        <input type="text" name="nama_peminjam" value="<?php echo $row['nama_peminjam']?>" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" />
    </p>
    <p>
    <label for="umur"> umur: </label>
        <input type="number" name="umur" value="<?php echo $row['umur']?>" />
    </p>
    <p>
        <label for="keperluan"> keperluan : </label>
        <input type="text" name="keperluan" value="<?php echo $row['keperluan']?>"/>
    </p>
    <p>
        <label for="jaminan"> jaminan : </label>
        <input type="text" name="jaminan" value="<?php echo $row['jaminan']?>"/>
    </p>
    <p>
        <label for="nomor_rangka"> nomor_rangka : </label>
        <input type="text" name="nomor_rangka" value="<?php echo $row['nomor_rangka']?>"/>
    </p>
    <p>
        <label for="merek"> merek : </label>
        <input type="text" name="merek" value="<?php echo $row['merek']?>"/>
    </p>
    <p>
        <label for="jenis_motor"> jenis montor : </label>
        <input type="text" name="jenis_motor" value="<?php echo $row['jenis_motor']?>"/>
    </p>
    <p>
    <label for="tahun_motor"> tahun montor: </label>
        <input type="number" name="tahun_motor" value="<?php echo $row['tahun_motor']?>" />
    </p>
    <p>
    <label for="tanggal_pinjam"> tanggal pinjam: </label>
        <input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']?>" />
    </p>
    <label for="tanggal_kembali"> tanggal kembali: </label>
        <input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']?>" />
    </p>
<p>
<input type="submit" value="Edit" name="edit" /> 
</p>
</form>
</body>
</html>