<?php
    include("conn.php");
    $login = $_POST['login_usu'];
    $senha = $_POST['senha_usu'];

    $usuario = $pdo->prepare('SELECT * FROM usuarios where login_usu=:login_usu 
    AND senha_usu=:senha_usu');
    $usuario->execute(array(':login_usu'=>$login,':senha_usu'=>$senha));

    $rowTabela = $usuario->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Usuario e/ou senha invalidos!!!');
        </script>";
    }else{
       
    $sessao = $rowTabela[0];

    if(!isset($_SESSION)) {
    session_start();
    }
    $_SESSION['id'] = $sessao['id'];
    $_SESSION['login_usu'] = $sessao['login_usu'];

    header("Location: index.php");
    }