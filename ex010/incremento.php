<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incremento</title>
</head>
<body>
    <div>
            <?php 
                   $atual = $_GET["aa"];
                echo "O ano atual é $atual e o ano anterior é ". --$atual;
            ?>


    </div>
</body>
</html>