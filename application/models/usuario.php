<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

	fuction __construct(){
		parent::__construct;
	}

	public function index()
	{
		redirect('home');
	}
	public function criarUsuario(){

	}
	public function alterarSenha(){

	}
	public function apagarConta(){

	}
	public function buscarUsuario($usuario, $senha){
		$query = $this -> db -> get_where('usuario', array('login' => $usuario, 'senha' => $senha));
		return $query -> row_array();
	}

}