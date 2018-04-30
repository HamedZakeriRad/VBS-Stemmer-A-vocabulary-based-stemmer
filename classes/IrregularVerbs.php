<?php

/**
 * Description of IrregularVerbs
 *
 * @author Hamed Zakeri Rad
 */

class IrregularVerbs {
    private $Word;
    
    public function IrregularVerbsCheck($Word){
        $this->Word = $Word;
        $this->IrregularVerb();
        return $this->Word;
    }
    
    private function IrregularVerb() {
        switch ($this->Word) {
            case "awoke":
                $this->Word = "awake";
                
                break;
            case "awoken":
                $this->Word = "awake";
                
                break;
            case "been":
                $this->Word = "be";
                
                break;
            case "became":
                $this->Word = "become";
                
                break;
            case "were":
                $this->Word = "be";
                
                break;
            case "was":
                $this->Word = "be";
                
                break;
            case "beaten":
                $this->Word = "beat";
                
                break;
            case "begun":
                $this->Word = "begin";
                
                break;
            case "began":
                $this->Word = "begin";
                
                break;
            case "bent":
                $this->Word = "bend";
                
                break;
            case "bitten":
                $this->Word = "bite";
                
                break;
            case "bit":
                $this->Word = "bite";
                
                break;
            case "blown":
                $this->Word = "blow";
                
                break;
            case "blew":
                $this->Word = "blow";
                
                break;
            case "broken":
                $this->Word = "break";
                
                break;
            case "broke":
                $this->Word = "break";
                
                break;
            case "brought":
                $this->Word = "bring";
                
                break;
            case "brought":
                $this->Word = "bring";
                
                break;
            case "burned":
                $this->Word = "burn";
                
                break;
            case "burnt":
                $this->Word = "burn";
                
                break;
            case "bought":
                $this->Word = "buy";
                
                break;
            case "caught":
                $this->Word = "catch";
                
                break;
            case "chosen":
                $this->Word = "choose";
                
                break;
            case "chose":
                $this->Word = "choose";
                
                break;
            case "came":
                $this->Word = "come";
                
                break;
            case "dug":
                $this->Word = "dig";
                
                break;
            case "done":
                $this->Word = "do";
                
                break;
            case "did":
                $this->Word = "do";
                
                break;
            case "drawn":
                $this->Word = "draw";
                
                break;
            case "drew":
                $this->Word = "draw";
                
                break;
            case "dreamt":
                $this->Word = "dream";
                
                break;
            case "dreamed":
                $this->Word = "dream";
                
                break;
            case "driven":
                $this->Word = "drive";
                
                break;
            case "drove":
                $this->Word = "drive";
                
                break;
            case "drunk":
                $this->Word = "drink";
                
                break;
            case "drank":
                $this->Word = "drink";
                
                break;
            case "eaten":
                $this->Word = "eat";
                
                break;
            case "ate":
                $this->Word = "eat";
                
                break;
            case "fallen":
                $this->Word = "fall";
                
                break;
            case "fell":
                $this->Word = "fall";
                
                break;
            case "felt":
                $this->Word = "feel";
                
                break;
            case "fought":
                $this->Word = "fight";
                
                break;
            case "found":
                $this->Word = "find";
                
                break;
            case "flown":
                $this->Word = "fly";
                
                break;
            case "flew":
                $this->Word = "fly";
                
                break;
            case "forgotten":
                $this->Word = "forget";
                
                break;
            case "forgot":
                $this->Word = "forget";
                
                break;
            case "forgiven":
                $this->Word = "forgive";
                
                break;
            case "forgave":
                $this->Word = "forgive";
                
                break;
            case "frozen":
                $this->Word = "freeze";
                
                break;
            case "froze":
                $this->Word = "freeze";
                
                break;
            case "gotten":
                $this->Word = "get";
                
                break;
            case "got":
                $this->Word = "get";
                
                break;
            case "given":
                $this->Word = "give";
                
                break;
            case "gave":
                $this->Word = "give";
                
                break;
            case "gone":
                $this->Word = "go";
                
                break;
            case "went":
                $this->Word = "go";
                
                break;
            case "grown":
                $this->Word = "grow";
                
                break;
            case "grew":
                $this->Word = "grow";
                
                break;
            case "hung":
                $this->Word = "hang";
                
                break;
            case "had":
                $this->Word = "have";
                
                break;
            case "heard":
                $this->Word = "hear";
                
                break;
            case "hidden":
                $this->Word = "hide";
                
                break;
            case "hid":
                $this->Word = "hide";
                
                break;
            case "held":
                $this->Word = "hold";
                
                break;
            case "kept":
                $this->Word = "keep";
                
                break;
            case "known":
                $this->Word = "know";
                
                break;
            case "knew":
                $this->Word = "know";
                
                break;
            case "laid":
                $this->Word = "lay";
                
                break;
            case "led":
                $this->Word = "lead";
                
                break;
            case "learnt":
                $this->Word = "learn";
                
                break;
            case "learned":
                $this->Word = "learn";
                
                break;
            case "left":
                $this->Word = "leave";
                
                break;
            case "lent":
                $this->Word = "lend";
                
                break;
            case "lain":
                $this->Word = "lie";
                
                break;
            case "lost":
                $this->Word = "lose";
                
                break;
            case "made":
                $this->Word = "make";
                
                break;
            case "meant":
                $this->Word = "mean";
                
                break;
            case "met":
                $this->Word = "meet";
                
                break;
            case "paid":
                $this->Word = "pay";
                
                break;
            case "ridden":
                $this->Word = "ride";
                
                break;
            case "rode":
                $this->Word = "ride";
                
                break;
            case "rung":
                $this->Word = "ring";
                
                break;
            case "rang":
                $this->Word = "ring";
                
                break;
            case "risen":
                $this->Word = "rise";
                
                break;
            case "rose":
                $this->Word = "rise";
                
                break;
            case "ran":
                $this->Word = "run";
                
                break;
            case "said":
                $this->Word = "say";
                
                break;
            case "seen":
                $this->Word = "see";
                
                break;
            case "saw":
                $this->Word = "see";
                
                break;
            case "sold":
                $this->Word = "sell";
                
                break;
            case "sent":
                $this->Word = "send";
                
                break;
            case "shown":
                $this->Word = "show";
                
                break;
            case "showed":
                $this->Word = "show";
                
                break;
            case "sung":
                $this->Word = "sing";
                
                break;
            case "sang":
                $this->Word = "sing";
                
                break;
            case "sat":
                $this->Word = "sit";
                
                break;
            case "slept":
                $this->Word = "sleep";
                
                break;
            case "spoken":
                $this->Word = "speak";
                
                break;
            case "spoke":
                $this->Word = "speak";
                
                break;
            case "spent":
                $this->Word = "spend";
                
                break;
            case "stood":
                $this->Word = "stand";
                
                break;
            case "swum":
                $this->Word = "swim";
                
                break;
            case "swam":
                $this->Word = "swim";
                
                break;
            case "taken":
                $this->Word = "take";
                
                break;
            case "took":
                $this->Word = "take";
                
                break;
            case "taught":
                $this->Word = "teach";
                
                break;
            case "torn":
                $this->Word = "tear";
                
                break;
            case "tore":
                $this->Word = "tear";
                
                break;
            case "told":
                $this->Word = "tell";
                
                break;
            case "thought":
                $this->Word = "think";
                
                break;
            case "thrown":
                $this->Word = "throw";
                
                break;
            case "threw":
                $this->Word = "throw";
                
                break;
            case "understood":
                $this->Word = "understand";
                
                break;
            case "woken":
                $this->Word = "wake";
                
                break;
            case "woke":
                $this->Word = "wake";
                
                break;
            case "worn":
                $this->Word = "wear";
                
                break;
            case "wore":
                $this->Word = "wear";
                
                break;
            case "won":
                $this->Word = "win";
                
                break;
            case "written":
                $this->Word = "write";
                
                break;
            case "wrote":
                $this->Word = "write";
                
                break;
            case "greediest":
                $this->Word = "greedy";
                
                break;
            case "striven":
                $this->Word = "strive";
                
                break;
            case "dealt":
                $this->Word = "deal";
                
                break;
            case "smote":
                $this->Word = "smite";
                
                break;
            case "remindings":
                $this->Word = "remind";
                
                break;
            case "clung":
                $this->Word = "cling";
                
                break;
            case "begot":
                $this->Word = "beget";
                
                break;
            case "withdrew":
                $this->Word = "withdraw";
                
                break;
            case "trodden":
                $this->Word = "tread";
                
                break;
            case "wept":
                $this->Word = "weep";
                
                break;
            case "hooves":
                $this->Word = "hoof";
                
                break;
            case "wives":
                $this->Word = "wifes";
                
                break;
            case "shayatin":
                $this->Word = "satans";
                
                break;
            case "shaitan":
                $this->Word = "satan";
                
                break;
            case "women":
                $this->Word = "woman";
                
                break;
            case "men":
                $this->Word = "man";
                
                break;
            case "prophethood":
                $this->Word = "prophet";
                
                break;
            case "swore":
                $this->Word = "swear";
                
                break;
            case "sworn":
                $this->Word = "swear";
                
                break;
            case "misled":
                $this->Word = "mislead";
                
                break;
            case "dwelt":
                $this->Word = "dwell";
                
                break;
            case "forbade":
                $this->Word = "forbid";
                
                break;
            case "forbidden":
                $this->Word = "forbid";
                
                break;
            case "lice":
                $this->Word = "louse";
                
                break;
            case "strove":
                $this->Word = "strive";
                
                break;
            case "arose":
                $this->Word = "arise";
                
                break;
            case "arisen":
                $this->Word = "arise";
                
                break;
            case "stolen":
                $this->Word = "steal";
                
                break;
            case "stole":
                $this->Word = "steal";
                
                break;
            case "beneficient":
                $this->Word = "benefit";
                
                break;
            case "overtaken":
                $this->Word = "overtake";
                
                break;
            case "overtook":
                $this->Word = "overtake";
                
                break;
            case "spun":
                $this->Word = "spin";
                
                break;
            case "forsaken":
                $this->Word = "forsake";
                
                break;
            case "sunk":
                $this->Word = "sink";
                
                break;
            case "sunken":
                $this->Word = "sink";
                
                break;
            case "dislikeness":
                $this->Word = "unlikeness";
                
                break;
            case "adornable":
                $this->Word = "adorn";
                
                break;
            case "better":
                $this->Word = "best";
                
                break;
            case "messengership":
                $this->Word = "messenger";
                
                break;
            case "judgement":
                $this->Word = "judgment";
                
                break;
        }
    }
}
