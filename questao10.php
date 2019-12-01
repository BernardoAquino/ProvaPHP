<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>';

session_start();

if(isset($_POST["q9"])) {
    $_SESSION["q9"] = $_POST["q9"];
}
?>

<body>
<div style="margin-top: 30px;" class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="questao11.php" method="post">

            <div class="row">
                 <div class="col-md-6">
                    <a href="questao9.php" class="btn btn-outline-danger btn-block">Voltar</a>
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-outline-danger btn-block" value="Próxima">
                </div>
            </div>

            <h6 style="margin-top: 5%; text-align: justify">10) Quando queremos recuperar valores de formulário HTML no PHP, qual comando correto para recuperar um valor de input com name txtvalor enviados de acordo com a imagem abaixo.</h6>
            <img class="img-responsive" src="imagens/q10.png" alt="q10" width="100%" height="auto">

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>A) <input type="radio" value="a" name="q10" required> $preco = $GET[“txtvalor”];</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>B) <input type="radio" value="b" name="q10" required> $preco = $_GET[“txtvalor”];</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>C) <input type="radio" value="c" name="q10" required> $preco = $POST[“txtvalor”];</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>D) <input type="radio" value="d" name="q10" required> $preco = $_POST[“txtvalor”];</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>E) <input type="radio" value="e" name="q10" required> $preco = [“txtvalor”];</label>
                </div>
            </div>

        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>