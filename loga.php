<?php
ob_start();
session_start();
include("config/conn.php");
$nome=$_GET['nome'];
$senha=$_GET['senha'];

 if(($nome=="")||($senha==""))
    {
     echo"<div class='alert alert-danger'>
     <button type='button' class='close' data-dismiss='alert'>×</button>
     Prenche os campos</div>";   
    }
else
{
    
 $sql="select *from user where nome=:a and senha=:b";

	$result=$con->prepare($sql);
	$result->bindValue(":a",$nome, PDO::PARAM_STR);
	$result->bindValue(":b",$senha, PDO::PARAM_STR);
	$result->execute();
$contar=$result->rowCount();
$mostra=$result->fetch(PDO::FETCH_OBJ);
if($contar>0)
{
   
$_SESSION['nomeS']=$nome;
$_SESSION['senhaS']=$senha;
$estado=$mostra->estado;
if($estado=="OFF")
{
  echo'<div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert">×</button>
 Usuário não permitido!
 </div>';  
}
else{
echo '<script>
window.location.href="home.php";
</script>';   
}
   
   
}
else
{
     echo'<div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert">×</button>
 Erro ao fazer login!
 </div>';  
}   
}
 
?>