<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>';

session_start();

if(isset($_POST["q12"])) {
    $_SESSION["q12"] = $_POST["q12"];
}
?>

<body>
<div style="margin-top: 30px;" class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="questao14.php" method="post">

            <div class="row">
                 <div class="col-md-6">
                    <a href="questao12.php" class="btn btn-outline-danger btn-block">Voltar</a>
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-outline-danger btn-block" value="Próxima">
                </div>
            </div>

            <img style="margin-top: 5%;" class="img-responsive" src="imagens/q11.png" alt="q11" width="100%" height="auto">
            <h6  style="margin-top: 5%; text-align: justify">Analise a figura acima e responda as 4 próximas questões:</h6>
            <h6 style="text-align: justify">13)	Determine o último valor assumido pela variável $total no final programa</h6>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>A) <input type="radio" value="a" name="q13" required> 20</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>B) <input type="radio" value="b" name="q13" required> 22</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>C) <input type="radio" value="c" name="q13" required> 18</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>D) <input type="radio" value="d" name="q13" required> 26</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>E) <input type="radio" value="e" name="q13" required> 33</label>
                </div>
            </div>

        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>