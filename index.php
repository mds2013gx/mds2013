<?php
require_once 'excel_reader2.php';
 
$reader = new Spreadsheet_Excel_Reader();
$reader->setOutputEncoding("UTF-8");
 
$reader->read("example.xls");
 
for ($i = 1; $i <= $reader->sheets[0]["numRows"]; $i++)
{
    for ($j = 1; $j <= $reader->sheets[0]["numCols"]; $j++)
    {
        print "\"".$reader->sheets[0]["cells"][$i][$j]."\",";
    }
    echo "\n";
}