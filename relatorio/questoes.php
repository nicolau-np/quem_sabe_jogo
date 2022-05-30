<?php
include_once("../config/conn.php");

$disciplina = addslashes(htmlspecialchars($_GET['disciplina']));
$estado = "naovista";
$contagem = 0;

$html="<html>
<head><title></title>
<style>
.tabelaPerg{
    font-family:arial;
    font-size:14px;
}
.cabecalho{
    font-weight: bold;
}
</style>

</head>
<body>
<h2>Questoes de :: ".$disciplina."</h2>
";

$select = "select *from perguntas where disciplina = :disciplina and estado = :estado";
$run = $con->prepare($select);
$run->bindParam(":disciplina", $disciplina, PDO::PARAM_STR);
$run->bindParam(":estado", $estado, PDO::PARAM_STR);
$run->execute();

$html.="
<table border='1' class='tabelaPerg'>
<tr>
<td class='cabecalho'>Nº</td>
<td class='cabecalho'>Pergunta</td>
</tr>
";

while($ver = $run->fetch(PDO::FETCH_OBJ)):
    $contagem = $contagem + 1;
$html.="
<tr>
<td>$contagem</td>
<td>$ver->pergunta</td>
</tr>
";
endwhile;

$html.="
</table>
";

$html.="

</body>
</html>";

include("../mpdf/mpdf.php");
$mpdf=new mPDF('c','A4'); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>