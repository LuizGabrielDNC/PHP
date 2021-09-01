<?php
	
	echo "Bom dia";

	//UMA LINGUAGEM VOLTADA PARA CLIENTE - SERVIDOR

	//VARIAVEIS DO PHP ONDE VC GUARDA DIVERSAS TIPOS DE DADOS EM MÉMORIA
	$NOME = "hCODE";//VARIAVEL COM ATRIBUIÇÃO STRING SEM TIPAGEM DE DADOS SEM TIPO NO SERVIDOR

 
	var_dump($NOME);//informacoes da variavel

	echo "<hr> $NOME";

	//unset($NOME);//unset apaga da memoria a variavel

	if (isset($NOME)) {//pergunta se a var nome existe 

		echo "Vai para paraguay";
		# code...

	}

	//concatenar variaveis

	$sobrenome = "chaves";

	$nomecompleto = $NOME . " ".$sobrenome;// . para concatenar

	echo "$nomecompleto";

	//tipos basicos de variaveis

	$bloqueado = false;

	$frutas = array("ABACATE","LARANJA");
	ECHO "$frutas[1]";

	$nascimento = new DateTime();//objetc



?>
