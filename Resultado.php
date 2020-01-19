<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>';

$acertos = 0;
$erros = 0;

session_start();

if (isset($_POST["q14"])) {
    $_SESSION["q14"] = $_POST["q14"];
}

if ($_SESSION["q1"] == "c") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q2"] == "a") {
    $acertos++;
} else {
    $erros++;
}


if ($_SESSION["q3"] == "b") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q4"] == "c") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q5"] == "c") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q6"] == "e") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q7"] == "c") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q8"] == "c") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q9"] == "c") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q10"] == "d") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q11"] == "a") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q12"] == "d") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q13"] == "e") {
    $acertos++;
} else {
    $erros++;
}

if ($_SESSION["q14"] == "c") {
    $acertos++;
} else {
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
            <input type="number" name="acertos" class="form-control" value="<?php echo $acertos ?>" required readonly>
            <label>Quantidade de erros:</label>
            <input type="number" name="erros" class="form-control" value="<?php echo $erros ?>" required readonly>

            <div class="row">
                <a href="index.php" class="btn btn-outline-primary btn-block" style="margin-top: 10px;">Finalizar</a>
                <div class="col-md-4"></div>
            </div>
</body>

</html>