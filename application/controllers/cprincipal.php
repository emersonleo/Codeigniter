<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cprincipal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this -> load -> model('usuario');
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
			$this -> session -> set_flashdata('status_cadastro', 'cadastro com sucesso');
			$this -> output -> set_output(base_url('home'));
		}else{
			$this -> session -> set_flashdata('status_cadastro', 'erro no cadastro');
			$this -> output -> set_output(base_url('cadastro'));
		}
	}
	public function login(){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$result = $this -> usuario -> buscarUsuario($login,$senha);
		if($result -> num_rows() > 0){
			$this -> session -> set_userdata('usuario_autorizado', $result -> row());
			$this -> output -> set_output(true);
			redirect("principal");
		}
		else{
			$this -> session -> set_flashdata('error', "LOG001 - login e senha não confere");
			redirect('home');
		}
		
	}
	public function logout(){
		$this -> session -> set_userdata('usuario_autorizado', null);
		redirect('home');
	}
	public function deletar(){
		$login = $this -> session -> userdata('usuario_autorizado') -> id;
		$senha = $_POST['senha'];
		$result = $this -> usuario -> apagarConta($login, $senha);
		if($result){
			$this -> session -> set_flashdata("status_delete","excluido");
			$this -> output -> set_output(base_url("sair"));
		}else{
			$this -> output -> set_output(false);
		}
	}

}