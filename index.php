<?php

 include ('C:/xampp/htdocs/mds2013/util/Parse.php'); 
 
 $parse = new Parse("JAN_SET_2011_12  POR REGIAO ADM_2.xls");
 //print_r(array_keys($parse->__getCrime()));
 $natureza = key($parse->__getCrime());
 $regiao = key($parse->__getCrime()[$natureza]);
 $tempo = key($parse->__getCrime()[$natureza][$regiao]);
 $crime = $parse->__getCrime()[$natureza][$regiao][$tempo];
 echo $crime;

?>