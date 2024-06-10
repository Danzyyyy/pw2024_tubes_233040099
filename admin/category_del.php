<?php 
require '../functions.php';

if(!isset($_GET['id'])){
  header("location: category_manager.php");
  exit;
}

$id = $_GET['id'];

if( hapus($id) > 0){
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'category_manager.php';
        </script>";
} else {
  echo "data gagal dihapus!";
}
?>