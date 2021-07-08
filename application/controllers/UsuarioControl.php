<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioControl extends CI_Controller
{



	public function __construct()
	{ //cargar los valores por defecto
		parent::__construct();
		$this->load->model("UsuarioModel"); //cargar datos al modelo	
		$this->load->model("RolModel"); //cargar datos al modelo		
	}


	public function index()
	{
		$datos["titulo"] = 'RIDEC | Lista de Usuarios'; //Titulo de la pagina		
		$datos["listarDatos"] = $this->UsuarioModel->listarUsuario(); //array asociativo con la llamada al metodo del modelo

		$this->load->view('template/1head');  //cargar primero
		$this->load->view('template/2navegacionlateral'); //cargar segundo
		$this->load->view('template/3header'); //cargar tercero
		$this->load->view('template/4contenido1', $datos); //envio el titulo	    

		$this->load->view('usuario/index', $datos);  //cargo la vista y le paso los datos	   
		$this->load->view('template/6footer');  //cargar quinto
	}


	public function vistaRegistrar()
	{

		$datos["titulo"] = 'RIDEC | Registrar usuario';  //Titulo de la pagina

		$this->load->view('template/1head');  //cargar primero
		$this->load->view('template/2navegacionlateral'); //cargar segundo
		$this->load->view('template/3header'); //cargar tercero
		$this->load->view('template/4contenido1', $datos); //envio el titulo
		
		$datos["datosRol"] = $this->RolModel->listarRol(); //array asociativo con los roles

		$this->load->view('usuario/vistaRegistrar', $datos);	//enviar datos a la vista	
		$this->load->view('template/6footer');  //cargar quinto

	}

	//funcion para regristrar
	public function registerUsuario()
	{

		$datos = $this->input->post(); //capturar el formulario
		//var_dump($datos); 

		if (isset($datos) && is_numeric(trim($datos["cedula"]))) { //si datos tiene datos y el campo cedulla es numero
			$cc = $datos["cedula"];   //$_POST("cedula");
			$nom =  strtoupper($datos["nombres"]); //convertir a mayusculas
			$ape =  strtoupper($datos["apellidos"]);
			$tel =  $datos["telefono"];
			$log =  trim($datos["loggin"]);
			$con =  trim($datos["contraseña"]); //quitar espacios con trim
			$rol =  $datos["rol"];

			$resul = $this->UsuarioModel->validarRepetido($cc); //consulta si ya existe la cedula
			//print_r($resul);

			if (empty($resul)) { //si esta vacio 
				//echo $resul;		

				$resultado = $this->UsuarioModel->registrarUusario($cc, $nom, $ape, $tel, $log, $con, $rol); //llamado al metodo de registrar
				//print_r($resultado);            

				if ($resultado == 1) { //si el = 1 se ha registrado

					$datos["titulo"] = 'RIDEC | Lista de Usuarios';
					$datos["datoRegistro"] = 'OK! Se registro el usuario correctamente';
					$datos["listarDatos"] = $this->UsuarioModel->listarUsuario();

					$this->load->view('template/1head');  //cargar primero
					$this->load->view('template/2navegacionlateral'); //cargar segundo
					$this->load->view('template/3header'); //cargar tercero
					$this->load->view('template/4contenido1', $datos); //cargar segundo	    

					$this->load->view('usuario/index', $datos);  //cargo la vista y le paso los datos	   
					$this->load->view('template/6footer');  //cargar quinto		

				}
			} else {

				$datos["titulo"] = 'RIDEC | Registrar usuario';  //Titulo de la pagina
				$datos["datoRepetido"] = 'Error ! Usuario ya esta registrado'; //error que se envia a la vista

				// $datos["listarDatos"]=$this->UsuarioModel->listarUsuario();


				$this->load->view('template/1head');  //cargar primero
				$this->load->view('template/2navegacionlateral'); //cargar segundo
				$this->load->view('template/3header'); //cargar tercero
				$this->load->view('template/4contenido1', $datos); //envio el titulo	    

				$this->load->view('usuario/vistaRegistrar', $datos);  //cargo la vista y le paso los datos	   
				$this->load->view('template/6footer');  //cargar quinto		
			}
		} else {
			$datos["titulo"] = 'RIDEC | Registrar usuario';  //Titulo de la pagina
			$datos["datoErrorCedula"] = 'Error ! La cedula debe de ser numerica'; //error que se envia a la vista

			$this->load->view('template/1head');  //cargar primero
			$this->load->view('template/2navegacionlateral'); //cargar segundo
			$this->load->view('template/3header'); //cargar tercero
			$this->load->view('template/4contenido1', $datos); //cargar segundo	    

			$this->load->view('usuario/vistaRegistrar', $datos);  //cargo la vista y le paso los datos	   
			$this->load->view('template/6footer');  //cargar quinto	
		}
	}


	//Controlador para eliminar
	public function deleteUsuario($id)
	{
		if (is_numeric($id)) {
			$eliminar = $this->UsuarioModel->eliminarUsuario($id);

			$datos["titulo"] = 'RIDEC | Lista de Usuarios';
			$datos["datoEliminado"] = 'OK! Usuario eliminado correctamente'; //Titulo de la pagina
			$datos["listarDatos"] = $this->UsuarioModel->listarUsuario(); //cargar de nuev los usuarios	

			$this->load->view('template/1head');  //cargar primero
			$this->load->view('template/2navegacionlateral'); //cargar segundo
			$this->load->view('template/3header'); //cargar tercero
			$this->load->view('template/4contenido1', $datos); //cargar segundo	    

			$this->load->view('usuario/index', $datos);  //cargo la vista y le paso los datos	   
			$this->load->view('template/6footer');  //cargar quinto 			
		}
	}


	public function VistaModifiUsuario($id)
	{

		if (is_numeric($id)) {
			$datos["modifica"] = $this->UsuarioModel->modificarUsuario($id);

			//var_dump($datos);
			$datos["titulo"] = 'RIDEC | Actualizar Usuario';

			$this->load->view('template/1head');  //cargar primero
			$this->load->view('template/2navegacionlateral'); //cargar segundo
			$this->load->view('template/3header'); //cargar tercero
			$this->load->view('template/4contenido1', $datos); //cargar segundo	
			
			$datos["datosRol"] = $this->RolModel->listarRol(); //array asociativo con los roles

			$this->load->view('usuario/modificar', $datos);  //cargo la vista y le paso los datos	   
			$this->load->view('template/6footer');  //cargar quinto  
		}
	}

	public function updateUsuario()
	{
		$id = $this->input->post("id");   //$_POST("cedula");
		$nom = $this->input->post("nombres");
		$ape = $this->input->post("apellidos");
		$tel = $this->input->post("telefono");
		$rol = $this->input->post("rol");
		
		//echo $cedula;  //er que valor trae el campo cedula

		$resultado = $this->UsuarioModel->actualizarUsuario($id, $nom, $ape, $tel, $rol);
		//echo $resultado;

		if ($resultado == 1) {
			$datos["titulo"] = 'RIDEC | Actualizar Usuario';
			$datos["datoActualizado"] = 'OK! Usuario actualizado correctamente';
			$datos["listarDatos"] = $this->UsuarioModel->listarUsuario(); //cargar de nuev los usuarios	

			$this->load->view('template/1head');  //cargar primero
			$this->load->view('template/2navegacionlateral'); //cargar segundo
			$this->load->view('template/3header'); //cargar tercero
			$this->load->view('template/4contenido1', $datos); //cargar segundo	    

			$this->load->view('usuario/index', $datos);  //cargo la vista y le paso los datos	   
			$this->load->view('template/6footer');  //cargar quinto 			
			//redirect(base_url());
		}
	}
}
