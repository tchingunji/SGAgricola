<center>
<img src="../../agricola/img/armazem.png" class="img">
</center>
<form class="col s12" action="#" method="post">
	<div class="input-field col s6">
    	<i class="fa fa-star-o prefix"></i><input type="text" id="Largura"placeholder="Largura" class="rockweel" name="largura">
	</div>
	<div class="input-field col s6">

    <i class="fa fa-star-o prefix"></i><input type="text" placeholder="Comprimento" id="Comprimento" class="rockweel" name="comprimento">    	
	</div>
	<div><center>				
<input type="submit" value="Salvar" class="btn blue darken-4">    
<input type="reset" value="limpar" class="btn blue darken-4">
	</center></div>
</form>
<?php
if(isset($_POST['largura']) && isset($_POST['comprimento']))
{
	$dados=array($_POST['comprimento'],$_POST['largura']);
	$this->addArmazem($dados);
}
?>