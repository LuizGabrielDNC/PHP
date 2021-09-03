<?php
	$condicao =true;
	while($condicao)//muito utilizado
	{
		$numero = rand(1,10);
		if ($numero == 3) {
			# code...
			echo "Trez";
			$condicao=false;
		}
		echo "$numero <br/>";
	} 

?>