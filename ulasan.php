<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Data</a>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
					<tr>
						<th>No</th>
						<th>User</th>
						<th>Buku</th>
						<th>Ulasan</th>
						<th class="text-center">Rating</th>
						<th class="text-center" colspan="2" scope="col">AKSI</th>
					</tr>
					<?php 
					$i = 1;
						$query = mysqli_query($conn, "SELECT*FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
						while($data = mysqli_fetch_array($query)){
					?>
					 <tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $data['nama']; ?></td>
					 	<td><?php echo $data['judul']; ?></td>
					 	<td><?php echo $data['ulasan']; ?></td>
					 	<td class="text-center"><?php echo $data['rating']; ?></td>
					 	<td><a href="?page=ulasan_ubah&&id=<?= $data["id_ulasan"];?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>

      					<td><a href="?page=ulasan_hapus&& id=<?= $data["id_ulasan"];?>" onclick= "return confirm('Apakah anda yakin ingin menghapus?')"><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a></td>
					 </tr>
					 <?php  
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>