<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioControl extends CI_Controller {

	public function __construct(){ //cargar los valores por defecto
		parent::__construct();
		$this->load->model("UsuarioModel"); //cargar datos al modelo
		
	}

	
	public function index()
	{
	//	$this->load->view('datos/index');
		//array asociativo con la llamada al metodo del modelo
		$datos["listard"]=$this->UsuarioModel->listarUsuario();

        //cargo la vista y le paso los datos
		$this->load->view('usuario/index',$datos);

	}


	public function vistaRegistrar()
	{

		$this->load->view('usuario/vistaRegistrar');
	}
	

	public function registerUsuario()
	{
		$datos = $this->input->post();

		if (isset($datos)) { //si datos tiene datos
			$cc = $datos["cedula"];   //$_POST("cedula");
		$nom =  $datos["nombres"];
		$ape =  $datos["apellidos"];

		$resultado = $this->UsuarioModel->registrarUusario($cc, $nom, $ape);

		redirect(base_url());
		}else{
			echo "campos vacios";
		}		
		
	}	

    //Controlador para eliminar
	public function deleteUsuario($id){
		if(is_numeric($id)){
			$eliminar=$this->UsuarioModel->eliminarUsuario($id);
			if($eliminar==true){
				$this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
			}else{
				$this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
			}
			redirect(base_url());
		}else{
			redirect(base_url());
		}
	}   


	public function modifiUsuario($id){
		if(is_numeric($id)){
			$datos["mod"]=$this->UsuarioModel->modificarUsuario($id);
			$this->load->view("usuario/modificar",$datos);
		}

	}


	public function updateUsuario(){
        $id = $this->input->post("id");   //$_POST("cedula");
        $nombres = $this->input->post("nombres");
		//$apellidos = $this->input->post("apellidos");


		//echo $cedula;  //er que valor trae el campo cedula

        $resultado = $this->UsuarioModel->actualizarUsuario($id, $nombres);

        if($resultado){
			//redirect("datos/correcto");
			//echo "Actualizado correctamente";
        	redirect(base_url());
        }
    }
}










