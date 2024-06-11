<?php
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040099');


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data)
{

global $conn;
  $title = htmlspecialchars($data['title']);
  $active = $data['active'];
  $featured = $data['featured'];
  
  //Upload gambar
  $gambar = upload();
  if(!$gambar) {
      return false;
  }
  $query = "INSERT INTO category 
              VALUES (null, '$title', '$gambar', '$active', '$featured')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn);
}
function tambah_games($data)
{

global $conn;
  $title = htmlspecialchars($data['title']);
  $description = htmlspecialchars($data['description']);
  $price = $data['price'];
  $category_id = $data['category_id'];
  $active = $data['active'];
  $exclusive = $data['exclusive'];
  $total_sell = 0;
  //Upload gambar
  $gambar = upload();
  if(!$gambar) {
      return false;
  }
  $query = "INSERT INTO games 
              VALUES (null, '$title', '$description', '$price', '$gambar', '$category_id', '$total_sell', '$active', '$exclusive')";
mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn);
}

function update($data)
{
  global $conn;

    $id = $data['id'];
    $title = htmlspecialchars ($data['title']);
    $active = $data['active'];
    $featured = $data['featured'];
    $old_image = $data['old_image'];

    if( $_FILES['image']['error'] === 4) {
        $image = $old_image;
    } else {
        $image = upload();
    } 
    
      $query="UPDATE category SET
                title ='$title', 
                active ='$active', 
                featured ='$featured', 
                image ='$image' 
              WHERE id = $id
              ";
    
      mysqli_query($conn, $query);
      echo mysqli_error($conn);
      return mysqli_affected_rows($conn);
    }
function update_games($data)
{
  global $conn;

    $id = $data['id'];
    $title = htmlspecialchars ($data['title']);
    $description = htmlspecialchars ($data['description']);
    $category_id = $data['category_id'];
    $price = $data['price'];
    $active = $data['active'];
    $exclusive = $data['exclusive'];
    $old_image = $data['old_image'];

    if( $_FILES['image']['error'] === 4) {
        $image = $old_image;
    } else {
        $image = upload();
    } 
    
      $query="UPDATE games SET
                title ='$title', 
                description ='$description',
                price ='$price',
                category_id ='$category_id',
                active ='$active', 
                exclusive ='$exclusive', 
                image ='$image'
              WHERE id = $id
              ";
    
      mysqli_query($conn, $query);
      echo mysqli_error($conn);
      return mysqli_affected_rows($conn);
    }


    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE category, games FROM category JOIN games ON category_id = category.id WHERE category.id = $id") or die(mysqli_error($conn));
        return mysqli_affected_rows($conn);
      }
    function hapus_games($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM games WHERE id = $id") or die(mysqli_error($conn));
        return mysqli_affected_rows($conn);
      }

function registration($data) {
    global $conn;

    $full_name = ucwords($data["full_name"]);
    $username = ucwords(stripslashes($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if($password1 !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return false;
    }

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah terpakai')</script>";
        return false;
    }

    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users(full_name, username, password) VALUES ('$full_name', '$username', '$password1')");

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
              alert('Ukuran gambar terlalu besar!');
          </script>";
      return false;
  }

  // Generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  // Lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, '../asset/img/game/' . $namaFileBaru);

  return $namaFileBaru;
}

function useridexist($connection, $userid) { //checking if the user id is taken before or not 
	$sql = 'SELECT id FROM users ;';
	$result = mysqli_query($connection, $sql);  
	$temp = 0;            

	while ($user = mysqli_fetch_array($result)) {
		if ($user['id']==$userid) {
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

function login($data){
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {

            $role = query("SELECT role FROM users WHERE username = '$username'")[0]['role'];
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            if($role == 'admin') {
                $_SESSION['role'] = 'admin';
                header("Location: admin/admin.php");
                exit;
            } else {
                $_SESSION['role'] = 'user';
                header("Location: index.php");
                exit;
            }
        }
    }
    return [
        'error' => true,
        'message' => 'Username or password is wrong!'
    ];
}