<?php

/**
 * Description of mySQLConnect
 *
 * @author Hamed Zakeri Rad
 */

//require_once 'mySQLConnect.php'; //Active this line if you need to Connect to MySQL directly from the class

require_once 'IrregularVerbs.php';
require_once 'SpecialWords.php';
require_once 'ExceptionalWords.php';
require_once 'PreFixStem.php';

class VbsStemmer {

    public $Word; //Word that should be Stemmed
    private $OriginalWord;
    private $Exit;
    private $RunPreFix = "No"; // Set To "Yes" if you need to Stem PreFixes also. (under development)
    private $IrregularVerbs;
    private $SpecialWords;
    private $ExceptionalWords;
    private $PreFixStem;
    //private $mySQLConnect;  //Active this line if you need to Connect to MySQL directly from the class
    
    function __construct() {
        //$this->mySQLConnect = new mySQLConnect(); //Active this line if you need to Connect to MySQL directly from the class
        //$this->mySQLConnect->connect(); //Active this line if you need to Connect to MySQL directly from the class

        $this->IrregularVerbs = new IrregularVerbs();
        $this->SpecialWords = new SpecialWords();
        $this->ExceptionalWords = new ExceptionalWords();
        $this->PreFixStem = new PreFixStem();
    }

    public function Stem() {
        $this->OriginalWord = $this->Word;
        $this->StemCheck();

        return $this->Word;
    }

    private function StemCheck() {
        if ($this->RunPreFix == "Yes") {
            $this->Word = $this->PreFixStem->PreFixCheck($this->Word);
        }
        $this->Word = $this->IrregularVerbs->IrregularVerbsCheck($this->Word);
        $this->Word = $this->SpecialWords->SpecialWordsCheck($this->Word);
        $this->Exit = $this->ExceptionalWords->ExceptionalWordsCheck($this->Word);
        for ($i = 0; $i < 5; $i++) {
            if ($this->Exit == "No" && strlen($this->Word) > 3) {
                $this->StemmerTypes();
            }
        }
    }

    private function StemmerRuns() {
        $this->Word = $this->SpecialWords->SpecialWordsCheck($this->Word);
        $this->Exit = $this->ExceptionalWords->ExceptionalWordsCheck($this->Word);
    }

