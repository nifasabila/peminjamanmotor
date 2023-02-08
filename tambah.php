<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah </h1>
        <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_peminjam">Nama :</label>
                    <input type="text" name="nama_peminjam" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" />
                </p>
                <p>
                    <label for="umur">Umur :</label>
                    <input type="number" name="umur" />
                </p>
                <p>
                    <label for="keperluan">Keperluan :</label>
                    <input type="text" name="keperluan" />
                </p>
                <p>
                    <label for="jaminan">Jaminan :</label>
                    <input type="text" name="jaminan" />
                </p>
                <p>
                    <label for="nomor_rangka">Nomor rangka :</label>
                    <input type="number" name="nomor_rangka" />
                </p>
                <p>
                    <label for="merek">Merek :</label>
                    <input type="text" name="merek" />
                </p>
                <p>
                    <label for="jenis_motor">Jenis motor :</label>
                    <input type="text" name="jenis_motor" />
                </p>
                <p>
                    <label for="tahun_motor">Tahun motor :</label>
                    <input type="number" name="tahun_motor" />
                </p>
                <p>
                    <label for="tanggal_pinjam">Tanggal pinjam :</label>
                    <input type="date" name="tanggal_pinjam" />
                </p>
                <p>
                    <label for="tanggal_kembali">Tanggal kembali :</label>
                    <input type="date" name="tanggal_kembali" />
                </p>
                <p>
                    <input type="submit" value="Tambah" name="tambah" />
                </P>
</fieldset>
</form>
</body>
</html>