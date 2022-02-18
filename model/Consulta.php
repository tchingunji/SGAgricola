<?php
require_once 'conexao.php';

class Consulta
{
	private $con;

	public function __construct()
	{
		$this->con = conexao::getConexao();
	}

	public function BuscarCamiao()
	{
		$status='1';
		$prov='Mutunza';
		$dados = array();
		$query = $this->con->prepare('select * from camiestado WHERE status=:st AND 
			ProvOrigem =:prov');
		$query->bindValue(':st',$status);
		$query->bindValue(':prov',$prov);
		$query->execute();
		$dados = $query->fetchall();
		return $dados;
	}
	 
	 public function linhaB()
	{
		$status='1';
		$prov='Mutunza';
		$dados = array();
		$query = $this->con->prepare('SELECT * FROM camiestado ORDER BY status,registro desc');
		$query->execute();
		$dados = $query->fetchall();
		return $dados;
	}
	 public function linhaD()
	{
		$status='1';
		$prov='Mutunza';
		$dados = array();
		$query = $this->con->prepare('SELECT * from camiprivado where status=1 ORDER BY capacidade*2');
		$query->execute();
		$dados = $query->fetchall();
		return $dados;
	}
}
?>

