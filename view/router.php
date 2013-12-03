<?php
$pagina = isset( $_GET['pag'] ) ? $_GET['pag'] : null;
switch($pagina){
        case 'ano':
                include('/mds2013/view/year.php');
                break;
        case 'tipo':
                include('/mds2013/view/type.php');
                break;
        case 'tRA':
        		include('C:/xampp/htdocs/mds2013/view/totalra.php');    
        		
        case 'cCat':
        		include('C:/xampp/htdocs/mds2013/view/crimeporcat.php');
        case 'u':
        		include('C:/xampp/htdocs/mds2013/view/ui.php');
        default:
                include('C:/xampp/htdocs/mds2013/view/initial.php');        
}