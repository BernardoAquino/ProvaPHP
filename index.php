<?php
header("Content-type: text/html; charset=utf8");
echo '<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>';
?>

<body>
<div style="margin-top: 30px;" class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <form action="questao2.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-outline-danger btn-block" value="Próxima">
                </div>
            </div>

            <h6 style="margin-top: 5%; text-align: justify">1) Na programação quando precisamos que um trecho de código repita utilizamos estruturas de repetição, quais dentre os comandos abaixo são estrutura de repetição:</h6>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>A) <input type="radio" value="a" name="q1" required> For, IF, Case</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>B) <input type="radio" value="b" name="q1" required> IF, Case, Do While</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>C) <input type="radio" value="c" name="q1" required> Do While, While, For</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>D) <input type="radio" value="d" name="q1" required> Do While, IF, Else</label>
                </div>
            </div>

            <div style="margin-top: 5%;" class="form-group">
                <div class="radio btn btn-outline-dark">
                    <label>E) <input type="radio" value="e" name="q1" required> While, Case, IF</label>
                </div>
            </div>

        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>