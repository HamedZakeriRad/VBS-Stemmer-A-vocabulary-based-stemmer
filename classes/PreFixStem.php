<?php

/**
 * Description of IrregularVerbs
 *
 * @author Hamed Zakeri Rad
 */

class PreFixStem {
    private $Word;
    
    public function PreFixCheck($Word){
        $this->Word = $Word;
        $this->PreFixStems();
        return $this->Word;
    }
    private function PreFixStems(){
        
    }
    
    
    
    
    
    
    //---------------------Database Control-------------------------------------
    private function CheckDictionary() {
        $Result = $this->MySQlQuery("SELECT word FROM vocabulary WHERE Word = '$this->Word' ;");
        return $Result;
    }

    private function MySQlQuery($sql) {

        $pResult = mysql_query($sql);
        return mysql_fetch_object($pResult);
    }
    //--------------------------------------------------------------------------
}
