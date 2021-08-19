<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo</h1>
    <?php//PHP RODA DO LADO SERVIDOR LEMBRE-SE DISSO
        $bandf =$_GET["a"];//PEGA VALOR DA URL 
        echo"Bom dia Brasilll";
        $nome ="Luiz";
        $idade = 17;
        $logico = true;
        echo "Nome : ".$nome."<br/> idade ".$bandf;
        
        echo "logico".$logico;

        
    ?>
</body>
</html>
