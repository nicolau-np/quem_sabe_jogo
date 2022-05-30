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
<a href="home.php" class="btn btn-primary" title="Visualizar"><i class="glyphicon glyphicon-home"> </i> Home</a>
<a href="logout.php" class="btn btn-danger" title="Fechar sessao"><i class="glyphicon glyphicon-off"> </i> Terminar</a>


</li>
</ul>
</div>
</div>
<div id="sub-top" class="row">

</div>
<div id="conteudo" class="row">
<div class="col-md-12 col-lg-12 col-xs-12">

<h1 style="color: #333;">Buscar Perguntas</h1><br />

<form name="f1" role="form" method="POST" action="ver_questoes.php">
<?php 
if(addslashes(htmlspecialchars(isset($_POST['bt12'])))):
$disciplina = addslashes(htmlspecialchars($_POST['txt_disciplina']));

echo "
<script>
window.location.href='relatorio/questoes.php?disciplina=$disciplina';
</script>
";
endif;
?>
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

<button type="submit" name="bt12" id="bt12" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
</div>


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