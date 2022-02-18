<?php
class Controller
{
	public $dados;

	public function __construct()
	{
		$this->dados = array();
	}
	public function carregarTemplate($nomeView, $dadosModel=array())
	{
		$this->dados = $dadosModel;
		require 'view/template.php';
	}
	public function carregarViewNoTemplates($nomeView, $dadosModel = array())
	{
		extract($dadosModel);
		require 'view/'.$nomeView.'.php';
	}
}
?>