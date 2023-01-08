<?php

include "_conexao.php";

// Receber a imagem
$imagem = filter_input(INPUT_POST, 'imagem', FILTER_DEFAULT);
//var_dump($imagem);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT);

// Separa as informações da imagem base64 pelo ";"
list($type, $imagem) = explode(';', $imagem);
list(, $imagem) = explode(',', $imagem);

// Desconverter a imagem base64
$imagem = base64_decode($imagem);

// Atribuir a extensão da imagem PNG
$imagem_nome = time() . '.png';



$stmt = $pdo->prepare("insert into imagens(imagem,descricao)values(:imagem,:descricao)");
$stmt->execute(array(
    ':imagem' => $imagem_nome,
    ':descricao' => $descricao
));
echo $stmt->rowCount();

// Realizar o upload da imagem
file_put_contents('imagens/upload/' . $imagem_nome, $imagem);

echo "Imagem enviada com sucesso!";