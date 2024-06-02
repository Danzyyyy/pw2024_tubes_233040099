<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040099');
}
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040099');
if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
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
  move_uploaded_file($tmpName, 'asset/img/' . $namaFileBaru);

  return $namaFileBaru;
}

function passwardMatch($password, $repeat_password) { //password and confirm password matching check
	// $result

	if ($password == $repeat_password) {
		$result = true;
	}

	else {
		$result = false; 
	}
	return $result;
}

function usernameexist($connection, $username) { // checking the user exist or not
	$sql = 'SELECT * FROM admins WHERE username = ?;';
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: signup.php?error=stmtfailed01 ");
 		exit();
	}
	mysqli_stmt_bind_param($stmt, "s" , $username);
	mysqli_stmt_execute($stmt);

	$resultdata = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultdata)) {
		return $row;
	}
	else{
		$result = false;
		return $result; //returning the users row
	}

}

function useridexist($connection, $userid) { //checking if the user id is taken before or not 
	$sql = 'SELECT id FROM admins ;';
	$result = mysqli_query($connection, $sql);  
	$temp = 0;            

	while ($admin = mysqli_fetch_array($result)) {
		if ($admin['id']==$userid) {
			$temp=1;
		}
	}
	if ($temp == 1) {
		return true;
	}
	else{
		return false;
	}
}