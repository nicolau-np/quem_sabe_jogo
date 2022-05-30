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
<link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    
<link rel="stylesheet" href="assets/css/bootstrap-theme.css"/­>
<link rel="stylesheet" href="assets/meu_cs/layoute.css"/>
<script src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/messages_pt_PT.js"></script>
<script type='text/javascript' src='assets/js/jquery.form.js'></script>
<style>#respostas{width: 90%;}
    #respostas{font-size:30px; font-weight:bold; text-align:left;}
</style>
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


<div id="panel" class="panel">

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Credit Card</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  
                                  <form action="" method="post" novalidate="novalidate">
                                      <div class="form-group text-center">
                                          <ul class="list-inline">
										 
<h1><?php
if($dis=="Quimica")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-plane'></i> ".$dis." | Grupo: ".$grupo." | Pontua��o: ".$vert->valores." ptos.</span>";
}
elseif($dis=="Biologia")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-calendar'></i> ".$dis." | Grupo: ".$grupo." | Pontua��o: ".$vert->valores." ptos.</span>";
}
elseif($dis=="Geologia")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-text-width'></i> ".$dis." | Grupo: ".$grupo." | Pontua��o: ".$vert->valores." ptos.</span>";
}
elseif($dis=="Matematica")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-th-list'></i> Matem�tica | Grupo: ".$grupo." | Pontua��o: ".$vert->valores." ptos.</span>";
}
elseif($dis=="Informatica")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-picture'></i> Inform�tica | Grupo: ".$grupo." | Pontua��o: ".$vert->valores." ptos.</span>";
}
elseif($dis=="Geometria")
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-pencil'></i> ".$dis." | Grupo: ".$grupo." | Pontua��o: ".$vert->valores." ptos.</span>";
}
else
{
echo "<span class='' style='color:#333'><i class='glyphicon glyphicon-globe'></i> F�sica Grupo: ".$grupo."   Pontua��o: ".$vert->valores." ptos.</span>";
}
?>


</h1>
<br />

<?php
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
$total=$result->rowCount();
if($total>0)
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
$b="a) ";
elseif($a==2):
$b="b) ";
elseif($a==3):
$b="c) ";
elseif($a==4):
$b="d) ";
endif;
echo "

<li ><a  href='ver_pergunta.php?id_resposta=$ver2->id_resposta'  style=''><span style='color:black;'>$b</span> $ver2->resposta</a></li> <br/><br/>
</form>
";

}


}
else
{
echo "<div class='alert alert-info'> <b>Nao existe mais perguntas</b> </div>";
}
}


?>
            
                                          </ul>
                                      </div>
                                      
                                     
                                      <div>
                                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span id="payment-button-amount">Pay $100.00</span>
                                              <span id="payment-button-sending" style="display:none;">Sending�</span>
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->



                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->





<div id="rodape" class="row">
<div class="col-md-12 col-lg-12 col-xs-12">
<div class="footer">
copyright © <?php echo date("Y");?>
</div>
</div>
</div>
</div>
</body>
</html>
