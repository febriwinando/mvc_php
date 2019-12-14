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
					<td>: <?= $data['referal']['id'];  ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <?= $data['referal']['nama'];  ?></td>
				</tr>
				<tr>
					<td>No. Hp</td>
					<td>: <?= $data['referal']['hp'];  ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: <?= $data['referal']['email'];  ?></td>
				</tr>
				<tr>
					<td>User</td>
					<td>: <?= $data['user']['nama'];  ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10">
			<a href="<?= BASEURL;  ?>/referal" class="back"><img src="<?= BASEURL;  ?>/icon/back.png" width="30"></a>
		</div>
	</div>

</div>
