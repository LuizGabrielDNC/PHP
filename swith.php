<?php
	$dia = date("w");//fornece o dia de hoje

	switch ($dia) {
		case 0:
			# code...
			echo "Domingo";
			break;
		case 1:
			# code...
			echo "Segunda";
			break;
		case 2:
			# code...
			echo "Terça";
			break;
		case 3:
			# code...
			echo "Quarta";
			break;
		case 4:
			# code...
			echo "Quinta";
			break;
		case 5:
			# code...
			echo "Sexta";
			break;
		case 6:
			# code...
			echo "Sabado";
			break;
		default:
			# code...
			echo "invalido";
			break;
	}
?>