    private function StemmerTypes() {
        if ((substr($this->Word, -3) == 'man' || substr($this->Word, -4) == 'like' || substr($this->Word, -4) == 'ship' || substr($this->Word, -5) == 'woman' || substr($this->Word, -4) == 'hood' || substr($this->Word, -4) == 'wise' || substr($this->Word, -3) == 'ful') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemEXT();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ize' || substr($this->Word, -3) == 'ise') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemIZE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ous') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemOUS();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ant' || substr($this->Word, -3) == 'ent') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemANT();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'al') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemAL();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'ee') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemEE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ian') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemIAN();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'ia') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemIA();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -1) == 'i') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemI();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -4) == 'able') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemABLE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -4) == 'ness') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemNESS();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -1) == 'y') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemY();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -4) == 'ance' || substr($this->Word, -4) == 'ence') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemANCE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'age') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemAGE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ish') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemISH();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -4) == 'ment') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemMENT();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'st') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemST();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'ie') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemIE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ism') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemISM();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'ic') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemIC();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ive') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemIVE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ate') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemATE();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ion') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemION();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -3) == 'ing') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemING();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'ed') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemED();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'ar') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemAR();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'er') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemER();
            $this->StemmerRuns();
        }
        if ((substr($this->Word, -2) == 'or') && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemOR();
            $this->StemmerRuns();
        }
        if (substr($this->Word, -1) == 's' && $this->Exit == "No") {
            $this->StemmerRuns();
            $this->StemS();
            $this->StemmerRuns();
        }
    }

    //--------------------------------------------------------------------------
    private function StemOR() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'or') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckOR();
        }
    }

    private function StemER() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'er') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckER();
        }
    }

    private function StemAR() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ar') {
            $this->Word = substr($this->Word, 0, -1);
            $this->CheckAR();
        }
    }

    private function StemED() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ed') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckED();
        }
    }

    private function StemING() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ing') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckING();
        }
    }

    private function StemION() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ion' && (substr($this->Word, -7) != 'ization' && substr($this->Word, -7) != 'isation')) {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckION();
            $this->StemmerRuns();
        } else if (substr($this->Word, -7) == 'isation' || substr($this->Word, -7) == 'ization') {
            if (substr($this->Word, -7) == 'isation') {
                $this->Word = substr($this->Word, 0, -7);
                $this->CheckISATION();
            }
            if (substr($this->Word, -7) == 'ization') {
                $this->StemmerRuns();
                if ($this->Exit == "No") {
                    $this->Word = substr($this->Word, 0, -7);
                    $this->CheckIZATION();
                }
                $this->StemmerRuns();
            }
        }
    }

    private function StemATE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ate') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckEY();
        }
    }

    private function StemIVE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -5) == 'ative') {
            $this->Word = substr($this->Word, 0, -5);
            $this->CheckATIVE();
        } else if (substr($this->Word, -3) == 'ive') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckEY();
        }
    }

    private function StemIC() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ic') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckIC();
        }
    }

    private function StemISM() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ism') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckISM();
        }
    }

    private function StemIE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ie') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckIE();
        }
    }

    private function StemST() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'est') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckEST();
            $this->StemmerRuns();
        } else if (substr($this->Word, -3) == 'ist') {
            $this->Word = substr($this->Word, 0, -1);
            $this->CheckIST();
            $this->StemmerRuns();
        }
    }

    private function StemMENT() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -4) == 'ment') {
            $this->Word = substr($this->Word, 0, -4);
            $this->Check();
        }
    }

    private function StemISH() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ish') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckISH();
        }
    }

    private function StemAGE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'age') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckAGE();
        }
    }

    private function StemANCE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -4) == 'ance' || substr($this->Word, -4) == 'ence') {
            $this->Word = substr($this->Word, 0, -4);
            $this->CheckANCE();
        }
    }

    private function StemY() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ry') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckRY();
            $this->StemmerRuns();
        } else if (substr($this->Word, -2) == 'ly') {
            if (substr($this->Word, -4) == 'ally') {
                $this->Word = substr($this->Word, 0, -4);
                $this->Check();
                $this->StemmerRuns();
            } else {
                $this->Word = substr($this->Word, 0, -2);
                $this->CheckLY();
                $this->StemmerRuns();
            }
        } else if (substr($this->Word, -2) == 'cy') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckCY();
            $this->StemmerRuns();
        } else if (substr($this->Word, -2) == 'ty') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckTY();
            $this->StemmerRuns();
        } else if (substr($this->Word, -2) == 'fy') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckFY();
            $this->StemmerRuns();
        } if (substr($this->Word, -1) == 'y') {
            $this->Word = substr($this->Word, 0, -1);
            $this->CheckY();
            $this->StemmerRuns();
        }
    }

    private function StemNESS() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -4) == 'ness') {
            $this->Word = substr($this->Word, 0, -4);
            $this->CheckNESS();
        }
    }

    private function StemABLE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -4) == 'able') {
            $this->Word = substr($this->Word, 0, -4);
            $this->CheckABLE();
        }
    }

    private function StemI() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -1) == 'i') {
            $this->Word = substr($this->Word, 0, -1);
            $this->Check();
        }
    }

    private function StemIA() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ia') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckIA();
        }
    }

    private function StemIAN() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ian') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckIAN();
        }
    }

    private function StemEE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'ee') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckEE();
        }
    }

    private function StemAL() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -2) == 'al') {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckAL();
        }
    }

    private function StemANT() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ant' || substr($this->Word, -3) == 'ent') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckANT();
        }
    }

    private function StemOUS() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ous') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckOUS();
        }
    }

    private function StemIZE() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == 'ise') {
            if (substr($this->Word, -4) == 'wise') {
                
            } else {
                $this->CheckISE();
                $this->StemmerRuns();
            }
        }
        if (substr($this->Word, -3) == 'ize' || substr($this->Word, -3) == 'ise') {
            $this->StemmerRuns();
            if ($this->Exit == "No") {
                $this->Word = substr($this->Word, 0, -3);
                $this->CheckEY();
                $this->StemmerRuns();
            }
        }
    }

    private function StemEXT() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -4) == 'like') {
            $this->Word = substr($this->Word, 0, -4);
            $this->Check();
            $this->StemmerRuns();
        } else if (substr($this->Word, -4) == 'ship') {
            $this->Word = substr($this->Word, 0, -4);
            $this->Check();
            $this->StemmerRuns();
        } else if (substr($this->Word, -5) == 'woman') {
            $this->Word = substr($this->Word, 0, -5);
            $this->Check();
            $this->StemmerRuns();
        } else if (substr($this->Word, -3) == 'man') {
            $this->Word = substr($this->Word, 0, -3);
            $this->Check();
            $this->StemmerRuns();
        } else if (substr($this->Word, -4) == 'hood') {
            $this->Word = substr($this->Word, 0, -4);
            $this->Check();
            $this->StemmerRuns();
        } else if (substr($this->Word, -4) == 'wise') {
            $this->Word = substr($this->Word, 0, -4);
            $this->Check();
            $this->StemmerRuns();
        } else if (substr($this->Word, -3) == 'ful') {
            $this->Word = substr($this->Word, 0, -3);
            $this->CheckFUL();
            $this->StemmerRuns();
        }
    }

    private function StemS() {
        $this->OriginalWord = $this->Word;
        if (substr($this->Word, -3) == "ies") {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckIES();
            $this->StemmerRuns();
        } else if (substr($this->Word, -2) == "es") {
            $this->Word = substr($this->Word, 0, -2);
            $this->CheckES();
            $this->StemmerRuns();
        } else if (substr($this->Word, -4) == "ress") {
            $this->Word = substr($this->Word, 0, -4);
            $this->CheckEY();
            $this->StemmerRuns();
        } else if (substr($this->Word, -1) == "s") {
            $this->Word = substr($this->Word, 0, -1);
            $this->CheckS();
            $this->StemmerRuns();
        }
    }

    //---------------------Stem Check-------------------------------------------
    private function CheckS() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckES() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -1);
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckIES() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -1);
                $this->Word = $this->Word . "y";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = $this->Word . "ie";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckEY() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "e";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckYE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "y";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "e";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckRY() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "r";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    if ((substr($this->Word, -1) == "a" || substr($this->Word, -1) == "o") && strlen($this->Word) > 3) {
                        $this->Word = substr($this->Word, 0, -1);
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $IsDouble = $this->CheckDubleLetter();
                            if ($IsDouble && strlen($this->Word) > 3) {
                                $this->Word = substr($this->Word, 0, -1);
                                $Result = $this->CheckDictionary();
                                if (!$Result) {
                                    $this->Word = $this->OriginalWord;
                                }
                            } else {
                                $this->CheckEY();
                            }
                        }
                    } else if ((substr($this->Word, -1) == "e") && strlen($this->Word) > 3) {
                        $this->Word = substr($this->Word, 0, -1);
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    } else {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckOUS() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "e") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->Word . "y";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    }
                } else if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->CheckEY();
                    }
                } else {
                    $this->CheckEY();
                }
            }
        }
    }

    private function CheckANT() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "i";
                        $this->Word = $this->Word . "ate";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = substr($this->Word, 0, -3);
                            $this->CheckEY();
                        }
                    }
                } else {
                    $this->Word = $this->Word . "ate";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -3);
                        $this->CheckEY();
                    }
                }
            }
        }
    }

    private function CheckAL() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->Word . "y";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = substr($this->Word, 0, -1);
                            $this->Word = $this->Word . "e";
                            $Result = $this->CheckDictionary();
                            if (!$Result) {
                                $this->Word = substr($this->Word, 0, -1);
                                $this->Word = $this->Word . "ia";
                                $Result = $this->CheckDictionary();
                                if (!$Result) {
                                    $this->Word = $this->OriginalWord;
                                }
                            }
                        }
                    }
                } else if ((substr($this->Word, -1) == "u") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->CheckEY();
                    }
                } else {
                    $this->Word = $this->Word . "a";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->CheckEY();
                    }
                }
            }
        }
    }

    private function CheckLY() {
        if (strlen($this->Word) < 4) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "l";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "y";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    } else {
                        $this->Word = $this->Word . "le";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    }
                }
            }
        }
    }

    private function CheckEE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "e";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckIAN() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "i";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = $this->Word . "a";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckIA() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "i";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->CheckEY();
                }
            }
        }
    }

    private function CheckABLE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $IsDouble = $this->CheckDubleLetter();
                if (!$IsDouble) {
                    $this->CheckEY();
                } else {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckNESS() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckY() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $IsDouble = $this->CheckDubleLetter();
                if ($IsDouble) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->Word . "e";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckFUL() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckCY() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "t") && strlen($this->Word) > 3) {
                    $this->Word = $this->Word . "e";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else if ((substr($this->Word, -1) == "a") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "e";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "ate";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    }
                } else if ((substr($this->Word, -1) == "n") && strlen($this->Word) > 3) {
                    $this->Word = $this->Word . "t";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckTY() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->CheckYE();
                    }
                } else {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckFY() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "e";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = substr($this->Word, 0, -1);
                            $this->Word = $this->Word . "ic";
                            $Result = $this->CheckDictionary();
                            if (!$Result) {
                                $this->Word = $this->OriginalWord;
                            }
                        }
                    }
                } else {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckANCE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->Word . "e";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->Word . "nt";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = substr($this->Word, 0, -3);
                            $this->Word = $this->Word . "ant";
                            $Result = $this->CheckDictionary();
                            if (!$Result) {
                                $this->Word = $this->OriginalWord;
                            }
                        }
                    }
                }
            }
        }
    }

    private function CheckAGE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "ed";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        if ((substr($this->Word, -1) == "i") && strlen($this->Word) > 3) {
                            $this->Word = substr($this->Word, 0, -1);
                            $this->Word = $this->Word . "y";
                            $Result = $this->CheckDictionary();
                            if (!$Result) {
                                $this->Word = $this->OriginalWord;
                            }
                        } else {
                            $this->Word = $this->OriginalWord;
                        }
                    }
                }
            }
        }
    }

    private function CheckISH() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "e";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $IsDouble = $this->CheckDubleLetter();
                    if ($IsDouble && strlen($this->Word) > 3) {
                        $this->Word = substr($this->Word, 0, -1);
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    } else {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckEST() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "e";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = $this->OriginalWord;
                }
            }
        }
    }

    private function CheckIE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = $this->Word . "y";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -1);
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $IsDouble = $this->CheckDubleLetter();
                    if ($IsDouble && strlen($this->Word) > 3) {
                        $this->Word = substr($this->Word, 0, -1);
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    } else {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckIST() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = $this->Word . "m";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -2);
                $this->Word = $this->Word . "a";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -2);
                    $this->Word = $this->Word . "al";
                    $Result = $this->CheckDictionary();
                    if (!$Result && strlen($this->Word) > 3) {
                        $this->Word = substr($this->Word, 0, -2);
                        $this->Word = $this->Word . "y";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = substr($this->Word, 0, -1);
                            $this->Word = $this->Word . "e";
                            $Result = $this->CheckDictionary();
                            if (!$Result) {
                                $this->Word = substr($this->Word, 0, -1);
                                $Result = $this->CheckDictionary();
                                if (!$Result) {
                                    $this->Word = $this->OriginalWord;
                                }
                            }
                        }
                    } else {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckISM() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = $this->Word . "c";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -1);
                $this->Word = $this->Word . "a";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -2);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "e";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = substr($this->Word, 0, -1);
                            $Result = $this->CheckDictionary();
                            if (!$Result) {
                                $this->Word = $this->OriginalWord;
                            }
                        }
                    }
                }
            }
        }
    }

    private function CheckISE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = substr($this->Word, 0, -3);
            $this->Word = $this->Word . "ize";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            } else {
                $this->OriginalWord = $this->Word;
            }
        }
    }

    private function CheckIC() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "s";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "e";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->CheckTIC();
                        }
                    }
                }
            }
        }
    }

    private function CheckTIC() {
        $this->Word = substr($this->Word, 0, -1);
        if ((substr($this->Word, -1) == "t") && strlen($this->Word) > 3) {
            $this->Word = substr($this->Word, 0, -1);
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "a") && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->OriginalWord;
                }
            }
        } else {
            $this->Word = $this->OriginalWord;
        }
    }

    private function CheckION() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            if ((substr($this->Word, -1) == "t")) {
                $this->CheckTION();
            } else {
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->CheckEY();
                }
            }
        }
    }

    private function CheckTION() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = substr($this->Word, 0, -1);
            if ((substr($this->Word, -1) == "a")) {
                $this->Word = substr($this->Word, 0, -1);
                $IsDouble = $this->CheckDubleLetter();
                if ($IsDouble && strlen($this->Word) > 3) {
                    $this->Word = substr($this->Word, 0, -1);
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                } else {
                    $this->Word = $this->Word . "a";
                    $this->CheckTION_T_E();
                }
            } else {
                $this->CheckTION_T_E();
            }
        }
    }

    private function CheckTION_T_E() {
        $this->Word = $this->Word . "t";
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckISATION() {
        $this->Word = $this->Word . "ization";
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = substr($this->Word, 0, -5);
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckIZATION() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -1);
                $this->Word = $this->Word . "y";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "ize";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = $this->OriginalWord;
                    }
                }
            }
        }
    }

    private function CheckING() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "y")) {
                    $this->CheckYING();
                } else {
                    $this->Check_ING();
                }
            }
        }
    }

    private function Check_ING() {
        $IsDouble = $this->CheckDubleLetter();
        if ($IsDouble && strlen($this->Word) > 3) {
            $this->Word = substr($this->Word, 0, -1);
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        } else {
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckYING() {
        $this->Word = substr($this->Word, 0, -1);
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = $this->Word . "ie";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckED() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i")) {
                    $this->CheckIED();
                } else {
                    $this->Check_ED();
                }
            }
        }
    }

    private function Check_ED() {
        $IsDouble = $this->CheckDubleLetter();
        if ($IsDouble && strlen($this->Word) > 3) {
            $this->Word = substr($this->Word, 0, -1);
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        } else {
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckIED() {
        $this->Word = substr($this->Word, 0, -1);
        $this->Word = $this->Word . "y";
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = $this->OriginalWord;
        }
    }

    private function CheckAR() {
        if (strlen($this->Word) < 4) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = substr($this->Word, 0, -1);
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = $this->Word . "e";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Check_AR();
                    }
                }
            }
        }
    }

    private function Check_AR() {
        $this->Word = substr($this->Word, 0, -1);
        $IsDouble = $this->CheckDubleLetter();
        if ($IsDouble && strlen($this->Word) > 3) {
            $this->Word = substr($this->Word, 0, -1);
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        } else {
            $this->Word = $this->OriginalWord;
        }
    }

    private function CheckER() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                if ((substr($this->Word, -1) == "i")) {
                    $this->CheckIER();
                } else {
                    $this->Check_ER();
                }
            }
        }
    }

    private function Check_ER() {
        $this->Word = $this->Word . "e";
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = substr($this->Word, 0, -1);
            $this->Check_2ER();
        }
    }

    private function Check_2ER() {
        $IsDouble = $this->CheckDubleLetter();
        if ($IsDouble && strlen($this->Word) > 3) {
            $this->Word = substr($this->Word, 0, -1);
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        } else {
            $this->Word = $this->OriginalWord;
        }
    }

    private function CheckIER() {
        $this->Word = $this->Word . "e";
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = substr($this->Word, 0, -2);
            $this->Word = $this->Word . "y";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckOR() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "our";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Check_OR();
                }
            }
        }
    }

    private function Check_OR() {
        $this->Word = substr($this->Word, 0, -3);
        $this->Word = $this->Word . "ur";
        $Result = $this->CheckDictionary();
        if (!$Result) {
            $this->Word = substr($this->Word, 0, -2);
            $this->Word = $this->Word . "e";
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    private function CheckATIVE() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->Word . "e";
                $Result = $this->CheckDictionary();
                if (!$Result) {
                    $this->Word = substr($this->Word, 0, -1);
                    $this->Word = $this->Word . "y";
                    $Result = $this->CheckDictionary();
                    if (!$Result) {
                        $this->Word = substr($this->Word, 0, -1);
                        $this->Word = $this->Word . "ate";
                        $Result = $this->CheckDictionary();
                        if (!$Result) {
                            $this->Word = $this->OriginalWord;
                        }
                    }
                }
            }
        }
    }

    private function Check() {
        if (strlen($this->Word) < 3) {
            $this->Word = $this->OriginalWord;
        } else {
            $Result = $this->CheckDictionary();
            if (!$Result) {
                $this->Word = $this->OriginalWord;
            }
        }
    }

    //---------------------Database Control-------------------------------------
    private function CheckDictionary() {
        $Result = $this->MySQlQuery("SELECT word FROM vocabulary_baked WHERE word = '$this->Word' ;");
        if ((!$Result && (substr($this->Word, -1) == 's')) && strlen($this->Word) < 3) {
            $this->Word = substr($this->Word, 0, -1);
            $Result = $this->MySQlQuery("SELECT word FROM vocabulary_baked WHERE word = '$this->Word' ;");
        }
        return $Result;
    }

    private function MySQlQuery($sql) {

        $pResult = mysql_query($sql);
        return mysql_fetch_object($pResult);
    }

    //--------------------------------------------------------------------------
    private function CheckDubleLetter() {
        $DubleLetter = FALSE;
        $Check = substr($this->Word, -1);
        if (substr($this->Word, -2, 1) == $Check) {
            $DubleLetter = TRUE;
        }
        return $DubleLetter;
    }

}
