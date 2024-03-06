<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>     
    <form method="post"> 
        <label for="">Coloque um número e receba a tabuada dele: </label>
        <input type="number" name="num" value="">
        <input type="submit" value="Enviar">
    </form>
    <?php  
    if($_POST){
    echo "<br>";
    $numero = intval($_POST['num']);
    switch ($numero){
        case 1:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 2:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 3:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 4:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";

            }
            break;
        case 5:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 6:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 7:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 8:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 9:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
        case 10:
            for ($valor = 1; $valor < 11; $valor++){
                echo $numero ." x $valor = " . ($numero * $valor);
                echo "<br>";
            }
            break;
    }
}
?>
</body>
</html>