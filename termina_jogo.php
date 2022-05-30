<?php
ob_start();
session_start();
include("config/conn.php");

$estado="naovista";
$i="0";
$coma="update perguntas set estado=:estado where id_pergunta!=:id";
$re=$con->prepare($coma);
$re->bindValue(":estado",$estado,PDO::PARAM_STR);
$re->bindValue(":id",$i,PDO::PARAM_STR);
$re->execute();
echo"<script>
document.location.href='index.php';
</script>";
?>