<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo "Nome é: $nome";
echo "<br>";
echo "email é: $email";
echo "<br>";
echo "senha é: $senha";
echo "<br>";
echo "<br>";

print_r($_POST);



?>