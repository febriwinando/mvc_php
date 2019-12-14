      </div>
      <script type="text/javascript">
      		$(function()
			{	
				//User
				$('#formTambahData').on('click', function(){
					$('#formModalLabel').html('Tambah Data User');
					$('.modal-footer button[type=submit]').html('Tambah Data');
				});


				$('.tampilModalUbah').on('click', function(){
					$('#formModalLabel').html('Ubah Data Referal');
					$('.modal-footer button[type=submit]').html('Simpan Perubahan');
					$('.modal-body form').attr('action', 'http://localhost/fix/user/ubah');
				
					const id = $(this).data('id');
					console.log(id);

					$.ajax({
						url:'http://localhost/fix/user/getubah', 
						data:{id:id},
						method: 'post',
						dataType: 'json',
						success: function(data){
							console.log(data);
							$('#nama').val(data.nama);
							$('#hp').val(data.hp);
							$('#email').val(data.email);
							$('#password').val(data.password);
							$('#id').val(data.id);
						}
					});
				});

				//Referal
				$('#formTambahDataReferal').on('click', function(){
					$('#formModalLabel').html('Tambah Data Referal');
					$('.modal-footer button[type=submit]').html('Tambah Data');
				});


				$('.tampilModalUbahReferal').on('click', function(){
					$('#formModalLabel').html('Ubah Data Referal');
					$('.modal-footer button[type=submit]').html('Simpan Perubahan');
					$('.modal-body form').attr('action', 'http://localhost/fix/referal/ubah');
				
					const id = $(this).data('id');
					console.log(id);

					$.ajax({
						url:'http://localhost/fix/referal/getubah', 
						data:{id:id},
						method: 'post',
						dataType: 'json',
						success: function(data){
							console.log(data);
							$('#nama').val(data.nama);
							$('#hp').val(data.hp);
							$('#email').val(data.email);
							$('#id').val(data.id);
						}
					});
				});

				$('.admin-login').on('click', function(){
					$('#loginModalLongTitle').html('Login Admin');
					$('.modal-body form').attr('action', 'http://localhost/fix/home/admin');
					console.log("bila");
				});

				$('.user-login').on('click', function(){
					$('#loginModalLongTitle').html('Login User');
					$('.modal-body form').attr('action', 'http://localhost/fix/home/account');
				});

			});

      </script>
</body>
</html>