<?php  

class Login_model
{

	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function admin()
	{
		$password = $_POST['password'];
		$username = $_POST['username'];

		$this->db->query('SELECT * FROM admin_account WHERE username=:username AND password=:password');
		$this->db->bind('username', $username);
		$this->db->bind('password', $password);
		$data['admin'] = $this->db->resultSet();
		echo "berhasil";
		echo $this->db->rowCount();
		foreach ($data['admin'] as $admin) {
			echo $admin['username'];
		}
		if ($this->db->rowCount()>0) {
			return $this->db->resultSet();
		}else{
			return 0;
		}
	}

	public function user()
	{
		$password = $_POST['password'];
		$username = $_POST['username'];

		$this->db->query('SELECT * FROM user_acount WHERE nama=:username AND password=:password');
		$this->db->bind('username', $username);
		$this->db->bind('password', $password);

		echo $password;
		$data['user'] = $this->db->resultSet();
		echo $this->db->rowCount();
		if ($this->db->rowCount()>0) {
			return $data['user'];
		}else{
			return 0;
		}
	}

	public function getAllReferal()
	{ 
		$this->db->query('SELECT * FROM referal');
		return $this->db->resultSet();
	}

}