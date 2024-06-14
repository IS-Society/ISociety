<?php
include 'koneksi.php';

// Ambil data pengguna dari database
$sql = "SELECT * FROM profil_pengguna WHERE id = 1"; // Ganti 1 dengan ID pengguna yang sesuai
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data dari setiap baris
  while($row = $result->fetch_assoc()) {
    echo "Nama: " . $row["name"]. "<br>";
    echo "Status: " . $row["status"]. "<br>";
    echo "LinkedIn: " . $row["linkedin"]. "<br>";
    echo "GitHub: " . $row["github"]. "<br>";
    echo "Email: " . $row["email"]. "<br>";
    echo "Instagram: " . $row["instagram"]. "<br>";
    echo "Bio: " . $row["bio"]. "<br>";
    echo "Program Studi: " . $row["program_studi"]. "<br>";
    echo "Tahun Masuk: " . $row["tahun_masuk"]. "<br>";
    echo "Organisasi: " . $row["organisasi"]. "<br>";
    echo "Minat Bakat: " . $row["minat_bakat"]. "<br>";
    echo "Prestasi: " . $row["prestasi"]. "<br>";
    echo "Karir: " . $row["karir"]. "<br>";
    echo '<img src="' . $row["profile_picture"] . '" alt="Foto Profil">';
  }
} else {
  echo "Data pengguna tidak ditemukan";
}

// Tutup koneksi
$conn->close();
?>
