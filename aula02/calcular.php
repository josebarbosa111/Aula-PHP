<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

$soma = $numero1+$numero2;
$subtracao = $numero1-$numero2;
$divisao = $numero1 / $numero2;
$multiplicacao = $numero1*$numero2;


echo "A soma é $soma";
echo "<br>";
echo "A Subtração é $subtracao";
echo "<br>";
echo "A Divisão é $divisao";
echo "<br>";
echo "A Multiplicação é $multiplicacao";
?>

</body>
</html>
