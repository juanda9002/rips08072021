<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioControl extends CI_Controller {

	

	public function __construct(){ //cargar los valores por defecto
		parent::__construct();
		$this->load->model("UsuarioModel"); //cargar datos al modelo		
	}

	
	public function index(){
	   $datos["titulo"] = 'RIDEC | Lista de pacientes'; //Titulo de la pagina		
	   $datos["listarDatos"]=$this->UsuarioModel->listarUsuario(); //array asociativo con la llamada al metodo del modelo
     
	   $this->load->view('usuario/index',$datos);  //cargo la vista y le paso los datos
	}


	public function vistaRegistrar(){

		$datos["titulo"] = 'RIDEC | Registrar usuario';  //Titulo de la pagina			           					

		$this->load->view('usuario/vistaRegistrar',$datos);	//enviar datos a la vista		
	}
	
    //funcion para regristrar
	public function registerUsuario(){
		
		$datos = $this->input->post();
		//var_dump($datos); 

		if (isset($datos) && is_numeric($datos["cedula"])){ //si datos tiene datos y el campo cedulla es numero
			$cc = $datos["cedula"];   //$_POST("cedula");
			$nom =  $datos["nombres"];
			$ape =  $datos["apellidos"];

			$resul = $this->UsuarioModel->validarRepetido($cc); //consulta si ya existe la cedula
			//print_r($resul);

			if (empty($resul)) { //si esta vacio 
				//echo $resul;		
                
               $resultado = $this->UsuarioModel->registrarUusario($cc, $nom, $ape); //llamado al metodo de registrar
               //print_r($resultado);            

                if ($resultado==1) { //si el = 1 se ha registrado
                	 
                	$datos["titulo"] = 'RIDEC | Lista de Usuarios';                	
                	$datos["mensaje1"] = 'OK! Se registro el usuario correctamente'; 
                	$datos["listarDatos"]=$this->UsuarioModel->listarUsuario();			

		        	$this->load->view('usuario/index',$datos);
                }         						
			
				}else {
							
					  	$datos["titulo"] = 'RIDEC | Registrar usuario';  //Titulo de la pagina
					  	$datos["mensaje2"] = 'Error ! Usuario ya esta registrado'; //error que se envia a la vista

			           // $datos["listarDatos"]=$this->UsuarioModel->listarUsuario();						

					    $this->load->view('usuario/vistaRegistrar',$datos);	//enviar datos a la vista
				}
			}else {
	             $datos["titulo"] = 'RIDEC | Registrar usuario';  //Titulo de la pagina
	             $datos["mensaje4"] = 'Error ! La cedula debe de ser numerica'; //error que se envia a la vista

				 $this->load->view('usuario/vistaRegistrar',$datos);	//enviar datos a la vista
			}	
            
        }		
			  
		

    //Controlador para eliminar
	public function deleteUsuario($id){
		if(is_numeric($id)){
			$eliminar=$this->UsuarioModel->eliminarUsuario($id);
			
			$datos["titulo"] = 'RIDEC | Lista de Usuarios'; 
			$datos["mensaje3"] = 'OK! Usuario eliminado correctamente'; //Titulo de la pagina
			$datos["listarDatos"]=$this->UsuarioModel->listarUsuario(); //cargar de nuev los usuarios			

			$this->load->view('usuario/index',$datos);	//enviar
		}
		
	}  


	public function VistaModifiUsuario($id){

		if(is_numeric($id)){
			$datos["modifica"]=$this->UsuarioModel->modificarUsuario($id);		

			//var_dump($datos);
			$datos["titulo"] = 'RIDEC | Actualizar Usuario'; 
		    $this->load->view("usuario/modificar",$datos); //Se envia datos a la vista modificar
		}

	}

	public function updateUsuario(){
        $id = $this->input->post("id");   //$_POST("cedula");
        $nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");

		//echo $cedula;  //er que valor trae el campo cedula

        $resultado = $this->UsuarioModel->actualizarUsuario($id, $nombres);
        echo $resultado;

        if($resultado == 1){
			$datos["titulo"] = 'RIDEC | Actualizar Usuario';
			$datos["mensajeUpdate"] = 'OK! Usuario actualizado correctamente'; 
			$datos["listarDatos"]=$this->UsuarioModel->listarUsuario(); //cargar de nuev los usuarios	
			$this->load->view("usuario/index",$datos);


        	//redirect(base_url());
        }
    }
}










