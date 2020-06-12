<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cprincipal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this -> load -> model('usuario');
		$this -> load -> library('output');
	}
	public function index()
	{
		redirect('home');
	}
	public function cadastrar(){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$nome = $_POST['nome'];
		$result = $this -> usuario -> criarUsuario($login,$senha,$nome);
		if($result){
			$this -> output -> set_output(true);
		}
	}
	public function login(){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$result = $this -> usuario -> buscarUsuario($login,$senha);
		if($result){
			$this -> session -> set_userdata('usuario_autorizado', $result);
			$this -> output -> set_output(true);
		}
		
	}

}