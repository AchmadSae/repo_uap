<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL NOMER 5 | UAP PEMOGRAMAN WEB</title>
    <style>
    #table1,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    #table1,
    th,
    td {
        padding: 5px;
        text-align: left;
    }
    </style>
</head>

<body>
    <?php
            //hubungkan file koneksi
            include ("koneksi.php");
         if (isset($_POST['submit'])) {
             $kode_bm = $_POST['kode_bm'];
             $kode_b = $_POST['kode_b'];
             $nama_b = $_POST['nama_b'];
             $jumlah_b = $_POST['jumlah_b'];
             $sql=$conn->query("insert into table_barang_masuk(kode_barang_masuk,kode_barang,nama_barang,jumlah_barang) values('$kode_bm','$kode_b', '$nama_b','$jumlah_b')");
         }
    ?>
    <table style="width:100%" id="table1">
        <h1>
            FORM DATA MASUK BARANG
        </h1>
        <tr>
            <th style="text-align:center"><span>INPUT</span></th>
            <th style="text-align:center"><span>OUTPUT</span></th>
        </tr>
        <tr>
            <td>

                <form action="masuk_barang.php" method="POST">
                    <p>Kode Barang Masuk = <input type="text" name="kode_bm"></p>
                    <label for=""> Kode Barang :</label>
                    <select name="kode_b">
                        <option value="">--PILIH--</option>
                        <option value="KD001">KD001</option>
                        <option value="KD002">KD002</option>
                        <option value="KD003">KD003</option>
                    </select>
                    <p>Nama Barang : <input type="text" name="nama_b"></p>
                    <p>Jumlah Barang : <input type="text" name="jumlah_b"></p>
                    <p><input type="submit" name="submit" value="SIMPAN"></p>
                </form>
            </td>
            <td>
                <?php
                    $kode_bm = $_POST['kode_bm'];
                    $kode_b = $_POST['kode_b'];
                    $nama_b = $_POST['nama_b'];
                    $jumlah_b = $_POST['jumlah_b'];
                ?>
                <h2 style="padding-bottom: 10px;">DATA BARANG MASUK</h2>
                <h4>KODE BARANG MASUK : <?= $kode_bm; ?></h4>
                <h4>KODE BARANG : <?= $kode_b; ?></h4>
                <h4>NAMA BARANG : <?= $nama_b; ?></h4>
                <h4>JUMLAH BARANG MASUK : <?= $jumlah_b; ?></h4>
            </td>
        </tr>
    </table>

</body>

</html>