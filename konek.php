<?php
// Mengoneksikan PHP agar tehubung ke database
$nameserver = "localhost";
$username = "root";
$password = "";
$dbname = "db_nilai";

// Membuat koneksi
$conn = new mysqli($nameserver, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Bruh try again " . $conn->connect_error);
}
?>
