<?php  
	include 'connect.php';


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST["username"];
		$password = $_POST["password"];	
		if ($username =="") {
			echo json_encode(array('nama' => '', 'id'=>'', 'kode'=> 0, 'info'=>'Username Empty'));
		}else if($password == ""){
			echo json_encode(array('nama' => '', 'id'=>'', 'kode'=> 0, 'info'=>'Password Empty'));

		}else{
			$sql = "SELECT * FROM admin_account WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($koneksi, $sql);
			$row = mysqli_fetch_assoc($result);
			if ($username == $row['username'] && $password == $row['password']) {
			
				$namaAdmin = $row['username'];
				$idAdmin = $row['id'];
			
				echo json_encode(array('kode'=> 1, 'info'=>'Login Success'));
			
			}else{
		
				echo json_encode(array('kode'=> 0, 'info'=>'Username or Password is not match'));
		
			}
		}
	}

	else{
		echo json_encode(array('nama' => '', 'id'=>'', 'kode'=> 101, 'info'=>'Login Failed'));
	}

	header('Content-Type: application/json');

	// mysqli_close($koneksi);

	// mysqli_close($koneksi); 
?>