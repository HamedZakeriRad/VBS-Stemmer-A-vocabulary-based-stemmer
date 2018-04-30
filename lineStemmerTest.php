<?php

ob_start();
//-----------------------------------------------------------------------------
require_once 'classes/mySQLConnect.php';
$MySQL = new mySQLConnect();
$MySQL->connect();

require_once 'classes/VbsStemmer.php';
$VbsStemmer = new VbsStemmer();
//-----------------------------------------------------------------------------
$OriginalTextToBeStemmed = "the boundary layer in simple shear flow past a flat plate the boundary layer equations are presented for steady incompressible flow with no pressure gradient";
$StemmedText = "";
echo "Original Text => " . $OriginalTextToBeStemmed . "<br/><br/>";
//-----------------------------------------------------------------------------
$ExplodeArray = explode(' ', trim($OriginalTextToBeStemmed));
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
for ($k = 0; $k <= $ExplodeArrayCount; $k++) {
    $StemmedText = $StemmedText . " " . $ExplodeArray[$k];
}
echo "New Stemmed Text => " . $StemmedText . "<br/>";
//-----------------------------------------------------------------------------
echo "-------------------------------------------------------------------<br/>";
echo str_pad(' ', 2048);
flush();
ob_flush();
//-----------------------------------------------------------------------------
//Close MySQL Connection
$MySQL->close();
ob_end_flush();
?>