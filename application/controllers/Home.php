<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$data['title'] = "Estudos e Anotações";
			
		$this->load->model("posts_model");
        $data['posts'] = $this-> posts_model-> index();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-bar', $data);
		$this->load->view('pages/home', $data);
	}

	public function about(){
		$data['title'] = "Sobre Mim - Estudos e Anotações";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-bar', $data);
		$this->load->view('pages/about', $data);
	}

	public function contact(){
		$data['title'] = "Contato - Estudos e Anotações";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-bar', $data);
		$this->load->view('pages/contact', $data);
	}
}
