<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
	case 'ano':
		include($_SERVER['DOCUMENT_ROOT'].'/mds2013/view/year.php');
		break;
	case 'tipo':
		include($_SERVER['DOCUMENT_ROOT'].'/mds2013/view/type.php');
		break;
	default:
		include($_SERVER['DOCUMENT_ROOT'].'/mds2013/view/initial.php');	
}