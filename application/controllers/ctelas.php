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
	public function goToPrincipal(){
		$this -> load -> view('telaprincipal');
	}
	public function goToAlterarConta(){
		$this -> load -> view("telaalterar");
	}

}