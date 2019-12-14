<?php

class User_account{

	private $table = 'user_acount';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{ 
		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->resultSet();
	}


	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}


	public function tambahDataUser($data)
	{
		$query = "INSERT INTO user_acount VALUES('', :nama, :password, :email, :hp)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('hp', $data['hp']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataUser($id)
	{
		$query = " DELETE FROM user_acount WHERE id=:id";

		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataUser($data)
	{
			$query = "UPDATE user_acount SET nama=:nama, password=:password, email=:email, hp=:hp
					WHERE id=:id
			";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('hp', $data['hp']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariUser()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM user_acount WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}


}