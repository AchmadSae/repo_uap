<?php
$conn = mysqli_connect("localhost", "root", "", "db_uap2274");

//cek eror koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Tidak Tersambung !" .mysqli_connect_errno();
}