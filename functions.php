<?php

function koneksi()
{
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040099');
return $conn;
}

function query($query)
{
// Jalankan koneksi ke database
$conn = koneksi();

// Query ke tabel mahasiswa
$result = mysqli_query($conn, $query);

// Menyiapkan data mahasiswa
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
return $rows;
}

function tambah($data)
{

  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  
  //Upload gambar
  $gambar = upload();
  if(!$gambar) {
      return false;
  }
  $query = "INSERT INTO mahasiswa 
              VALUES (null, '$nama', '$nim', '$email', '$jurusan')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn);
}


function upload() {

  $namaFile = $_FILES['image']['name'];
  $ukuranFile = $_FILES['image']['size'];
  $error = $_FILES['image']['error'];
  $tmpName = $_FILES['image']['tmp_name'];

  // Cek apakah tidak ada gambar yang diupload
  if( $error === 4) {
      echo "<script>
              alert('Pilih gambar terlebih dahulu!');
          </script>";
      return false;
  }

  // Cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
              alert('Yang anda upload bukan gambar!');
          </script>";
      return false;
  }

  // Cek jika ukurannya terlalu besar
  if( $ukuranFile > 1000000) {
      echo "<script>
              alert('Uuran gambar terlalu besar!');
          </script>";
      return false;
  }

  // Generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  // Lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}