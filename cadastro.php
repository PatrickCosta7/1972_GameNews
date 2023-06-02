<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    
    $sql="INSERT INTO cadastro(nome, email, telefone)  VALUES ('$nome', '$email', '$telefone')";
    

    if(mysqli_query($conexao, $sql)) {
        echo "<script type='text/javascript'> alert('Cadastro feito com sucesso!'); </script>"; 
    } else {
        $erro = mysqli_connect_error();
        echo "<script type='text/javascript'> alert('Erro no cadastro: $erro'); </script>"; 
    }


    mysqli_close($conexao);
?>
