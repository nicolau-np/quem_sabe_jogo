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
.texto{
    font-family: 'Comic Sans MS';
    font-size: 24px;
    font-weight: bold;
    color: #ef1b30;
}
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
<div id="conteudo" class="row" >
<div class="col-md-6">
</div>
<div class="col-md-6">
    <div class="panel panel-primary">
        <div class="panel-body">
        <br/>
        <div class='texto'>Resposta Errada!!</div>
        <img src="ver_q/error.png" style="width: 150px; height: 150px; margin: auto;position: absolute; top: 0; left: 0; bottom: 0; right: 0;"/>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        </div>
        <div class="panel-footer">
            <a class="btn btn-success"  href='joga.php' >Continuar</a>
                <a class="btn btn-danger" href='termina_jogo.php' >Terminar</a>
            </div>
        </div>
</div>
</div>
<div class="col-md-6">
</div>







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
