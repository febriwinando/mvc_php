<?php 


class App{

	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		// var_dump($_GET);
		// echo "OK!";

		$url = $this->parseUrl();
		// var_dump($url);

		//controller
		if (file_exists('app/controllers/' .$url[0].'.php')) {
			$this->controller = $url[0];
			// echo "ada";
			unset($url[0]);
			// var_dump($url);
		}

		require_once 'app/controllers/'.$this->controller.'.php';
		$this->controller =  new $this->controller;


		//method
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//params
		if (!empty($url)) {
			$this->params = array_values($url);

		}

		//jalankan controller dan method , serta params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params); 

	}

	//fungsi untuk mengambil nilai dari url
	public function parseUrl()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}