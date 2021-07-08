<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateControl extends CI_Controller {

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
	public function index(){
    
		$this->load->view('template/1head');  //cargar primero
		$this->load->view('template/2navegacionlateral'); //cargar segundo
	    $this->load->view('template/3header'); //cargar tercero
		
		$this->load->view('template/4contenido1');  //cargar cuarto
		$this->load->view('template/5contenido2');  //cargar quinto
		$this->load->view('template/6footer');  //cargar sexto
		
	}
}
