<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>';

session_start();

if(isset($_POST["q7"])) {
    $_SESSION["q7"] = $_POST["q7"];
}
?>

<body>
<div style="margin-top: 30px;" class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="questao9.php" method="post">

        <div class="row">
                 <div class="col-md-6">
                    <a href="questao7.php" class="btn btn-outline-danger btn-block">Voltar</a>
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-outline-danger btn-block" value="Próxima">
                </div>
            </div>

            <h6 style="margin-top: 5%; text-align: justify">8) Qual será o valor da variável $cont ao final da execução do código abaixo.</h6>
            <img class="img-responsive" src="imagens/q8.png" alt="q8" width="100%" height="auto">

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>A) <input type="radio" value="a" name="q8" required> Testar a condição se for verdadeira</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>B) <input type="radio" value="b" name="q8" required> Testar a condição se for falsa</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>C) <input type="radio" value="c" name="q8" required> Atualizar o contador</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>D) <input type="radio" value="d" name="q8" required> Validar a condição antes da execução</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>E) <input type="radio" value="e" name="q8" required> Validar a condição após a execução</label>
                </div>
            </div>

        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>