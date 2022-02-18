<?php

/**
 * 
 */
class ArmazemController extends Controller
{
	//chamar o model, view e fazer a junção dos dois
	public function index()
	{						
		$this->carregarTemplate('armazem');
	}

	public function adcionarArmazem()
	{
		$this->carregarTemplate('adcionarArmazem');
	}
	public function Eliminar()
	{
		$this->carregarTemplate('eliminarArmazem');
	}
	public function consultarArmazem()
	{
		$a = new Armazem();
		$dados = $a->BuscarArmazem();		
		$this->carregarTemplate('consultarArmazem',$dados);
	}
	public static function addArmazem($dados=array())
	{		
		$arm=new Armazem();
		$estado = $arm->addArmazem($dados); 		
		echo "<script>alert('Salvo com sucesso');</script>";
		 
	}
}
?>