<?php
if(isset($_POST['submit'])){
        file_exists(include_once('config.php'));
        $nome = $_POST['name'];
        $senha = $_POST['password'];
        $email = $_POST['email'];

        $cadastrar = "INSERT INTO `cadastro_clientes`( `nome_cli`, `email_cli`, `senha_cli`) VALUES ('$nome','$email','$senha')";
        $resultado = mysqli_query($conexao, $cadastrar);

        if($resultado){
            header('location: ../login.php');
        }
}
    else{
        header('location: ../cadastro.php');
    }   

?>