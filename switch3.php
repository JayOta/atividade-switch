<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <form method="post">
        <h2>Descubra se seus números são pares ou ímpares</h2>
        <br>
        <label for="numbs">Coloque os números da lista separados por vírgula: </label>
        <input type="text" name="numbs">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    
    if($_POST){ 
    echo"<br>";
    $numbs = $_POST['numbs'];
    $valores = explode(',', $numbs);
    switch ($valores[0]) {
        case $valores[0] % 2 == 0:
            echo "Os número $valores[0] é par";
            break;
        case $valores[0] % 2!= 0:
            echo "Os número $valores[0] é ímpar";
            break;
    }
    echo "<br>";
    switch ($valores[1]) {
        case $valores[1] % 2 == 0:
            echo "Os número $valores[1] é par";
            break;
        case $valores[1] % 2!= 0:
            echo "Os número $valores[1] é ímpar";
            break;
    }
    echo "<br>";
    switch ($valores[2]) {
        case $valores[2] % 2 == 0:
            echo "Os número $valores[2] é par";
            break;
        case $valores[2] % 2!= 0:
            echo "Os número $valores[2] é ímpar";
            break;
    }
}
?>
</body>
</html>