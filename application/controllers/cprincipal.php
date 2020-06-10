<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cinicial extends CI_Controller {

	public function __construct(){
		parent::__construct;
		$this -> load -> model('usuario');
	}
	public function index()
	{
		redirect('home');
	}
	public function cadastrar(){

	}
	public function login(){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$result = $this -> usuario -> buscarUsuario($login,$senha);
		
	}

}