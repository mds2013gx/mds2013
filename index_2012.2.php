<?php
require_once 'excel_reader2.php';
 
$reader = new Spreadsheet_Excel_Reader();
$reader->setOutputEncoding("UTF-8");
 
$reader->read("JAN_SET_2011_12_POR_REGIAO_ADM_2.xls");
 
for ($i = 8; $i <= $reader->sheets[0]["numRows"]; $i++)

{
    for ($j = 7; $j <= $reader->sheets[0]["numCols"]; $j++)
    {
			echo " ".$reader->sheets[0]["cells"][$i][$j++]." ";
			
	}
	
    echo "\n";
}