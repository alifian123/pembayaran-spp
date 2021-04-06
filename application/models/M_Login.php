<?php
class M_Login extends CI_Model{
	function cek_login_petugas($username, $password){
		$query = $this->db->query("select*from petugas where username = '$username' and password = '$password'");
		return $query;
	}
	function cek_login_siswa($nama, $password){
		$query = $this->db->query("select*from siswa where nama = '$nama' and password = '$password'");
		return $query;
	}
}