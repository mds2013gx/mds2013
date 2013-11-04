<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
	case 'ano':
		include(__APP_PATH.'/view/year.php');
		break;
	case 'tipo':
		include(__APP_PATH.'/view/type.php');
		break;
	default:
		include(__APP_PATH.'/view/initial.php');	
}