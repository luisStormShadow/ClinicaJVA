<?php 

$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'clinica_odontologica';
try{
    $conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
}

catch(Exception $err)
{
    echo "Erro" ;

}

?>