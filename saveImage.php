<?php

include("bd.php");

$nome = $_POST["nomeProduto"];
$preco = $_POST["preco"];
$descricaoProduto = $_POST["descricaoProduto"];

$imagemProduto = 'imagens/' . $_FILES['arquivo']['name'];
 
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $imagemProduto  );

$sql = "insert into produto (nome, preco, descricaoProduto, imagemProduto) VALUES('$nome', '$preco', '$descricaoProduto', '$imagemProduto')";

mysqli_query($conexao, $sql);

mysqli_close($conexao);



?>