<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
	case 'year':
		include('./view/year.php');
		break;
	case 'type':
		include('./view/type.php');
		break;
	default:
		include('./view/initial.php');	
}