<?php 
if(isset($_POST['submit-2'])){
    file_exists(include_once('config.php'));
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM cadastro_clientes WHERE email_cli = '$email' and senha_cli = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);
    $row = mysqli_num_rows($resultado);
    echo $row;
    if($row >= 1){
        header('location: ../index.php');
    }
   else{
        header('location: ../login.php?codigo=1');
    }
}
?>