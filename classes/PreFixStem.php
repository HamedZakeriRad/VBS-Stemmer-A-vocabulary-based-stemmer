<?php

/**
 * Description of IrregularVerbs
 *
 * @author Hamed Zakeri Rad
 */
class PreFixStem {
    //-------------------
    public $mySQLConnect;
    //-------------------
    private $Word;
    //-------------------
    public function PreFixCheck($Word) {
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
        $Result = $this->mySQLConnect->Select("SELECT word FROM vocabulary WHERE Word = '$this->Word' ;");
        return $Result;
    }

//--------------------------------------------------------------------------
}
