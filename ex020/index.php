<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <div>
        <?php 
            function soma ( $a, $b) {

                $s = $a + $b;
                echo "<p> a soma vale $s</p>";
            }
        
            soma(3, 4);
            soma(8,2);
            $x = 9;
            $y= 15;
            soma($x,$y);
        
        ?>

    </div>
</body>
</html>