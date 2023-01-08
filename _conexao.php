<?php 
date_default_timezone_set('America/Sao_Paulo');


//conexao local
$usuario = "root";
$senha = "";
$banco = "imagens_php";
$servidor = "localhost";



try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
} catch (\Throwable $th) {
    echo "Erro ao conectar ao banco de dados <br>";
    echo $th;
}
?>