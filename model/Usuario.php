<?php
require_once 'conexao.php';

class Usuario
{
	private $con;

	public function __construct()
	{
		$this->con = conexao::getConexao();
	}
}
?>