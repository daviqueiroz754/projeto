<?php
include("bd.php");
include("initSession.php");


$email = $_GET["email"];
$senha = $_GET["senha"];

$sql = mysqli_query($conexao, "SELECT * FROM usuario where email = '$email' AND senha = '$senha'");

if($row = $sql->fetch_array()){
	$id = $row["id"];
	$_SESSION["usuarioLogado"] = $id;
	header("Location: clientArea.php");

}

else{
	
	header("Location: login.php?incorreto=1");
}

?>