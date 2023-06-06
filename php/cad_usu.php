<?php
    require('conn.php');

    $login_usu = $_POST['login_usu '];
    $senha_usu = $_POST['senha_usu'];
    $nome_usu = $_POST['nome_usu'];
    $email_usu = $_POST['email_usu'];
   
    if(empty($login_usu ) || empty($senha_usu) || empty($nome_usu) || empty($email_usu)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_usuarios = $pdo->prepare("INSERT INTO login(login_usu , senha_usu, nome_usu, email_usu) 
        VALUES(:login_usu , :senha_usu, :nome_usu, :email_usu)");
        $cad_usuarios->execute(array(
            ':login_usu '=> $login_usu,
            ':senha_usu'=> $senha_usu,
            ':nome_usu' => $nome_usu,
            ':email_usu'=> $email_usu,
        ));

        echo "<script>
        alert('Solicitação Cadastrada com sucesso!');
        </script>";
    }
?>

