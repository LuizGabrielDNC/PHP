<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor =$_GET["v"];
        $rq=sqrt($valor);
        echo "O valor enviado $valor e a raiz e ".number_format($rq,2);
    ?>
    <a href="1.html">Voltar</a>
</body>
</html>