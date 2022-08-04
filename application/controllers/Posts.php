<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("posts_model");
	}


	public function new(){
		$data['title'] = "Novo Post - Estudos e Anotações";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/menu-admin', $data);
		$this->load->view('pages/form-post', $data);
	}

	public function store(){
		$post = $_POST;
		$this-> posts_model->store($post);
		redirect("dashboard");
	}

	public function delete($id){	
		$this->posts_model->destroy($id);
		return("dashboard");// Preciso arrumar esse redirect.
	}

	public function edit($id){
		$data['post'] = $this->posts_model->show($id); 
		$data['title'] = "Editando post - Estudos e Anotações";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/menu-admin', $data);
		$this->load->view('pages/form-post', $data);
	}

	public function update($id){
		$post = $_POST;
		$this->posts_model->update($id, $post);
		$this->load->view('pages/temporario'); // Preciso arrumar esse redirect.
	}
}