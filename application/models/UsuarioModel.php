<?php

class UsuarioModel extends CI_model{

	public function __construct(){

		$this->load->database();
	}


	public function registrarUusario($cc, $nom, $ape, $tel, $log, $con, $rol){

		$sentencia= $this->db->insert("usuario", ["usuCedula" => $cc, "usuNombres" => $nom, "usuApellidos" => $ape, "usuTelefono" => $tel,
												 "usuLoggin" => $log, "usuContrasena" => $con, "idRol" => $rol]);

		if ($sentencia) {
			return true;
		}
		
	}

	public function validarRepetido($cedula){

		$consulta=$this->db->query("SELECT * FROM usuario WHERE usuCedula=$cedula");
		return $consulta->result();
	}


	public function listarUsuario(){

             //hacemos la consulta
		$consulta=$this->db->query("SELECT * FROM usuario NATURAL JOIN rol 	ORDER BY usuApellidos ASC");

			 //Devolvemos el resultado de la consulta
		return $consulta->result();
	}


	public function eliminarUsuario($id){
		$consulta=$this->db->query("DELETE FROM usuario WHERE usuId=$id");
		if($consulta==true){
			return true;
		}else{
			return false;
		}
	}


	public function modificarUsuario($id){

		$consulta=$this->db->query("SELECT * FROM usuario WHERE usuId=$id");
		return $consulta->result();
	}


	public function actualizarUsuario($id, $nom, $ape, $tel, $rol){

		return $this->db->query("UPDATE usuario SET usuNombres='$nom', usuApellidos='$ape', usuTelefono='$tel', idRol='$rol' WHERE usuId=$id"); //otra forma de retornar la consulta
		
	}

}











