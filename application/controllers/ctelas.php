<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctelas extends CI_Controller {

	public function index()
	{
		redirect('home');
	}
	public function goToLogin(){
		$this -> load -> view("inicial");
	}
	public function goToCadastro(){
		$this -> load -> view("telacadastro");
	}

}