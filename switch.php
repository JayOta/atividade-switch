<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
<form method="post">
    <label>Qual bebida você prefere? (água, suco, cerveja ou vinho)?</label>
    <input type="text" name="text" id="" >
    <input type="submit" value="Pedir">
</form>
<?php 
if($_POST){ 
    $bebida = $_POST['text'];
    
    echo "<br>";

    switch ($bebida) {
        case 'água':
            echo 'Você preferiu água';
            break;
        case'suco':
            echo 'Você preferiu suco';
            break;
        case 'cerveja':
            echo 'Você preferiu cerveja';
            break;
        case 'vinho':
            echo 'Você preferiu vinho';
            break;
        default:
            echo 'Você não prefere nada';
            break;
    }
}
?>
</body>
</html>