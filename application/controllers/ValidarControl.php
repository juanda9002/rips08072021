<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ValidarControl extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $this->load->view('template/1head');  //cargar primero
        $this->load->view('template/2navegacionlateral'); //cargar segundo
        $this->load->view('template/3header'); //cargar tercero

        $this->load->view('template/4contenido1');  //cargar cuarto
        $this->load->view('validar/validar');  //cargar quinto
        $this->load->view('template/6footer');  //cargar sexto

    }

    public function cargarArchivos()
    {

        if (isset($_FILES['my_file'])) {
            $myFile = $_FILES['my_file'];
            $fileCount = count($myFile["name"]);

            for ($i = 0; $i < $fileCount; $i++) {                
                    
                    $data["nombre"] = $myFile["name"][$i];
                   // $data["tmp"] = $myFile["tmp_name"][$i];
                   // $data["tipo"] = $myFile["type"][$i];
                  //  $data["tamano"] = $myFile["size"][$i];
                    

                                    $this->load->view('template/1head');  //cargar primero
                                    $this->load->view('template/2navegacionlateral'); //cargar segundo
                                    $this->load->view('template/3header'); //cargar tercero
                            
                    $this->load->view('validar/cargue', $data);  //cargar cuarto
                    $this->load->view('validar/validar');  //cargar quinto
                    $this->load->view('template/6footer');  //cargar sexto
                    
               
            }
            $this->load->view('template/1head');  //cargar primero
                    $this->load->view('template/2navegacionlateral'); //cargar segundo
                    $this->load->view('template/3header'); //cargar tercero
            
                    $this->load->view('validar/cargue', $data);  //cargar cuarto
                    $this->load->view('validar/validar');  //cargar quinto
                    $this->load->view('template/6footer');  //cargar sexto
        } 
       
    }
}
