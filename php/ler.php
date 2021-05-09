<?php

include "conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);