<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<a href="?page=kategori_tambah" class="btn btn-primary">+ Tambah Data</a>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama Kategori</th>
						<th class="text-center" colspan="2" scope="col">AKSI</th>
					</tr>
					<?php 
					$i = 1;
						$query = mysqli_query($conn, "SELECT*FROM kategori");
						while($data = mysqli_fetch_array($query)){
					?>
					 <tr>
					 	<td><?php echo $i++; ?></td>
					 	<td><?php echo $data['kategori']; ?></td>
					 	<td><a href="?page=kategori_ubah&&id=<?= $data["id_kategori"];?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>

      					<td><a href="?page=kategori_hapus&& id=<?= $data["id_kategori"];?>" onclick= "return confirm('Apakah anda yakin ingin menghapus?')"><i class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a></td>
					 </tr>
					 <?php  
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>