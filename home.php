<?php
ob_start();
session_start();
if(!isset($_SESSION['nomeS']))
{
echo("<script>
alert('Usuario nao Logado!!');
window.location.href='index.php';
</script>");

}
include("config/conn.php");

?>
<!Doctype html>
<html>
<head><title>Quem Sabe</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-theme.css"/­>
<link rel="stylesheet" href="assets/meu_cs/layoute.css"/>
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/logar.js"></script>

</head>
<body>
<div class="container">
<div class="row" id="p-top">
<div class="col-md-6 col-lg-6 col-xs-12"><i class="glyphicon glyphicon-list"></i> versao: 1.0</div>
<div class="col-md-6 col-lg-6 col-xs-12 text-right">powered by: TecnoTUFUS</div>
</div>
<div id="top" class="row">
<div class="col-md-8 col-lg-8 col-xs-12">
<h1>Quem Sabe?</h1>
</div>
<div class="col-md-4 col-lg-4 col-xs-12" id="ret">
<ul style="list-style: none;">
<li>
<a class="btn btn-success" title="Sobre o jogo" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-question-sign"> </i> Acerca</a>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-question-sign"></i> Acerca</h4>
</div>
<div class="modal-body">
<b>Nicolau Ngala Pungue</b><br/>
2015 <br/>
copyright &copy <?php echo date("Y");?>
</div>
<div class="modal-footer"­>

</div>
</div>
</div>
</div>
<a href="ver_questoes.php" class="btn btn-info" title="Visualizar"><i class="glyphicon glyphicon-eye-open"> </i> Visualizar</a>
<a href="logout.php" class="btn btn-danger" title="Fechar sessao"><i class="glyphicon glyphicon-off"> </i> Terminar</a>


</li>
</ul>
</div>
</div>
<div id="sub-top" class="row">

</div>
<div id="conteudo" class="row">
<div class="col-md-12 col-lg-12 col-xs-12">

<h1 style="color: #333;">Inserir perguntas e respostas</h1><br />
<div class="d">
<?php
if(isset($_POST['bt14']))
{

$estado="naovista";
$estadov="vista";

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

$sql3="update fases_grupo set quantidade=:valor, valores=:va where id_fase!=:id";
$d3=$con->prepare($sql3);
$d3->bindValue(":valor",$valor,PDO::PARAM_STR);
$d3->bindValue(":va",$valor,PDO::PARAM_STR);
$d3->bindValue(":id",$id,PDO::PARAM_STR);
$d3->execute();
if(!$d3)
{
echo"<div class='alert alert-danger'>Erro no sistema entre em contacto com o operador</div>";
}
else
{
echo"<div class='alert alert-success'>Jogo Restaurado com sucesso!</div>";
}

}


elseif(isset($_POST['bt15']))
{
$valor=0;
$id=0;

$sql2="update valores set valor=:valor where id_valor!=:id";
$d2=$con->prepare($sql2);
$d2->bindValue(":valor",$valor,PDO::PARAM_STR);
$d2->bindValue(":id",$id,PDO::PARAM_STR);
$d2->execute();

$sql3="update fases_grupo set quantidade=:valor, valores=:vb where id_fase!=:id";
$d3=$con->prepare($sql3);
$d3->bindValue(":valor",$valor,PDO::PARAM_STR);
$d3->bindValue(":vb",$valor,PDO::PARAM_STR);
$d3->bindValue(":id",$id,PDO::PARAM_STR);
$d3->execute();
if(!$d3)
{
echo"<div class='alert alert-danger'>Erro no sistema entre em contacto com o operador</div>";
}
else
{
$ty="delete from respostas where id_resposta!=:id";
$d6=$con->prepare($ty);
$d6->bindValue(":id",$id,PDO::PARAM_STR);
$d6->execute();

$rt="delete from perguntas where id_pergunta!=:id";
$d5=$con->prepare($rt);
$d5->bindValue(":id",$id,PDO::PARAM_STR);
$d5->execute();
if(!$d5)
{
echo"<div class='alert alert-danger'>Erro no sistema entre em contacto com o operador</div>";
}
else
{
echo"<div class='alert alert-warning'>Siste­ma Restaurado com sucesso!</div>";
}

}


}

if(isset($_POST['bt12']))
{

$pergunta=$_POST['txt_pergunta'];
$resposta1=$_POST['txt_r1'];
$resposta2=$_POST['txt_r2'];
$resposta3=$_POST['txt_r3'];
$resposta4=$_POST['txt_r4'];
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$disciplina=$_POST['txt_disciplina'];

if(($pergunta=="")||($resposta1=="")||($resposta2=="")||($resposta3=="")||($resposta4=="")||($r1=="0")||($r2=="0")||($r3=="0")||($r4=="0")||($disciplina=="0"))
{
   echo"<div class='alert alert-danger'>Prencher todos os campos!</div>"; 
}
else
{
  if((($r1=="certa")&&($r2=="certa")&&($r4=="certa"))||(($r1=="certa")&&($r3=="certa")&&($r4=="certa"))||(($r2=="certa")&&($r3=="certa")&&($r4=="certa"))||(($r1=="certa")&&($r2=="certa")&&($r3=="certa"))||(($r1=="certa")&&($r2=="certa")&&($r3=="certa")&&($r4=="certa")))
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
    $resulta->bindValue(":estado",$r1,PDO::PARAM_STR);
    $resulta->execute();
    
    $coma="insert into respostas(id_pergunta,resposta,estado)values(:id_pergunta,:resposta,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":id_pergunta",$id,PDO::PARAM_STR);
    $resulta->bindValue(":resposta",$resposta2,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$r2,PDO::PARAM_STR);
    $resulta->execute();
    
    $coma="insert into respostas(id_pergunta,resposta,estado)values(:id_pergunta,:resposta,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":id_pergunta",$id,PDO::PARAM_STR);
    $resulta->bindValue(":resposta",$resposta3,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$r3,PDO::PARAM_STR);
    $resulta->execute();
	
	 $coma="insert into respostas(id_pergunta,resposta,estado)values(:id_pergunta,:resposta,:estado)";
    $resulta=$con->prepare($coma);
    $resulta->bindValue(":id_pergunta",$id,PDO::PARAM_STR);
    $resulta->bindValue(":resposta",$resposta4,PDO::PARAM_STR);
    $resulta->bindValue(":estado",$r4,PDO::PARAM_STR);
    $resulta->execute();
    
  echo"<div class='alert alert-success'>Feito com sucesso</div>"; 
  
   } 
    
     
    }
    
    
    
     
}
}
?>

