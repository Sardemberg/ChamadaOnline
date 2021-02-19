<?php
    session_start();
    $senha = $_POST['senha'];

    if($senha == "z88122894"){
        $_SESSION['user'] = "Online";
        echo("<script> alert('Bem vindo, administrador!'); //window.location.href = '../gerenciadores.html' </script>");
    }else{
        echo("<script> alert('Senha incorreta'); window.location.href = '../index.php' </script>");
    }
?>