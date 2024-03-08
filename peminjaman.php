<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
					<tr>
						<th>No</th>
						<th>User</th>
						<th>Buku</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>
						<th>Status Peminjaman</th>
						<th class="text-center" colspan="2" scope="col">AKSI</th>
					</tr>
					<?php 
					$i = 1;
						$query = mysqli_query($conn, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on  buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" .$_SESSION['user']['id_user']);
						while($data = mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['tanggal_peminjaman']; ?></td>
							<td><?php echo $data['tanggal_pengembalian']; ?></td>
							<td><?php echo $data['status_peminjaman']; ?></td>
								
					 		<td>
					 			<?php 
									if($data['status_peminjaman'] != 'dikembalikan') {
								 ?>
								 <a href="?page=peminjaman_ubah&&id=<?= $data["id_peminjaman"];?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a>
								<?php 
					 				}
					 			 ?>
					 		</td>

      						<td>
      							<?php 
									if($data['status_peminjaman'] != 'dikembalikan') {
								 ?>
								 <a href="?page=peminjaman_hapus&& id=<?= $data["id_peminjaman"];?>" onclick= "return confirm('Apakah anda yakin ingin menghapus?')"><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a>
								<?php 
					 				}
					 			 ?>
					 			</td>
					 			
						</tr>
						<?php 

						}
						?>
				</table>
			</div>
		</div>
	</div>
</div>