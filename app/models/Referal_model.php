<?php

class Referal_model{
	private $tableReferal = 'referal';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllReferal()
	{ 
		$this->db->query('SELECT * FROM '.$this->tableReferal);
		return $this->db->resultSet();
	}


	public function getReferalById($id)
	{
		$this->db->query('SELECT * FROM '.$this->tableReferal.' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}


	public function tambahDataReferal($data)
	{
		$query = "INSERT INTO referal VALUES('', :nama, :email, :hp, :id_user)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('hp', $data['hp']);
		$this->db->bind('id_user', $data['id_user']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataReferal($id)
	{
		$query = " DELETE FROM referal WHERE id=:id";

		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataReferal($data)
	{
		$query = "UPDATE referal SET nama=:nama, email=:email, hp=:hp, id_user=:id_user
					WHERE id=:id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('hp', $data['hp']);
		$this->db->bind('id', $data['id']);
		$this->db->bind('id_user', $data['id_user']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariReferal()
	{
		$referalKeyword = $_POST['keyword'];
		$query = "SELECT * FROM referal WHERE nama LIKE :referalKeyword";
		$this->db->query($query);
		$this->db->bind('referalKeyword', "%$referalKeyword%");
		return $this->db->resultSet();
	}
}