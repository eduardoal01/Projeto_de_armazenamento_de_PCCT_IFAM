<?php 

    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['matricula']) && !empty($_POST['senha'])){

        //Acessa

        include_once('../SGBD/config.php');
        $matricula = $_POST['matricula'];
        $senha = md5($_POST['senha']);

        //print_r('matricula: ' . $matricula);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM cadastro WHERE matricula = '$matricula' and senha = '$senha'";

        $result = $conexao -> query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1 ){
            unset($_SESSION['matricula']);
            unset($_SESSION['senha']);
            header('Location: ../site/login.php');

        }else{
            $_SESSION['matricula'] = $matricula;
            $_SESSION['senha'] = $senha;
            header('Location: ../Site/sistema.php');
        }

    }else{

        //Não acessa

        header('Location: ../site/login.php');
    }


?>