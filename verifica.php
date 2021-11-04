<?php
    include("conecta.php");
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $usuario = $con->prepare("SELECT * FROM clientes WHERE cpf = :cpf");
    $usuario->bindParam(":cpf",$cpf);
    $usuario->execute();
    $cont = $usuario->fetch();
    if($cont > 0){
        echo ("<script>alert('CPF já cadastrado em nossa base de dados!');</script>");
        echo ("<script>location.href='index.php';</script>");
        mysqli_close($conn);
    }
    $res = $con->prepare("INSERT INTO clientes(cpf,nome,endereco,email,created_at) VALUES (:cpf,:nome,:endereco,:email,Now())");
    $res->bindParam(":cpf",$cpf);
    $res->bindParam(":nome",$nome);
    $res->bindParam(":endereco",$endereco);
    $res->bindParam(":email",$email);
    $res->execute();
    echo ("<script>alert('Cadastro de usuário realizado com sucesso!');</script>");
    echo ("<script>location.href = 'index.php';</script>");
?>