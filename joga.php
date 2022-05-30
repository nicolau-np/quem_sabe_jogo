<?php
ob_start();
session_start();
if(isset($_SESSION['nomeS']))
{
echo"<script>
window.location.href='home.php';
</script>";
}
include("config/conn.php");

if(isset($_GET['dis']))
{
$dis=$_GET['dis'];
$_SESSION['dis']=$_GET['dis'] ;
$grupo=$_GET['grupo'];
$_SESSION['grupo']=$_GET['grupo'] ;
}
else
{
$dis=$_SESSION['dis'];
$grupo=$_SESSION['grupo'];
}
$a=0;

$qli="select *from fases_grupo where grupo=:grupo and disciplina=:dis";
$rd=$con->prepare($qli);
$rd->bindValue(":grupo",$grupo,PDO::PARAM_STR);
$rd->bindValue(":dis",$dis,PDO::PARAM_STR);
$rd->execute();
$vert=$rd->fetch(PDO::FETCH_OBJ);
?>
<!Doctype html>
<html>
<head><title>Quem Sabe</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-theme.css"/>
<link rel="stylesheet" href="assets/meu_cs/layoute.css"/>
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.js"></script>
<style>
    .resposta{
        font-size:22px;  text-align:left;
        color: #fff;
        font-family: arial;
       padding-bottom: 10px;
       font-weight: bold;
        
    }
  
  .div_resp{
      background-color: #265a88;
      padding: 6px;
      cursor: pointer;
      border-radius: 4px;
  }

  .div_resp:hover{
      background-color: #D35310;
      padding: 6px;
      cursor: pointer;
  }


    .id_resposta{
        cursor: pointer;
    }
    .rep1{
color: #dbde17;
    }
    .countdown{
        color: #e48c0f;
    }
</style>
<script type="text/javascript">
$(document).ready(function(e){

var $quantidade = $("#quantidade").val();
var $disciplina = $("#disciplina").val();
var $total1 = $("#total1").val();

if($disciplina == "Matematica"){
	var count = 60;
}else{
	var count = 30;
}

if(($quantidade == 3) || ($total1 == 0)){

}
else{
//contador de tempo
countdown = setInterval(function(){
    $(".countdown").html(count);
    if(count == 0){
window.location = "fim_tempo.php";
    }
    count --;
}, 1000);
    //!fim contador
}

$(".id_resposta").change(function(){
    var $id_resposta = $("input[name='id_resposta']:checked").val();
    $.ajax({
    type: "POST",
    url: "ver_q/verificar.php",
    data: {id_resposta: $id_resposta},
    success: function(resposta){
        if(resposta == 1){
          
            window.location.href="resp_certa.php";
        }
        else if(resposta == 0){
            
            window.location.href="resp_errada.php";
        }

    }

});
return false;
});

});
</script>
</head>
<body>
 
<div class="container">
<div class="row" id="p-top">
<div class="col-md-6 col-lg-6 col-xs-12"><i class="glyphicon glyphicon-list"></i> versao: 1.0</div>
<div class="col-md-6 col-lg-6 col-xs-12 text-right">powered by: TecnoTUFUS <span><a href="index.php" class="btn btn-danger" title="Terminar Jogo"><i class="glyphicon glyphicon-off"> </i> </a></span></div>
</div>
<div id="top" class="row">

</div>
<div id="sub-top" class="row">

</div>
<div id="conteudo" class="row" >
<div class="col-md-12 col-lg-12 col-xs-12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <ul class="nav">
            <form id="form_resp" name="form_resp" method="POST">
			
<h1><?php
if($dis=="Quimica")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-plane'></i> ".$dis." | Grupo: ".$grupo." | Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
elseif($dis=="Biologia")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-calendar'></i> ".$dis." | Grupo: ".$grupo." | Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
elseif($dis=="Geologia")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-text-width'></i> ".$dis." | Grupo: ".$grupo." | Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
elseif($dis=="Matematica")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-th-list'></i> Matemática | Grupo: ".$grupo." | Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
elseif($dis=="Informatica")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-picture'></i> Informática | Grupo: ".$grupo." | Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
elseif($dis=="Geometria")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-pencil'></i> ".$dis." | Grupo: ".$grupo." | Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
else
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-globe'></i> Física Grupo: ".$grupo."   Pontuação: ".$vert->valores." ptos. | <span class='countdown'></span></span>";
}
?>


</h1>
<br />

<?php
$estadoT="naovista";
$sqlT="select *from perguntas where estado=:estado and disciplina=:dis";
try{
$resultT=$con->prepare($sqlT);
$resultT->bindValue(":estado",$estadoT,PDO::PARAM_STR);
$resultT->bindValue(":dis",$dis,PDO::PARAM_STR);
$resultT->execute();
}
catch(PDOException $e)
{
echo $e;
}
$totalQuestoes=$resultT->rowCount();


$io="select *from fases_grupo where grupo=:grupo and disciplina=:disciplina";
$b=$con->prepare($io);
$b->bindValue(":grupo",$grupo,PDO::PARAM_STR);
$b->bindValue(":disciplina",$dis,PDO::PARAM_STR);
$b->execute();
$resd=$b->fetch(PDO::FETCH_OBJ);
$quantidade=$resd->quantidade;
if($quantidade>=3)
{
echo"<div class='alert alert-warning'>O grupo completou as suas 3 perguntas</div>";
}
else
{
$estado="naovista";
$sql="select *from perguntas where estado=:estado and disciplina=:dis ORDER BY rand() limit 1 ";
try{
$result=$con->prepare($sql);
$result->bindValue(":estado",$estado,PDO::PARAM_STR);
$result->bindValue(":dis",$dis,PDO::PARAM_STR);
$result->execute();
}
catch(PDOException $e)
{
echo $e;
}
if($totalQuestoes>0)
{
while($ver=$result->fetch(PDO::FETCH_OBJ))
{
echo " <span class='' style='font-family:Century Gothic;font-size:29px; font-weight:bold; background-color:#333; color:#f5f5f5; padding-left:2px; padding-top:2px; padding-bottom:2px;'> ".$ver->pergunta." </span><br/>";
$id=$ver->id_pergunta;
$_SESSION["id_pergunta"]=$id;
$_SESSION["disciplina"]=$dis;
}

?>




<?php
echo "<br/>";
$sql1="select *from respostas where id_pergunta=:id";

$result1=$con->prepare($sql1);
$result1->bindValue(":id",$id,PDO::PARAM_STR);
$result1->execute();
while($ver2=$result1->fetch(PDO::FETCH_OBJ))
{
$a=$a+1;
if($a==1):
$b="a)";
elseif($a==2):
$b="b)";
elseif($a==3):
$b="c)";
elseif($a==4):
$b="d)";
endif;
echo "

<div class='div_resp'><input type='radio' name='id_resposta' class='id_resposta' value= $ver2->id_resposta required class='form-control'/> <span class='resposta'><span class='rep1'>&nbsp;&nbsp;&nbsp$b&nbsp;&nbsp;&nbsp</span> $ver2->resposta</span></div><br/>

";

}

}
else
{
echo "<div class='alert alert-info'> <b>Nao existe mais perguntas</b> </div>";
}
}


?>

<input type="hidden" name="quantidade" value="<?php echo $quantidade;?>" id="quantidade"/>
<input type="hidden" name="disciplina" value="<?php echo $dis;?>" id="disciplina"/>
<input type="hidden" name="total1" value="<?php echo $totalQuestoes;?>" id="total1"/>
</form>
            </ul>
        </div>
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





<script type="text/javascript" src="assets/js/jquery-1.5.2.js"></script>

</body>
</html>
