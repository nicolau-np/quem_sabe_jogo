<?php 
include("config/conn.php");
$acao=$_GET['acao'];
$estado="naovista";
$estadov="vista";
if($acao=='restaurarjogo')
{
	$sql="update perguntas set estado=:estado where estado=:estadov";
	$d=$con->prepare($sql);
	$d->bindValue(":estado",$estado,PDO::PARAM_STR);
	$d->bindValue(":estadov",$estadov,PDO::PARAM_STR);
	$d->execute();
	$id=0;
	$valor=0;
	$sql2="update valores set valor=:valor where id_valor!=:id";
	$d2=$con->prepare($sql2);
	$d2->bindValue(":valor",$valor,PDO::PARAM_STR);
	$d2->bindValue(":id",$id,PDO::PARAM_STR);
	$d2->execute();
	
	$sql3="update fases_grupo set quantidade=:valor where id_fase!=:id";
	$d3=$con->prepare($sql3);
	$d3->bindValue(":valor",$valor,PDO::PARAM_STR);
	$d3->bindValue(":id",$id,PDO::PARAM_STR);
	$d3->execute();
	echo"<div class='alert alert-success'>Jogo Restaurado com sucesso!</div>";
}


?>