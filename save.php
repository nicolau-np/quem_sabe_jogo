<?php
include("config/conn.php");
$pergunta=$_GET['pergunta'];
$resposta1=$_GET['txt_r1'];
$resposta2=$_GET['txt_r2'];
$resposta3=$_GET['txt_r3'];
$op_r1=$_GET['op_r1'];
$op_r2=$_GET['op_r2'];
$op_r3=$_GET['op_r3'];
$disciplina=$_GET['dis'];

if(($pergunta=="")||($resposta1=="")||($resposta2=="")||($resposta3=="")||($op_r1=="0")||($op_r2=="0")||($op_r3=="0")||($disciplina=="0"))
{
   echo"<div class='alert alert-danger'>Prencher todos os campos!</div>"; 
}
else
{
  if((($op_r1=="certa")&&($op_r2=="certa"))||(($op_r1=="certa")&&($op_r3=="certa"))||(($op_r2=="certa")&&($op_r3=="certa"))||(($op_r1=="certa")&&($op_r2=="certa")&&($op_r3=="certa")))
  {
    echo"<div class='alert alert-danger'>Nao pode existir duas ou mais respostas verdadeiras</div>";
  }  
   else
   {
    $com="select *from perguntas where pergunta=:pergunta and disciplina=:disciplina";
    $re=$con->prepare($com);
    $re->bindValue(":pergunta",$pergunta,PDO::PARAM_STR);
    $re->bindValue(":disciplina",$disciplina,PDO::PARAM_STR);
    $re->execute();
    $contar=$re->rowCount();
    if($contar>0)
    {
      echo"<div class='alert alert-danger'>Questão já cadastrada!</div>";  
    }
    else
    {
        $estado1="naovista";
      $coma="insert into perguntas(pergunta,disciplina,estado)values(:pergunta,:disciplina,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":pergunta",$pergunta,PDO::PARAM_STR);
    $resulta->bindValue(":disciplina",$disciplina,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$estado1,PDO::PARAM_STR);
    $resulta->execute();
    
    $com="select *from perguntas where pergunta=:pergunta and disciplina=:disciplina";
    $re=$con->prepare($com);
    $re->bindValue(":pergunta",$pergunta,PDO::PARAM_STR);
    $re->bindValue(":disciplina",$disciplina,PDO::PARAM_STR);
    $re->execute();
    $ver=$re->fetch(PDO::FETCH_OBJ);
    $id=$ver->id_pergunta;
    
    $coma="insert into respostas(id_pergunta,resposta,estado)values(:id_pergunta,:resposta,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":id_pergunta",$id,PDO::PARAM_STR);
    $resulta->bindValue(":resposta",$resposta1,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$op_r1,PDO::PARAM_STR);
    $resulta->execute();
    
    $coma="insert into respostas(id_pergunta,resposta,estado)values(:id_pergunta,:resposta,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":id_pergunta",$id,PDO::PARAM_STR);
    $resulta->bindValue(":resposta",$resposta2,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$op_r2,PDO::PARAM_STR);
    $resulta->execute();
    
    $coma="insert into respostas(id_pergunta,resposta,estado)values(:id_pergunta,:resposta,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":id_pergunta",$id,PDO::PARAM_STR);
    $resulta->bindValue(":resposta",$resposta3,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$op_r3,PDO::PARAM_STR);
    $resulta->execute();
    
  echo"<div class='alert alert-success'>Feito com sucesso</div>"; 
  echo"<script>
  $(document).ready(function(){
    $('#txt_pergunta').val('');
    $('#txt_r1').val('');
  $('#txt_r2').val('');
    $('#txt_r3').val('');
  $('#r1').value('Opção');
   $('#r2').value('Opção');
  $('#r3').value('Opção');
  $('#txt_disciplina').value('Disciplina');
  });
  
  </script>"; 
   } 
    
     
    }
    
    
    
     
}


?>