</div>
<form name="f1" role="form" method="POST" action="home.php">
<div class="form-group">
<input type="text" name="txt_pergunta" id="txt_pergunta" class="form-control"­ placeholder="Introduza a Questao"/>
</div>
<div class="form-group"></div>
<div class="form-inline">
<select name="txt_disciplina" id="txt_disciplina" class="form-control">
<option value="0">Disciplina</option>
<option>Quimica</option>
<option>Biologia</option>
<option>Geologia</option>
<option>Fisica</option>
<option>Informatica</option>
<option>Matematica</option>
<option>Geometria</option>
</select>
</div>
<div class="form-group"></div>
<div class="form-inline">
<input type="text" name="txt_r1" id="txt_r1" class="form-control"­ placeholder="Introduza a resposta 1"/>
<select name="r1" class="form-control" id="r1">
<option value="0">Opção</option>
<option value="certa">Verdadeira</option>
<option value="errada">Falsa</option>
</select>
</div>
<div class="form-group"></div>
<div class="form-inline">
<input type="text" name="txt_r2" id="txt_r2" class="form-control"­ placeholder="Introduza a resposta 2"/>
<select name="r2" class="form-control" id="r2">
<option value="0">Opção</option>
<option value="certa">Verdadeira</option>
<option value="errada">Falsa</option>
</select>
</div>
<div class="form-group"></div>
<div class="form-inline">
<input type="text" name="txt_r3" id="txt_r3" class="form-control" placeholder="Introduza a resposta 3"/>
<select name="r3" class="form-control" id="r3">
<option value="0">Opção</option>
<option value="certa">Verdadeira</option>
<option value="errada">Falsa</option>
</select>
</div>
<div class="form-group"></div>
<div class="form-inline">
<input type="text" name="txt_r4" id="txt_r4" class="form-control" placeholder="Introduza a resposta 4"/>
<select name="r4" class="form-control" id="r4">
<option value="0">Opção</option>
<option value="certa">Verdadeira</option>
<option value="errada">Falsa</option>
</select>
</div>

<div class="form-group"></div>
<button type="submit" name="bt12" id="bt12" class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
<button type="reset" name="bt13" id="bt13" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Cancelar</button>
<button type="submit" name="bt14" id="bt14" class="btn btn-success"><i class="glyphicon glyphicon-update"></i> Restaurar Jogo</button>
<button type="submit" name="bt15" id="bt15" class="btn btn-warning"><i class="glyphicon glyphicon-update"></i> Restaurar Sistema</button>
</form>

</div>
</div>

<div id="rodape" class="row">
<div class="col-md-12 col-lg-12 col-xs-12">
<div class="footer">
copyright © <?php echo date("Y");?>
</div>
</div>
</div>
</div>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>