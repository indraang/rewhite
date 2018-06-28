<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	function insert($table="",$data=""){
		$this->db->insert($table,$data);
	}

	function get_where($table = null,$where=null){
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function auth_admin($username,$password){
		$query = $this->db->query("SELECT * FROM tb_admin WHERE username ='$username' AND password='$password' LIMIT 1");

		return $query;
	}

	function auth_users($username,$password){
		$query = $this->db->query("SELECT * FROM tb_users WHERE id_user = '$username' AND password='$password' LIMIT 1");
		
		return $query;
	}
}
