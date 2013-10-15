<?php
 //include './view/header.php'; 
 //include './view/viewController.php';
 //include './view/navigation.php'; 
 //include './view/footer.php'; 
 include './controller/CrimeController.php';
 include './controller/NaturezaController.php';
 include './controller/TempoController.php';
 include_once './model/Tempo.php';
 $crimeCO = new CrimeController();
 $crimeCO = new CrimeController();
 $tempoCO = new TempoController();
 echo $crimeCO->_retornarDadosDeSomaFormatado();
?>
