<!-- <div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3><?= $data['judul'];  ?></h3>

			<ul class="list-group">
			  	<li class="list-group-item d-flex justify-content-between align-items-center">
			    	<?= $data['mhs']['nama'];  ?>
			  	</li>
			</ul>
		</div>
	</div>

</div> -->

<div class="container mt-5">
	<div class="row">
		<div class="col-sm-4">
			<img src="<?= BASEURL;  ?>/icon/people.png" style="width: 100%;">
		</div>
		<div class="col-sm-6">
			<h3><?= $data['judul'];  ?></h3>
			<table class="table table-hover">
				<tr>
					<td>ID</td>
					<td>: <?= $data['mhs']['id'];  ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <?= $data['mhs']['nama'];  ?></td>
				</tr>
				<tr>
					<td>No. Hp</td>
					<td>: <?= $data['mhs']['hp'];  ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: <?= $data['mhs']['email'];  ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10">
			<a href="<?= BASEURL;  ?>/user" class="back"><img src="<?= BASEURL;  ?>/icon/back.png" width="30"></a>
		</div>
	</div>

</div>
