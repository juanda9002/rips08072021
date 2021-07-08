<?php

class RolModel extends CI_model{

	public function __construct(){

		$this->load->database();
	}

	public function listarRol(){

             //hacemos la consulta
		$consulta=$this->db->query("SELECT * FROM rol");

			 //Devolvemos el resultado de la consulta
		return $consulta->result();
	}

}