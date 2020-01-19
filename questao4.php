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

session_start();

if (isset($_POST["q3"])) {
    $_SESSION["q3"] = $_POST["q3"];
}
?>

<body>
    <div style="margin-top: 30px;" class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="questao5.php" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <a href="questao3.php" class="btn btn-outline-danger btn-block">Voltar</a>
                    </div>

                    <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-danger btn-block" value="Próxima">
                    </div>
                </div>

                <h6 style="margin-top: 5%; text-align: justify">4) Para que o comando While repita uma certa quantidade de vezes e não fique em um loop infinito, devemos utilizar uma variável de controle está variável deve ser de qual tipo:</h6>

                <div style="margin-top: 5%;" class="form-group">
                    <div class="radio btn btn-outline-dark">
                        <label>A) <input type="radio" value="a" name="q4" required> string</label>
                    </div>
                </div>

                <div style="margin-top: 5%;" class="form-group">
                    <div class="radio btn btn-outline-dark">
                        <label>B) <input type="radio" value="b" name="q4" required> char</label>
                    </div>
                </div>

                <div style="margin-top: 5%;" class="form-group">
                    <div class="radio btn btn-outline-dark">
                        <label>C) <input type="radio" value="c" name="q4" required> int</label>
                    </div>
                </div>

                <div style="margin-top: 5%;" class="form-group">
                    <div class="radio btn btn-outline-dark">
                        <label>D) <input type="radio" value="d" name="q4" required> boolean</label>
                    </div>
                </div>

                <div style="margin-top: 5%;" class="form-group">
                    <div class="radio btn btn-outline-dark">
                        <label>E) <input type="radio" value="e" name="q4" required> contadores</label>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>