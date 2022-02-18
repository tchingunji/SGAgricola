<?php

/**
 * 
 */
class consultaController extends Controller
{
	//chamar o model, view e fazer a junção dos dois
	public function index()
	{		
		
		$this->carregarTemplate('consulta');
	}

	public function consultaA()
	{
		$this->carregarTemplate('consultaA');
	}
	public function consultaB()
	{
		$a=new Consulta();
		$dados = $a->linhaB();
		$this->carregarTemplate('consultaB',$dados);
	}
	public function consultaD()
	{
		$a=new Consulta();
		$dados = $a->linhaD();
		$this->carregarTemplate('consultaD',$dados);
	}
	public function consultaC()
	{
		$a=new Consulta();
		$dados = $a->BuscarCamiao(); 
		$this->carregarTemplate('consultaC',$dados);
	}
}
?>