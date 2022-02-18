<?php

/**
 * 
 */
class camiaoController extends Controller
{
	//chamar o model, view e fazer a junção dos dois
	public function index()
	{	
		$this->carregarTemplate('camiao');
	}
	public function adcionarCamiao()
	{	
        $a = new Armazem();
		$dados = $a->BuscarArmazem();
		$this->carregarTemplate('adcionarCamiao',$dados);
	}
	public function consultarCamiao()
	{	
		$this->carregarTemplate('consultarCamiao');
	}
	public static function addCamiaoEstado($dados=array())
	{		
		$arm=new Camiao();
		$estado = $arm->addCamiaoEstado($dados); 		
		echo "<script>alert('Salvo com sucesso');</script>";
		 
	}
	public static function addCamiaoPrivado($dados=array())
	{		
		$arm=new Camiao();
		$estado = $arm->addCamiaoPrivado($dados); 		
		echo "<script>alert('Salvo com sucesso');</script>";
		 
	}
}
?>