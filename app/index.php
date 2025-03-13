<?php
//$nome = $_GET['nome'];
$nome = '';
$periodo = '';
$mensagem = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $periodo = $_POST['periodo'];
    switch($periodo) {
        case 'm':
            $mensagem = "Bom Dia $nome";
        break;

        case 't':
            $mensagem = "Boa Tarde $nome";
        break;

        case 'n' :
            $mensagem = "Boa Noite $nome";
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Primeira Aplicação </title>
</head>
<body>
    <h1>
        <?php 
            if($periodo == 'm'){
                echo 'Bom Dia ' . $nome;
            }elseif ($periodo == 't') {
                echo 'Bom Tarde ' . $nome;
            }elseif ($periodo == 'n') {
                echo 'Bom Noite ' . $nome;
            } 
        ?>
    </h1>

    <h1>
        <?php if($periodo == 'm'): ?>
            Bom Dia <i> <?= $nome ?> </i>
        <?php elseif($periodo == 't'): ?>
            Boa Tarde <i> <?= $nome ?> </i>
        <?php elseif($periodo == 'n'): ?>
            Boa Noite <i> <?= $nome ?> </i>
        <?php endif ?>
    </h1>

    <h1><?= $mensagem ?></h1>

    <form action="/index.php" method="POST">
        <label for="periodo"> Selecione o Período </label>

        <select name="periodo">
            <option value="m"> Manhã </option>

            <option value="t"> Tarde </option>

            <option value="n"> Noite </option>
        </select>

        <br>

        <label for="nome"> Digite seu nome </label>

        <input type="text" name="nome" />

        <button type="submit"> Enviar </button>
    </form>
</body>
</html>