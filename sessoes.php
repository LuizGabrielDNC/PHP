<?php


	//a variavel seseao são conexao servidor e cliente desconecta

	session_start();

	$_SESSION["NOME"] ="HCODE";

	echo session_id();

	session_regenerate_id();//gera um novo id

	echo session_id();


?>