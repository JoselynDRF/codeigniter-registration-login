<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	// Get current user from DB
	public function getUser($dataUser) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $dataUser['username']);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			$result = $query->row();
			return (password_verify($dataUser['password'], $result->password)) ? $result : false; // Check hash (password)
		}
		return false;
	}
}

// Create hash (password)
// $hash = password_hash($dataUser['password'], PASSWORD_DEFAULT);
// echo $hash;