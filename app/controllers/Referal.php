 <?php 

 class Referal extends Controller
 {
 	public function index()
 	{
 		if (!isset($_SESSION['username'])) {
 			header('location: '.BASEURL);
 		}else{
			$data['judul'] = 'Daftar Referal';
	 		$data['referal'] = $this->model('Referal_model')->getAllReferal();
	 		$data['user'] = $this->model('User_account')->getAllUser();
	 		$this->view('templates/header', $data);
	 		$this->view('referal/index', $data);
	 		$this->view('templates/footer'); 			
 		}

 	}

	public function detail($id)
 	{
 		$data['judul'] = 'Detail Data Referal';
 		$data['referal'] = $this->model('Referal_model')->getReferalById($id);
 		$id_user = $data['referal']['id_user'];
 		
	 	$data['user'] = $this->model('User_account')->getUserById($id_user);
 		$this->view('templates/header', $data);
 		$this->view('referal/detail', $data);
 		$this->view('templates/footer');
 	}


 	public function tambah()
 	{
 		if ($this->model('Referal_model')->tambahDataReferal($_POST)>0) 
 		{
 			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
 			header('location: '.BASEURL.'/referal');
 			exit;
 		}else{
 			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
 			header('location: '.BASEURL.'/referal');
 			exit;
 		}
 	}

 	public function hapus($id)
 	{
 		if ($this->model('Referal_model')->hapusDataReferal($id)>0) 
 		{
 			Flasher::setFlash('berhasil', 'dihapus', 'success');
 			header('location: '.BASEURL.'/referal');
 			exit;
 		}else{
 			Flasher::setFlash('gagal', 'dihapus', 'danger');
 			header('location: '.BASEURL.'/referal');
 			exit;
 		}
 	}


 	public function getubah()
 	{
 		// echo $_POST['id'];

 		echo json_encode($this->model('Referal_model')->getReferalById($_POST['id']));
 	}


 	public function ubah()
 	{
 		if ($this->model('Referal_model')->ubahDataReferal($_POST)>0) 
 		{
 			Flasher::setFlash('berhasil', 'diubah', 'success');
 			header('location: '.BASEURL.'/referal');
 			exit;
 		}else{
 			Flasher::setFlash('gagal', 'diubah', 'danger');
 			header('location: '.BASEURL.'/referal');
 			exit;
 		}	
 	}

	public function cari()
 	{

 		$data['judul'] = 'Daftar Mahasiswa';
 		$data['referal'] = $this->model('Referal_model')->cariReferal();
 		$this->view('templates/header', $data);
 		$this->view('referal/index', $data);
 		$this->view('templates/footer');
 	}
 }