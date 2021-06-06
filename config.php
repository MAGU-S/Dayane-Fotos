<?php 

	session_start();

	

	date_default_timezone_set('America/Sao_Paulo');

	define('INCLUDE_PATH','http://localhost/Dayane_Fotos/');

	function activeMenu($par){
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="active-menu"';
		}
	}


?>

