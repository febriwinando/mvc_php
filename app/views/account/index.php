<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash();  ?>
		</div>
	</div>

	<h3>Daftar Referal</h3>
	<button type="button" class="btn btn-primary" id="formTambahDataReferal" data-toggle="modal" data-target="#formModalReferal">
		Tambah Data Referal
	</button>		
	<div class="row">
		<div class="col-lg-12" style="margin: 0 auto;">
			<div class="row mt-3">
				<div class="col-lg-12">
					<form action="<?= BASEURL; ?>/referal/cari" method="post">
						<div class="input-group mb-3">
						  	<input type="text" class="form-control" placeholder="Cari nama referal" name="keyword" id="keyword" aria-label="Recipient's username"  autocomplete="off">
						  	<div class="input-group-append">
						    	<button class="btn btn-outline-secondary" type="submit" id="btnCari">Cari</button>
						  	</div>
						</div>
					</form>
				</div>
			</div>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs ) : ?>
			  	<li class="list-group-item">
			    	<?= $mhs['nama'];  ?>
			    	<a href="<?= BASEURL;  ?>/referal/hapus/<?= $mhs['id']; ?>" class="float-right ml-1" onclick="return confirm('yakin?')"><span class="badge badge-pill"><img src="<?= BASEURL; ?>/icon/delete.png" width="20"></span></a>
			    	<a href="<?= BASEURL;  ?>/referal/ubah/<?= $mhs['id']; ?>" class="float-right ml-1 tampilModalUbahReferal"  data-toggle="modal" data-target="#formModalReferal" data-id="<?= $mhs['id']; ?>"><span class="badge badge-pill"><img src="<?= BASEURL; ?>/icon/edit.png" width="20"></span></a>
			    	<a href="<?= BASEURL;  ?>/referal/detail/<?= $mhs['id']; ?>" class="float-right ml-1"><span class="badge badge-pill"><img src="<?= BASEURL; ?>/icon/profile.png" width="20"></span></a>
			  	</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModalReferal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
	        	<h5 class="modal-title" id="formModalLabel">Tambah</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
      		</div>
	      	<div class="modal-body">
	        	<form action="<?= BASEURL;  ?>/referal/tambah" method="post">
	        		<input type="hidden" name="id" id="id">
					<div class="form-group">
					    <label for="exampleInputPassword1">Nama</label>
					    <input type="text" class="form-control" id="nama" name="nama">
					</div>
	        		<div class="form-group">
					    <label for="exampleFormControlInput1">Email address</label>
					    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
					</div>
	        		<div class="form-group">
					    <label for="exampleFormControlInput1">No. Hp</label>
					    <input type="text" class="form-control" id="hp" placeholder="08.." name="hp">
					</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary" id="btnSave">Save changes</button>
	      	</div>
	        	</form>

   	 	</div>
  	</div>
</div>