<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this -> load -> database();
	}

	public function index()
	{
		redirect('home');
	}
	public function criarUsuario($login,$senha,$nome){
		$query = $this -> db -> insert('usuario', array('login' => $login, 'senha' => md5($senha), 'nome' => $nome));
		return $query -> row();
	}
	public function alterarSenha(){

	}
	public function apagarConta(){

	}
	public function buscarUsuario($usuario, $senha){
		$query = $this -> db -> get_where('usuario', array('login' => $usuario, 'senha' => md5($senha)));
		return $query -> row_array();
	}

}