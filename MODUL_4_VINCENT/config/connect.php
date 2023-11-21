<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$dbhost = "localhost";
$dbuser = "root";
$dbname = "MODUL_4_VINCENT";
$dbpass = "";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

// 
 
?>