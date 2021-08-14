<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL NOMER 4 | UAP PEMOGRAMAN WEB</title>
    <style>
    td {
        text-align: center;
    }

    table {
        width: 800px;
    }

    th {
        height: 30px;
    }

    table,
    th,
    td {
        border-collapse: collapse;
        border: 1px solid black;
    }

    .container {
        justify-content: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <?php
        //hubungkan file koneksi
        include ("koneksi.php");
    ?>
        <form action="crud.php" method="POST" style="padding-bottom: 10px;">
            <p> Kode Barang : <input type="text" name="kode_b"></p>
            <p> Nama Barang : <input type="text" name="nama_b"></p>
            <p> Harga Barang : <input type="text" name="harga_b"></p>
            <p> Jumlah Barang : <input type="text" name="jumlah_b"></p>
            <input type="submit" name="simpan" value="simpan">
            <input type="submit" name="ubah" value="ubah">
            <input type="submit" name="hapus" value="hapus">
            <?php
        if(isset($_POST['simpan'])){
            $kode_barang = $_POST['kode_b'];
            $nama_barang = $_POST['nama_b'];
            $harga_barang = $_POST['harga_b'];
            $jumlah_barang = $_POST['jumlah_b'];
            $sql=$conn->query("insert into table_barang(kode_barang,nama_barang,harga_barang,jumlah_barang) values('$kode_barang', '$nama_barang', '$harga_barang', '$jumlah_barang')");
        }else if(isset($_POST['ubah'])){
            $kode_barang = $_POST['kode_b'];
            $nama_barang = $_POST['nama_b'];
            $harga_barang = $_POST['harga_b'];
            $jumlah_barang = $_POST['jumlah_b'];
            $sql=$conn->query("update table_barang set nama_barang='$nama_barang', harga_barang='$harga_barang', jumlah_barang='$jumlah_barang' where kode_barang='$kode_barang'");
        }else if(isset($_POST['hapus'])){
            $kode_barang = $_GET['kode_b'];
            $sql=$conn->query("delete from  table_barang where kode_barang='.$kode_barang'");
            header("location:crud.php");
        }

    ?>
        </form>
        <table>
            <tr>
                <th> Kode Barang</th>
                <th> Nama Barang</th>
                <th> Harga Barang</th>
                <th> Jumlah Barang</th>
            </tr>
            <?php
        $sql=$conn->query("select * from table_barang");
            while ($rs=$sql->fetch_object()) {
                ?>
            <tr>
                <td><?php echo $rs->kode_barang; ?></td>
                <td><?php echo $rs->nama_barang; ?></td>
                <td><?php echo $rs->harga_barang; ?></td>
                <td><?php echo $rs->jumlah_barang; ?></td>
            </tr>
            <?php
            } ?>
        </table>
        <!-- logic simpan -->
</body>
</div>

</html>