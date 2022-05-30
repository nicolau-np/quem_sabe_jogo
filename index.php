<?php 
ob_start();
session_start(); 
include("config/conn.php");
if(isset($_SESSION['nomeS']))
{
    echo"<script>
    window.location.href='home.php';
    </script>";
}
?>
<!Doctype html>
<html>
<head><title>Quem Sabe</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-theme.css"/>
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
<a  class="btn btn-primary" title="Fazer login" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-user"> </i> Admin</a>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Administrador</h4>
</div>
<div class="modal-body">
Faça o seu Login
<br/>
<br/>
<div class="exibe"></div>
<form role="form" name="form1" method="" action="">
<div class="form-group">
<input type="text" name="txt1" class="form-control" id="txt1" placeholder="Nome de usuario"/>
</div>
<div class="form-group">
<input type="password" name="txt2" class="form-control" id="txt2" placeholder="Senha"/>
</div>


</div>
<div class="modal-footer">
<button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Cancelar</button>
<button type="button" class="btn btn-primary" id="loga"><i class="glyphicon glyphicon-ok-sign"></i> Entrar</button>
</form>
</div>
</div>
</div>
</div>
                         


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
<div class="modal-footer">

</div>
</div>
</div>
</div>

<a  class="btn btn-info" title="Pontuação" data-toggle="modal" data-target="#myModal3"><i class="glyphicon glyphicon-filter"> </i> Pontuação</a>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-filter"></i> Pontuação</h4>
</div>
<div class="modal-body" style="font-size:27px; font-weight:bold; background-color:#f5f5f5">
<?php 
$vb="select *from valores";
$t=$con->prepare($vb);
$t->execute();
while($vc=$t->fetch(PDO::FETCH_OBJ))
{	
?>
Grupo <?php echo $vc->grupo.": <span style='color:blue;'>".$vc->valor." ptos.</span>"; ?><br/>

<?php }?>
</div>
<div class="modal-footer">

</div>
</div>
</div>
</div>



</li>
</ul>
</div>
</div>
<div id="sub-top" class="row">

</div>
<div id="conteudo" class="row">
<div class="col-md-12 col-lg-12 col-xs-12">

