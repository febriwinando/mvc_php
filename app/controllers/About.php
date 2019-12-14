<?php 

class About extends Controller{
	//memberikan parameter pada fungsi dan nilainya diambil dari url
	public function index($nama = 'Febri', $work = 'Android Developer', $umur = '25')
	{
		//mengirim data pada controller

		$data['judul'] = 'About';

		// echo "Nama saya adalah $nama dan pekerjaan saya adalah $work dan saya berumur $umur tahun";
		$this->view('templates/header', $data);
		$this->view('about/index');
		$this->view('templates/footer');

	}
	public function page($nama = 'Febri', $work = 'Android Developer'){
		$data['nama'] = $nama;
		$data['pekerjaan'] = $work;
		$data['judul'] = 'Pages';
		// echo "Method Page";
		$this->view('templates/header', $data);
		$this->view('about/page', $data);
		$this->view('templates/footer');
		
	}
}