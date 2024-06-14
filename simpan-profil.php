<?php
include 'koneksi.php';

// Ambil data dari form
$name = $_POST['name'];
$status = $_POST['status'];
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$email = $_POST['email'];
$instagram = $_POST['instagram'];
$bio = $_POST['bio'];
$programStudi = $_POST['program-studi'];
$tahunMasuk = $_POST['tahun-masuk'];
$organisasi = $_POST['organisasi'];
$minatBakat = $_POST['minat-bakat'];
$prestasi = $_POST['prestasi'];
$karir = $_POST['karir'];

// Simpan data ke database
$sql = "INSERT INTO profil_pengguna (name, status, linkedin, github, email, instagram, bio, program_studi, tahun_masuk, organisasi, minat_bakat, prestasi, karir)
VALUES ('$name', '$status', '$linkedin', '$github', '$email', '$instagram', '$bio', '$programStudi', '$tahunMasuk', '$organisasi', '$minatBakat', '$prestasi', '$karir')";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