<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-cog"></i> <span id="ih">Disciplinas</span>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#geografia" data-toggle="tab"><i class="glyphicon glyphicon-plane"></i> Química</a>
                                </li>
                                <li><a href="#historia" data-toggle="tab"><i class="glyphicon glyphicon-calendar"></i> Biologia</a>
                                </li>
                                <li><a href="#portugues" data-toggle="tab"><i class="glyphicon glyphicon-text-width"></i> Geologia</a>
                                </li>
                                <li><a href="#cultura" data-toggle="tab"><i class="glyphicon glyphicon-globe"></i> Física</a>
                                </li>
								<li><a href="#matematica" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i> Matemática</a>
                                </li>
								<li><a href="#informatica" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Informática</a>
                                </li>
								<li><a href="#geometria" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Geometria</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="geografia">
                                    <h4 style="font-weight:bold; font-size:27px;">Química</h4>
                                    <br />
                                    <div class="media">
                                    
                                    <div class="media-body">
                                    
                                    </div>
                                    </div>
                                    
                                    
									<?php 
									$quantidade=3;
									$dis1="Quimica";
									$dis2="Biologia";
									$dis3="Geologia";
									$dis4="Fisica";
									$dis5="Matematica";
									$dis6="Informatica";
									$dis7="Geometria";
									$a="A";
									$b="B";
									$c="C";
									$d="D";
									$e="E";
									//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis1,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis1,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis1,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis1,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis1,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Quimica&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Quimica&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Quimica&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Quimica&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Quimica&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
                                <div class="tab-pane fade" id="historia">
                                    <h4 style="font-size:27px; font-weight:bold;">Biologia</h4>
                                    <br />
                                    <div class="media">
                                    
                                    <div class="media-body">
 
                                    </div>
                                    </div>
                                
                               <?php
							   								//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis2,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis2,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis2,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis2,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis2,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Biologia&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Biologia&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Biologia&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Biologia&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Biologia&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
                                <div class="tab-pane fade" id="portugues">
                                    <h4 style="font-size:27px; font-weight:bold;">Geologia</h4>
                                    <br />
                                    <div class="media">
                                    
                                    <div class="media-body">
                                    
                                    </div>
                                    </div>
                                 
								<?php 
																//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis3,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis3,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis3,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis3,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis3,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Geologia&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Geologia&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Geologia&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Geologia&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Geologia&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
                                <div class="tab-pane fade" id="cultura">
                                    <h4 style="font-size:27px; font-weight:bold;">Física</h4>
                                    <br />
                                    <div class="media">
                                  
                                    <div class="media-body">
                                   
                                    </div>
                                    </div>  
                                                       
                               <?php 
							   								//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis4,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis4,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis4,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis4,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis4,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Fisica&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Fisica&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Fisica&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Fisica&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Fisica&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
								
								
								     <div class="tab-pane fade" id="matematica">
                                    <h4 style="font-size:27px; font-weight:bold;">Matemática</h4>
                                    <br />
                                    <div class="media">
                                  
                                    <div class="media-body">
                                   
                                    </div>
                                    </div>  
                                                       
                               <?php 
							   								//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis5,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis5,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis5,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis5,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis5,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Matematica&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Matematica&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Matematica&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Matematica&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Matematica&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
								
								<div class="tab-pane fade" id="informatica">
                                    <h4 style="font-size:27px; font-weight:bold;">Informática</h4>
                                    <br />
                                    <div class="media">
                                  
                                    <div class="media-body">
                                   
                                    </div>
                                    </div>  
                                                       
                               <?php 
							   								//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis6,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis6,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis6,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis6,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis6,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Informatica&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Informatica&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Informatica&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Informatica&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Informatica&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
								
								
									<div class="tab-pane fade" id="geometria">
                                    <h4 style="font-size:27px; font-weight:bold;">Geometria</h4>
                                    <br />
                                    <div class="media">
                                  
                                    <div class="media-body">
                                   
                                    </div>
                                    </div>  
                                                       
                               <?php 
							   								//grupo1
									$er="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty=$con->prepare($er);
									$ty->bindValue(":dis",$dis7,PDO::PARAM_STR);
									$ty->bindValue(":grupo",$a,PDO::PARAM_STR);
									$ty->execute();
									$vergrupo1=$ty->fetch(PDO::FETCH_OBJ);
									//grupo2
									$er1="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty1=$con->prepare($er1);
									$ty1->bindValue(":dis",$dis7,PDO::PARAM_STR);
									$ty1->bindValue(":grupo",$b,PDO::PARAM_STR);
									$ty1->execute();
									$vergrupo2=$ty1->fetch(PDO::FETCH_OBJ);
									//grupo3
									$er2="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty2=$con->prepare($er2);
									$ty2->bindValue(":dis",$dis7,PDO::PARAM_STR);
									$ty2->bindValue(":grupo",$c,PDO::PARAM_STR);
									$ty2->execute();
									$vergrupo3=$ty2->fetch(PDO::FETCH_OBJ);
									//grupo4
									$er3="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty3=$con->prepare($er3);
									$ty3->bindValue(":dis",$dis7,PDO::PARAM_STR);
									$ty3->bindValue(":grupo",$d,PDO::PARAM_STR);
									$ty3->execute();
									$vergrupo4=$ty3->fetch(PDO::FETCH_OBJ);
									//grupo5
									$er4="select *from fases_grupo where disciplina=:dis and grupo=:grupo";
									$ty4=$con->prepare($er4);
									$ty4->bindValue(":dis",$dis7,PDO::PARAM_STR);
									$ty4->bindValue(":grupo",$e,PDO::PARAM_STR);
									$ty4->execute();
									$vergrupo5=$ty4->fetch(PDO::FETCH_OBJ);
									?>
                                <?php if($vergrupo1->quantidade<3){ echo '<a href="joga.php?dis=Geometria&grupo=A" class="btn btn-primary" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> A</a>';} ?>
								<?php if($vergrupo2->quantidade<3){ echo '<a href="joga.php?dis=Geometria&grupo=B" class="btn btn-default" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> B</a>';} ?>
								<?php if($vergrupo3->quantidade<3){ echo '<a href="joga.php?dis=Geometria&grupo=C" class="btn btn-warning" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> C</a>';} ?>
								<?php if($vergrupo4->quantidade<3){ echo '<a href="joga.php?dis=Geometria&grupo=D" class="btn btn-info" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> D</a>';} ?>
								<?php if($vergrupo5->quantidade<3){ echo '<a href="joga.php?dis=Geometria&grupo=E" class="btn btn-success" style="font-size:33px; font-weight:bold;"><i class="glyphicon glyphicon-ok-sign"></i> E</a>';} ?>
                                </div>
								
                            </div>
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

 <script src="assets/js/bootstrap.js"></script>
 <script type="text/javascript" src="assets/js/jquery-1.5.2.js"></script>

</body>
</html>