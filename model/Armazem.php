<?php
require_once 'conexao.php';

class Armazem
{
	private $con;

	public function __construct()
	{
		$this->con = conexao::getConexao();
	}

	public function BuscarArmazem()
	{
		$dados = array();
		$query = $this->con->prepare('select * from armazem');
		$query->execute();
		$dados = $query->fetchall();
		return $dados;
	}
	public function addArmazem($dados=array())
	{
		$l=$dados[0];
		$c=$dados[1];

		$query = $this->con->prepare("INSERT INTO armazem (TamC,TamL) VALUES (:a,:b)");
		$query->bindValue(":a",$c);
		$query->bindValue(":b",$l);
		$query->execute();
		return true;
	}
}
?>