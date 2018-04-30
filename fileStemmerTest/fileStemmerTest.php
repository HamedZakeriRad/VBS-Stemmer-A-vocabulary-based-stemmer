<?php

ob_start();
//-----------------------------------------------------------------------------
require_once '../classes/mySQLConnect.php';
$MySQL = new mySQLConnect();
$MySQL->connect();

require_once '../classes/VbsStemmer.php';
$VbsStemmer = new VbsStemmer();

require_once '../classes/fileReaderAndWriter.php';
$fileReaderAndWriter = new fileReaderAndWriter();
//-----------------------------------------------------------------------------
$StemmedArrayTemp = array();
$Counter = 1;
//-----------------------------------------------------------------------------
//Read The Source File
$SourceFile = "test";
$fileReaderAndWriter->FileName = $SourceFile . ".Original.txt";
$DataSetArray = $fileReaderAndWriter->ReadFile();
$DataSetArrayCount = count($DataSetArray);
//-----------------------------------------------------------------------------
$TargetFile = $SourceFile . ".Stemmed.txt";
unlink($TargetFile);
$fileReaderAndWriter->FileName = $TargetFile;
for ($j = 0; $j < $DataSetArrayCount; $j++) {
    $ExplodeArray = explode(' ', trim($DataSetArray[$j]));
    $ExplodeArrayCount = count($ExplodeArray);
    for ($i = 0; $i <= $ExplodeArrayCount; $i++) {
        if (!preg_match('/[_]{1,5}/', $ExplodeArray[$i]) && strlen($ExplodeArray[$i]) > 2) {
            for ($DCheck = 0; $DCheck < 2; $DCheck++) { //Double Check the Stemmed text
                $VbsStemmer->Word = $ExplodeArray[$i];
                $NewStemmedWord = $VbsStemmer->Stem();
                if ($ExplodeArray[$i] == $NewStemmedWord && $DCheck == 0) {
                    //echo " =>>  " . $NewStemmedWord."<br/>"; // Shows The Words Which Didnt Get Stemmed
                } else if ($ExplodeArray[$i] != $NewStemmedWord) {
                    //echo "<span style='color: green;'> =>>  $NewStemmedWord </span><br/>"; // Shows The Words Which Got Stemmed
                }
                $ExplodeArray[$i] = $NewStemmedWord;
            }
        }
    }
//-----------------------------------------------------------------------------
//Build New Text
    $StemmedText = "";
    $Counter++;
    for ($k = 0; $k <= $ExplodeArrayCount; $k++) {
        $StemmedText = $StemmedText . " " . $ExplodeArray[$k];
    }
    echo "New Stemmed Text => " . $StemmedText . "<br/>";

    echo "---------------------------$Counter----------------------------<br/>";
    $StemmedArrayTemp[] = $StemmedText;
    echo str_pad(' ', 2048);
    flush();
    ob_flush();
//-----------------------------------------------------------------------------
}
//-----------------------------------------------------------------------------
//Insert to Target File            
for ($i = 0; $i < $DataSetArrayCount; $i++) {
    $fileReaderAndWriter->LineToBeWrite = $StemmedArrayTemp[$i] . "\n";
    $fileReaderAndWriter->WriteToFile();
}
//-----------------------------------------------------------------------------
//Close MySQL Connection
$MySQL->close();
ob_end_flush();
