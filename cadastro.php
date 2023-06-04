
<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    
    $sql="INSERT INTO cadastrado(nome, email, telefone)  VALUES ('$nome', '$email', '$telefone')";
    

    if(mysqli_query($conexao, $sql)) {
        echo "<script type='text/javascript'> alert('Cadastro feito com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script type='text/javascript'> alert('Erro no cadastro'); window.location.href='index.html'; </script>"; 
    }


    mysqli_close($conexao);
?>