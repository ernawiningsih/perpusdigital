<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM peminjaman WHERE id_peminjaman=$id");
 ?>
 <script>
 	alert('Hapus Data Berhasil');
 	location.href = "index.php?page=peminjaman";
 </script>