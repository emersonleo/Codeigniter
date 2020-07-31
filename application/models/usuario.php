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
		if($this -> buscarUsuarioPorLogin($login) -> num_rows() > 0){
			$result = false;
		}else{
			$result = $this -> db -> insert('usuario', array('login' => $login, 'senha' => md5($senha), 'nome' => $nome));
		}
		return $result;
	}
	public function apagarConta($id,$senha){
		$busca = $this -> buscarUsuarioPorId($id,$senha);
		if($busca){
			return  $this->db->delete('usuario', array('id' => $id));
		}
		else{
			return false;
		}
	}
	public function buscarUsuario($usuario, $senha){
		$result = $this -> db -> get_where('usuario', array('login' => $usuario, 'senha' => md5($senha)));
		return $result;
	}
	public function buscarUsuarioPorLogin($login){
		$result = $this -> db -> get_where('usuario', array('login' => $login));
		return $result;
	}
	public function buscarUsuarioPorId($id, $senha){
		$result = $this -> db -> get_where('usuario', array('id' => $id, 'senha' => md5($senha)));
		return $result;
	}
	public function alterarNome($nome, $id_usuario){
		$this -> db -> where('id',$id_usuario);
		$result = $this ->  db -> update('usuario', array('nome' => $nome));
		return $result;
	}	
	public function alterarLogin($login, $senha, $id_usuario){
		$this -> db -> where(array('id' => $id_usuario, 'senha' => md5($senha)));
		$result = $this ->  db -> update('usuario', array('login' => $login));
		return $result;
	}
	public function alterarSenha($senhaAntiga, $senhaNova, $id_usuario){
		$this -> db -> where(array('id' => $id_usuario, 'senha' => md5($senha)));
		$result = $this ->  db -> update('usuario', array('senha' => md5($senhaNova)));
		return $result;
	}



}