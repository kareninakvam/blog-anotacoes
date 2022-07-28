<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
		$data['title'] = "Estudos e Anotações - Dashboard";
			
		$this->load->model("posts_model");
        $data['posts'] = $this-> posts_model-> index();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/menu-admin', $data);
		$this->load->view('templates/nav-bar', $data);
		$this->load->view('pages/dashboard', $data);
	}
}