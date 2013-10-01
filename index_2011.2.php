<?php
require_once 'excel_reader2.php';
 
$reader = new Spreadsheet_Excel_Reader();
$reader->setOutputEncoding("UTF-8");
 
$reader->read("serie_historica_2001_2012_2.xls");
// $numeroRows = $reader -> rowcount();
// $numeroCols = $reader -> colcount();
 
for ($i = 2; $i <= $reader->sheets[1]["numRows"]; $i++)

{
   // for ($j = 4; $j <= $reader->sheets[1]["numCols"]; $j++)
   // {

			echo " ".$reader->sheets[1]["cells"][$i][4]." ";
			
	//}
	
    echo "\n";
}