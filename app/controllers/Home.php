<?php 

//dengan menggunakan extends pada class Home makan menjadikan class Home sebagai turunan dari Class Controller
class Home extends Controller{
	public function index()
	{
		//echo 'home/index';
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
		// $this->view('user/index');

	}


	public function admin()
 	{	
 		$data['admin'] = $this->model('Login_model')->admin();
 		$data['referal'] = $this->model('Referal_model')->getAllReferal();
		if ($data['admin'] == 0) {
 			header('location: '.BASEURL);
 		}else{
 			session_start();
 			foreach ($data['admin'] as $session) {
 				$_SESSION['id'] = $session['id'];
 				$_SESSION['username'] = $session['username'];
 				$_SESSION['password'] = $session['password'];
 				$_SESSION['account'] = "admin";
 			}

 			// $_SESSION['username'] = "nama";
 			header('location: http://localhost/fix/referal');
 		}


 	}

	public function account()
 	{	
 		$data['user'] = $this->model('Login_model')->user();
 		$data['referal'] = $this->model('Referal_model')->getAllReferal();
		if ($data['user'] == 0) {
 			header('location: '.BASEURL);
 		}else{
 			 session_start();
 			foreach ($data['user'] as $session) {
 				$_SESSION['id'] = $session['id'];
 				$_SESSION['username'] = $session['nama'];
 				$_SESSION['password'] = $session['password'];
 				$_SESSION['account'] = "user";
 				
 			}

 			// $_SESSION['username'] = "nama";
 			header('location: '.BASEURL.'/referal');
 		}
 	}


 	public function logout()
 	{
 		unset($_SESSION);
 		session_destroy();
 		header('location: '.BASEURL);
 	}
}