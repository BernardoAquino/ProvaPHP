<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>';

$acertos = 0;
$erros = 0;

session_start();

if(isset($_POST["q14"])) {
    $_SESSION["q14"] = $_POST["q14"];
}

if ($_SESSION["q1"] == "c") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q2"] == "a") {
    $acertos++;
}else {
    $erros++;
}


if ($_SESSION["q3"] == "b") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q4"] == "c") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q5"] == "c") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q6"] == "e") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q7"] == "c") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q8"] == "c") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q9"] == "c") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q10"] == "d") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q11"] == "a") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q12"] == "d") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q13"] == "e") {
    $acertos++;
}else {
    $erros++;
}

if ($_SESSION["q14"] == "c") {
    $acertos++;
}else {
    $erros++;
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
<div style="margin-top: 30px;" class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 align="center">Resultado</h1>
        <label>Quantidade de acertos:</label>
        <input type="number" name="acertos" class="form-control"  value="<?php echo $acertos ?>" required readonly>
        <label>Quantidade de erros:</label>
        <input type="number" name="erros" class="form-control"  value="<?php echo $erros ?>" required readonly>

        <div class="row">
            <a href="index.php" class="btn btn-outline-primary btn-block" style="margin-top: 10px;">Finalizar</a>
            <div class="col-md-4"></div>
        </div>
</body>
</html>