 <?php 

 class User extends Controller
 {
 	public function index()
 	{
 		if (!isset($_SESSION['username'])) {
 			header('location: '.BASEURL);
 			
 		}else{
 			$data['judul'] = 'Daftar User';
	 		$data['mhs'] = $this->model('User_account')->getAllUser();
	 		$this->view('templates/header', $data);
	 		$this->view('user/index', $data);
	 		$this->view('templates/footer');	
 		}
 		
 	}

	public function detail($id)
 	{

 		$data['judul'] = 'Detail User';
 		$data['mhs'] = $this->model('User_account')->getUserById($id);
 		$this->view('templates/header', $data);
 		$this->view('user/detail', $data);
 		$this->view('templates/footer');
 	}


 	public function tambah()
 	{
 		if ($this->model('User_account')->tambahDataUser($_POST)>0) 
 		{
 			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
 			header('location: '.BASEURL.'/user');
 			exit;
 		}else{
 			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
 			header('location: '.BASEURL.'/user');
 			exit;
 		}
 	}

 	public function hapus($id)
 	{
 		if ($this->model('User_account')->hapusDataUser($id)>0) 
 		{
 			Flasher::setFlash('berhasil', 'dihapus', 'success');
 			header('location: '.BASEURL.'/user');
 			exit;
 		}else{
 			Flasher::setFlash('gagal', 'dihapus', 'danger');
 			header('location: '.BASEURL.'/user');
 			exit;
 		}
 	}


 	public function getubah()
 	{
 		// echo $_POST['id'];

 		echo json_encode($this->model('User_account')->getUserById($_POST['id']));
 	}


 	public function ubah()
 	{
 		if ($this->model('User_account')->ubahDataUser($_POST)>0) 
 		{
 			Flasher::setFlash('berhasil', 'diubah', 'success');
 			header('location: '.BASEURL.'/user');
 			exit;
 		}else{
 			Flasher::setFlash('gagal', 'diubah', 'danger');
 			header('location: '.BASEURL.'/user');
 			exit;
 		}	
 	}

	public function cari()
 	{

 		$data['judul'] = 'Daftar Mahasiswa';
 		$data['mhs'] = $this->model('User_account')->cariUser();
 		$this->view('templates/header', $data);
 		$this->view('user/index', $data);
 		$this->view('templates/footer');
 	}
 }