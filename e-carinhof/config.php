<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Liza30';
$dbName = 'formulario-voluntarios';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso"
}

?>