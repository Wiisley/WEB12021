<?php include "./php/ler.php";?>
<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <title>Trabalho Desenvolvimento Web1 2021 - UFMT</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <img src="./img/logo.png">
                <li><a href="index.html">Principal</a></li>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="https://www.ic.ufmt.br/" target="_blank">IC UFMT</a></li>
            </ul>
        </nav>
    </header>

    <div class="conteudo-formulario">
        <h2>Usuários Cadastrados</h2><br>
        <button class="botao-enviar"> <a href="cad_usuario.html">Criar Usuário</a></button>
        <?php if (mysqli_num_rows($resultado)) { ?>
        <table class="conteudo-tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>RGA</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while($rows = mysqli_fetch_assoc($resultado)){
                    $i++;
                ?>
                <tr>
                    <th scope="row"><?=$i?></td>
                    <td><?=$rows['nome']?></td>
                    <td><?=$rows['sobrenome']?></td>
                    <td><?=$rows['rga']?></td>
                    <td><a href="./php/deletar.php?id=<?=$rows['id']?>" class="">Deletar</a></td>
                   
                    
                </tr>
                <?php } ?>

            </tbody>
        </table>
        <?php } ?>

    </div>
    <footer>


    </footer>

</body>

</html>