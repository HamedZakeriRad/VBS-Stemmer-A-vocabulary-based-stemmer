<?php

/**
 * Description of IrregularVerbs
 *
 * @author Hamed Zakeri Rad
 */
class PreFixStem {
    //-------------------
    private $ConnectDB;
    private $Word;
    //-------------------
    public function PreFixCheck($Word, $ConnectDB) {
        $this->ConnectDB = $ConnectDB;
        $this->Word = $Word;
        $this->PreFixStems();
        return $this->Word;
    }

    private function PreFixStems() {
        // You Can Add Functions To Check For PreFixes
        $this->CheckDictionary();
    }

    //---------------------Database Control-------------------------------------
    private function CheckDictionary() {
        $Result = $this->ConnectDB->Select("SELECT word FROM vocabulary WHERE Word = '$this->Word' ;");
        return $Result;
    }

//--------------------------------------------------------------------------
}
