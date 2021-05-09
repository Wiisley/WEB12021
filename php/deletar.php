<?php
if (isset($_GET['id'])) {
    include "conexao.php";

    function validando($dados)
    {
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
    }
    $id = validando(($_GET['id']));

    $sql = "DELETE FROM usuarios WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo ("<script type='text/javascript'> alert('Dados Deletados com Sucesso !!!'
    ); location.href='../usuarios.php';</script>");
    } else {
        echo ("<script type='text/javascript'> alert('Dados Não foram Deletados, favor testar novamente !!!'
); location.href='../usuarios.php';</script>");
    }
} else {
    echo ("<script type='text/javascript'> alert('Dados Não foram deletados, favor testar novamente !!!'
); location.href='../usuarios.php';</script>");
}
