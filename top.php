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
<div class="col-md-8 col-lg-8 col-xs-12">
<h1>Quem Sabe?</h1>
</div>
<div class="col-md-4 col-lg-4 col-xs-12" id="ret">
<ul style="list-style: none;">
<li>
<a  class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Fazer login"><i class="glyphicon glyphicon-user"> </i> Admin</a>
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
                         







<a class="btn btn-success" data-toggle="modal" data-target="#myModal2" title="Sobre o jogo"><i class="glyphicon glyphicon-question-sign"> </i> Acerca</a>
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

<a href="index.php" class="btn btn-danger" title="Iniciar novo jogo"><i class="glyphicon glyphicon-off"> </i> Terminar</a>
</li>
</ul>
</div>

 <script src="assets/js/bootstrap.js"></script>
</body>
</html>