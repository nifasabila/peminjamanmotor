<html>
<head>
 <title>Tabel tampil</title>
 <center>
 <h1>From peminjaman</h1>
</head>
<body>

    <table border="1">
      <tr>
      <td>No.</td>
      <td>Nama</td>
      <td>Alamat</td>
      <td>Umur</td>
      <td>Keperluan</td>
      <td>Jaminan</td>
      <td>Nmr_rangka</td>
      <td>Merek</td>
      <td>Jns_motor</td>
      <td>Thn_motor</td>
      <td>Tgl_pinjam</td>
      <td>Tgl_kembali</td>
  </tr>
  
  <?php
  include 'koneksi.php';

    $query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman INNER JOIN tb_motor ON tb_peminjaman.id_motor =
    tb_motor.id_motor");

    $no = 1;
    foreach ($query as $row) :
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_peminjam']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['umur']; ?></td>
            <td><?= $row['keperluan']; ?></td>
            <td><?= $row['jaminan']; ?></td>
            <td><?= $row['nomor_rangka']; ?></td>
            <td><?= $row['merek']; ?></td>
            <td><?= $row['jenis_motor']; ?></td>
            <td><?= $row['tahun_motor']; ?></td>
            <td><?= $row['tanggal_pinjam']; ?></td>
            <td><?= $row['tanggal_kembali']; ?></td>

        <td><a href="edit.php?id_peminjaman=<?= $row['id_peminjaman']; ?>">Edit</a> ||
        <a href="hapus.php?id_peminjaman=<?= $row['id_peminjaman']; ?>">Hapus</a>
  </tr>
    <?php endforeach; ?>
 <a href="tambah.php"><input type="button" value="Tambah"/></a>
    </center>
    </table>
    </body>
    </html>