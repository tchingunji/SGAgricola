<?php

/**
 * 
 */
class usuarioController extends Controller
{
	//chamar o model, view e fazer a junção dos dois
	public function index()
	{	
		$this->carregarTemplate('usuario');
	}

	public function Logar()
	{
		$dados['nome']='Tching';
		$dados['idade']=22;
		$this->carregarTemplate('logar',$dados);
	}
}
?>