<?php
    require('../conn.php');
    
    $nome_usu = $_POST['nome_usu'];
    $login_usu = $_POST['login_usu'];
    $senha_usu = $_POST['senha_usu'];
    
    if(empty($nome_usu) || empty($login_usu)|| empty($senha_usu)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_usu = $pdo->prepare("INSERT INTO usuarios (nome_usu,login_usu,senha_usu) 
        VALUES(:nome_usu,:login_usu,:senha_usu)");
        $cad_usu->execute(array(
            ':nome_usu'=> $nome_usu,
            ':login_usu'=> $login_usu,
            ':senha_usu'=> $senha_usu,
            
                    
            ));

            echo "<script>
            alert('Usuário Cadastrado com sucesso!');
            </script>"; 
            echo "<script>
            window.location.href='../login.php'
            </script>";
            
    }


   

?>