<?php 
$resposta = null;

session_start();
include("../config/conn.php");

$grupo=$_SESSION['grupo'];
$id_pergunta = $_SESSION['id_pergunta'];
$displina=$_SESSION['disciplina'];
$estado="vista";
$id_resposta = addslashes(htmlspecialchars($_POST['id_resposta']));

$coma="update perguntas set estado=:estado where id_pergunta=:id_pergunta and disciplina=:disciplina";
$re=$con->prepare($coma);
$re->bindParam(":estado",$estado,PDO::PARAM_STR);
$re->bindParam(":id_pergunta",$id_pergunta,PDO::PARAM_STR);
$re->bindParam(":disciplina",$displina,PDO::PARAM_STR);
$re->execute();

$va=1;
$vbh="update fases_grupo set quantidade=quantidade + :valor where grupo=:grupo and disciplina=:disciplina";
$rt1=$con->prepare($vbh);
$rt1->bindParam(":valor",$va,PDO::PARAM_STR);
$rt1->bindParam(":grupo",$grupo,PDO::PARAM_STR);
$rt1->bindParam(":disciplina",$displina,PDO::PARAM_STR);
$rt1->execute();

$coma2="select *from respostas where id_resposta=:id_resposta and id_pergunta=:id_pergunta";
$re2=$con->prepare($coma2);
$re2->bindParam(":id_resposta",$id_resposta,PDO::PARAM_STR);
$re2->bindParam(":id_pergunta",$id_pergunta,PDO::PARAM_STR);
$re2->execute();
$mostra=$re2->fetch(PDO::FETCH_OBJ);
if($mostra->estado=="certa")
{

$c="update valores set valor=valor + :valor where grupo=:grupo";
$valor=10;
$rt=$con->prepare($c);
$rt->bindParam(":valor",$valor,PDO::PARAM_STR);
$rt->bindParam(":grupo",$grupo,PDO::PARAM_STR);
$rt->execute();
$docx=$_SESSION['disciplina'];

$vcx="update fases_grupo set valores=valores + :v where grupo=:grupo and disciplina=:disciplina";
$rt1=$con->prepare($vcx);
$rt1->bindParam(":v",$valor,PDO::PARAM_STR);
$rt1->bindParam(":grupo",$grupo,PDO::PARAM_STR);
$rt1->bindParam(":disciplina",$docx,PDO::PARAM_STR);
$rt1->execute();



$resposta = 1;
}

else
{
$resposta = 0;
}



echo $resposta;
?>