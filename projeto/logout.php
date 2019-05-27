<?php
include("bd.php");
include("initSession.php");


	unset($_SESSION["usuarioLogado"]);
	header("Location: index.php");




?>