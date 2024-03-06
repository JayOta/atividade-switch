<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <form method="post">
        <label for="num1">Escreva a sua primeira nota do trimestre: </label>
        <input type="number" name="num1" id="">
        <br><br>
        <label for="num2">Escreva a sua segunda nota do trimestre: </label>
        <input type="number" name="num2" id="">
        <br><br>
        <label for="num3">Escreva a sua terceira nota do trimestre: </label>
        <input type="number" name="num3" id="">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php 
    if($_POST){
    echo "<br>";
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $resultado = floatval($num1 + $num2 + $num3 / 3);
    switch ($resultado) {
    case $resultado < 120:
    echo "Sua nota é de: $resultado<br>Você está reprovado";
    break;
    case $resultado >= 120 && $resultado < 180:
    echo "Sua nota é de: $resultado<br>Você está em recuperação";
    break;
    case $resultado >= 180:
    echo "Sua nota é de: $resultado<br>Você está aprovado!";
    }    
}
    ?>
</body>
</html>