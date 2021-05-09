<?php

function function_alert($message) {
      
    echo "<script>alert('$message')</script>";
}
  

if (isset($_POST['gravar'])) {
    include "conexao.php";

    function validando($dados){
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
    }

    $nome = validando($_POST['nome']);
    $sobrenome = validando($_POST['sobrenome']);
    $email = validando($_POST['email']);
    $endereco = validando($_POST['endereco']);
    $cidade = validando($_POST['cidade']);
    $telefone = validando($_POST['telefone']);
    $rga = validando($_POST['rga']);
    $curso = validando($_POST['curso']);
    $campus = validando($_POST['campus']);
    $satisfacao = validando($_POST['satisfacao']);
    $descricao = validando($_POST['descricao']);

    $sql = "INSERT INTO usuarios(nome, sobrenome, email, endereco, cidade, telefone, rga, curso, campus, satisfacao, descricao)
            VALUES('$nome', '$sobrenome', '$email', '$endereco', '$cidade', '$telefone', '$rga', '$curso', '$campus', '$satisfacao', '$descricao')";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado) {
        echo("<script type='text/javascript'> alert('Dados Salvos com Sucesso !!!'
            ); location.href='../usuarios.php';</script>");
        
    }else {
        echo("<script type='text/javascript'> alert('Dados Não foram salvos, favor testar novamente !!!'
    ); location.href='../usuarios.php';</script>");
        
    }

}