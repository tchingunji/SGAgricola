<?php

require 'consultarArmazem.php';
?>

<fieldset class="col s12">
	<legend>Camião Do Estado</legend>

	<form class="form" method="post" action="#">    
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="text" name="prov" placeholder="Provincia de origem">
    </div>
 	<div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="numReboque" placeholder="Nº de reboques">
    </div>
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="capacidade" placeholder="Capacidade de carga">
    </div>
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="date" name="data" placeholder="Data de Registro">
    </div>
     
     <div class="input-field col s6">
         <i class="fa fa-question-circle prefix"></i>
        <input type="number" name="carDesc" placeholder="Carga / Descarga">
     </div>

	<div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="ano" placeholder="Ano de Fabricação">
    </div>
	<div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="qtdTrabalho" placeholder="Quantidade de trabalhadores">
    </div>
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="tam" placeholder="Tamanho do camião">
    </div>
    <div class="input-field col s12">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="codArz" placeholder="Introduz o codigo do armazem que o caminhão pertence">
    </div>

    <center><input type="submit" class="btn green darken-4" value="Salvar">
    <input type="reset" class="btn  red darken-4"  value="Limpar"></center><p></p>
</form>
</fieldset>

<fieldset class="col s12">
	<legend>Camião Do Privado</legend>

	<form class="form" method="post" action="#">    
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="text" name="prov2" placeholder="Provincia de origem">
    </div>
 	<div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="text" name="nomePro2" placeholder="Nome do Proprietario">
    </div>
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="capacidade2" placeholder="Capacidade de carga">
    </div>
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="date" name="data2" placeholder="Data de Registro">
    </div>
     
     <div class="input-field col s6">
         <i class="fa fa-question-circle prefix"></i>
        <input type="number" name="carDesc2" placeholder="Carga / Descarga">
     </div>

	<div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="ano2" placeholder="Ano de Fabricação">
    </div>
	<div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="qtdTrabalho2" placeholder="Quantidade de trabalhadores">
    </div>
    <div class="input-field col s6">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="tam2" placeholder="Tamanho do camião">
    </div>

<div class="input-field col s12">
    	<i class="fa fa-globe prefix"></i>
    	<input type="number" name="codArz2" placeholder="Introduz o codigo do armazem que o caminhão pertence">
    </div>
    <center><input type="submit" class="btn green darken-4" value="Salvar">
    <input type="reset" class="btn  red darken-4"  value="Limpar"></center><p></p>
</form>
</fieldset>


<?php
	
	if(isset($_POST['nomePro2']))
	{
		//privado
		$prov=$_POST['prov2'];
		$dono=$_POST['nomePro2'];
		$capa=$_POST['capacidade2'];
		$data=$_POST['data2'];
		$cardes=$_POST['carDesc2'];
		$ano=$_POST['ano2'];
		$qtdT=$_POST['qtdTrabalho2'];
		$tam=$_POST['tam2'];
		$cod=$_POST['codArz2'];
		$dados=array($prov,$dono,$capa,$data,$cardes,$ano,$qtdT,$tam,$cod);
		$this->addCamiaoPrivado($dados);
	}
	else if(isset($_POST['prov']))
	{
		//Estado
		$prov=$_POST['prov'];
		$numR=$_POST['numReboque'];
		$capa=$_POST['capacidade'];
		$data=$_POST['data'];
		$cardes=$_POST['carDesc'];
		$ano=$_POST['ano'];
		$qtdT=$_POST['qtdTrabalho'];
		$tam=$_POST['tam'];
		$cod=$_POST['codArz'];
		$dados=array($prov,$numR,$capa,$data,$cardes,$ano,$qtdT,$tam,$cod);
		$this->addCamiaoEstado($dados);
	}
?>