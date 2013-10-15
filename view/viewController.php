<?php
$pagina = isset( $_GET['pg'] ) ? $_GET['pg'] : null;
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