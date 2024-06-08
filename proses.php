<?php

// Buat koneksi ke database
include 'db_conn.php';

// Dapatkan data dari form HTML
$nama_pembeli = $_POST['name'];
$email_pembeli = $_POST['email'];
$nomor_telepon_pembeli = $_POST['phone'];
$jumlah_tiket = $_POST['jumlah_tiket'];
$jenis_tiket = $_POST['tipe'];
$tanggal_konser = $_POST['tanggal'];
$metode_pembayaran = $_POST['metode'];
$harga;
if($jenis_tiket == "reguler"){
  $harga= 300000 * $jumlah_tiket;
} else{
  $harga = 500000 * $jumlah_tiket;
}
// Buat query INSERT
$sql = "INSERT INTO db_konser (name, email, phone, jumlah, tipe, tanggal, metode, harga)
VALUES ('$nama_pembeli', '$email_pembeli', '$nomor_telepon_pembeli', '$jumlah_tiket', '$jenis_tiket', 
'$tanggal_konser', '$metode_pembayaran','$harga');";

// Jalankan query INSERT
$result = mysqli_query($conn, $sql);

$pesan_alert = "\"Data pembeli berhasil disimpan Nama: ' . $nama_pembeli . 'Email: ' . $email_pembeli . 'Nomor telepon: ' . $nomor_telepon_pembeli . 'Jumlah tiket: ' . $jumlah_tiket . 'Jenis tiket: ' . $jenis_tiket . 'Tanggal konser: ' . $tanggal_konser .Metode pembayaran: $metode_pembayaran Harga: $harga\"";



if ($result) {
    // Query berhasil dijalankan
    header("Location: index.php?success=$pesan_alert");
} else {
    // Query gagal dijalankan
    if ($result === false) {
      // Query gagal dijalankan karena kesalahan sintaks
      echo "Query gagal dijalankan karena kesalahan sintaks $harga";
    } else {
      // Query gagal dijalankan karena alasan lain
      echo "Data pembeli gagal disimpan";
    }
}

// Tutup koneksi ke database
?>
