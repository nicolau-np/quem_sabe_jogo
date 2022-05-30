<?php
// Informações para conexão
$host = 'localhost';
$usuario = 'Nicolau';
$senha = 'olamundo';
$banco = 'quemsabe';
// Realizando conexão e selecionando o banco de dados
$conn = @mysql_connect($host, $usuario, $senha) or die(mysql_error());
$db = mysql_select_db($banco, $conn) or die(mysql_error());
// Definindo o charset como utf8 para evitar problemas com acentuação
$charset = mysql_set_charset('utf8');
// Função para carregar a classe automaticamente, quando instanciado um objeto
