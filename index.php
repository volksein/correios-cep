<?php 
header('Content-Type: text/html; charset=UTF-8');
include('correios.class.php');
if(isset($_GET['cep'])){
	die(json_encode(Correios::cep($_GET['cep']), JSON_UNESCAPED_UNICODE));
}elseif(isset($_GET['codigo_rastreio'])){
	die(json_encode(Correios::rastreio($_GET['codigo_rastreio']), JSON_UNESCAPED_UNICODE));
}else{
	die('informe parametro GET cep ou codigo_rastreio');
}
