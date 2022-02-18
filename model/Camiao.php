<?php
require_once 'conexao.php';

class Camiao
{
	private $con;

	public function __construct()
	{
		$this->con = conexao::getConexao();
	}

	public function BuscarArmazem()
	{
		$dados = array();
		$query = $this->con->prepare('select * from camiEstado');
		$query->execute();
		$dados = $query->fetchall();
		return $dados;
	}
	public function addCamiaoEstado($dados=array())
	{

		$query = $this->con->prepare("
	INSERT INTO camiEstado (armazem_idArmazem,capacidade,numReboque,provOrigem,qtdTrabalho,registro,status,tam,anoFabr) 
	VALUES (:idArmazem,:capa,:numReb,:provOr,:qtdTr,:regis,:status,:tam,:anoF)");		
		$query->bindValue(":idArmazem",$dados[8]);
		$query->bindValue(":capa",$dados[2]);
		$query->bindValue(":numReb",$dados[1]);
		$query->bindValue(":provOr",$dados[0]);
		$query->bindValue(":qtdTr",$dados[6]);
		$query->bindValue(":regis",$dados[3]);
		$query->bindValue(":status",$dados[4]);
		$query->bindValue(":tam",$dados[7]);
		$query->bindValue(":anoF",$dados[5]);
		$query->execute();
		return true;
	}

	public function addCamiaoPrivado($dados=array())
	{
		$query = $this->con->prepare("
	INSERT INTO camiprivado (armazem_idArmazem,capacidade,proprietario,provOrigem,qtdTrabalho,registro,status,tam,anoFabr) 
	VALUES (:idArmazem,:capa,:numReb,:provOr,:qtdTr,:regis,:status,:tam,:anoF)");		
		$query->bindValue(":idArmazem",$dados[8]);
		$query->bindValue(":capa",$dados[2]);
		$query->bindValue(":numReb",$dados[1]);
		$query->bindValue(":provOr",$dados[0]);
		$query->bindValue(":qtdTr",$dados[6]);
		$query->bindValue(":regis",$dados[3]);
		$query->bindValue(":status",$dados[4]);
		$query->bindValue(":tam",$dados[7]);
		$query->bindValue(":anoF",$dados[5]);
		$query->execute();
		return true;
	}
}
?>