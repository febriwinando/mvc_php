<?php 


class Account extends Controller
{
	public function index()
	{
		$data['judul'] = 'Halaman User';
 		// $data['mhs'] = $this->model('User_account')->getAllUser();
 		$this->view('templates/header', $data);
 		$this->view('account/index');
 		$this->view('templates/footer');
	}
}