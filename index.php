<?php 
// pega o arquivo
$arquivo = 'chat.txt';
// se tiver request:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //recolhe os input
    $usuario = $_POST['usuario'];
    $mensagem = $_POST['mensagem'];
    //abre o fopen no $arquivo, no modo append
    $fp = fopen($arquivo, 'a');
// escreve td no $arquivo 
    fwrite($fp, "{$usuario}: {$mensagem}\n");
//fecha o modo append
    fclose($fp);
}
// da uma lida nas mensagem
$mensagens = file($arquivo);

// da uma especie de print com as menstagen em forma de tabela
foreach ($mensagens as $mensagem) {
    echo "<p>$mensagem</p>";
}
// depois de tudo carrega o restoi do html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: gainsboro};
    </style>
</head>
<body>
       
    <form method="post">

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="iduser"> 

    <label for="mensagem">mensagem</label>
    <input type="text" name="mensagem" id="mensagem"> 

    <input type="submit" value="Enviar">

    </form>
    
</body>
</html>