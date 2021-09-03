<?php
	
	//conversa com linguagens diferentes php com java 
$json =[{"nome":"joao","idade":98},{"nome":"luiz","idade":18}];

$data  =json_decode($json ,true);

var_dump($data);


?>