<?php

/**
 * Description of fileReaderAndWriter
 *
 * @author Hamed Zakeri Rad
 */
class fileReaderAndWriter {

    public $FileName;
    public $LineToBeWrite;
    
    private $TargetFileHandler;
    private $TargetFileArray = array();

    public function WriteToFile() {
        $this->TargetFileHandler = fopen($this->FileName, "a");
        fprintf($this->TargetFileHandler, $this->LineToBeWrite); // "\n"
        fclose($this->TargetFileHandler);
    }
    public function ReadFile(){
        $this->TargetFileHandler = fopen($this->FileName, "r");
        while (!feof($this->TargetFileHandler)) {
            $Temp = fgets($this->TargetFileHandler);
            $TargetFileArrayTemp = $this->RemoveSpecialChar($Temp);
            $this->TargetFileArray[] = $TargetFileArrayTemp;
        }
        fclose($this->TargetFileHandler);
        return $this->TargetFileArray;
    }
    
    
    private function RemoveSpecialChar($Temp){
    $TargetFileArrayTemp = strtolower($Temp);
    $RepMessage = str_replace("’", "'", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("‘", "'", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("”", "\"", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("“", "\"", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("", " ", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("'s ", " ", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("'", "", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    $RepMessage = str_replace("%", "%%", $TargetFileArrayTemp);
    $TargetFileArrayTemp = $RepMessage;
    
    return $TargetFileArrayTemp;
    }

}
