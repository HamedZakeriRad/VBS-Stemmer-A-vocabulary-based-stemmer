<?php

/**
 * Description of ExceptionalWords
 *
 * @author Hamed Zakeri Rad
 */

class ExceptionalWords {
    private $Word;
    private $Exit;
    
    public function ExceptionalWordsCheck($Word){
        
        $this->Word = $Word;
        $this->Exit = "No";
        $this->ExceptionalWord();
        return $this->Exit;
    }
    private function ExceptionalWord(){
        switch ($this->Word) {
            case "hood":
                $this->Exit = "Yes";
                break;
            case "robin hood": 
                $this->Exit = "Yes";
                break;
            case "alderman":
                $this->Exit = "Yes";
                break;
            case "bagman":
                $this->Exit = "Yes";
                break;
            case "batman":
                $this->Exit = "Yes";
                break;
            case "aircraftman":
                $this->Exit = "Yes";
                break;
            case "backwoodsman":
                $this->Exit = "Yes";
                break;
            case "batsman":
                $this->Exit = "Yes";
                break;
            case "bedesman":
                $this->Exit = "Yes";
                break;
            case "bellman":
                $this->Exit = "Yes";
                break;
            case "bergman":
                $this->Exit = "Yes";
                break;
            case "bondman":
                $this->Exit = "Yes";
                break;
            case "bondwoman":
                $this->Exit = "Yes";
                break;
            case "bookman":
                $this->Exit = "Yes";
                break;
            case "chapman":
                $this->Exit = "Yes";
                break;
            case "cowman":
                $this->Exit = "Yes";
                break;
            case "cracksman":
                $this->Exit = "Yes";
                break;
            case "deskman":
                $this->Exit = "Yes";
                break;
            case "draughtsman":
                $this->Exit = "Yes";
                break;
            case "eastman":
                $this->Exit = "Yes";
                break;
            case "everyman":
                $this->Exit = "Yes";
                break;
            case "fieldsman":
                $this->Exit = "Yes";
                break;
            case "footman":
                $this->Exit = "Yes";
                break;
            case "freshman":
                $this->Exit = "Yes";
                break;
            case "friedman":
                $this->Exit = "Yes";
                break;
            case "frogman":
                $this->Exit = "Yes";
                break;
            case "goldman":
                $this->Exit = "Yes";
                break;
            case "goodman":
                $this->Exit = "Yes";
                break;
            case "hellman":
                $this->Exit = "Yes";
                break;
            case "hodman":
                $this->Exit = "Yes";
                break;
            case "husbandman":
                $this->Exit = "Yes";
                break;
            case "ironman":
                $this->Exit = "Yes";
                break;
            case "ledgeman":
                $this->Exit = "Yes";
                break;
            case "lighterman":
                $this->Exit = "Yes";
                break;
            case "linkman":
                $this->Exit = "Yes";
                break;
            case "marksman":
                $this->Exit = "Yes";
                break;
            case "matman":
                $this->Exit = "Yes";
                break;
            case "minuteman":
                $this->Exit = "Yes";
                break;
            case "needlewoman":
                $this->Exit = "Yes";
                break;
            case "northman":
                $this->Exit = "Yes";
                break;
            case "nurseryman":
                $this->Exit = "Yes";
                break;
            case "orangeman":
                $this->Exit = "Yes";
                break;
            case "packman":
                $this->Exit = "Yes";
                break;
            case "pitchman":
                $this->Exit = "Yes";
                break;
            case "pitman":
                $this->Exit = "Yes";
                break;
            case "placeman":
                $this->Exit = "Yes";
                break;
            case "potman":
                $this->Exit = "Yes";
                break;
            case "pullman":
                $this->Exit = "Yes";
                break;
            case "ramman":
                $this->Exit = "Yes";
                break;
            case "schoolman":
                $this->Exit = "Yes";
                break;
            case "sidesman":
                $this->Exit = "Yes";
                break;
            case "stayman":
                $this->Exit = "Yes";
                break;
            case "steinman":
                $this->Exit = "Yes";
                break;
            case "superman":
                $this->Exit = "Yes";
                break;
            case "swagman":
                $this->Exit = "Yes";
                break;
            case "switchman":
                $this->Exit = "Yes";
                break;
            case "tasman":
                $this->Exit = "Yes";
                break;
            case "triggerman":
                $this->Exit = "Yes";
                break;
            case "tubman":
                $this->Exit = "Yes";
                break;
            case "underclassman":
                $this->Exit = "Yes";
                break;
            case "walkman":
                $this->Exit = "Yes";
                break;
            case "waterman":
                $this->Exit = "Yes";
                break;
            case "whitman":
                $this->Exit = "Yes";
                break;
            case "wingman":
                $this->Exit = "Yes";
                break;
            case "wireman":
                $this->Exit = "Yes";
                break;
            case "zeeman":
                $this->Exit = "Yes";
                break;
            case "like":
                $this->Exit = "Yes";
                break;
            case "dislike":
                $this->Exit = "Yes";
                break;
            case "suchlike":
                $this->Exit = "Yes";
                break;
            case "battleship":
                $this->Exit = "Yes";
                break;
            case "cattleship":
                $this->Exit = "Yes";
                break;
            case "fellowship":
                $this->Exit = "Yes";
                break;
            case "ship":
                $this->Exit = "Yes";
                break;
            case "starship":
                $this->Exit = "Yes";
                break;
            case "spaceship":
                $this->Exit = "Yes";
                break;
            case "abies":
                $this->Exit = "Yes";
                break;
            case "acres":
                $this->Exit = "Yes";
                break;
            case "acts":
                $this->Exit = "Yes";
                break;
            case "adams":
                $this->Exit = "Yes";
                break;
            case "afters":
                $this->Exit = "Yes";
                break;
            case "aides":
                $this->Exit = "Yes";
                break;
            case "aids":
                $this->Exit = "Yes";
                break;
            case "airs":
                $this->Exit = "Yes";
                break;
            case "alas":
                $this->Exit = "Yes";
                break;
            case "amends":
                $this->Exit = "Yes";
                break;
            case "amnios":
                $this->Exit = "Yes";
                break;
            case "anas":
                $this->Exit = "Yes";
                break;
            case "andrews":
                $this->Exit = "Yes";
                break;
            case "anseres":
                $this->Exit = "Yes";
                break;
            case "anus":
                $this->Exit = "Yes";
                break;
            case "apologetics":
                $this->Exit = "Yes";
                break;
            case "aras":
                $this->Exit = "Yes";
                break;
            case "arms":
                $this->Exit = "Yes";
                break;
            case "atmospherics":
                $this->Exit = "Yes";
                break;
            case "auspices":
                $this->Exit = "Yes";
                break;
            case "baas":
                $this->Exit = "Yes";
                break;
            case "bayes":
                $this->Exit = "Yes";
                break;
            case "bellows":
                $this->Exit = "Yes";
                break;
            case "bends":
                $this->Exit = "Yes";
                break;
            case "billings":
                $this->Exit = "Yes";
                break;
            case "blahs":
                $this->Exit = "Yes";
                break;
            case "blinks":
                $this->Exit = "Yes";
                break;
            case "bloomers":
                $this->Exit = "Yes";
                break;
            case "bollocks":
                $this->Exit = "Yes";
                break;
            case "bootes":
                $this->Exit = "Yes";
                break;
            case "boss":
                $this->Exit = "Yes";
                break;
            case "bowels":
                $this->Exit = "Yes";
                break;
            case "boxcars":
                $this->Exit = "Yes";
                break;
            case "breeches":
                $this->Exit = "Yes";
                break;
            case "bridges":
                $this->Exit = "Yes";
                break;
            case "brooks":
                $this->Exit = "Yes";
                break;
            case "buns":
                $this->Exit = "Yes";
                break;
            case "burns":
                $this->Exit = "Yes";
                break;
            case "buss":
                $this->Exit = "Yes";
                break;
            case "callas":
                $this->Exit = "Yes";
                break;
            case "canaries":
                $this->Exit = "Yes";
                break;
            case "caribees":
                $this->Exit = "Yes";
                break;
            case "cascades":
                $this->Exit = "Yes";
                break;
            case "ceres":
                $this->Exit = "Yes";
                break;
            case "chambers":
                $this->Exit = "Yes";
                break;
            case "civics":
                $this->Exit = "Yes";
                break;
            case "cleavers":
                $this->Exit = "Yes";
                break;
            case "clews":
                $this->Exit = "Yes";
                break;
            case "cornus":
                $this->Exit = "Yes";
                break;
            case "corps":
                $this->Exit = "Yes";
                break;
            case "coss":
                $this->Exit = "Yes";
                break;
            case "craps":
                $this->Exit = "Yes";
                break;
            case "crookes":
                $this->Exit = "Yes";
                break;
            case "curtiss":
                $this->Exit = "Yes";
                break;
            case "curtis":
                $this->Exit = "Yes";
                break;
            case "danaus":
                $this->Exit = "Yes";
                break;
            case "davys":
                $this->Exit = "Yes";
                break;
            case "dawes":
                $this->Exit = "Yes";
                break;
            case "debs":
                $this->Exit = "Yes";
                break;
            case "deeds":
                $this->Exit = "Yes";
                break;
            case "dias":
                $this->Exit = "Yes";
                break;
            case "discuss":
                $this->Exit = "Yes";
                break;
            case "diss":
                $this->Exit = "Yes";
                break;
            case "doss":
                $this->Exit = "Yes";
                break;
            case "douglass":
                $this->Exit = "Yes";
                break;
            case "duds":
                $this->Exit = "Yes";
                break;
            case "dulles":
                $this->Exit = "Yes";
                break;
            case "dumas":
                $this->Exit = "Yes";
                break;
            case "dumps":
                $this->Exit = "Yes";
                break;
            case "edwards":
                $this->Exit = "Yes";
                break;
            case "eighties":
                $this->Exit = "Yes";
                break;
            case "evers":
                $this->Exit = "Yes";
                break;
            case "faroes":
                $this->Exit = "Yes";
                break;
            case "fess":
                $this->Exit = "Yes";
                break;
            case "fields":
                $this->Exit = "Yes";
                break;
            case "fifties":
                $this->Exit = "Yes";
                break;
            case "fives":
                $this->Exit = "Yes";
                break;
            case "forties":
                $this->Exit = "Yes";
                break;
            case "fries":
                $this->Exit = "Yes";
                break;
            case "ganges":
                $this->Exit = "Yes";
                break;
            case "gens":
                $this->Exit = "Yes";
                break;
            case "genus":
                $this->Exit = "Yes";
                break;
            case "gobs":
                $this->Exit = "Yes";
                break;
            case "graves":
                $this->Exit = "Yes";
                break;
            case "greaves":
                $this->Exit = "Yes";
                break;
            case "gripes":
                $this->Exit = "Yes";
                break;
            case "grits":
                $this->Exit = "Yes";
                break;
            case "groats":
                $this->Exit = "Yes";
                break;
            case "groves":
                $this->Exit = "Yes";
                break;
            case "gyps":
                $this->Exit = "Yes";
                break;
            case "hanks":
                $this->Exit = "Yes";
                break;
            case "hayes":
                $this->Exit = "Yes";
                break;
            case "hays":
                $this->Exit = "Yes";
                break;
            case "huss":
                $this->Exit = "Yes";
                break;
            case "ironsides":
                $this->Exit = "Yes";
                break;
            case "isis":
                $this->Exit = "Yes";
                break;
            case "jacobs":
                $this->Exit = "Yes";
                break;
            case "jakes":
                $this->Exit = "Yes";
                break;
            case "james":
                $this->Exit = "Yes";
                break;
            case "jaspers":
                $this->Exit = "Yes";
                break;
            case "jimmies":
                $this->Exit = "Yes";
                break;
            case "jitters":
                $this->Exit = "Yes";
                break;
            case "johns":
                $this->Exit = "Yes";
                break;
            case "judas":
                $this->Exit = "Yes";
                break;
            case "junkers":
                $this->Exit = "Yes";
                break;
            case "kurus":
                $this->Exit = "Yes";
                break;
            case "lamentations":
                $this->Exit = "Yes";
                break;
            case "lancers":
                $this->Exit = "Yes";
                break;
            case "lates":
                $this->Exit = "Yes";
                break;
            case "lats":
                $this->Exit = "Yes";
                break;
            case "levis":
                $this->Exit = "Yes";
                break;
            case "limbers":
                $this->Exit = "Yes";
                break;
            case "links":
                $this->Exit = "Yes";
                break;
            case "logos":
                $this->Exit = "Yes";
                break;
            case "loos":
                $this->Exit = "Yes";
                break;
            case "lowlands":
                $this->Exit = "Yes";
                break;
            case "lyons":
                $this->Exit = "Yes";
                break;
            case "manes":
                $this->Exit = "Yes";
                break;
            case "maritimes":
                $this->Exit = "Yes";
                break;
            case "mars":
                $this->Exit = "Yes";
                break;
            case "martes":
                $this->Exit = "Yes";
                break;
            case "mays":
                $this->Exit = "Yes";
                break;
            case "metrics":
                $this->Exit = "Yes";
                break;
            case "mews":
                $this->Exit = "Yes";
                break;
            case "monas":
                $this->Exit = "Yes";
                break;
            case "mons":
                $this->Exit = "Yes";
                break;
            case "mopes":
                $this->Exit = "Yes";
                break;
            case "mores":
                $this->Exit = "Yes";
                break;
            case "muss":
                $this->Exit = "Yes";
                break;
            case "najas":
                $this->Exit = "Yes";
                break;
            case "news":
                $this->Exit = "Yes";
                break;
            case "nineties":
                $this->Exit = "Yes";
                break;
            case "oates":
                $this->Exit = "Yes";
                break;
            case "odds":
                $this->Exit = "Yes";
                break;
            case "owens":
                $this->Exit = "Yes";
                break;
            case "pains":
                $this->Exit = "Yes";
                break;
            case "parks":
                $this->Exit = "Yes";
                break;
            case "parsons":
                $this->Exit = "Yes";
                break;
            case "pass":
                $this->Exit = "Yes";
                break;
            case "passeres":
                $this->Exit = "Yes";
                break;
            case "peanuts":
                $this->Exit = "Yes";
                break;
            case "pliers":
                $this->Exit = "Yes";
                break;
            case "poitiers":
                $this->Exit = "Yes";
                break;
            case "privates":
                $this->Exit = "Yes";
                break;
            case "props":
                $this->Exit = "Yes";
                break;
            case "proverbs":
                $this->Exit = "Yes";
                break;
            case "provos":
                $this->Exit = "Yes";
                break;
            case "pubes":
                $this->Exit = "Yes";
                break;
            case "puss":
                $this->Exit = "Yes";
                break;
            case "pyrenees":
                $this->Exit = "Yes";
                break;
            case "pythias":
                $this->Exit = "Yes";
                break;
            case "queens":
                $this->Exit = "Yes";
                break;
            case "quits":
                $this->Exit = "Yes";
                break;
            case "raffles":
                $this->Exit = "Yes";
                break;
            case "rastas":
                $this->Exit = "Yes";
                break;
            case "ribes":
                $this->Exit = "Yes";
                break;
            case "roberts":
                $this->Exit = "Yes";
                break;
            case "rounders":
                $this->Exit = "Yes";
                break;
            case "ruddles":
                $this->Exit = "Yes";
                break;
            case "sass":
                $this->Exit = "Yes";
                break;
            case "scads":
                $this->Exit = "Yes";
                break;
            case "scopes":
                $this->Exit = "Yes";
                break;
            case "scours":
                $this->Exit = "Yes";
                break;
            case "scraps":
                $this->Exit = "Yes";
                break;
            case "scrubs":
                $this->Exit = "Yes";
                break;
            case "sebs":
                $this->Exit = "Yes";
                break;
            case "sens":
                $this->Exit = "Yes";
                break;
            case "sevens":
                $this->Exit = "Yes";
                break;
            case "seventies":
                $this->Exit = "Yes";
                break;
            case "shakers":
                $this->Exit = "Yes";
                break;
            case "shambles":
                $this->Exit = "Yes";
                break;
            case "silks":
                $this->Exit = "Yes";
                break;
            case "sills":
                $this->Exit = "Yes";
                break;
            case "siss":
                $this->Exit = "Yes";
                break;
            case "sixties":
                $this->Exit = "Yes";
                break;
            case "smuts":
                $this->Exit = "Yes";
                break;
            case "solomons":
                $this->Exit = "Yes";
                break;
            case "sprites":
                $this->Exit = "Yes";
                break;
            case "staggers":
                $this->Exit = "Yes";
                break;
            case "stopes":
                $this->Exit = "Yes";
                break;
            case "stops":
                $this->Exit = "Yes";
                break;
            case "strangles":
                $this->Exit = "Yes";
                break;
            case "succuss":
                $this->Exit = "Yes";
                break;
            case "sundries":
                $this->Exit = "Yes";
                break;
            case "tabes":
                $this->Exit = "Yes";
                break;
            case "tails":
                $this->Exit = "Yes";
                break;
            case "taos":
                $this->Exit = "Yes";
                break;
            case "taxis":
                $this->Exit = "Yes";
                break;
            case "teens":
                $this->Exit = "Yes";
                break;
            case "teras":
                $this->Exit = "Yes";
                break;
            case "termes":
                $this->Exit = "Yes";
                break;
            case "thebes":
                $this->Exit = "Yes";
                break;
            case "thirties":
                $this->Exit = "Yes";
                break;
            case "tigers":
                $this->Exit = "Yes";
                break;
            case "tours":
                $this->Exit = "Yes";
                break;
            case "townes":
                $this->Exit = "Yes";
                break;
            case "trembles":
                $this->Exit = "Yes";
                break;
            case "turps":
                $this->Exit = "Yes";
                break;
            case "twenties":
                $this->Exit = "Yes";
                break;
            case "vespers":
                $this->Exit = "Yes";
                break;
            case "waders":
                $this->Exit = "Yes";
                break;
            case "wages":
                $this->Exit = "Yes";
                break;
            case "wales":
                $this->Exit = "Yes";
                break;
            case "welles":
                $this->Exit = "Yes";
                break;
            case "wells":
                $this->Exit = "Yes";
                break;
            case "withers":
                $this->Exit = "Yes";
                break;
            case "yaws":
                $this->Exit = "Yes";
                break;
            case "yips":
                $this->Exit = "Yes";
                break;
            case "acerate":
                $this->Exit = "Yes";
                break;
            case "amalgamate":
                $this->Exit = "Yes";
                break;
            case "animate":
                $this->Exit = "Yes";
                break;
            case "annulate":
                $this->Exit = "Yes";
                break;
            case "aspirate":
                $this->Exit = "Yes";
                break;
            case "authenticate":
                $this->Exit = "Yes";
                break;
            case "barbate":
                $this->Exit = "Yes";
                break;
            case "barbellate":
                $this->Exit = "Yes";
                break;
            case "bichromate":
                $this->Exit = "Yes";
                break;
            case "binate":
                $this->Exit = "Yes";
                break;
            case "borate":
                $this->Exit = "Yes";
                break;
            case "bullate":
                $this->Exit = "Yes";
                break;
            case "candidate":
                $this->Exit = "Yes";
                break;
            case "carafate":
                $this->Exit = "Yes";
                break;
            case "caseate":
                $this->Exit = "Yes";
                break;
            case "cerate":
                $this->Exit = "Yes";
                break;
            case "chordate":
                $this->Exit = "Yes";
                break;
            case "comate":
                $this->Exit = "Yes";
                break;
            case "commutate":
                $this->Exit = "Yes";
                break;
            case "concentrate":
                $this->Exit = "Yes";
                break;
            case "connate":
                $this->Exit = "Yes";
                break;
            case "cooperate":
                $this->Exit = "Yes";
                break;
            case "cordate":
                $this->Exit = "Yes";
                break;
            case "costate":
                $this->Exit = "Yes";
                break;
            case "create":
                $this->Exit = "Yes";
                break;
            case "crispate":
                $this->Exit = "Yes";
                break;
            case "debate":
                $this->Exit = "Yes";
                break;
            case "dentate":
                $this->Exit = "Yes";
                break;
            case "deviate":
                $this->Exit = "Yes";
                break;
            case "dominate":
                $this->Exit = "Yes";
                break;
            case "donate":
                $this->Exit = "Yes";
                break;
            case "educate":
                $this->Exit = "Yes";
                break;
            case "estate":
                $this->Exit = "Yes";
                break;
            case "fellate":
                $this->Exit = "Yes";
                break;
            case "gyrate":
                $this->Exit = "Yes";
                break;
            case "hamate":
                $this->Exit = "Yes";
                break;
            case "hastate":
                $this->Exit = "Yes";
                break;
            case "humate":
                $this->Exit = "Yes";
                break;
            case "indicate":
                $this->Exit = "Yes";
                break;
            case "innate":
                $this->Exit = "Yes";
                break;
            case "insolate":
                $this->Exit = "Yes";
                break;
            case "interpolate":
                $this->Exit = "Yes";
                break;
            case "lacerate":
                $this->Exit = "Yes";
                break;
            case "lanate":
                $this->Exit = "Yes";
                break;
            case "legate":
                $this->Exit = "Yes";
                break;
            case "levitate":
                $this->Exit = "Yes";
                break;
            case "literate":
                $this->Exit = "Yes";
                break;
            case "lustrate":
                $this->Exit = "Yes";
                break;
            case "luxate":
                $this->Exit = "Yes";
                break;
            case "macerate":
                $this->Exit = "Yes";
                break;
            case "maculate":
                $this->Exit = "Yes";
                break;
            case "maleate":
                $this->Exit = "Yes";
                break;
            case "mandate":
                $this->Exit = "Yes";
                break;
            case "margate":
                $this->Exit = "Yes";
                break;
            case "marinate":
                $this->Exit = "Yes";
                break;
            case "masticate":
                $this->Exit = "Yes";
                break;
            case "miniate":
                $this->Exit = "Yes";
                break;
            case "modulate":
                $this->Exit = "Yes";
                break;
            case "mutate":
                $this->Exit = "Yes";
                break;
            case "neonate":
                $this->Exit = "Yes";
                break;
            case "novate":
                $this->Exit = "Yes";
                break;
            case "nutate":
                $this->Exit = "Yes";
                break;
            case "palate":
                $this->Exit = "Yes";
                break;
            case "pectinate":
                $this->Exit = "Yes";
                break;
            case "peltate":
                $this->Exit = "Yes";
                break;
            case "pennate":
                $this->Exit = "Yes";
                break;
            case "peregrinate":
                $this->Exit = "Yes";
                break;
            case "pilate":
                $this->Exit = "Yes";
                break;
            case "placate":
                $this->Exit = "Yes";
                break;
            case "planate":
                $this->Exit = "Yes";
                break;
            case "primate":
                $this->Exit = "Yes";
                break;
            case "prolate":
                $this->Exit = "Yes";
                break;
            case "pupate":
                $this->Exit = "Yes";
                break;
            case "ramate":
                $this->Exit = "Yes";
                break;
            case "rotate":
                $this->Exit = "Yes";
                break;
            case "saltate":
                $this->Exit = "Yes";
                break;
            case "satiate":
                $this->Exit = "Yes";
                break;
            case "senate":
                $this->Exit = "Yes";
                break;
            case "septate":
                $this->Exit = "Yes";
                break;
            case "shogunate":
                $this->Exit = "Yes";
                break;
            case "solvate":
                $this->Exit = "Yes";
                break;
            case "sphacelate":
                $this->Exit = "Yes";
                break;
            case "spicate":
                $this->Exit = "Yes";
                break;
            case "stipulate":
                $this->Exit = "Yes";
                break;
            case "syndicate":
                $this->Exit = "Yes";
                break;
            case "template":
                $this->Exit = "Yes";
                break;
            case "ternate":
                $this->Exit = "Yes";
                break;
            case "testate":
                $this->Exit = "Yes";
                break;
            case "tunicate":
                $this->Exit = "Yes";
                break;
            case "turbinate":
                $this->Exit = "Yes";
                break;
            case "vacate":
                $this->Exit = "Yes";
                break;
            case "violate":
                $this->Exit = "Yes";
                break;
            case "initialization":
                $this->Exit = "Yes";
                break;
            case "intellectualization":
                $this->Exit = "Yes";
                break;
            case "internalization":
                $this->Exit = "Yes";
                break;
            case "lateralization":
                $this->Exit = "Yes";
                break;
            case "mobilization":
                $this->Exit = "Yes";
                break;
            case "monetization":
                $this->Exit = "Yes";
                break;
            case "pasteurization":
                $this->Exit = "Yes";
                break;
            case "initialization":
                $this->Exit = "Yes";
                break;
            case "intellectualization":
                $this->Exit = "Yes";
                break;
            case "internalization":
                $this->Exit = "Yes";
                break;
            case "lateralization":
                $this->Exit = "Yes";
                break;
            case "mobilization":
                $this->Exit = "Yes";
                break;
            case "monetization":
                $this->Exit = "Yes";
                break;
            case "pasteurization":
                $this->Exit = "Yes";
                break;
            case "assist":
                $this->Exit = "Yes";
                break;
            case "cabalist":
                $this->Exit = "Yes";
                break;
            case "cellist":
                $this->Exit = "Yes";
                break;
            case "christ":
                $this->Exit = "Yes";
                break;
            case "eulogist":
                $this->Exit = "Yes";
                break;
            case "desist":
                $this->Exit = "Yes";
                break;
            case "deviationist":
                $this->Exit = "Yes";
                break;
            case "enlist":
                $this->Exit = "Yes";
                break;
            case "florist":
                $this->Exit = "Yes";
                break;
            case "generalist":
                $this->Exit = "Yes";
                break;
            case "insist":
                $this->Exit = "Yes";
                break;
            case "kleist":
                $this->Exit = "Yes";
                break;
            case "resist":
                $this->Exit = "Yes";
                break;
            case "saxist":
                $this->Exit = "Yes";
                break;
            case "schist":
                $this->Exit = "Yes";
                break;
            case "shortlist":
                $this->Exit = "Yes";
                break;
            case "vibist":
                $this->Exit = "Yes";
                break;
            case "chemist":
                $this->Exit = "Yes";
                break;
            case "assize":
                $this->Exit = "Yes";
                break;
            case "belize":
                $this->Exit = "Yes";
                break;
            case "betise":
                $this->Exit = "Yes";
                break;
            case "bowdlerize":
                $this->Exit = "Yes";
                break;
            case "braise":
                $this->Exit = "Yes";
                break;
            case "camise":
                $this->Exit = "Yes";
                break;
            case "cerise":
                $this->Exit = "Yes";
                break;
            case "chaise":
                $this->Exit = "Yes";
                break;
            case "chastise":
                $this->Exit = "Yes";
                break;
            case "chemise":
                $this->Exit = "Yes";
                break;
            case "circumcise":
                $this->Exit = "Yes";
                break;
            case "cochise":
                $this->Exit = "Yes";
                break;
            case "comprise":
                $this->Exit = "Yes";
                break;
            case "compromise":
                $this->Exit = "Yes";
                break;
            case "concise":
                $this->Exit = "Yes";
                break;
            case "cruise":
                $this->Exit = "Yes";
                break;
            case "diazotize":
                $this->Exit = "Yes";
                break;
            case "fraise":
                $this->Exit = "Yes";
                break;
            case "improvise":
                $this->Exit = "Yes";
                break;
            case "incise":
                $this->Exit = "Yes";
                break;
            case "laicize":
                $this->Exit = "Yes";
                break;
            case "lionize":
                $this->Exit = "Yes";
                break;
            case "malaise":
                $this->Exit = "Yes";
                break;
            case "mercerise":
                $this->Exit = "Yes";
                break;
            case "mobilise":
                $this->Exit = "Yes";
                break;
            case "molise":
                $this->Exit = "Yes";
                break;
            case "monetize":
                $this->Exit = "Yes";
                break;
            case "mortise":
                $this->Exit = "Yes";
                break;
            case "nowise":
                $this->Exit = "Yes";
                break;
            case "odorize":
                $this->Exit = "Yes";
                break;
            case "odourise":
                $this->Exit = "Yes";
                break;
            case "paradise":
                $this->Exit = "Yes";
                break;
            case "pavise":
                $this->Exit = "Yes";
                break;
            case "peptise":
                $this->Exit = "Yes";
                break;
            case "praise":
                $this->Exit = "Yes";
                break;
            case "precise":
                $this->Exit = "Yes";
                break;
            case "promise":
                $this->Exit = "Yes";
                break;
            case "remise":
                $this->Exit = "Yes";
                break;
            case "noise":
                $this->Exit = "Yes";
                break;
            case "simonize":
                $this->Exit = "Yes";
                break;
            case "tranquilize":
                $this->Exit = "Yes";
                break;
            case "valise":
                $this->Exit = "Yes";
                break;
            case "vise":
                $this->Exit = "Yes";
                break;
            case "wise":
                $this->Exit = "Yes";
                break;
            case "communism":
                $this->Exit = "Yes";
                break;
            case "cubism":
                $this->Exit = "Yes";
                break;
            case "jansenism":
                $this->Exit = "Yes";
                break;
            case "lobbyism":
                $this->Exit = "Yes";
                break;
            case "narcism":
                $this->Exit = "Yes";
                break;
            case "ablism":
                $this->Exit = "Yes";
                break;
            case "actinism":
                $this->Exit = "Yes";
                break;
            case "animism":
                $this->Exit = "Yes";
                break;
            case "antiestablishmentarianism":
                $this->Exit = "Yes";
                break;
            case "antiestablishmentism":
                $this->Exit = "Yes";
                break;
            case "antifeminism":
                $this->Exit = "Yes";
                break;
            case "atonalism":
                $this->Exit = "Yes";
                break;
            case "automatism":
                $this->Exit = "Yes";
                break;
            case "behmenism":
                $this->Exit = "Yes";
                break;
            case "bowdlerism":
                $this->Exit = "Yes";
                break;
            case "caesarism":
                $this->Exit = "Yes";
                break;
            case "chartism":
                $this->Exit = "Yes";
                break;
            case "comtism":
                $this->Exit = "Yes";
                break;
            case "daltonism":
                $this->Exit = "Yes";
                break;
            case "darwinism":
                $this->Exit = "Yes";
                break;
            case "donatism":
                $this->Exit = "Yes";
                break;
            case "dynamism":
                $this->Exit = "Yes";
                break;
            case "eremitism":
                $this->Exit = "Yes";
                break;
            case "extremism":
                $this->Exit = "Yes";
                break;
            case "fetichism":
                $this->Exit = "Yes";
                break;
            case "girondism":
                $this->Exit = "Yes";
                break;
            case "holism":
                $this->Exit = "Yes";
                break;
            case "locoism":
                $this->Exit = "Yes";
                break;
            case "maidism":
                $this->Exit = "Yes";
                break;
            case "maoism":
                $this->Exit = "Yes";
                break;
            case "minimalism":
                $this->Exit = "Yes";
                break;
            case "momism":
                $this->Exit = "Yes";
                break;
            case "nanism":
                $this->Exit = "Yes";
                break;
            case "nihilism":
                $this->Exit = "Yes";
                break;
            case "originalism":
                $this->Exit = "Yes";
                break;
            case "papism":
                $this->Exit = "Yes";
                break;
            case "passivism":
                $this->Exit = "Yes";
                break;
            case "paternalism":
                $this->Exit = "Yes";
                break;
            case "platonism":
                $this->Exit = "Yes";
                break;
            case "plumbism":
                $this->Exit = "Yes";
                break;
            case "pluralism":
                $this->Exit = "Yes";
                break;
            case "quakerism":
                $this->Exit = "Yes";
                break;
            case "quietism":
                $this->Exit = "Yes";
                break;
            case "radicalism":
                $this->Exit = "Yes";
                break;
            case "reductivism":
                $this->Exit = "Yes";
                break;
            case "revisionism":
                $this->Exit = "Yes";
                break;
            case "sadism":
                $this->Exit = "Yes";
                break;
            case "saturnism":
                $this->Exit = "Yes";
                break;
            case "serialism":
                $this->Exit = "Yes";
                break;
            case "sophism":
                $this->Exit = "Yes";
                break;
            case "supremacism":
                $this->Exit = "Yes";
                break;
            case "synthetism":
                $this->Exit = "Yes";
                break;
            case "totalism":
                $this->Exit = "Yes";
                break;
            case "unilateralism":
                $this->Exit = "Yes";
                break;
            case "organism":
                $this->Exit = "Yes";
                break;
            case "agonistic":
                $this->Exit = "Yes";
                break;
            case "cabalistic":
                $this->Exit = "Yes";
                break;
            case "eulogistic":
                $this->Exit = "Yes";
                break;
            case "jingoistic":
                $this->Exit = "Yes";
                break;
            case "kabbalistic":
                $this->Exit = "Yes";
                break;
            case "monopolistic":
                $this->Exit = "Yes";
                break;
            case "sensationalistic":
                $this->Exit = "Yes";
                break;
            case "cabalistic":
                $this->Exit = "Yes";
                break;
            case "eulogistic":
                $this->Exit = "Yes";
                break;
            case "jingoistic":
                $this->Exit = "Yes";
                break;
            case "kabbalistic":
                $this->Exit = "Yes";
                break;
            case "monopolistic":
                $this->Exit = "Yes";
                break;
            case "sensationalistic":
                $this->Exit = "Yes";
                break;
            case "critic":
                $this->Exit = "Yes";
                break;
            case "abatic":
                $this->Exit = "Yes";
                break;
            case "aquatic":
                $this->Exit = "Yes";
                break;
            case "acetic":
                $this->Exit = "Yes";
                break;
            case "actinic":
                $this->Exit = "Yes";
                break;
            case "aerophilic":
                $this->Exit = "Yes";
                break;
            case "agaric":
                $this->Exit = "Yes";
                break;
            case "alaric":
                $this->Exit = "Yes";
                break;
            case "alcaic":
                $this->Exit = "Yes";
                break;
            case "allotropic":
                $this->Exit = "Yes";
                break;
            case "arcadic":
                $this->Exit = "Yes";
                break;
            case "arctic":
                $this->Exit = "Yes";
                break;
            case "aspic":
                $this->Exit = "Yes";
                break;
            case "asthenic":
                $this->Exit = "Yes";
                break;
            case "atonic":
                $this->Exit = "Yes";
                break;
            case "autochthonic":
                $this->Exit = "Yes";
                break;
            case "autocratic":
                $this->Exit = "Yes";
                break;
            case "autogenic":
                $this->Exit = "Yes";
                break;
            case "autonomic":
                $this->Exit = "Yes";
                break;
            case "azoic":
                $this->Exit = "Yes";
                break;
            case "azotic":
                $this->Exit = "Yes";
                break;
            case "baldric":
                $this->Exit = "Yes";
                break;
            case "barbaric":
                $this->Exit = "Yes";
                break;
            case "baric":
                $this->Exit = "Yes";
                break;
            case "basaltic":
                $this->Exit = "Yes";
                break;
            case "bathetic":
                $this->Exit = "Yes";
                break;
            case "beatific":
                $this->Exit = "Yes";
                break;
            case "bicyclic":
                $this->Exit = "Yes";
                break;
            case "blastematic":
                $this->Exit = "Yes";
                break;
            case "boric":
                $this->Exit = "Yes";
                break;
            case "brittanic":
                $this->Exit = "Yes";
                break;
            case "bromic":
                $this->Exit = "Yes";
                break;
            case "calligraphic":
                $this->Exit = "Yes";
                break;
            case "cataclysmic":
                $this->Exit = "Yes";
                break;
            case "ceric":
                $this->Exit = "Yes";
                break;
            case "choric":
                $this->Exit = "Yes";
                break;
            case "civic":
                $this->Exit = "Yes";
                break;
            case "clinic":
                $this->Exit = "Yes";
                break;
            case "clonic":
                $this->Exit = "Yes";
                break;
            case "colic":
                $this->Exit = "Yes";
                break;
            case "comic":
                $this->Exit = "Yes";
                break;
            case "concentric":
                $this->Exit = "Yes";
                break;
            case "coptic":
                $this->Exit = "Yes";
                break;
            case "demotic":
                $this->Exit = "Yes";
                break;
            case "diatomic":
                $this->Exit = "Yes";
                break;
            case "dominic":
                $this->Exit = "Yes";
                break;
            case "doric":
                $this->Exit = "Yes";
                break;
            case "dramaturgic":
                $this->Exit = "Yes";
                break;
            case "empiric":
                $this->Exit = "Yes";
                break;
            case "endogenic":
                $this->Exit = "Yes";
                break;
            case "endomorphic":
                $this->Exit = "Yes";
                break;
            case "enteric":
                $this->Exit = "Yes";
                break;
            case "entric":
                $this->Exit = "Yes";
                break;
            case "ergotic":
                $this->Exit = "Yes";
                break;
            case "erratic":
                $this->Exit = "Yes";
                break;
            case "eudemonic":
                $this->Exit = "Yes";
                break;
            case "eugenic":
                $this->Exit = "Yes";
                break;
            case "exogenic":
                $this->Exit = "Yes";
                break;
            case "fanatic":
                $this->Exit = "Yes";
                break;
            case "fantastic":
                $this->Exit = "Yes";
                break;
            case "ferric":
                $this->Exit = "Yes";
                break;
            case "finnic":
                $this->Exit = "Yes";
                break;
            case "formic":
                $this->Exit = "Yes";
                break;
            case "gallic":
                $this->Exit = "Yes";
                break;
            case "haematic":
                $this->Exit = "Yes";
                break;
            case "haptic":
                $this->Exit = "Yes";
                break;
            case "hematic":
                $this->Exit = "Yes";
                break;
            case "hemic":
                $this->Exit = "Yes";
                break;
            case "hepatic":
                $this->Exit = "Yes";
                break;
            case "heretic":
                $this->Exit = "Yes";
                break;
            case "hierarchic":
                $this->Exit = "Yes";
                break;
            case "humic":
                $this->Exit = "Yes";
                break;
            case "ironic":
                $this->Exit = "Yes";
                break;
            case "isomeric":
                $this->Exit = "Yes";
                break;
            case "italic":
                $this->Exit = "Yes";
                break;
            case "kinetic":
                $this->Exit = "Yes";
                break;
            case "lactic":
                $this->Exit = "Yes";
                break;
            case "lithic":
                $this->Exit = "Yes";
                break;
            case "logic":
                $this->Exit = "Yes";
                break;
            case "lunatic":
                $this->Exit = "Yes";
                break;
            case "lyric":
                $this->Exit = "Yes";
                break;
            case "magic":
                $this->Exit = "Yes";
                break;
            case "manic":
                $this->Exit = "Yes";
                break;
            case "mantic":
                $this->Exit = "Yes";
                break;
            case "medic":
                $this->Exit = "Yes";
                break;
            case "metric":
                $this->Exit = "Yes";
                break;
            case "mimic":
                $this->Exit = "Yes";
                break;
            case "monastic":
                $this->Exit = "Yes";
                break;
            case "monoclinic":
                $this->Exit = "Yes";
                break;
            case "monodic":
                $this->Exit = "Yes";
                break;
            case "monolithic":
                $this->Exit = "Yes";
                break;
            case "monotypic":
                $this->Exit = "Yes";
                break;
            case "morganatic":
                $this->Exit = "Yes";
                break;
            case "moronic":
                $this->Exit = "Yes";
                break;
            case "music":
                $this->Exit = "Yes";
                break;
            case "nitric":
                $this->Exit = "Yes";
                break;
            case "operatic":
                $this->Exit = "Yes";
                break;
            case "pacific":
                $this->Exit = "Yes";
                break;
            case "panic":
                $this->Exit = "Yes";
                break;
            case "paretic":
                $this->Exit = "Yes";
                break;
            case "pelagic":
                $this->Exit = "Yes";
                break;
            case "peptic":
                $this->Exit = "Yes";
                break;
            case "permic":
                $this->Exit = "Yes";
                break;
            case "phenolic":
                $this->Exit = "Yes";
                break;
            case "phonetic":
                $this->Exit = "Yes";
                break;
            case "phonic":
                $this->Exit = "Yes";
                break;
            case "phyletic":
                $this->Exit = "Yes";
                break;
            case "poetic":
                $this->Exit = "Yes";
                break;
            case "polymorphic":
                $this->Exit = "Yes";
                break;
            case "pornographic":
                $this->Exit = "Yes";
                break;
            case "prosodic":
                $this->Exit = "Yes";
                break;
            case "psychic":
                $this->Exit = "Yes";
                break;
            case "pubic":
                $this->Exit = "Yes";
                break;
            case "punic":
                $this->Exit = "Yes";
                break;
            case "pyretic":
                $this->Exit = "Yes";
                break;
            case "relic":
                $this->Exit = "Yes";
                break;
            case "rhapsodic":
                $this->Exit = "Yes";
                break;
            case "rheumatic":
                $this->Exit = "Yes";
                break;
            case "romaic":
                $this->Exit = "Yes";
                break;
            case "romantic":
                $this->Exit = "Yes";
                break;
            case "rustic":
                $this->Exit = "Yes";
                break;
            case "satiric":
                $this->Exit = "Yes";
                break;
            case "semitic":
                $this->Exit = "Yes";
                break;
            case "septic":
                $this->Exit = "Yes";
                break;
            case "skeptic":
                $this->Exit = "Yes";
                break;
            case "somatic":
                $this->Exit = "Yes";
                break;
            case "sonic":
                $this->Exit = "Yes";
                break;
            case "spermatic":
                $this->Exit = "Yes";
                break;
            case "static":
                $this->Exit = "Yes";
                break;
            case "stereotypic":
                $this->Exit = "Yes";
                break;
            case "symmetric":
                $this->Exit = "Yes";
                break;
            case "synecdochic":
                $this->Exit = "Yes";
                break;
            case "tactic":
                $this->Exit = "Yes";
                break;
            case "terrific":
                $this->Exit = "Yes";
                break;
            case "titanic":
                $this->Exit = "Yes";
                break;
            case "tonic":
                $this->Exit = "Yes";
                break;
            case "topic":
                $this->Exit = "Yes";
                break;
            case "tricyclic":
                $this->Exit = "Yes";
                break;
            case "trophic":
                $this->Exit = "Yes";
                break;
            case "tropic":
                $this->Exit = "Yes";
                break;
            case "tunic":
                $this->Exit = "Yes";
                break;
            case "tympanic":
                $this->Exit = "Yes";
                break;
            case "tympanitic":
                $this->Exit = "Yes";
                break;
            case "vatic":
                $this->Exit = "Yes";
                break;
            case "dative":
                $this->Exit = "Yes";
                break;
            case "accessary":
                $this->Exit = "Yes";
                break;
            case "angry":
                $this->Exit = "Yes";
                break;
            case "annualry":
                $this->Exit = "Yes";
                break;
            case "apery":
                $this->Exit = "Yes";
                break;
            case "apiary":
                $this->Exit = "Yes";
                break;
            case "barbary":
                $this->Exit = "Yes";
                break;
            case "barberry":
                $this->Exit = "Yes";
                break;
            case "basilary":
                $this->Exit = "Yes";
                break;
            case "binary":
                $this->Exit = "Yes";
                break;
            case "bawdry":
                $this->Exit = "Yes";
                break;
            case "beery":
                $this->Exit = "Yes";
                break;
            case "briery":
                $this->Exit = "Yes";
                break;
            case "burry":
                $this->Exit = "Yes";
                break;
            case "bursary":
                $this->Exit = "Yes";
                break;
            case "canary":
                $this->Exit = "Yes";
                break;
            case "cajolery":
                $this->Exit = "Yes";
                break;
            case "carry":
                $this->Exit = "Yes";
                break;
            case "casuistry":
                $this->Exit = "Yes";
                break;
            case "catenary":
                $this->Exit = "Yes";
                break;
            case "chancery":
                $this->Exit = "Yes";
                break;
            case "chantry":
                $this->Exit = "Yes";
                break;
            case "chicory":
                $this->Exit = "Yes";
                break;
            case "colliery":
                $this->Exit = "Yes";
                break;
            case "columbary":
                $this->Exit = "Yes";
                break;
            case "comradery":
                $this->Exit = "Yes";
                break;
            case "contrary":
                $this->Exit = "Yes";
                break;
            case "coquetry":
                $this->Exit = "Yes";
                break;
            case "corollary":
                $this->Exit = "Yes";
                break;
            case "coronary":
                $this->Exit = "Yes";
                break;
            case "country":
                $this->Exit = "Yes";
                break;
            case "cowry":
                $this->Exit = "Yes";
                break;
            case "curry":
                $this->Exit = "Yes";
                break;
            case "deary":
                $this->Exit = "Yes";
                break;
            case "decry":
                $this->Exit = "Yes";
                break;
            case "diary":
                $this->Exit = "Yes";
                break;
            case "dictionary":
                $this->Exit = "Yes";
                break;
            case "denary":
                $this->Exit = "Yes";
                break;
            case "dupery":
                $this->Exit = "Yes";
                break;
            case "every":
                $this->Exit = "Yes";
                break;
            case "faery":
                $this->Exit = "Yes";
                break;
            case "finery":
                $this->Exit = "Yes";
                break;
            case "friary":
                $this->Exit = "Yes";
                break;
            case "formicary":
                $this->Exit = "Yes";
                break;
            case "foundry":
                $this->Exit = "Yes";
                break;
            case "gauntry":
                $this->Exit = "Yes";
                break;
            case "gentry":
                $this->Exit = "Yes";
                break;
            case "glossary":
                $this->Exit = "Yes";
                break;
            case "granary":
                $this->Exit = "Yes";
                break;
            case "greenery":
                $this->Exit = "Yes";
                break;
            case "henry":
                $this->Exit = "Yes";
                break;
            case "heraldry":
                $this->Exit = "Yes";
                break;
            case "hillary":
                $this->Exit = "Yes";
                break;
            case "husbandry":
                $this->Exit = "Yes";
                break;
            case "infantry":
                $this->Exit = "Yes";
                break;
            case "infirmary":
                $this->Exit = "Yes";
                break;
            case "japery":
                $this->Exit = "Yes";
                break;
            case "knavery":
                $this->Exit = "Yes";
                break;
            case "leary":
                $this->Exit = "Yes";
                break;
            case "leery":
                $this->Exit = "Yes";
                break;
            case "library":
                $this->Exit = "Yes";
                break;
            case "literary":
                $this->Exit = "Yes";
                break;
            case "livery":
                $this->Exit = "Yes";
                break;
            case "lottery":
                $this->Exit = "Yes";
                break;
            case "lowry":
                $this->Exit = "Yes";
                break;
            case "mammary":
                $this->Exit = "Yes";
                break;
            case "marry":
                $this->Exit = "Yes";
                break;
            case "millinery":
                $this->Exit = "Yes";
                break;
            case "monetary":
                $this->Exit = "Yes";
                break;
            case "napery":
                $this->Exit = "Yes";
                break;
            case "notary":
                $this->Exit = "Yes";
                break;
            case "nursery":
                $this->Exit = "Yes";
                break;
            case "pantry":
                $this->Exit = "Yes";
                break;
            case "parry":
                $this->Exit = "Yes";
                break;
            case "pastry":
                $this->Exit = "Yes";
                break;
            case "peary":
                $this->Exit = "Yes";
                break;
            case "primary":
                $this->Exit = "Yes";
                break;
            case "rectory":
                $this->Exit = "Yes";
                break;
            case "refinery":
                $this->Exit = "Yes";
                break;
            case "retry":
                $this->Exit = "Yes";
                break;
            case "rivalry":
                $this->Exit = "Yes";
                break;
            case "rosary":
                $this->Exit = "Yes";
                break;
            case "rotary":
                $this->Exit = "Yes";
                break;
            case "rudimentary":
                $this->Exit = "Yes";
                break;
            case "scapulary":
                $this->Exit = "Yes";
                break;
            case "secretary":
                $this->Exit = "Yes";
                break;
            case "sentry":
                $this->Exit = "Yes";
                break;
            case "surgery":
                $this->Exit = "Yes";
                break;
            case "tartary":
                $this->Exit = "Yes";
                break;
            case "tatary":
                $this->Exit = "Yes";
                break;
            case "ternary":
                $this->Exit = "Yes";
                break;
            case "tracery":
                $this->Exit = "Yes";
                break;
            case "topiary":
                $this->Exit = "Yes";
                break;
            case "vestry":
                $this->Exit = "Yes";
                break;
            case "wizardry":
                $this->Exit = "Yes";
                break;
            case "zealotry":
                $this->Exit = "Yes";
                break;
            case "amortization":
                $this->Exit = "Yes";
                break;
            case "authorise":
                $this->Exit = "Yes";
                break;
            case "sanitize":
                $this->Exit = "Yes";
                break;
            case "sterilize":
                $this->Exit = "Yes";
                break;
            case "amortize":
                $this->Exit = "Yes";
                break;
            case "avianize":
                $this->Exit = "Yes";
                break;
            case "balkanize":
                $this->Exit = "Yes";
                break;
            case "marquise":
                $this->Exit = "Yes";
                break;
            case "mercerize":
                $this->Exit = "Yes";
                break;
            case "mobilize":
                $this->Exit = "Yes";
                break;
            case "prologue":
                $this->Exit = "Yes";
                break;
            case "resize":
                $this->Exit = "Yes";
                break;
            case "revise":
                $this->Exit = "Yes";
                break;
            case "treatise":
                $this->Exit = "Yes";
                break;
            case "vulcanize":
                $this->Exit = "Yes";
                break;
            case "accessory":
                $this->Exit = "Yes";
                break;
            case "artery":
                $this->Exit = "Yes";
                break;
            case "assimilatory":
                $this->Exit = "Yes";
                break;
            case "battery":
                $this->Exit = "Yes";
                break;
            case "centaury":
                $this->Exit = "Yes";
                break;
            case "chary":
                $this->Exit = "Yes";
                break;
            case "comstockery":
                $this->Exit = "Yes";
                break;
            case "crockery":
                $this->Exit = "Yes";
                break;
            case "cursory":
                $this->Exit = "Yes";
                break;
            case "dilatory":
                $this->Exit = "Yes";
                break;
            case "doddery":
                $this->Exit = "Yes";
                break;
            case "factory":
                $this->Exit = "Yes";
                break;
            case "fairy":
                $this->Exit = "Yes";
                break;
            case "gallery":
                $this->Exit = "Yes";
                break;
            case "hickory":
                $this->Exit = "Yes";
                break;
            case "inventory":
                $this->Exit = "Yes";
                break;
            case "jaggery":
                $this->Exit = "Yes";
                break;
            case "misery":
                $this->Exit = "Yes";
                break;
            case "mummery":
                $this->Exit = "Yes";
                break;
            case "allegory":
                $this->Exit = "Yes";
                break;
            case "calvary":
                $this->Exit = "Yes";
                break;
            case "dignitary":
                $this->Exit = "Yes";
                break;
            case "insanitary":
                $this->Exit = "Yes";
                break;
            case "jaggary":
                $this->Exit = "Yes";
                break;
            case "malory":
                $this->Exit = "Yes";
                break;
            case "orrery":
                $this->Exit = "Yes";
                break;
            case "pillory":
                $this->Exit = "Yes";
                break;
            case "popery":
                $this->Exit = "Yes";
                break;
            case "presbytery":
                $this->Exit = "Yes";
                break;
            case "proprietary":
                $this->Exit = "Yes";
                break;
            case "psaltery":
                $this->Exit = "Yes";
                break;
            case "puffery":
                $this->Exit = "Yes";
                break;
            case "reactionary":
                $this->Exit = "Yes";
                break;
            case "refractory":
                $this->Exit = "Yes";
                break;
            case "regulatory":
                $this->Exit = "Yes";
                break;
            case "revery":
                $this->Exit = "Yes";
                break;
            case "salary":
                $this->Exit = "Yes";
                break;
            case "salutary":
                $this->Exit = "Yes";
                break;
            case "sanitary":
                $this->Exit = "Yes";
                break;
            case "scary":
                $this->Exit = "Yes";
                break;
            case "scullery":
                $this->Exit = "Yes";
                break;
            case "slumbery":
                $this->Exit = "Yes";
                break;
            case "starry":
                $this->Exit = "Yes";
                break;
            case "succory":
                $this->Exit = "Yes";
                break;
            case "transitory":
                $this->Exit = "Yes";
                break;
            case "trumpery":
                $this->Exit = "Yes";
                break;
            case "tushery":
                $this->Exit = "Yes";
                break;
            case "veery":
                $this->Exit = "Yes";
                break;
            case "victory":
                $this->Exit = "Yes";
                break;
            case "vinery":
                $this->Exit = "Yes";
                break;
            case "volary":
                $this->Exit = "Yes";
                break;
            case "vomitory":
                $this->Exit = "Yes";
                break;
            case "votary":
                $this->Exit = "Yes";
                break;
            case "broadwise":
                $this->Exit = "Yes";
                break;
            case "crabwise":
                $this->Exit = "Yes";
                break;
            case "thwartwise":
                $this->Exit = "Yes";
                break;
            case "address":
                $this->Exit = "Yes";
                break;
            case "buttress":
                $this->Exit = "Yes";
                break;
            case "compress":
                $this->Exit = "Yes";
                break;
            case "congress":
                $this->Exit = "Yes";
                break;
            case "digress":
                $this->Exit = "Yes";
                break;
            case "impress":
                $this->Exit = "Yes";
                break;
            case "ingress":
                $this->Exit = "Yes";
                break;
            case "mattress":
                $this->Exit = "Yes";
                break;
            case "mistress":
                $this->Exit = "Yes";
                break;
            case "redress":
                $this->Exit = "Yes";
                break;
            case "press":
                $this->Exit = "Yes";
                break;
            case "pithy":
                $this->Exit = "Yes";
                break;
            case "ambagious":
                $this->Exit = "Yes";
                break;
            case "ambitious":
                $this->Exit = "Yes";
                break;
            case "capricious":
                $this->Exit = "Yes";
                break;
            case "carious":
                $this->Exit = "Yes";
                break;
            case "commodious":
                $this->Exit = "Yes";
                break;
            case "contentious":
                $this->Exit = "Yes";
                break;
            case "contrarious":
                $this->Exit = "Yes";
                break;
            case "copious":
                $this->Exit = "Yes";
                break;
            case "curious":
                $this->Exit = "Yes";
                break;
            case "facetious":
                $this->Exit = "Yes";
                break;
            case "factious":
                $this->Exit = "Yes";
                break;
            case "furious":
                $this->Exit = "Yes";
                break;
            case "hilarious":
                $this->Exit = "Yes";
                break;
            case "impious":
                $this->Exit = "Yes";
                break;
            case "incurious":
                $this->Exit = "Yes";
                break;
            case "insidious":
                $this->Exit = "Yes";
                break;
            case "noxious":
                $this->Exit = "Yes";
                break;
            case "obsequious":
                $this->Exit = "Yes";
                break;
            case "officious":
                $this->Exit = "Yes";
                break;
            case "prodigious":
                $this->Exit = "Yes";
                break;
            case "scabious":
                $this->Exit = "Yes";
                break;
            case "serious":
                $this->Exit = "Yes";
                break;
            case "specious":
                $this->Exit = "Yes";
                break;
            case "spurious":
                $this->Exit = "Yes";
                break;
            case "symphonious":
                $this->Exit = "Yes";
                break;
            case "tedious":
                $this->Exit = "Yes";
                break;
            case "usurious":
                $this->Exit = "Yes";
                break;
            case "vicarious":
                $this->Exit = "Yes";
                break;
            case "caseous":
                $this->Exit = "Yes";
                break;
            case "corneous":
                $this->Exit = "Yes";
                break;
            case "gorgeous":
                $this->Exit = "Yes";
                break;
            case "hideous":
                $this->Exit = "Yes";
                break;
            case "ligneous":
                $this->Exit = "Yes";
                break;
            case "nacreous":
                $this->Exit = "Yes";
                break;
            case "actual":
                $this->Exit = "Yes";
                break;
            case "eventual":
                $this->Exit = "Yes";
                break;
            case "gradual":
                $this->Exit = "Yes";
                break;
            case "lingual":
                $this->Exit = "Yes";
                break;
            case "manual":
                $this->Exit = "Yes";
                break;
            case "residual":
                $this->Exit = "Yes";
                break;
            case "sensual":
                $this->Exit = "Yes";
                break;
            case "tactual":
                $this->Exit = "Yes";
                break;
            case "agency":
                $this->Exit = "Yes";
                break;
            case "bercy":
                $this->Exit = "Yes";
                break;
            case "blatancy":
                $this->Exit = "Yes";
                break;
            case "chancy":
                $this->Exit = "Yes";
                break;
            case "crecy":
                $this->Exit = "Yes";
                break;
            case "currency":
                $this->Exit = "Yes";
                break;
            case "errancy":
                $this->Exit = "Yes";
                break;
            case "excellency":
                $this->Exit = "Yes";
                break;
            case "fallacy":
                $this->Exit = "Yes";
                break;
            case "fancy":
                $this->Exit = "Yes";
                break;
            case "fleecy":
                $this->Exit = "Yes";
                break;
            case "inadvertency":
                $this->Exit = "Yes";
                break;
            case "latency":
                $this->Exit = "Yes";
                break;
            case "legacy":
                $this->Exit = "Yes";
                break;
            case "literacy":
                $this->Exit = "Yes";
                break;
            case "infancy":
                $this->Exit = "Yes";
                break;
            case "lunacy":
                $this->Exit = "Yes";
                break;
            case "nancy":
                $this->Exit = "Yes";
                break;
            case "papacy":
                $this->Exit = "Yes";
                break;
            case "patency":
                $this->Exit = "Yes";
                break;
            case "percy":
                $this->Exit = "Yes";
                break;
            case "primacy":
                $this->Exit = "Yes";
                break;
            case "prophecy":
                $this->Exit = "Yes";
                break;
            case "pruriency":
                $this->Exit = "Yes";
                break;
            case "quincy":
                $this->Exit = "Yes";
                break;
            case "radiancy":
                $this->Exit = "Yes";
                break;
            case "sentiency":
                $this->Exit = "Yes";
                break;
            case "solvency":
                $this->Exit = "Yes";
                break;
            case "spicy":
                $this->Exit = "Yes";
                break;
            case "vacancy":
                $this->Exit = "Yes";
                break;
            case "valency":
                $this->Exit = "Yes";
                break;
            case "accrual":
                $this->Exit = "Yes";
                break;
            case "admiral":
                $this->Exit = "Yes";
                break;
            case "aecial":
                $this->Exit = "Yes";
                break;
            case "animal":
                $this->Exit = "Yes";
                break;
            case "anneal":
                $this->Exit = "Yes";
                break;
            case "antheral":
                $this->Exit = "Yes";
                break;
            case "ambrosial":
                $this->Exit = "Yes";
                break;
            case "areal":
                $this->Exit = "Yes";
                break;
            case "armorial":
                $this->Exit = "Yes";
                break;
            case "artificial":
                $this->Exit = "Yes";
                break;
            case "asternal":
                $this->Exit = "Yes";
                break;
            case "atonal":
                $this->Exit = "Yes";
                break;
            case "banal":
                $this->Exit = "Yes";
                break;
            case "bestial":
                $this->Exit = "Yes";
                break;
            case "branchial":
                $this->Exit = "Yes";
                break;
            case "boreal":
                $this->Exit = "Yes";
                break;
            case "brutal":
                $this->Exit = "Yes";
                break;
            case "buntal":
                $this->Exit = "Yes";
                break;
            case "burial":
                $this->Exit = "Yes";
                break;
            case "coaxial":
                $this->Exit = "Yes";
                break;
            case "cordial":
                $this->Exit = "Yes";
                break;
            case "cabal":
                $this->Exit = "Yes";
                break;
            case "canal":
                $this->Exit = "Yes";
                break;
            case "carpal":
                $this->Exit = "Yes";
                break;
            case "cental":
                $this->Exit = "Yes";
                break;
            case "cereal":
                $this->Exit = "Yes";
                break;
            case "choral":
                $this->Exit = "Yes";
                break;
            case "coaxal":
                $this->Exit = "Yes";
                break;
            case "comal":
                $this->Exit = "Yes";
                break;
            case "congeal":
                $this->Exit = "Yes";
                break;
            case "copal":
                $this->Exit = "Yes";
                break;
            case "coral":
                $this->Exit = "Yes";
                break;
            case "costal":
                $this->Exit = "Yes";
                break;
            case "credal":
                $this->Exit = "Yes";
                break;
            case "cubital":
                $this->Exit = "Yes";
                break;
            case "curtal":
                $this->Exit = "Yes";
                break;
            case "cranial":
                $this->Exit = "Yes";
                break;
            case "cursorial":
                $this->Exit = "Yes";
                break;
            case "custodial":
                $this->Exit = "Yes";
                break;
            case "decal":
                $this->Exit = "Yes";
                break;
            case "dental":
                $this->Exit = "Yes";
                break;
            case "dominical":
                $this->Exit = "Yes";
                break;
            case "dossal":
                $this->Exit = "Yes";
                break;
            case "enteral":
                $this->Exit = "Yes";
                break;
            case "epochal":
                $this->Exit = "Yes";
                break;
            case "ethanal":
                $this->Exit = "Yes";
                break;
            case "espial":
                $this->Exit = "Yes";
                break;
            case "external":
                $this->Exit = "Yes";
                break;
            case "fallal":
                $this->Exit = "Yes";
                break;
            case "fatal":
                $this->Exit = "Yes";
                break;
            case "festival":
                $this->Exit = "Yes";
                break;
            case "feudal":
                $this->Exit = "Yes";
                break;
            case "filarial":
                $this->Exit = "Yes";
                break;
            case "filial":
                $this->Exit = "Yes";
                break;
            case "final":
                $this->Exit = "Yes";
                break;
            case "finial":
                $this->Exit = "Yes";
                break;
            case "fiscal":
                $this->Exit = "Yes";
                break;
            case "floral":
                $this->Exit = "Yes";
                break;
            case "floreal":
                $this->Exit = "Yes";
                break;
            case "folderal":
                $this->Exit = "Yes";
                break;
            case "fugal":
                $this->Exit = "Yes";
                break;
            case "gayal":
                $this->Exit = "Yes";
                break;
            case "genial":
                $this->Exit = "Yes";
                break;
            case "glacial":
                $this->Exit = "Yes";
                break;
            case "goral":
                $this->Exit = "Yes";
                break;
            case "gyral":
                $this->Exit = "Yes";
                break;
            case "halal":
                $this->Exit = "Yes";
                break;
            case "hemal":
                $this->Exit = "Yes";
                break;
            case "hominal":
                $this->Exit = "Yes";
                break;
            case "impartial":
                $this->Exit = "Yes";
                break;
            case "informal":
                $this->Exit = "Yes";
                break;
            case "instal":
                $this->Exit = "Yes";
                break;
            case "internal":
                $this->Exit = "Yes";
                break;
            case "jackal":
                $this->Exit = "Yes";
                break;
            case "jovial":
                $this->Exit = "Yes";
                break;
            case "labial":
                $this->Exit = "Yes";
                break;
            case "lateral":
                $this->Exit = "Yes";
                break;
            case "legal":
                $this->Exit = "Yes";
                break;
            case "lethal":
                $this->Exit = "Yes";
                break;
            case "lienal":
                $this->Exit = "Yes";
                break;
            case "literal":
                $this->Exit = "Yes";
                break;
            case "luteal":
                $this->Exit = "Yes";
                break;
            case "mammal":
                $this->Exit = "Yes";
                break;
            case "marshal":
                $this->Exit = "Yes";
                break;
            case "martial":
                $this->Exit = "Yes";
                break;
            case "material":
                $this->Exit = "Yes";
                break;
            case "medal":
                $this->Exit = "Yes";
                break;
            case "medial":
                $this->Exit = "Yes";
                break;
            case "menial":
                $this->Exit = "Yes";
                break;
            case "mensal":
                $this->Exit = "Yes";
                break;
            case "metal":
                $this->Exit = "Yes";
                break;
            case "metical":
                $this->Exit = "Yes";
                break;
            case "mineral":
                $this->Exit = "Yes";
                break;
            case "missal":
                $this->Exit = "Yes";
                break;
            case "modal":
                $this->Exit = "Yes";
                break;
            case "molal":
                $this->Exit = "Yes";
                break;
            case "monal":
                $this->Exit = "Yes";
                break;
            case "moral":
                $this->Exit = "Yes";
                break;
            case "motorial":
                $this->Exit = "Yes";
                break;
            case "musial":
                $this->Exit = "Yes";
                break;
            case "narial":
                $this->Exit = "Yes";
                break;
            case "no-goal":
                $this->Exit = "Yes";
                break;
            case "nocturnal":
                $this->Exit = "Yes";
                break;
            case "nonfatal":
                $this->Exit = "Yes";
                break;
            case "novial":
                $this->Exit = "Yes";
                break;
            case "octal":
                $this->Exit = "Yes";
                break;
            case "offal":
                $this->Exit = "Yes";
                break;
            case "official":
                $this->Exit = "Yes";
                break;
            case "orinasal":
                $this->Exit = "Yes";
                break;
            case "palatial":
                $this->Exit = "Yes";
                break;
            case "papal":
                $this->Exit = "Yes";
                break;
            case "papistical":
                $this->Exit = "Yes";
                break;
            case "patrimonial":
                $this->Exit = "Yes";
                break;
            case "penal":
                $this->Exit = "Yes";
                break;
            case "penial":
                $this->Exit = "Yes";
                break;
            case "petal":
                $this->Exit = "Yes";
                break;
            case "pictorial":
                $this->Exit = "Yes";
                break;
            case "pipal":
                $this->Exit = "Yes";
                break;
            case "pivotal":
                $this->Exit = "Yes";
                break;
            case "platitudinal":
                $this->Exit = "Yes";
                break;
            case "potential":
                $this->Exit = "Yes";
                break;
            case "principal":
                $this->Exit = "Yes";
                break;
            case "procural":
                $this->Exit = "Yes";
                break;
            case "prodigal":
                $this->Exit = "Yes";
                break;
            case "professor":
                $this->Exit = "Yes";
                break;
            case "prudential":
                $this->Exit = "Yes";
                break;
            case "pupal":
                $this->Exit = "Yes";
                break;
            case "quintal":
                $this->Exit = "Yes";
                break;
            case "radial":
                $this->Exit = "Yes";
                break;
            case "raptorial":
                $this->Exit = "Yes";
                break;
            case "rational":
                $this->Exit = "Yes";
                break;
            case "recital":
                $this->Exit = "Yes";
                break;
            case "reprisal":
                $this->Exit = "Yes";
                break;
            case "retral":
                $this->Exit = "Yes";
                break;
            case "revisal":
                $this->Exit = "Yes";
                break;
            case "rhinal":
                $this->Exit = "Yes";
                break;
            case "rival":
                $this->Exit = "Yes";
                break;
            case "romanal":
                $this->Exit = "Yes";
                break;
            case "salal":
                $this->Exit = "Yes";
                break;
            case "sandal":
                $this->Exit = "Yes";
                break;
            case "sartorial":
                $this->Exit = "Yes";
                break;
            case "sepal":
                $this->Exit = "Yes";
                break;
            case "serial":
                $this->Exit = "Yes";
                break;
            case "serval":
                $this->Exit = "Yes";
                break;
            case "several":
                $this->Exit = "Yes";
                break;
            case "shoal":
                $this->Exit = "Yes";
                break;
            case "sisal":
                $this->Exit = "Yes";
                break;
            case "spatial":
                $this->Exit = "Yes";
                break;
            case "special":
                $this->Exit = "Yes";
                break;
            case "spiral":
                $this->Exit = "Yes";
                break;
            case "stomatal":
                $this->Exit = "Yes";
                break;
            case "surreal":
                $this->Exit = "Yes";
                break;
            case "tamal":
                $this->Exit = "Yes";
                break;
            case "thenal":
                $this->Exit = "Yes";
                break;
            case "tibial":
                $this->Exit = "Yes";
                break;
            case "tical":
                $this->Exit = "Yes";
                break;
            case "tonal":
                $this->Exit = "Yes";
                break;
            case "total":
                $this->Exit = "Yes";
                break;
            case "trental":
                $this->Exit = "Yes";
                break;
            case "tribunal":
                $this->Exit = "Yes";
                break;
            case "tubal":
                $this->Exit = "Yes";
                break;
            case "upheaval":
                $this->Exit = "Yes";
                break;
            case "varietal":
                $this->Exit = "Yes";
                break;
            case "vernal":
                $this->Exit = "Yes";
                break;
            case "vestigial":
                $this->Exit = "Yes";
                break;
            case "virtual":
                $this->Exit = "Yes";
                break;
            case "wheal":
                $this->Exit = "Yes";
                break;
            case "withal":
                $this->Exit = "Yes";
                break;
            case "abelia":
                $this->Exit = "Yes";
                break;
            case "actinia":
                $this->Exit = "Yes";
                break;
            case "algeria":
                $this->Exit = "Yes";
                break;
            case "amenia":
                $this->Exit = "Yes";
                break;
            case "amentia":
                $this->Exit = "Yes";
                break;
            case "appendicularia":
                $this->Exit = "Yes";
                break;
            case "artemisia":
                $this->Exit = "Yes";
                break;
            case "ataraxia":
                $this->Exit = "Yes";
                break;
            case "atonia":
                $this->Exit = "Yes";
                break;
            case "auricularia":
                $this->Exit = "Yes";
                break;
            case "australia":
                $this->Exit = "Yes";
                break;
            case "bankia":
                $this->Exit = "Yes";
                break;
            case "banksia":
                $this->Exit = "Yes";
                break;
            case "bassia":
                $this->Exit = "Yes";
                break;
            case "beaumontia":
                $this->Exit = "Yes";
                break;
            case "bergenia":
                $this->Exit = "Yes";
                break;
            case "blighia":
                $this->Exit = "Yes";
                break;
            case "bloomeria":
                $this->Exit = "Yes";
                break;
            case "bosnia":
                $this->Exit = "Yes";
                break;
            case "boswellia":
                $this->Exit = "Yes";
                break;
            case "brassia":
                $this->Exit = "Yes";
                break;
            case "camelia":
                $this->Exit = "Yes";
                break;
            case "cardia":
                $this->Exit = "Yes";
                break;
            case "carpenteria":
                $this->Exit = "Yes";
                break;
            case "cassiopeia":
                $this->Exit = "Yes";
                break;
            case "christiania":
                $this->Exit = "Yes";
                break;
            case "cirripedia":
                $this->Exit = "Yes";
                break;
            case "clintonia":
                $this->Exit = "Yes";
                break;
            case "cobia":
                $this->Exit = "Yes";
                break;
            case "cochlearia":
                $this->Exit = "Yes";
                break;
            case "collinsia":
                $this->Exit = "Yes";
                break;
            case "comptonia":
                $this->Exit = "Yes";
                break;
            case "cordia":
                $this->Exit = "Yes";
                break;
            case "costia":
                $this->Exit = "Yes";
                break;
            case "crescentia":
                $this->Exit = "Yes";
                break;
            case "curia":
                $this->Exit = "Yes";
                break;
            case "curtisia":
                $this->Exit = "Yes";
                break;
            case "dipteronia":
                $this->Exit = "Yes";
                break;
            case "edmontonia":
                $this->Exit = "Yes";
                break;
            case "eudaemonia":
                $this->Exit = "Yes";
                break;
            case "filaria":
                $this->Exit = "Yes";
                break;
            case "fistularia":
                $this->Exit = "Yes";
                break;
            case "flindersia":
                $this->Exit = "Yes";
                break;
            case "fremontia":
                $this->Exit = "Yes";
                break;
            case "fuchsia":
                $this->Exit = "Yes";
                break;
            case "gallia":
                $this->Exit = "Yes";
                break;
            case "gesneria":
                $this->Exit = "Yes";
                break;
            case "harpia":
                $this->Exit = "Yes";
                break;
            case "harrisia":
                $this->Exit = "Yes";
                break;
            case "hazardia":
                $this->Exit = "Yes";
                break;
            case "hermannia":
                $this->Exit = "Yes";
                break;
            case "hudsonia":
                $this->Exit = "Yes";
                break;
            case "ictodosauria":
                $this->Exit = "Yes";
                break;
            case "idesia":
                $this->Exit = "Yes";
                break;
            case "ionia":
                $this->Exit = "Yes";
                break;
            case "irvingia":
                $this->Exit = "Yes";
                break;
            case "jacksonia":
                $this->Exit = "Yes";
                break;
            case "kirkia":
                $this->Exit = "Yes";
                break;
            case "knightia":
                $this->Exit = "Yes";
                break;
            case "kochia":
                $this->Exit = "Yes";
                break;
            case "lambertia":
                $this->Exit = "Yes";
                break;
            case "lamia":
                $this->Exit = "Yes";
                break;
            case "laminaria":
                $this->Exit = "Yes";
                break;
            case "layia":
                $this->Exit = "Yes";
                break;
            case "lentia":
                $this->Exit = "Yes";
                break;
            case "lewisia":
                $this->Exit = "Yes";
                break;
            case "listeria":
                $this->Exit = "Yes";
                break;
            case "lobularia":
                $this->Exit = "Yes";
                break;
            case "lochia":
                $this->Exit = "Yes";
                break;
            case "logania":
                $this->Exit = "Yes";
                break;
            case "loxia":
                $this->Exit = "Yes";
                break;
            case "lunaria":
                $this->Exit = "Yes";
                break;
            case "lyonia":
                $this->Exit = "Yes";
                break;
            case "macadamia":
                $this->Exit = "Yes";
                break;
            case "madia":
                $this->Exit = "Yes";
                break;
            case "malaria":
                $this->Exit = "Yes";
                break;
            case "mania":
                $this->Exit = "Yes";
                break;
            case "maria":
                $this->Exit = "Yes";
                break;
            case "miltonia":
                $this->Exit = "Yes";
                break;
            case "morphia":
                $this->Exit = "Yes";
                break;
            case "nothosauria":
                $this->Exit = "Yes";
                break;
            case "nubia":
                $this->Exit = "Yes";
                break;
            case "oceania":
                $this->Exit = "Yes";
                break;
            case "papaia":
                $this->Exit = "Yes";
                break;
            case "parkia":
                $this->Exit = "Yes";
                break;
            case "parkinsonia":
                $this->Exit = "Yes";
                break;
            case "parousia":
                $this->Exit = "Yes";
                break;
            case "parrotia":
                $this->Exit = "Yes";
                break;
            case "petteria":
                $this->Exit = "Yes";
                break;
            case "planaria":
                $this->Exit = "Yes";
                break;
            case "polygonia":
                $this->Exit = "Yes";
                break;
            case "pouteria":
                $this->Exit = "Yes";
                break;
            case "pretoria":
                $this->Exit = "Yes";
                break;
            case "pyrexia":
                $this->Exit = "Yes";
                break;
            case "rhodesia":
                $this->Exit = "Yes";
                break;
            case "robinia":
                $this->Exit = "Yes";
                break;
            case "romania":
                $this->Exit = "Yes";
                break;
            case "rubia":
                $this->Exit = "Yes";
                break;
            case "sabbatia":
                $this->Exit = "Yes";
                break;
            case "salientia":
                $this->Exit = "Yes";
                break;
            case "samia":
                $this->Exit = "Yes";
                break;
            case "saturnia":
                $this->Exit = "Yes";
                break;
            case "scandentia":
                $this->Exit = "Yes";
                break;
            case "sepia":
                $this->Exit = "Yes";
                break;
            case "shortia":
                $this->Exit = "Yes";
                break;
            case "sialia":
                $this->Exit = "Yes";
                break;
            case "sinningia":
                $this->Exit = "Yes";
                break;
            case "sinningia":
                $this->Exit = "Yes";
                break;
            case "sirenia":
                $this->Exit = "Yes";
                break;
            case "slovenia":
                $this->Exit = "Yes";
                break;
            case "stellaria":
                $this->Exit = "Yes";
                break;
            case "superbia":
                $this->Exit = "Yes";
                break;
            case "tenia":
                $this->Exit = "Yes";
                break;
            case "tetragonia":
                $this->Exit = "Yes";
                break;
            case "tibia":
                $this->Exit = "Yes";
                break;
            case "titania":
                $this->Exit = "Yes";
                break;
            case "townsendia":
                $this->Exit = "Yes";
                break;
            case "tradescantia":
                $this->Exit = "Yes";
                break;
            case "tubercularia":
                $this->Exit = "Yes";
                break;
            case "uvularia":
                $this->Exit = "Yes";
                break;
            case "victoria":
                $this->Exit = "Yes";
                break;
            case "vidalia":
                $this->Exit = "Yes";
                break;
            case "virgilia":
                $this->Exit = "Yes";
                break;
            case "virginia":
                $this->Exit = "Yes";
                break;
            case "wisteria":
                $this->Exit = "Yes";
                break;
            case "wolffia":
                $this->Exit = "Yes";
                break;
            case "woodsia":
                $this->Exit = "Yes";
                break;
            case "woodwardia":
                $this->Exit = "Yes";
                break;
            case "zirconia":
                $this->Exit = "Yes";
                break;
            case "abasia":
                $this->Exit = "Yes";
                break;
            case "actinidia":
                $this->Exit = "Yes";
                break;
            case "alpinia":
                $this->Exit = "Yes";
                break;
            case "ambrosia":
                $this->Exit = "Yes";
                break;
            case "anglia":
                $this->Exit = "Yes";
                break;
            case "anomia":
                $this->Exit = "Yes";
                break;
            case "antennaria":
                $this->Exit = "Yes";
                break;
            case "antigonia":
                $this->Exit = "Yes";
                break;
            case "arcadia":
                $this->Exit = "Yes";
                break;
            case "armillaria":
                $this->Exit = "Yes";
                break;
            case "baptisia":
                $this->Exit = "Yes";
                break;
            case "basia":
                $this->Exit = "Yes";
                break;
            case "branchia":
                $this->Exit = "Yes";
                break;
            case "brasilia":
                $this->Exit = "Yes";
                break;
            case "calvaria":
                $this->Exit = "Yes";
                break;
            case "cavia":
                $this->Exit = "Yes";
                break;
            case "chelonia":
                $this->Exit = "Yes";
                break;
            case "cineraria":
                $this->Exit = "Yes";
                break;
            case "daphnia":
                $this->Exit = "Yes";
                break;
            case "dibranchia":
                $this->Exit = "Yes";
                break;
            case "differentia":
                $this->Exit = "Yes";
                break;
            case "emilia":
                $this->Exit = "Yes";
                break;
            case "eugenia":
                $this->Exit = "Yes";
                break;
            case "facia":
                $this->Exit = "Yes";
                break;
            case "fantasia":
                $this->Exit = "Yes";
                break;
            case "fungia":
                $this->Exit = "Yes";
                break;
            case "galleria":
                $this->Exit = "Yes";
                break;
            case "gardenia":
                $this->Exit = "Yes";
                break;
            case "kamia":
                $this->Exit = "Yes";
                break;
            case "kennedia":
                $this->Exit = "Yes";
                break;
            case "luxuria":
                $this->Exit = "Yes";
                break;
            case "malpighia":
                $this->Exit = "Yes";
                break;
            case "maxillaria":
                $this->Exit = "Yes";
                break;
            case "mercenaria":
                $this->Exit = "Yes";
                break;
            case "minutia":
                $this->Exit = "Yes";
                break;
            case "monochromia":
                $this->Exit = "Yes";
                break;
            case "montia":
                $this->Exit = "Yes";
                break;
            case "nigeria":
                $this->Exit = "Yes";
                break;
            case "nomia":
                $this->Exit = "Yes";
                break;
            case "phasmidia":
                $this->Exit = "Yes";
                break;
            case "pinnipedia":
                $this->Exit = "Yes";
                break;
            case "pistia":
                $this->Exit = "Yes";
                break;
            case "porphyria":
                $this->Exit = "Yes";
                break;
            case "praia":
                $this->Exit = "Yes";
                break;
            case "puccinia":
                $this->Exit = "Yes";
                break;
            case "raphia":
                $this->Exit = "Yes";
                break;
            case "regalia":
                $this->Exit = "Yes";
                break;
            case "ruminantia":
                $this->Exit = "Yes";
                break;
            case "salvia":
                $this->Exit = "Yes";
                break;
            case "sanguinaria":
                $this->Exit = "Yes";
                break;
            case "sardinia":
                $this->Exit = "Yes";
                break;
            case "sauria":
                $this->Exit = "Yes";
                break;
            case "scoria":
                $this->Exit = "Yes";
                break;
            case "scythia":
                $this->Exit = "Yes";
                break;
            case "serratia":
                $this->Exit = "Yes";
                break;
            case "sharia":
                $this->Exit = "Yes";
                break;
            case "tilia":
                $this->Exit = "Yes";
                break;
            case "ursinia":
                $this->Exit = "Yes";
                break;
            case "valencia":
                $this->Exit = "Yes";
                break;
            case "vicia":
                $this->Exit = "Yes";
                break;
            case "aditi":
                $this->Exit = "Yes";
                break;
            case "alberti":
                $this->Exit = "Yes";
                break;
            case "anti":
                $this->Exit = "Yes";
                break;
            case "bari":
                $this->Exit = "Yes";
                break;
            case "bolti":
                $this->Exit = "Yes";
                break;
            case "bragi":
                $this->Exit = "Yes";
                break;
            case "buyi":
                $this->Exit = "Yes";
                break;
            case "chari":
                $this->Exit = "Yes";
                break;
            case "chilli":
                $this->Exit = "Yes";
                break;
            case "coati":
                $this->Exit = "Yes";
                break;
            case "dali":
                $this->Exit = "Yes";
                break;
            case "elli":
                $this->Exit = "Yes";
                break;
            case "gari":
                $this->Exit = "Yes";
                break;
            case "gaudi":
                $this->Exit = "Yes";
                break;
            case "gauri":
                $this->Exit = "Yes";
                break;
            case "gobi":
                $this->Exit = "Yes";
                break;
            case "hani":
                $this->Exit = "Yes";
                break;
            case "hebei":
                $this->Exit = "Yes";
                break;
            case "helleri":
                $this->Exit = "Yes";
                break;
            case "hopei":
                $this->Exit = "Yes";
                break;
            case "hopi":
                $this->Exit = "Yes";
                break;
            case "houri":
                $this->Exit = "Yes";
                break;
            case "jacobi":
                $this->Exit = "Yes";
                break;
            case "kwai":
                $this->Exit = "Yes";
                break;
            case "lathi":
                $this->Exit = "Yes";
                break;
            case "levi":
                $this->Exit = "Yes";
                break;
            case "liii":
                $this->Exit = "Yes";
                break;
            case "loti":
                $this->Exit = "Yes";
                break;
            case "lulli":
                $this->Exit = "Yes";
                break;
            case "lungi":
                $this->Exit = "Yes";
                break;
            case "lvii":
                $this->Exit = "Yes";
                break;
            case "lviii":
                $this->Exit = "Yes";
                break;
            case "lxii":
                $this->Exit = "Yes";
                break;
            case "lxiii":
                $this->Exit = "Yes";
                break;
            case "lxvi":
                $this->Exit = "Yes";
                break;
            case "lxvii":
                $this->Exit = "Yes";
                break;
            case "lxviii":
                $this->Exit = "Yes";
                break;
            case "lxxi":
                $this->Exit = "Yes";
                break;
            case "lxxii":
                $this->Exit = "Yes";
                break;
            case "lxxiii":
                $this->Exit = "Yes";
                break;
            case "lxxvi":
                $this->Exit = "Yes";
                break;
            case "lxxvii":
                $this->Exit = "Yes";
                break;
            case "lxxviii":
                $this->Exit = "Yes";
                break;
            case "lxxxi":
                $this->Exit = "Yes";
                break;
            case "lxxxii":
                $this->Exit = "Yes";
                break;
            case "lxxxiii":
                $this->Exit = "Yes";
                break;
            case "lxxxvi":
                $this->Exit = "Yes";
                break;
            case "lxxxvii":
                $this->Exit = "Yes";
                break;
            case "lxxxviii":
                $this->Exit = "Yes";
                break;
            case "magi":
                $this->Exit = "Yes";
                break;
            case "maoi":
                $this->Exit = "Yes";
                break;
            case "mari":
                $this->Exit = "Yes";
                break;
            case "marti":
                $this->Exit = "Yes";
                break;
            case "martini":
                $this->Exit = "Yes";
                break;
            case "marumi":
                $this->Exit = "Yes";
                break;
            case "masai":
                $this->Exit = "Yes";
                break;
            case "mashi":
                $this->Exit = "Yes";
                break;
            case "maxi":
                $this->Exit = "Yes";
                break;
            case "medici":
                $this->Exit = "Yes";
                break;
            case "midi":
                $this->Exit = "Yes";
                break;
            case "mini":
                $this->Exit = "Yes";
                break;
            case "nagi":
                $this->Exit = "Yes";
                break;
            case "pali":
                $this->Exit = "Yes";
                break;
            case "pauli":
                $this->Exit = "Yes";
                break;
            case "penni":
                $this->Exit = "Yes";
                break;
            case "ragi":
                $this->Exit = "Yes";
                break;
            case "romani":
                $this->Exit = "Yes";
                break;
            case "safari":
                $this->Exit = "Yes";
                break;
            case "sami":
                $this->Exit = "Yes";
                break;
            case "scampi":
                $this->Exit = "Yes";
                break;
            case "tabi":
                $this->Exit = "Yes";
                break;
            case "tati":
                $this->Exit = "Yes";
                break;
            case "taxi":
                $this->Exit = "Yes";
                break;
            case "tipi":
                $this->Exit = "Yes";
                break;
            case "titi":
                $this->Exit = "Yes";
                break;
            case "topi":
                $this->Exit = "Yes";
                break;
            case "tupi":
                $this->Exit = "Yes";
                break;
            case "tympani":
                $this->Exit = "Yes";
                break;
            case "viii":
                $this->Exit = "Yes";
                break;
            case "wadi":
                $this->Exit = "Yes";
                break;
            case "xcii":
                $this->Exit = "Yes";
                break;
            case "xciii":
                $this->Exit = "Yes";
                break;
            case "xcvi":
                $this->Exit = "Yes";
                break;
            case "xcvii":
                $this->Exit = "Yes";
                break;
            case "xcviii":
                $this->Exit = "Yes";
                break;
            case "xiii":
                $this->Exit = "Yes";
                break;
            case "xlii":
                $this->Exit = "Yes";
                break;
            case "xliii":
                $this->Exit = "Yes";
                break;
            case "xlvi":
                $this->Exit = "Yes";
                break;
            case "xlvii":
                $this->Exit = "Yes";
                break;
            case "xlviii":
                $this->Exit = "Yes";
                break;
            case "xvii":
                $this->Exit = "Yes";
                break;
            case "xviii":
                $this->Exit = "Yes";
                break;
            case "xxii":
                $this->Exit = "Yes";
                break;
            case "xxiii":
                $this->Exit = "Yes";
                break;
            case "xxvi":
                $this->Exit = "Yes";
                break;
            case "xxvii":
                $this->Exit = "Yes";
                break;
            case "xxviii":
                $this->Exit = "Yes";
                break;
            case "xxxi":
                $this->Exit = "Yes";
                break;
            case "xxxii":
                $this->Exit = "Yes";
                break;
            case "xxxiii":
                $this->Exit = "Yes";
                break;
            case "xxxvi":
                $this->Exit = "Yes";
                break;
            case "xxxvii":
                $this->Exit = "Yes";
                break;
            case "xxxviii":
                $this->Exit = "Yes";
                break;
            case "yeti":
                $this->Exit = "Yes";
                break;
            case "ziti":
                $this->Exit = "Yes";
                break;
            case "actinian":
                $this->Exit = "Yes";
                break;
            case "aristotelian":
                $this->Exit = "Yes";
                break;
            case "banian":
                $this->Exit = "Yes";
                break;
            case "cambrian":
                $this->Exit = "Yes";
                break;
            case "carolingian":
                $this->Exit = "Yes";
                break;
            case "cornelian":
                $this->Exit = "Yes";
                break;
            case "dalian":
                $this->Exit = "Yes";
                break;
            case "devonian":
                $this->Exit = "Yes";
                break;
            case "fabian":
                $this->Exit = "Yes";
                break;
            case "friesian":
                $this->Exit = "Yes";
                break;
            case "gentian":
                $this->Exit = "Yes";
                break;
            case "gorgonian":
                $this->Exit = "Yes";
                break;
            case "hessian":
                $this->Exit = "Yes";
                break;
            case "holocephalian":
                $this->Exit = "Yes";
                break;
            case "jamesian":
                $this->Exit = "Yes";
                break;
            case "kalian":
                $this->Exit = "Yes";
                break;
            case "maximian":
                $this->Exit = "Yes";
                break;
            case "optician":
                $this->Exit = "Yes";
                break;
            case "permian":
                $this->Exit = "Yes";
                break;
            case "plebeian":
                $this->Exit = "Yes";
                break;
            case "plutonian":
                $this->Exit = "Yes";
                break;
            case "rastafarian":
                $this->Exit = "Yes";
                break;
            case "riparian":
                $this->Exit = "Yes";
                break;
            case "ruffian":
                $this->Exit = "Yes";
                break;
            case "sorbian":
                $this->Exit = "Yes";
                break;
            case "stentorian":
                $this->Exit = "Yes";
                break;
            case "susian":
                $this->Exit = "Yes";
                break;
            case "titian":
                $this->Exit = "Yes";
                break;
            case "helical":
                $this->Exit = "Yes";
                break;
            case "radical":
                $this->Exit = "Yes";
                break;
            case "abhorrence":
                $this->Exit = "Yes";
                break;
            case "adamance":
                $this->Exit = "Yes";
                break;
            case "advance":
                $this->Exit = "Yes";
                break;
            case "affiance":
                $this->Exit = "Yes";
                break;
            case "allegiance":
                $this->Exit = "Yes";
                break;
            case "ambulance":
                $this->Exit = "Yes";
                break;
            case "askance":
                $this->Exit = "Yes";
                break;
            case "assurance":
                $this->Exit = "Yes";
                break;
            case "balance":
                $this->Exit = "Yes";
                break;
            case "capacitance":
                $this->Exit = "Yes";
                break;
            case "commence":
                $this->Exit = "Yes";
                break;
            case "concupiscence":
                $this->Exit = "Yes";
                break;
            case "congruence":
                $this->Exit = "Yes";
                break;
            case "constance":
                $this->Exit = "Yes";
                break;
            case "continuance":
                $this->Exit = "Yes";
                break;
            case "credence":
                $this->Exit = "Yes";
                break;
            case "durance":
                $this->Exit = "Yes";
                break;
            case "finance":
                $this->Exit = "Yes";
                break;
            case "flamboyance":
                $this->Exit = "Yes";
                break;
            case "grievance":
                $this->Exit = "Yes";
                break;
            case "impedance":
                $this->Exit = "Yes";
                break;
            case "inference":
                $this->Exit = "Yes";
                break;
            case "insentience":
                $this->Exit = "Yes";
                break;
            case "instance":
                $this->Exit = "Yes";
                break;
            case "offence":
                $this->Exit = "Yes";
                break;
            case "ordinance":
                $this->Exit = "Yes";
                break;
            case "overabundance":
                $this->Exit = "Yes";
                break;
            case "penitence":
                $this->Exit = "Yes";
                break;
            case "perchance":
                $this->Exit = "Yes";
                break;
            case "permanence":
                $this->Exit = "Yes";
                break;
            case "piquance":
                $this->Exit = "Yes";
                break;
            case "pittance":
                $this->Exit = "Yes";
                break;
            case "potence":
                $this->Exit = "Yes";
                break;
            case "precipitance":
                $this->Exit = "Yes";
                break;
            case "provenance":
                $this->Exit = "Yes";
                break;
            case "provence":
                $this->Exit = "Yes";
                break;
            case "providence":
                $this->Exit = "Yes";
                break;
            case "prudence":
                $this->Exit = "Yes";
                break;
            case "pursuance":
                $this->Exit = "Yes";
                break;
            case "reactance":
                $this->Exit = "Yes";
                break;
            case "refinance":
                $this->Exit = "Yes";
                break;
            case "remittance":
                $this->Exit = "Yes";
                break;
            case "romance":
                $this->Exit = "Yes";
                break;
            case "sentence":
                $this->Exit = "Yes";
                break;
            case "sentience":
                $this->Exit = "Yes";
                break;
            case "somnolence":
                $this->Exit = "Yes";
                break;
            case "valiance":
                $this->Exit = "Yes";
                break;
            case "abducent":
                $this->Exit = "Yes";
                break;
            case "aberrant":
                $this->Exit = "Yes";
                break;
            case "absent":
                $this->Exit = "Yes";
                break;
            case "accent":
                $this->Exit = "Yes";
                break;
            case "adamant":
                $this->Exit = "Yes";
                break;
            case "adducent":
                $this->Exit = "Yes";
                break;
            case "affiant":
                $this->Exit = "Yes";
                break;
            case "arpent":
                $this->Exit = "Yes";
                break;
            case "askant":
                $this->Exit = "Yes";
                break;
            case "aslant":
                $this->Exit = "Yes";
                break;
            case "aspirant":
                $this->Exit = "Yes";
                break;
            case "assent":
                $this->Exit = "Yes";
                break;
            case "bouffant":
                $this->Exit = "Yes";
                break;
            case "brisant":
                $this->Exit = "Yes";
                break;
            case "candent":
                $this->Exit = "Yes";
                break;
            case "clamant":
                $this->Exit = "Yes";
                break;
            case "client":
                $this->Exit = "Yes";
                break;
            case "cogent":
                $this->Exit = "Yes";
                break;
            case "competent":
                $this->Exit = "Yes";
                break;
            case "confident":
                $this->Exit = "Yes";
                break;
            case "consonant":
                $this->Exit = "Yes";
                break;
            case "couchant":
                $this->Exit = "Yes";
                break;
            case "covenant":
                $this->Exit = "Yes";
                break;
            case "currant":
                $this->Exit = "Yes";
                break;
            case "current":
                $this->Exit = "Yes";
                break;
            case "decadent":
                $this->Exit = "Yes";
                break;
            case "decant":
                $this->Exit = "Yes";
                break;
            case "decent":
                $this->Exit = "Yes";
                break;
            case "dehiscent":
                $this->Exit = "Yes";
                break;
            case "deviant":
                $this->Exit = "Yes";
                break;
            case "discant":
                $this->Exit = "Yes";
                break;
            case "dissent":
                $this->Exit = "Yes";
                break;
            case "docent":
                $this->Exit = "Yes";
                break;
            case "dormant":
                $this->Exit = "Yes";
                break;
            case "elegant":
                $this->Exit = "Yes";
                break;
            case "emergent":
                $this->Exit = "Yes";
                break;
            case "ensuant":
                $this->Exit = "Yes";
                break;
            case "errant":
                $this->Exit = "Yes";
                break;
            case "executant":
                $this->Exit = "Yes";
                break;
            case "fluent":
                $this->Exit = "Yes";
                break;
            case "fondant":
                $this->Exit = "Yes";
                break;
            case "gallant":
                $this->Exit = "Yes";
                break;
            case "implant":
                $this->Exit = "Yes";
                break;
            case "important":
                $this->Exit = "Yes";
                break;
            case "instant":
                $this->Exit = "Yes";
                break;
            case "insolent":
                $this->Exit = "Yes";
                break;
            case "lambent":
                $this->Exit = "Yes";
                break;
            case "lament":
                $this->Exit = "Yes";
                break;
            case "latent":
                $this->Exit = "Yes";
                break;
            case "levant":
                $this->Exit = "Yes";
                break;
            case "loment":
                $this->Exit = "Yes";
                break;
            case "lucent":
                $this->Exit = "Yes";
                break;
            case "mediant":
                $this->Exit = "Yes";
                break;
            case "militant":
                $this->Exit = "Yes";
                break;
            case "miscreant":
                $this->Exit = "Yes";
                break;
            case "moment":
                $this->Exit = "Yes";
                break;
            case "negligent":
                $this->Exit = "Yes";
                break;
            case "nocent":
                $this->Exit = "Yes";
                break;
            case "octant":
                $this->Exit = "Yes";
                break;
            case "overindulgent":
                $this->Exit = "Yes";
                break;
            case "pageant":
                $this->Exit = "Yes";
                break;
            case "parent":
                $this->Exit = "Yes";
                break;
            case "passant":
                $this->Exit = "Yes";
                break;
            case "patent":
                $this->Exit = "Yes";
                break;
            case "pedant":
                $this->Exit = "Yes";
                break;
            case "pennant":
                $this->Exit = "Yes";
                break;
            case "percent":
                $this->Exit = "Yes";
                break;
            case "pigment":
                $this->Exit = "Yes";
                break;
            case "piquant":
                $this->Exit = "Yes";
                break;
            case "portent":
                $this->Exit = "Yes";
                break;
            case "postulant":
                $this->Exit = "Yes";
                break;
            case "potent":
                $this->Exit = "Yes";
                break;
            case "preponderant":
                $this->Exit = "Yes";
                break;
            case "prudent":
                $this->Exit = "Yes";
                break;
            case "pungent":
                $this->Exit = "Yes";
                break;
            case "quadrant":
                $this->Exit = "Yes";
                break;
            case "recombinant":
                $this->Exit = "Yes";
                break;
            case "recreant":
                $this->Exit = "Yes";
                break;
            case "recrudescent":
                $this->Exit = "Yes";
                break;
            case "recusant":
                $this->Exit = "Yes";
                break;
            case "reentrant":
                $this->Exit = "Yes";
                break;
            case "regiment":
                $this->Exit = "Yes";
                break;
            case "relent":
                $this->Exit = "Yes";
                break;
            case "repent":
                $this->Exit = "Yes";
                break;
            case "repentant":
                $this->Exit = "Yes";
                break;
            case "replant":
                $this->Exit = "Yes";
                break;
            case "repugnant":
                $this->Exit = "Yes";
                break;
            case "resent":
                $this->Exit = "Yes";
                break;
            case "reverent":
                $this->Exit = "Yes";
                break;
            case "rodent":
                $this->Exit = "Yes";
                break;
            case "savant":
                $this->Exit = "Yes";
                break;
            case "sealant":
                $this->Exit = "Yes";
                break;
            case "sergeant":
                $this->Exit = "Yes";
                break;
            case "sextant":
                $this->Exit = "Yes";
                break;
            case "solent":
                $this->Exit = "Yes";
                break;
            case "sonant":
                $this->Exit = "Yes";
                break;
            case "spirant":
                $this->Exit = "Yes";
                break;
            case "statant":
                $this->Exit = "Yes";
                break;
            case "strident":
                $this->Exit = "Yes";
                break;
            case "stringent":
                $this->Exit = "Yes";
                break;
            case "student":
                $this->Exit = "Yes";
                break;
            case "supplant":
                $this->Exit = "Yes";
                break;
            case "suppressant":
                $this->Exit = "Yes";
                break;
            case "talent":
                $this->Exit = "Yes";
                break;
            case "tangent":
                $this->Exit = "Yes";
                break;
            case "taskent":
                $this->Exit = "Yes";
                break;
            case "tenant":
                $this->Exit = "Yes";
                break;
            case "torrent":
                $this->Exit = "Yes";
                break;
            case "trenchant":
                $this->Exit = "Yes";
                break;
            case "truant":
                $this->Exit = "Yes";
                break;
            case "tyrant":
                $this->Exit = "Yes";
                break;
            case "urgent":
                $this->Exit = "Yes";
                break;
            case "vacant":
                $this->Exit = "Yes";
                break;
            case "valent":
                $this->Exit = "Yes";
                break;
            case "valiant":
                $this->Exit = "Yes";
                break;
            case "versant":
                $this->Exit = "Yes";
                break;
            case "vibrant":
                $this->Exit = "Yes";
                break;
            case "vigilant":
                $this->Exit = "Yes";
                break;
            case "violent":
                $this->Exit = "Yes";
                break;
            case "volant":
                $this->Exit = "Yes";
                break;
            case "wisent":
                $this->Exit = "Yes";
                break;
            case "acreage":
                $this->Exit = "Yes";
                break;
            case "average":
                $this->Exit = "Yes";
                break;
            case "bandage":
                $this->Exit = "Yes";
                break;
            case "bondage":
                $this->Exit = "Yes";
                break;
            case "borage":
                $this->Exit = "Yes";
                break;
            case "bricolage":
                $this->Exit = "Yes";
                break;
            case "cabbage":
                $this->Exit = "Yes";
                break;
            case "cabotage":
                $this->Exit = "Yes";
                break;
            case "cleavage":
                $this->Exit = "Yes";
                break;
            case "collage":
                $this->Exit = "Yes";
                break;
            case "corkage":
                $this->Exit = "Yes";
                break;
            case "corsage":
                $this->Exit = "Yes";
                break;
            case "cowage":
                $this->Exit = "Yes";
                break;
            case "damage":
                $this->Exit = "Yes";
                break;
            case "dotage":
                $this->Exit = "Yes";
                break;
            case "dressage":
                $this->Exit = "Yes";
                break;
            case "eatage":
                $this->Exit = "Yes";
                break;
            case "foliage":
                $this->Exit = "Yes";
                break;
            case "forage":
                $this->Exit = "Yes";
                break;
            case "forestage":
                $this->Exit = "Yes";
                break;
            case "garage":
                $this->Exit = "Yes";
                break;
            case "garbage":
                $this->Exit = "Yes";
                break;
            case "homage":
                $this->Exit = "Yes";
                break;
            case "hostage":
                $this->Exit = "Yes";
                break;
            case "lavage":
                $this->Exit = "Yes";
                break;
            case "lovage":
                $this->Exit = "Yes";
                break;
            case "manage":
                $this->Exit = "Yes";
                break;
            case "massage":
                $this->Exit = "Yes";
                break;
            case "menage":
                $this->Exit = "Yes";
                break;
            case "message":
                $this->Exit = "Yes";
                break;
            case "mirage":
                $this->Exit = "Yes";
                break;
            case "montage":
                $this->Exit = "Yes";
                break;
            case "moorage":
                $this->Exit = "Yes";
                break;
            case "nonage":
                $this->Exit = "Yes";
                break;
            case "outage":
                $this->Exit = "Yes";
                break;
            case "outrage":
                $this->Exit = "Yes";
                break;
            case "overage":
                $this->Exit = "Yes";
                break;
            case "pelage":
                $this->Exit = "Yes";
                break;
            case "pillage":
                $this->Exit = "Yes";
                break;
            case "potage":
                $this->Exit = "Yes";
                break;
            case "rampage":
                $this->Exit = "Yes";
                break;
            case "ravage":
                $this->Exit = "Yes";
                break;
            case "roughage":
                $this->Exit = "Yes";
                break;
            case "rummage":
                $this->Exit = "Yes";
                break;
            case "sabotage":
                $this->Exit = "Yes";
                break;
            case "savage":
                $this->Exit = "Yes";
                break;
            case "seigniorage":
                $this->Exit = "Yes";
                break;
            case "sewage":
                $this->Exit = "Yes";
                break;
            case "tillage":
                $this->Exit = "Yes";
                break;
            case "tonnage":
                $this->Exit = "Yes";
                break;
            case "ullage":
                $this->Exit = "Yes";
                break;
            case "underage":
                $this->Exit = "Yes";
                break;
            case "vassalage":
                $this->Exit = "Yes";
                break;
            case "visage":
                $this->Exit = "Yes";
                break;
            case "aptly":
                $this->Exit = "Yes";
                break;
            case "bally":
                $this->Exit = "Yes";
                break;
            case "belly":
                $this->Exit = "Yes";
                break;
            case "billy":
                $this->Exit = "Yes";
                break;
            case "burly":
                $this->Exit = "Yes";
                break;
            case "charily":
                $this->Exit = "Yes";
                break;
            case "chiefly":
                $this->Exit = "Yes";
                break;
            case "colly":
                $this->Exit = "Yes";
                break;
            case "comely":
                $this->Exit = "Yes";
                break;
            case "comply":
                $this->Exit = "Yes";
                break;
            case "coolly":
                $this->Exit = "Yes";
                break;
            case "cooly":
                $this->Exit = "Yes";
                break;
            case "dally":
                $this->Exit = "Yes";
                break;
            case "doily":
                $this->Exit = "Yes";
                break;
            case "dolly":
                $this->Exit = "Yes";
                break;
            case "dully":
                $this->Exit = "Yes";
                break;
            case "early":
                $this->Exit = "Yes";
                break;
            case "erectly":
                $this->Exit = "Yes";
                break;
            case "filly":
                $this->Exit = "Yes";
                break;
            case "gamely":
                $this->Exit = "Yes";
                break;
            case "gaudily":
                $this->Exit = "Yes";
                break;
            case "gayly":
                $this->Exit = "Yes";
                break;
            case "grisly":
                $this->Exit = "Yes";
                break;
            case "gristly":
                $this->Exit = "Yes";
                break;
            case "holly":
                $this->Exit = "Yes";
                break;
            case "imply":
                $this->Exit = "Yes";
                break;
            case "molly":
                $this->Exit = "Yes";
                break;
            case "moonily":
                $this->Exit = "Yes";
                break;
            case "namely":
                $this->Exit = "Yes";
                break;
            case "nimbly":
                $this->Exit = "Yes";
                break;
            case "obtusely":
                $this->Exit = "Yes";
                break;
            case "pimply":
                $this->Exit = "Yes";
                break;
            case "portly":
                $this->Exit = "Yes";
                break;
            case "pussly":
                $this->Exit = "Yes";
                break;
            case "queerly":
                $this->Exit = "Yes";
                break;
            case "rally":
                $this->Exit = "Yes";
                break;
            case "reply":
                $this->Exit = "Yes";
                break;
            case "sally":
                $this->Exit = "Yes";
                break;
            case "stately":
                $this->Exit = "Yes";
                break;
            case "sunnily":
                $this->Exit = "Yes";
                break;
            case "surly":
                $this->Exit = "Yes";
                break;
            case "tally":
                $this->Exit = "Yes";
                break;
            case "wally":
                $this->Exit = "Yes";
                break;
            case "wooly":
                $this->Exit = "Yes";
                break;
            case "acrimonious":
                $this->Exit = "Yes";
                break;
            case "barbarous":
                $this->Exit = "Yes";
                break;
            case "bounteous":
                $this->Exit = "Yes";
                break;
            case "burnous":
                $this->Exit = "Yes";
                break;
            case "callous":
                $this->Exit = "Yes";
                break;
            case "cerous":
                $this->Exit = "Yes";
                break;
            case "cheliferous":
                $this->Exit = "Yes";
                break;
            case "courteous":
                $this->Exit = "Yes";
                break;
            case "devious":
                $this->Exit = "Yes";
                break;
            case "dexterity":
                $this->Exit = "Yes";
                break;
            case "ferrous":
                $this->Exit = "Yes";
                break;
            case "gratuitous":
                $this->Exit = "Yes";
                break;
            case "humous":
                $this->Exit = "Yes";
                break;
            case "infamous":
                $this->Exit = "Yes";
                break;
            case "ingenuous":
                $this->Exit = "Yes";
                break;
            case "jumentous":
                $this->Exit = "Yes";
                break;
            case "libelous":
                $this->Exit = "Yes";
                break;
            case "momentous":
                $this->Exit = "Yes";
                break;
            case "monoclinous":
                $this->Exit = "Yes";
                break;
            case "necessitous":
                $this->Exit = "Yes";
                break;
            case "nitrous":
                $this->Exit = "Yes";
                break;
            case "parous":
                $this->Exit = "Yes";
                break;
            case "pilous":
                $this->Exit = "Yes";
                break;
            case "ponderous":
                $this->Exit = "Yes";
                break;
            case "portentous":
                $this->Exit = "Yes";
                break;
            case "ramous":
                $this->Exit = "Yes";
                break;
            case "rivalrous":
                $this->Exit = "Yes";
                break;
            case "sanies":
                $this->Exit = "Yes";
                break;
            case "serous":
                $this->Exit = "Yes";
                break;
            case "shavous":
                $this->Exit = "Yes";
                break;
            case "slumberous":
                $this->Exit = "Yes";
                break;
            case "stomatous":
                $this->Exit = "Yes";
                break;
            case "studious":
                $this->Exit = "Yes";
                break;
            case "timorous":
                $this->Exit = "Yes";
                break;
            case "tyrannous":
                $this->Exit = "Yes";
                break;
            case "vinous":
                $this->Exit = "Yes";
                break;
            case "vivacious":
                $this->Exit = "Yes";
                break;
            case "cadent":
                $this->Exit = "Yes";
                break;
            case "corroborant":
                $this->Exit = "Yes";
                break;
            case "deferent":
                $this->Exit = "Yes";
                break;
            case "aperient":
                $this->Exit = "Yes";
                break;
            case "resident":
                $this->Exit = "Yes";
                break;
            case "aboral":
                $this->Exit = "Yes";
                break;
            case "coronal":
                $this->Exit = "Yes";
                break;
            case "ducal":
                $this->Exit = "Yes";
                break;
            case "hypodermic":
                $this->Exit = "Yes";
                break;
            case "jural":
                $this->Exit = "Yes";
                break;
            case "mitral":
                $this->Exit = "Yes";
                break;
            case "nasal":
                $this->Exit = "Yes";
                break;
            case "nepal":
                $this->Exit = "Yes";
                break;
            case "phial":
                $this->Exit = "Yes";
                break;
            case "sabal":
                $this->Exit = "Yes";
                break;
            case "sagittal":
                $this->Exit = "Yes";
                break;
            case "senegal":
                $this->Exit = "Yes";
                break;
            case "simal":
                $this->Exit = "Yes";
                break;
            case "turbinal":
                $this->Exit = "Yes";
                break;
            case "underseal":
                $this->Exit = "Yes";
                break;
            case "urial":
                $this->Exit = "Yes";
                break;
            case "vandal":
                $this->Exit = "Yes";
                break;
            case "venal":
                $this->Exit = "Yes";
                break;
            case "veronal":
                $this->Exit = "Yes";
                break;
            case "vesical":
                $this->Exit = "Yes";
                break;
            case "annual":
                $this->Exit = "Yes";
                break;
            case "casual":
                $this->Exit = "Yes";
                break;
            case "mutual":
                $this->Exit = "Yes";
                break;
            case "visual":
                $this->Exit = "Yes";
                break;
            case "amphiboly":
                $this->Exit = "Yes";
                break;
            case "apply":
                $this->Exit = "Yes";
                break;
            case "brickly":
                $this->Exit = "Yes";
                break;
            case "burbly":
                $this->Exit = "Yes";
                break;
            case "causal":
                $this->Exit = "Yes";
                break;
            case "curly":
                $this->Exit = "Yes";
                break;
            case "diddly":
                $this->Exit = "Yes";
                break;
            case "fugly":
                $this->Exit = "Yes";
                break;
            case "googly":
                $this->Exit = "Yes";
                break;
            case "ideal":
                $this->Exit = "Yes";
                break;
            case "jungly":
                $this->Exit = "Yes";
                break;
            case "nervily":
                $this->Exit = "Yes";
                break;
            case "scrabbly":
                $this->Exit = "Yes";
                break;
            case "spindly":
                $this->Exit = "Yes";
                break;
            case "supply":
                $this->Exit = "Yes";
                break;
            case "tully":
                $this->Exit = "Yes";
                break;
            case "twinkly":
                $this->Exit = "Yes";
                break;
            case "unitedly":
                $this->Exit = "Yes";
                break;
            case "wiggly":
                $this->Exit = "Yes";
                break;
            case "baleful":
                $this->Exit = "Yes";
                break;
            case "bashful":
                $this->Exit = "Yes";
                break;
            case "doleful":
                $this->Exit = "Yes";
                break;
            case "earful":
                $this->Exit = "Yes";
                break;
            case "eyeful":
                $this->Exit = "Yes";
                break;
            case "fistful":
                $this->Exit = "Yes";
                break;
            case "fitful":
                $this->Exit = "Yes";
                break;
            case "rueful":
                $this->Exit = "Yes";
                break;
            case "skinful":
                $this->Exit = "Yes";
                break;
            case "unmanful":
                $this->Exit = "Yes";
                break;
            case "wilful":
                $this->Exit = "Yes";
                break;
            case "willful":
                $this->Exit = "Yes";
                break;
            case "albee":
                $this->Exit = "Yes";
                break;
            case "bungee":
                $this->Exit = "Yes";
                break;
            case "debauchee":
                $this->Exit = "Yes";
                break;
            case "dragee":
                $this->Exit = "Yes";
                break;
            case "drawee":
                $this->Exit = "Yes";
                break;
            case "filaree":
                $this->Exit = "Yes";
                break;
            case "grandee":
                $this->Exit = "Yes";
                break;
            case "hackee":
                $this->Exit = "Yes";
                break;
            case "lathee":
                $this->Exit = "Yes";
                break;
            case "leechee":
                $this->Exit = "Yes";
                break;
            case "levee":
                $this->Exit = "Yes";
                break;
            case "mallee":
                $this->Exit = "Yes";
                break;
            case "manatee":
                $this->Exit = "Yes";
                break;
            case "marquee":
                $this->Exit = "Yes";
                break;
            case "parsee":
                $this->Exit = "Yes";
                break;
            case "passee":
                $this->Exit = "Yes";
                break;
            case "pawnee":
                $this->Exit = "Yes";
                break;
            case "pewee":
                $this->Exit = "Yes";
                break;
            case "pongee":
                $this->Exit = "Yes";
                break;
            case "puree":
                $this->Exit = "Yes";
                break;
            case "puttee":
                $this->Exit = "Yes";
                break;
            case "ragee":
                $this->Exit = "Yes";
                break;
            case "ramee":
                $this->Exit = "Yes";
                break;
            case "settee":
                $this->Exit = "Yes";
                break;
            case "shawnee":
                $this->Exit = "Yes";
                break;
            case "toffee":
                $this->Exit = "Yes";
                break;
            case "topee":
                $this->Exit = "Yes";
                break;
            case "trochee":
                $this->Exit = "Yes";
                break;
            case "doei":
                $this->Exit = "Yes";
                break;
            case "plectognathi":
                $this->Exit = "Yes";
                break;
            case "amenable":
                $this->Exit = "Yes";
                break;
            case "available":
                $this->Exit = "Yes";
                break;
            case "biddable":
                $this->Exit = "Yes";
                break;
            case "capable":
                $this->Exit = "Yes";
                break;
            case "disable":
                $this->Exit = "Yes";
                break;
            case "equitable":
                $this->Exit = "Yes";
                break;
            case "fleeceable":
                $this->Exit = "Yes";
                break;
            case "friable":
                $this->Exit = "Yes";
                break;
            case "incurable":
                $this->Exit = "Yes";
                break;
            case "inequitable":
                $this->Exit = "Yes";
                break;
            case "malleable":
                $this->Exit = "Yes";
                break;
            case "palatable":
                $this->Exit = "Yes";
                break;
            case "parable":
                $this->Exit = "Yes";
                break;
            case "portable":
                $this->Exit = "Yes";
                break;
            case "potable":
                $this->Exit = "Yes";
                break;
            case "probable":
                $this->Exit = "Yes";
                break;
            case "ratable":
                $this->Exit = "Yes";
                break;
            case "redoubtable":
                $this->Exit = "Yes";
                break;
            case "tenable":
                $this->Exit = "Yes";
                break;
            case "tillable":
                $this->Exit = "Yes";
                break;
            case "tractable":
                $this->Exit = "Yes";
                break;
            case "undoable":
                $this->Exit = "Yes";
                break;
            case "unwearable":
                $this->Exit = "Yes";
                break;
            case "veritable":
                $this->Exit = "Yes";
                break;
            case "aweary":
                $this->Exit = "Yes";
                break;
            case "commissary":
                $this->Exit = "Yes";
                break;
            case "abbey":
                $this->Exit = "Yes";
                break;
            case "agony":
                $this->Exit = "Yes";
                break;
            case "argosy":
                $this->Exit = "Yes";
                break;
            case "ashy":
                $this->Exit = "Yes";
                break;
            case "atony":
                $this->Exit = "Yes";
                break;
            case "atopy":
                $this->Exit = "Yes";
                break;
            case "autochthony":
                $this->Exit = "Yes";
                break;
            case "bailey":
                $this->Exit = "Yes";
                break;
            case "bandy":
                $this->Exit = "Yes";
                break;
            case "barmy":
                $this->Exit = "Yes";
                break;
            case "benny":
                $this->Exit = "Yes";
                break;
            case "biddy":
                $this->Exit = "Yes";
                break;
            case "blowy":
                $this->Exit = "Yes";
                break;
            case "bobby":
                $this->Exit = "Yes";
                break;
            case "bogy":
                $this->Exit = "Yes";
                break;
            case "bonny":
                $this->Exit = "Yes";
                break;
            case "brady":
                $this->Exit = "Yes";
                break;
            case "brandy":
                $this->Exit = "Yes";
                break;
            case "bray":
                $this->Exit = "Yes";
                break;
            case "buddy":
                $this->Exit = "Yes";
                break;
            case "bunny":
                $this->Exit = "Yes";
                break;
            case "busy":
                $this->Exit = "Yes";
                break;
            case "caddy":
                $this->Exit = "Yes";
                break;
            case "cagy":
                $this->Exit = "Yes";
                break;
            case "canny":
                $this->Exit = "Yes";
                break;
            case "cathay":
                $this->Exit = "Yes";
                break;
            case "cavy":
                $this->Exit = "Yes";
                break;
            case "chalcedony":
                $this->Exit = "Yes";
                break;
            case "chinchy":
                $this->Exit = "Yes";
                break;
            case "chivy":
                $this->Exit = "Yes";
                break;
            case "choppy":
                $this->Exit = "Yes";
                break;
            case "chubby":
                $this->Exit = "Yes";
                break;
            case "cissy":
                $this->Exit = "Yes";
                break;
            case "clammy":
                $this->Exit = "Yes";
                break;
            case "clichy":
                $this->Exit = "Yes";
                break;
            case "clunky":
                $this->Exit = "Yes";
                break;
            case "cocky":
                $this->Exit = "Yes";
                break;
            case "cody":
                $this->Exit = "Yes";
                break;
            case "colony":
                $this->Exit = "Yes";
                break;
            case "colophony":
                $this->Exit = "Yes";
                break;
            case "coney":
                $this->Exit = "Yes";
                break;
            case "cony":
                $this->Exit = "Yes";
                break;
            case "copy":
                $this->Exit = "Yes";
                break;
            case "covey":
                $this->Exit = "Yes";
                break;
            case "cranny":
                $this->Exit = "Yes";
                break;
            case "crony":
                $this->Exit = "Yes";
                break;
            case "cruddy":
                $this->Exit = "Yes";
                break;
            case "cubby":
                $this->Exit = "Yes";
                break;
            case "cuddy":
                $this->Exit = "Yes";
                break;
            case "daisy":
                $this->Exit = "Yes";
                break;
            case "decoy":
                $this->Exit = "Yes";
                break;
            case "deny":
                $this->Exit = "Yes";
                break;
            case "dicey":
                $this->Exit = "Yes";
                break;
            case "diddley":
                $this->Exit = "Yes";
                break;
            case "dingy":
                $this->Exit = "Yes";
                break;
            case "dinky":
                $this->Exit = "Yes";
                break;
            case "dishy":
                $this->Exit = "Yes";
                break;
            case "dogy":
                $this->Exit = "Yes";
                break;
            case "dopy":
                $this->Exit = "Yes";
                break;
            case "dormy":
                $this->Exit = "Yes";
                break;
            case "drowsy":
                $this->Exit = "Yes";
                break;
            case "ducky":
                $this->Exit = "Yes";
                break;
            case "duly":
                $this->Exit = "Yes";
                break;
            case "easy":
                $this->Exit = "Yes";
                break;
            case "eddy":
                $this->Exit = "Yes";
                break;
            case "emmy":
                $this->Exit = "Yes";
                break;
            case "endogeny":
                $this->Exit = "Yes";
                break;
            case "espy":
                $this->Exit = "Yes";
                break;
            case "fanny":
                $this->Exit = "Yes";
                break;
            case "flabby":
                $this->Exit = "Yes";
                break;
            case "floppy":
                $this->Exit = "Yes";
                break;
            case "fluky":
                $this->Exit = "Yes";
                break;
            case "foamy":
                $this->Exit = "Yes";
                break;
            case "folksy":
                $this->Exit = "Yes";
                break;
            case "frey":
                $this->Exit = "Yes";
                break;
            case "gammy":
                $this->Exit = "Yes";
                break;
            case "gamy":
                $this->Exit = "Yes";
                break;
            case "gaudy":
                $this->Exit = "Yes";
                break;
            case "gauzy":
                $this->Exit = "Yes";
                break;
            case "goby":
                $this->Exit = "Yes";
                break;
            case "goosy":
                $this->Exit = "Yes";
                break;
            case "gravy":
                $this->Exit = "Yes";
                break;
            case "gunny":
                $this->Exit = "Yes";
                break;
            case "guts":
                $this->Exit = "Yes";
                break;
            case "gypsy":
                $this->Exit = "Yes";
                break;
            case "haley":
                $this->Exit = "Yes";
                break;
            case "halley":
                $this->Exit = "Yes";
                break;
            case "hanky":
                $this->Exit = "Yes";
                break;
            case "happy":
                $this->Exit = "Yes";
                break;
            case "hardy":
                $this->Exit = "Yes";
                break;
            case "harpy":
                $this->Exit = "Yes";
                break;
            case "heady":
                $this->Exit = "Yes";
                break;
            case "heavy":
                $this->Exit = "Yes";
                break;
            case "hinny":
                $this->Exit = "Yes";
                break;
            case "hippy":
                $this->Exit = "Yes";
                break;
            case "hobby":
                $this->Exit = "Yes";
                break;
            case "honey":
                $this->Exit = "Yes";
                break;
            case "honky":
                $this->Exit = "Yes";
                break;
            case "hooky":
                $this->Exit = "Yes";
                break;
            case "horney":
                $this->Exit = "Yes";
                break;
            case "hubby":
                $this->Exit = "Yes";
                break;
            case "hussy":
                $this->Exit = "Yes";
                break;
            case "inlay":
                $this->Exit = "Yes";
                break;
            case "irony":
                $this->Exit = "Yes";
                break;
            case "jaggy":
                $this->Exit = "Yes";
                break;
            case "jemmy":
                $this->Exit = "Yes";
                break;
            case "joffrey":
                $this->Exit = "Yes";
                break;
            case "johnny":
                $this->Exit = "Yes";
                break;
            case "kelpy":
                $this->Exit = "Yes";
                break;
            case "lady":
                $this->Exit = "Yes";
                break;
            case "laney":
                $this->Exit = "Yes";
                break;
            case "lay":
                $this->Exit = "Yes";
                break;
            case "lazy":
                $this->Exit = "Yes";
                break;
            case "leprosy":
                $this->Exit = "Yes";
                break;
            case "levy":
                $this->Exit = "Yes";
                break;
            case "limey":
                $this->Exit = "Yes";
                break;
            case "lindy":
                $this->Exit = "Yes";
                break;
            case "livy":
                $this->Exit = "Yes";
                break;
            case "lobby":
                $this->Exit = "Yes";
                break;
            case "loony":
                $this->Exit = "Yes";
                break;
            case "mammy":
                $this->Exit = "Yes";
                break;
            case "mandalay":
                $this->Exit = "Yes";
                break;
            case "mangey":
                $this->Exit = "Yes";
                break;
            case "many":
                $this->Exit = "Yes";
                break;
            case "maracay":
                $this->Exit = "Yes";
                break;
            case "marshy":
                $this->Exit = "Yes";
                break;
            case "matey":
                $this->Exit = "Yes";
                break;
            case "maundy":
                $this->Exit = "Yes";
                break;
            case "mazy":
                $this->Exit = "Yes";
                break;
            case "mingy":
                $this->Exit = "Yes";
                break;
            case "monody":
                $this->Exit = "Yes";
                break;
            case "muggy":
                $this->Exit = "Yes";
                break;
            case "nanny":
                $this->Exit = "Yes";
                break;
            case "navy":
                $this->Exit = "Yes";
                break;
            case "niffy":
                $this->Exit = "Yes";
                break;
            case "okay":
                $this->Exit = "Yes";
                break;
            case "paddy":
                $this->Exit = "Yes";
                break;
            case "parky":
                $this->Exit = "Yes";
                break;
            case "pedagogy":
                $this->Exit = "Yes";
                break;
            case "penny":
                $this->Exit = "Yes";
                break;
            case "peppy":
                $this->Exit = "Yes";
                break;
            case "peony":
                $this->Exit = "Yes";
                break;
            case "phony":
                $this->Exit = "Yes";
                break;
            case "pinny":
                $this->Exit = "Yes";
                break;
            case "pixy":
                $this->Exit = "Yes";
                break;
            case "ploy":
                $this->Exit = "Yes";
                break;
            case "poky":
                $this->Exit = "Yes";
                break;
            case "polyphony":
                $this->Exit = "Yes";
                break;
            case "pony":
                $this->Exit = "Yes";
                break;
            case "poppy":
                $this->Exit = "Yes";
                break;
            case "posy":
                $this->Exit = "Yes";
                break;
            case "preachy":
                $this->Exit = "Yes";
                break;
            case "proxy":
                $this->Exit = "Yes";
                break;
            case "puny":
                $this->Exit = "Yes";
                break;
            case "pursy":
                $this->Exit = "Yes";
                break;
            case "randy":
                $this->Exit = "Yes";
                break;
            case "raunchy":
                $this->Exit = "Yes";
                break;
            case "ready":
                $this->Exit = "Yes";
                break;
            case "riley":
                $this->Exit = "Yes";
                break;
            case "ritzy":
                $this->Exit = "Yes";
                break;
            case "romany":
                $this->Exit = "Yes";
                break;
            case "ruby":
                $this->Exit = "Yes";
                break;
            case "ruddy":
                $this->Exit = "Yes";
                break;
            case "sassy":
                $this->Exit = "Yes";
                break;
            case "scaley":
                $this->Exit = "Yes";
                break;
            case "scraggy":
                $this->Exit = "Yes";
                break;
            case "scratchy":
                $this->Exit = "Yes";
                break;
            case "screwy":
                $this->Exit = "Yes";
                break;
            case "scrimpy":
                $this->Exit = "Yes";
                break;
            case "scrimy":
                $this->Exit = "Yes";
                break;
            case "shammy":
                $this->Exit = "Yes";
                break;
            case "shanny":
                $this->Exit = "Yes";
                break;
            case "sharpy":
                $this->Exit = "Yes";
                break;
            case "shawny":
                $this->Exit = "Yes";
                break;
            case "shelvy":
                $this->Exit = "Yes";
                break;
            case "shimmy":
                $this->Exit = "Yes";
                break;
            case "shoddy":
                $this->Exit = "Yes";
                break;
            case "silky":
                $this->Exit = "Yes";
                break;
            case "simony":
                $this->Exit = "Yes";
                break;
            case "sissy":
                $this->Exit = "Yes";
                break;
            case "sleazy":
                $this->Exit = "Yes";
                break;
            case "slouchy":
                $this->Exit = "Yes";
                break;
            case "smarmy":
                $this->Exit = "Yes";
                break;
            case "smithy":
                $this->Exit = "Yes";
                break;
            case "snoopy":
                $this->Exit = "Yes";
                break;
            case "sodomy":
                $this->Exit = "Yes";
                break;
            case "soppy":
                $this->Exit = "Yes";
                break;
            case "spacey":
                $this->Exit = "Yes";
                break;
            case "spay":
                $this->Exit = "Yes";
                break;
            case "steady":
                $this->Exit = "Yes";
                break;
            case "stealthy":
                $this->Exit = "Yes";
                break;
            case "stocky":
                $this->Exit = "Yes";
                break;
            case "stodgy":
                $this->Exit = "Yes";
                break;
            case "storey":
                $this->Exit = "Yes";
                break;
            case "stroppy":
                $this->Exit = "Yes";
                break;
            case "study":
                $this->Exit = "Yes";
                break;
            case "stuffy":
                $this->Exit = "Yes";
                break;
            case "subsidy":
                $this->Exit = "Yes";
                break;
            case "sunday":
                $this->Exit = "Yes";
                break;
            case "sunny":
                $this->Exit = "Yes";
                break;
            case "tabby":
                $this->Exit = "Yes";
                break;
            case "tammy":
                $this->Exit = "Yes";
                break;
            case "teddy":
                $this->Exit = "Yes";
                break;
            case "teensy":
                $this->Exit = "Yes";
                break;
            case "tidy":
                $this->Exit = "Yes";
                break;
            case "tiny":
                $this->Exit = "Yes";
                break;
            case "toady":
                $this->Exit = "Yes";
                break;
            case "today":
                $this->Exit = "Yes";
                break;
            case "toddy":
                $this->Exit = "Yes";
                break;
            case "tody":
                $this->Exit = "Yes";
                break;
            case "touchy":
                $this->Exit = "Yes";
                break;
            case "trendy":
                $this->Exit = "Yes";
                break;
            case "trey":
                $this->Exit = "Yes";
                break;
            case "tunny":
                $this->Exit = "Yes";
                break;
            case "unready":
                $this->Exit = "Yes";
                break;
            case "whacky":
                $this->Exit = "Yes";
                break;
            case "whinny":
                $this->Exit = "Yes";
                break;
            case "whisky":
                $this->Exit = "Yes";
                break;
            case "wieldy":
                $this->Exit = "Yes";
                break;
            case "wincey":
                $this->Exit = "Yes";
                break;
            case "winy":
                $this->Exit = "Yes";
                break;
            case "wispy":
                $this->Exit = "Yes";
                break;
            case "wonky":
                $this->Exit = "Yes";
                break;
            case "ambrosian":
                $this->Exit = "Yes";
                break;
            case "arminian":
                $this->Exit = "Yes";
                break;
            case "columbian":
                $this->Exit = "Yes";
                break;
            case "median":
                $this->Exit = "Yes";
                break;
            case "unitarian":
                $this->Exit = "Yes";
                break;
            case "albania":
                $this->Exit = "Yes";
                break;
            case "antinomian":
                $this->Exit = "Yes";
                break;
            case "barbarian":
                $this->Exit = "Yes";
                break;
            case "contrarian":
                $this->Exit = "Yes";
                break;
            case "custodian":
                $this->Exit = "Yes";
                break;
            case "cyprian":
                $this->Exit = "Yes";
                break;
            case "airily":
                $this->Exit = "Yes";
                break;
            case "arbitrarily":
                $this->Exit = "Yes";
                break;
            case "cannily":
                $this->Exit = "Yes";
                break;
            case "cursorily":
                $this->Exit = "Yes";
                break;
            case "dottily":
                $this->Exit = "Yes";
                break;
            case "fierily":
                $this->Exit = "Yes";
                break;
            case "homily":
                $this->Exit = "Yes";
                break;
            case "patchily":
                $this->Exit = "Yes";
                break;
            case "realize":
                $this->Exit = "Yes";
                break;
            case "brisly":
                $this->Exit = "Yes";
                break;
            case "scaly":
                $this->Exit = "Yes";
                break;
            case "bawdiness":
                $this->Exit = "Yes";
                break;
            case "business":
                $this->Exit = "Yes";
                break;
            case "witness":
                $this->Exit = "Yes";
                break;
            case "creamery":
                $this->Exit = "Yes";
                break;
            case "pessary":
                $this->Exit = "Yes";
                break;
            case "aural":
                $this->Exit = "Yes";
                break;
            case "duly":
                $this->Exit = "Yes";
                break;
            case "ancestor":
                $this->Exit = "Yes";
                break;
            case "proprietor":
                $this->Exit = "Yes";
                break;
            case "pastor":
                $this->Exit = "Yes";
                break;
            case "sector":
                $this->Exit = "Yes";
                break;
            case "tutor":
                $this->Exit = "Yes";
                break;
            case "gustation":
                $this->Exit = "Yes";
                break;
            case "illation":
                $this->Exit = "Yes";
                break;
            case "community":
                $this->Exit = "Yes";
                break;
            case "dexterity":
                $this->Exit = "Yes";
                break;
            case "analogy":
                $this->Exit = "Yes";
                break;
            case "gainly":
                $this->Exit = "Yes";
                break;
            case "antecedency":
                $this->Exit = "Yes";
                break;
            case "celibacy":
                $this->Exit = "Yes";
                break;
            case "concurrency":
                $this->Exit = "Yes";
                break;
            case "constancy":
                $this->Exit = "Yes";
                break;
            case "continency":
                $this->Exit = "Yes";
                break;
            case "delinquency":
                $this->Exit = "Yes";
                break;
            case "dichromacy":
                $this->Exit = "Yes";
                break;
            case "normal":
                $this->Exit = "Yes";
                break;
            case "spacy":
                $this->Exit = "Yes";
                break;
            case "valiancy":
                $this->Exit = "Yes";
                break;
            case "critical":
                $this->Exit = "Yes";
                break;
            case "algidity":
                $this->Exit = "Yes";
                break;
            case "amenity":
                $this->Exit = "Yes";
                break;
            case "asperity":
                $this->Exit = "Yes";
                break;
            case "authority":
                $this->Exit = "Yes";
                break;
            case "avidity":
                $this->Exit = "Yes";
                break;
            case "banality":
                $this->Exit = "Yes";
                break;
            case "barbarity":
                $this->Exit = "Yes";
                break;
            case "beauty":
                $this->Exit = "Yes";
                break;
            case "blighty":
                $this->Exit = "Yes";
                break;
            case "booty":
                $this->Exit = "Yes";
                break;
            case "busty":
                $this->Exit = "Yes";
                break;
            case "canty":
                $this->Exit = "Yes";
                break;
            case "casualty":
                $this->Exit = "Yes";
                break;
            case "celerity":
                $this->Exit = "Yes";
                break;
            case "cavity":
                $this->Exit = "Yes";
                break;
            case "charity":
                $this->Exit = "Yes";
                break;
            case "commodity":
                $this->Exit = "Yes";
                break;
            case "conviviality":
                $this->Exit = "Yes";
                break;
            case "crudity":
                $this->Exit = "Yes";
                break;
            case "cupidity":
                $this->Exit = "Yes";
                break;
            case "dimity":
                $this->Exit = "Yes";
                break;
            case "diversity":
                $this->Exit = "Yes";
                break;
            case "docility":
                $this->Exit = "Yes";
                break;
            case "facility":
                $this->Exit = "Yes";
                break;
            case "flaccidity":
                $this->Exit = "Yes";
                break;
            case "floridity":
                $this->Exit = "Yes";
                break;
            case "gentility":
                $this->Exit = "Yes";
                break;
            case "gibbosity":
                $this->Exit = "Yes";
                break;
            case "globosity":
                $this->Exit = "Yes";
                break;
            case "gracility":
                $this->Exit = "Yes";
                break;
            case "gravity":
                $this->Exit = "Yes";
                break;
            case "hilarity":
                $this->Exit = "Yes";
                break;
            case "hospitality":
                $this->Exit = "Yes";
                break;
            case "imbecility":
                $this->Exit = "Yes";
                break;
            case "integrality":
                $this->Exit = "Yes";
                break;
            case "khanty":
                $this->Exit = "Yes";
                break;
            case "legerity":
                $this->Exit = "Yes";
                break;
            case "levity":
                $this->Exit = "Yes";
                break;
            case "majority":
                $this->Exit = "Yes";
                break;
            case "mediocrity":
                $this->Exit = "Yes";
                break;
            case "mobility":
                $this->Exit = "Yes";
                break;
            case "motility":
                $this->Exit = "Yes";
                break;
            case "mutuality":
                $this->Exit = "Yes";
                break;
            case "naivety":
                $this->Exit = "Yes";
                break;
            case "neutrality":
                $this->Exit = "Yes";
                break;
            case "nicety":
                $this->Exit = "Yes";
                break;
            case "pious":
                $this->Exit = "Yes";
                break;
            case "nihility":
                $this->Exit = "Yes";
                break;
            case "obliquity":
                $this->Exit = "Yes";
                break;
            case "panty":
                $this->Exit = "Yes";
                break;
            case "parity":
                $this->Exit = "Yes";
                break;
            case "partiality":
                $this->Exit = "Yes";
                break;
            case "party":
                $this->Exit = "Yes";
                break;
            case "placidity":
                $this->Exit = "Yes";
                break;
            case "polity":
                $this->Exit = "Yes";
                break;
            case "posterity":
                $this->Exit = "Yes";
                break;
            case "probity":
                $this->Exit = "Yes";
                break;
            case "property":
                $this->Exit = "Yes";
                break;
            case "prosperity":
                $this->Exit = "Yes";
                break;
            case "satiety":
                $this->Exit = "Yes";
                break;
            case "serenity":
                $this->Exit = "Yes";
                break;
            case "severity":
                $this->Exit = "Yes";
                break;
            case "shanty":
                $this->Exit = "Yes";
                break;
            case "sovereignty":
                $this->Exit = "Yes";
                break;
            case "sublimity":
                $this->Exit = "Yes";
                break;
            case "tranquility":
                $this->Exit = "Yes";
                break;
            case "tuberosity":
                $this->Exit = "Yes";
                break;
            case "turgidity":
                $this->Exit = "Yes";
                break;
            case "university":
                $this->Exit = "Yes";
                break;
            case "utility":
                $this->Exit = "Yes";
                break;
            case "vanity":
                $this->Exit = "Yes";
                break;
            case "venality":
                $this->Exit = "Yes";
                break;
            case "verbosity":
                $this->Exit = "Yes";
                break;
            case "verity":
                $this->Exit = "Yes";
                break;
            case "vitality":
                $this->Exit = "Yes";
                break;
            case "lucy":
                $this->Exit = "Yes";
                break;
            case "policy":
                $this->Exit = "Yes";
                break;
            case "tracy":
                $this->Exit = "Yes";
                break;
            case "ally":
                $this->Exit = "Yes";
                break;
            case "bully":
                $this->Exit = "Yes";
                break;
            case "mummy":
                $this->Exit = "Yes";
                break;
            case "aerify":
                $this->Exit = "Yes";
                break;
            case "fortify":
                $this->Exit = "Yes";
                break;
            case "gratify":
                $this->Exit = "Yes";
                break;
            case "lignify":
                $this->Exit = "Yes";
                break;
            case "modify":
                $this->Exit = "Yes";
                break;
            case "mollify":
                $this->Exit = "Yes";
                break;
            case "pacify":
                $this->Exit = "Yes";
                break;
            case "ratify":
                $this->Exit = "Yes";
                break;
            case "scarify":
                $this->Exit = "Yes";
                break;
            case "stupefy":
                $this->Exit = "Yes";
                break;
            case "terrify":
                $this->Exit = "Yes";
                break;
            case "testify":
                $this->Exit = "Yes";
                break;
            case "verify":
                $this->Exit = "Yes";
                break;
            case "vilify":
                $this->Exit = "Yes";
                break;
            case "logy":
                $this->Exit = "Yes";
                break;
            case "coincidence":
                $this->Exit = "Yes";
                break;
            case "penance":
                $this->Exit = "Yes";
                break;
            case "procurance":
                $this->Exit = "Yes";
                break;
            case "purveyance":
                $this->Exit = "Yes";
                break;
            case "voidance":
                $this->Exit = "Yes";
                break;
            case "virulence":
                $this->Exit = "Yes";
                break;
            case "valance":
                $this->Exit = "Yes";
                break;
            case "subsistence":
                $this->Exit = "Yes";
                break;
            case "stridence":
                $this->Exit = "Yes";
                break;
            case "repugnance":
                $this->Exit = "Yes";
                break;
            case "barrage":
                $this->Exit = "Yes";
                break;
            case "portage":
                $this->Exit = "Yes";
                break;
            case "scalage":
                $this->Exit = "Yes";
                break;
            case "fogy":
                $this->Exit = "Yes";
                break;
            case "barish":
                $this->Exit = "Yes";
                break;
            case "blandish":
                $this->Exit = "Yes";
                break;
            case "brandish":
                $this->Exit = "Yes";
                break;
            case "burnish":
                $this->Exit = "Yes";
                break;
            case "dervish":
                $this->Exit = "Yes";
                break;
            case "eyeish":
                $this->Exit = "Yes";
                break;
            case "famish":
                $this->Exit = "Yes";
                break;
            case "fetish":
                $this->Exit = "Yes";
                break;
            case "finish":
                $this->Exit = "Yes";
                break;
            case "flourish":
                $this->Exit = "Yes";
                break;
            case "garish":
                $this->Exit = "Yes";
                break;
            case "lavish":
                $this->Exit = "Yes";
                break;
            case "lettish":
                $this->Exit = "Yes";
                break;
            case "mirish":
                $this->Exit = "Yes";
                break;
            case "monish":
                $this->Exit = "Yes";
                break;
            case "nebbish":
                $this->Exit = "Yes";
                break;
            case "offish":
                $this->Exit = "Yes";
                break;
            case "parish":
                $this->Exit = "Yes";
                break;
            case "parrish":
                $this->Exit = "Yes";
                break;
            case "polish":
                $this->Exit = "Yes";
                break;
            case "punish":
                $this->Exit = "Yes";
                break;
            case "radish":
                $this->Exit = "Yes";
                break;
            case "raffish":
                $this->Exit = "Yes";
                break;
            case "ravish":
                $this->Exit = "Yes";
                break;
            case "refinish":
                $this->Exit = "Yes";
                break;
            case "rubbish":
                $this->Exit = "Yes";
                break;
            case "ruttish":
                $this->Exit = "Yes";
                break;
            case "salish":
                $this->Exit = "Yes";
                break;
            case "skittish":
                $this->Exit = "Yes";
                break;
            case "standish":
                $this->Exit = "Yes";
                break;
            case "surffish":
                $this->Exit = "Yes";
                break;
            case "tarnish":
                $this->Exit = "Yes";
                break;
            case "vanish":
                $this->Exit = "Yes";
                break;
            case "vigorish":
                $this->Exit = "Yes";
                break;
            case "wolffish":
                $this->Exit = "Yes";
                break;
            case "yiddish":
                $this->Exit = "Yes";
                break;
            case "banish":
                $this->Exit = "Yes";
                break;
            case "accouterment":
                $this->Exit = "Yes";
                break;
            case "aliment":
                $this->Exit = "Yes";
                break;
            case "alinement":
                $this->Exit = "Yes";
                break;
            case "allegement":
                $this->Exit = "Yes";
                break;
            case "apartment":
                $this->Exit = "Yes";
                break;
            case "apartment":
                $this->Exit = "Yes";
                break;
            case "augment":
                $this->Exit = "Yes";
                break;
            case "averment":
                $this->Exit = "Yes";
                break;
            case "avouchment":
                $this->Exit = "Yes";
                break;
            case "battlement":
                $this->Exit = "Yes";
                break;
            case "bombardment":
                $this->Exit = "Yes";
                break;
            case "casement":
                $this->Exit = "Yes";
                break;
            case "cerement":
                $this->Exit = "Yes";
                break;
            case "compartment":
                $this->Exit = "Yes";
                break;
            case "comportment":
                $this->Exit = "Yes";
                break;
            case "department":
                $this->Exit = "Yes";
                break;
            case "deportment":
                $this->Exit = "Yes";
                break;
            case "derangement":
                $this->Exit = "Yes";
                break;
            case "devolvement":
                $this->Exit = "Yes";
                break;
            case "easement":
                $this->Exit = "Yes";
                break;
            case "embarkment":
                $this->Exit = "Yes";
                break;
            case "embroilment":
                $this->Exit = "Yes";
                break;
            case "figment":
                $this->Exit = "Yes";
                break;
            case "garment":
                $this->Exit = "Yes";
                break;
            case "installment":
                $this->Exit = "Yes";
                break;
            case "instilment":
                $this->Exit = "Yes";
                break;
            case "judgment":
                $this->Exit = "Yes";
                break;
            case "parchment":
                $this->Exit = "Yes";
                break;
            case "payment":
                $this->Exit = "Yes";
                break;
            case "procurement":
                $this->Exit = "Yes";
                break;
            case "reallotment":
                $this->Exit = "Yes";
                break;
            case "refreshment":
                $this->Exit = "Yes";
                break;
            case "retrenchment":
                $this->Exit = "Yes";
                break;
            case "shipment":
                $this->Exit = "Yes";
                break;
            case "supplement":
                $this->Exit = "Yes";
                break;
            case "tegument":
                $this->Exit = "Yes";
                break;
            case "temperament":
                $this->Exit = "Yes";
                break;
            case "testament":
                $this->Exit = "Yes";
                break;
            case "torment":
                $this->Exit = "Yes";
                break;
            case "varment":
                $this->Exit = "Yes";
                break;
            case "vestment":
                $this->Exit = "Yes";
                break;
            case "congest":
                $this->Exit = "Yes";
                break;
            case "digest":
                $this->Exit = "Yes";
                break;
            case "disinterest":
                $this->Exit = "Yes";
                break;
            case "divest":
                $this->Exit = "Yes";
                break;
            case "earnest":
                $this->Exit = "Yes";
                break;
            case "everest":
                $this->Exit = "Yes";
                break;
            case "forest":
                $this->Exit = "Yes";
                break;
            case "honest":
                $this->Exit = "Yes";
                break;
            case "incest":
                $this->Exit = "Yes";
                break;
            case "ingest":
                $this->Exit = "Yes";
                break;
            case "interest":
                $this->Exit = "Yes";
                break;
            case "modest":
                $this->Exit = "Yes";
                break;
            case "molest":
                $this->Exit = "Yes";
                break;
            case "tempest":
                $this->Exit = "Yes";
                break;
            case "goony":
                $this->Exit = "Yes";
                break;
            case "punky":
                $this->Exit = "Yes";
                break;
            case "algerie":
                $this->Exit = "Yes";
                break;
            case "barrie":
                $this->Exit = "Yes";
                break;
            case "beanie":
                $this->Exit = "Yes";
                break;
            case "belie":
                $this->Exit = "Yes";
                break;
            case "bennie":
                $this->Exit = "Yes";
                break;
            case "bittie":
                $this->Exit = "Yes";
                break;
            case "bootie":
                $this->Exit = "Yes";
                break;
            case "bosie":
                $this->Exit = "Yes";
                break;
            case "bowie":
                $this->Exit = "Yes";
                break;
            case "brassie":
                $this->Exit = "Yes";
                break;
            case "brownie":
                $this->Exit = "Yes";
                break;
            case "cattie":
                $this->Exit = "Yes";
                break;
            case "christie":
                $this->Exit = "Yes";
                break;
            case "collie":
                $this->Exit = "Yes";
                break;
            case "cootie":
                $this->Exit = "Yes";
                break;
            case "couthie":
                $this->Exit = "Yes";
                break;
            case "crappie":
                $this->Exit = "Yes";
                break;
            case "curie":
                $this->Exit = "Yes";
                break;
            case "dickie":
                $this->Exit = "Yes";
                break;
            case "dixie":
                $this->Exit = "Yes";
                break;
            case "genie":
                $this->Exit = "Yes";
                break;
            case "gillie":
                $this->Exit = "Yes";
                break;
            case "kookie":
                $this->Exit = "Yes";
                break;
            case "lingerie":
                $this->Exit = "Yes";
                break;
            case "loonie":
                $this->Exit = "Yes";
                break;
            case "mashie":
                $this->Exit = "Yes";
                break;
            case "mealie":
                $this->Exit = "Yes";
                break;
            case "moonie":
                $this->Exit = "Yes";
                break;
            case "nightie":
                $this->Exit = "Yes";
                break;
            case "nookie":
                $this->Exit = "Yes";
                break;
            case "oldie":
                $this->Exit = "Yes";
                break;
            case "overlie":
                $this->Exit = "Yes";
                break;
            case "pinkie":
                $this->Exit = "Yes";
                break;
            case "pyxie":
                $this->Exit = "Yes";
                break;
            case "ramie":
                $this->Exit = "Yes";
                break;
            case "retie":
                $this->Exit = "Yes";
                break;
            case "rookie":
                $this->Exit = "Yes";
                break;
            case "satie":
                $this->Exit = "Yes";
                break;
            case "sortie":
                $this->Exit = "Yes";
                break;
            case "specie":
                $this->Exit = "Yes";
                break;
            case "talkie":
                $this->Exit = "Yes";
                break;
            case "weenie":
                $this->Exit = "Yes";
                break;
            case "yardie":
                $this->Exit = "Yes";
                break;
            case "feist":
                $this->Exit = "Yes";
                break;
            case "gist":
                $this->Exit = "Yes";
                break;
            case "hoist":
                $this->Exit = "Yes";
                break;
            case "joist":
                $this->Exit = "Yes";
                break;
            case "persist":
                $this->Exit = "Yes";
                break;
            case "waist":
                $this->Exit = "Yes";
                break;
            case "whist":
                $this->Exit = "Yes";
                break;
            case "wrist":
                $this->Exit = "Yes";
                break;
            case "exist":
                $this->Exit = "Yes";
                break;
            case "moist":
                $this->Exit = "Yes";
                break;
            case "anachronism":
                $this->Exit = "Yes";
                break;
            case "animatism":
                $this->Exit = "Yes";
                break;
            case "anthropomorphism":
                $this->Exit = "Yes";
                break;
            case "deism":
                $this->Exit = "Yes";
                break;
            case "determinism":
                $this->Exit = "Yes";
                break;
            case "endemism":
                $this->Exit = "Yes";
                break;
            case "existential":
                $this->Exit = "Yes";
                break;
            case "fascism":
                $this->Exit = "Yes";
                break;
            case "fundamental":
                $this->Exit = "Yes";
                break;
            case "mccarthyism":
                $this->Exit = "Yes";
                break;
            case "mechanism":
                $this->Exit = "Yes";
                break;
            case "millenarism":
                $this->Exit = "Yes";
                break;
            case "mongolism":
                $this->Exit = "Yes";
                break;
            case "monism":
                $this->Exit = "Yes";
                break;
            case "parkinsonism":
                $this->Exit = "Yes";
                break;
            case "piety":
                $this->Exit = "Yes";
                break;
            case "prism":
                $this->Exit = "Yes";
                break;
            case "provincial":
                $this->Exit = "Yes";
                break;
            case "seism":
                $this->Exit = "Yes";
                break;
            case "theism":
                $this->Exit = "Yes";
                break;
            case "transcendental":
                $this->Exit = "Yes";
                break;
            case "tropism":
                $this->Exit = "Yes";
                break;
            case "unrealism":
                $this->Exit = "Yes";
                break;
            case "antic":
                $this->Exit = "Yes";
                break;
            case "chromatic":
                $this->Exit = "Yes";
                break;
            case "cryptic":
                $this->Exit = "Yes";
                break;
            case "demonic":
                $this->Exit = "Yes";
                break;
            case "dialectic":
                $this->Exit = "Yes";
                break;
            case "ectomorphic":
                $this->Exit = "Yes";
                break;
            case "emblematic":
                $this->Exit = "Yes";
                break;
            case "eristic":
                $this->Exit = "Yes";
                break;
            case "haemic":
                $this->Exit = "Yes";
                break;
            case "hygrophytic":
                $this->Exit = "Yes";
                break;
            case "impolitic":
                $this->Exit = "Yes";
                break;
            case "judaic":
                $this->Exit = "Yes";
                break;
            case "lentic":
                $this->Exit = "Yes";
                break;
            case "lotic":
                $this->Exit = "Yes";
                break;
            case "mastic":
                $this->Exit = "Yes";
                break;
            case "mesic":
                $this->Exit = "Yes";
                break;
            case "metic":
                $this->Exit = "Yes";
                break;
            case "optic":
                $this->Exit = "Yes";
                break;
            case "palaic":
                $this->Exit = "Yes";
                break;
            case "phlegmatic":
                $this->Exit = "Yes";
                break;
            case "photic":
                $this->Exit = "Yes";
                break;
            case "pleonastic":
                $this->Exit = "Yes";
                break;
            case "prophetic":
                $this->Exit = "Yes";
                break;
            case "psychopathic":
                $this->Exit = "Yes";
                break;
            case "quadratic":
                $this->Exit = "Yes";
                break;
            case "quantic":
                $this->Exit = "Yes";
                break;
            case "quartic":
                $this->Exit = "Yes";
                break;
            case "ritual":
                $this->Exit = "Yes";
                break;
            case "scenic":
                $this->Exit = "Yes";
                break;
            case "stereophonic":
                $this->Exit = "Yes";
                break;
            case "tautologic":
                $this->Exit = "Yes";
                break;
            case "turkic":
                $this->Exit = "Yes";
                break;
            case "uralic":
                $this->Exit = "Yes";
                break;
            case "archive":
                $this->Exit = "Yes";
                break;
            case "active":
                $this->Exit = "Yes";
                break;
            case "auditive":
                $this->Exit = "Yes";
                break;
            case "aversive":
                $this->Exit = "Yes";
                break;
            case "commutative":
                $this->Exit = "Yes";
                break;
            case "connive":
                $this->Exit = "Yes";
                break;
            case "copulative":
                $this->Exit = "Yes";
                break;
            case "costive":
                $this->Exit = "Yes";
                break;
            case "cursive":
                $this->Exit = "Yes";
                break;
            case "emotion":
                $this->Exit = "Yes";
                break;
            case "legislation":
                $this->Exit = "Yes";
                break;
            case "opposition":
                $this->Exit = "Yes";
                break;
            case "percussion":
                $this->Exit = "Yes";
                break;
            case "effusive":
                $this->Exit = "Yes";
                break;
            case "endive":
                $this->Exit = "Yes";
                break;
            case "emptive":
                $this->Exit = "Yes";
                break;
            case "expiative":
                $this->Exit = "Yes";
                break;
            case "expositive":
                $this->Exit = "Yes";
                break;
            case "forgive":
                $this->Exit = "Yes";
                break;
            case "formative":
                $this->Exit = "Yes";
                break;
            case "impassive":
                $this->Exit = "Yes";
                break;
            case "imperfective":
                $this->Exit = "Yes";
                break;
            case "incisive":
                $this->Exit = "Yes";
                break;
            case "inventive":
                $this->Exit = "Yes";
                break;
            case "irruptive":
                $this->Exit = "Yes";
                break;
            case "lenitive":
                $this->Exit = "Yes";
                break;
            case "locomotive":
                $this->Exit = "Yes";
                break;
            case "missive":
                $this->Exit = "Yes";
                break;
            case "motive":
                $this->Exit = "Yes";
                break;
            case "nosedive":
                $this->Exit = "Yes";
                break;
            case "obstructive":
                $this->Exit = "Yes";
                break;
            case "originative":
                $this->Exit = "Yes";
                break;
            case "passive":
                $this->Exit = "Yes";
                break;
            case "perversive":
                $this->Exit = "Yes";
                break;
            case "positive":
                $this->Exit = "Yes";
                break;
            case "traction":
                $this->Exit = "Yes";
                break;
            case "recessive":
                $this->Exit = "Yes";
                break;
            case "relive":
                $this->Exit = "Yes";
                break;
            case "restive":
                $this->Exit = "Yes";
                break;
            case "revive":
                $this->Exit = "Yes";
                break;
            case "ruminative":
                $this->Exit = "Yes";
                break;
            case "tardive":
                $this->Exit = "Yes";
                break;
            case "transitive":
                $this->Exit = "Yes";
                break;
            case "underactive":
                $this->Exit = "Yes";
                break;
            case "votive":
                $this->Exit = "Yes";
                break;
            case "ablate":
                $this->Exit = "Yes";
                break;
            case "aerate":
                $this->Exit = "Yes";
                break;
            case "baccate":
                $this->Exit = "Yes";
                break;
            case "chromate":
                $this->Exit = "Yes";
                break;
            case "collate":
                $this->Exit = "Yes";
                break;
            case "curate":
                $this->Exit = "Yes";
                break;
            case "debilitate":
                $this->Exit = "Yes";
                break;
            case "decrepitate":
                $this->Exit = "Yes";
                break;
            case "digitate":
                $this->Exit = "Yes";
                break;
            case "dispassionate":
                $this->Exit = "Yes";
                break;
            case "facilitate":
                $this->Exit = "Yes";
                break;
            case "felicitate":
                $this->Exit = "Yes";
                break;
            case "habituate":
                $this->Exit = "Yes";
                break;
            case "homogenate":
                $this->Exit = "Yes";
                break;
            case "liquidate":
                $this->Exit = "Yes";
                break;
            case "necessitate":
                $this->Exit = "Yes";
                break;
            case "ovulate":
                $this->Exit = "Yes";
                break;
            case "perseverate":
                $this->Exit = "Yes";
                break;
            case "phonate":
                $this->Exit = "Yes";
                break;
            case "pinnate":
                $this->Exit = "Yes";
                break;
            case "potentate":
                $this->Exit = "Yes";
                break;
            case "private":
                $this->Exit = "Yes";
                break;
            case "probate":
                $this->Exit = "Yes";
                break;
            case "recurvate":
                $this->Exit = "Yes";
                break;
            case "relate":
                $this->Exit = "Yes";
                break;
            case "reticulate":
                $this->Exit = "Yes";
                break;
            case "sanitate":
                $this->Exit = "Yes";
                break;
            case "sensate":
                $this->Exit = "Yes";
                break;
            case "sophisticate":
                $this->Exit = "Yes";
                break;
            case "sorbate":
                $this->Exit = "Yes";
                break;
            case "syncopate":
                $this->Exit = "Yes";
                break;
            case "undulate":
                $this->Exit = "Yes";
                break;
            case "urceolate":
                $this->Exit = "Yes";
                break;
            case "peerage":
                $this->Exit = "Yes";
                break;
            case "peeress":
                $this->Exit = "Yes";
                break;
            case "traitor":
                $this->Exit = "Yes";
                break;
            case "ambition":
                $this->Exit = "Yes";
                break;
            case "animalize":
                $this->Exit = "Yes";
                break;
            case "annunciation":
                $this->Exit = "Yes";
                break;
            case "apposition":
                $this->Exit = "Yes";
                break;
            case "authorize":
                $this->Exit = "Yes";
                break;
            case "automatic":
                $this->Exit = "Yes";
                break;
            case "bastion":
                $this->Exit = "Yes";
                break;
            case "benediction":
                $this->Exit = "Yes";
                break;
            case "capitation":
                $this->Exit = "Yes";
                break;
            case "cation":
                $this->Exit = "Yes";
                break;
            case "option":
                $this->Exit = "Yes";
                break;
            case "coarctation":
                $this->Exit = "Yes";
                break;
            case "collation":
                $this->Exit = "Yes";
                break;
            case "commutation":
                $this->Exit = "Yes";
                break;
            case "concretion":
                $this->Exit = "Yes";
                break;
            case "congestion":
                $this->Exit = "Yes";
                break;
            case "congregation":
                $this->Exit = "Yes";
                break;
            case "consecration":
                $this->Exit = "Yes";
                break;
            case "constipation":
                $this->Exit = "Yes";
                break;
            case "consubstantiation":
                $this->Exit = "Yes";
                break;
            case "convention":
                $this->Exit = "Yes";
                break;
            case "coronation":
                $this->Exit = "Yes";
                break;
            case "crenation":
                $this->Exit = "Yes";
                break;
            case "defection":
                $this->Exit = "Yes";
                break;
            case "derogation":
                $this->Exit = "Yes";
                break;
            case "desertion":
                $this->Exit = "Yes";
                break;
            case "designation":
                $this->Exit = "Yes";
                break;
            case "detention":
                $this->Exit = "Yes";
                break;
            case "detraction":
                $this->Exit = "Yes";
                break;
            case "discretion":
                $this->Exit = "Yes";
                break;
            case "disjunction":
                $this->Exit = "Yes";
                break;
            case "dissertation":
                $this->Exit = "Yes";
                break;
            case "dissimulation":
                $this->Exit = "Yes";
                break;
            case "edition":
                $this->Exit = "Yes";
                break;
            case "elation":
                $this->Exit = "Yes";
                break;
            case "embrocation":
                $this->Exit = "Yes";
                break;
            case "emulation":
                $this->Exit = "Yes";
                break;
            case "eruption":
                $this->Exit = "Yes";
                break;
            case "estivation":
                $this->Exit = "Yes";
                break;
            case "expiation":
                $this->Exit = "Yes";
                break;
            case "exposition":
                $this->Exit = "Yes";
                break;
            case "extortion":
                $this->Exit = "Yes";
                break;
            case "extradition":
                $this->Exit = "Yes";
                break;
            case "exudation":
                $this->Exit = "Yes";
                break;
            case "faction":
                $this->Exit = "Yes";
                break;
            case "federation":
                $this->Exit = "Yes";
                break;
            case "festination":
                $this->Exit = "Yes";
                break;
            case "filiation":
                $this->Exit = "Yes";
                break;
            case "indiction":
                $this->Exit = "Yes";
                break;
            case "indiscretion":
                $this->Exit = "Yes";
                break;
            case "induction":
                $this->Exit = "Yes";
                break;
            case "inflation":
                $this->Exit = "Yes";
                break;
            case "infraction":
                $this->Exit = "Yes";
                break;
            case "intussusception":
                $this->Exit = "Yes";
                break;
            case "inunction":
                $this->Exit = "Yes";
                break;
            case "involution":
                $this->Exit = "Yes";
                break;
            case "jactitation":
                $this->Exit = "Yes";
                break;
            case "libration":
                $this->Exit = "Yes";
                break;
            case "lotion":
                $this->Exit = "Yes";
                break;
            case "luxation":
                $this->Exit = "Yes";
                break;
            case "magnificat":
                $this->Exit = "Yes";
                break;
            case "malversation":
                $this->Exit = "Yes";
                break;
            case "miscreation":
                $this->Exit = "Yes";
                break;
            case "motion":
                $this->Exit = "Yes";
                break;
            case "notion":
                $this->Exit = "Yes";
                break;
            case "nutation":
                $this->Exit = "Yes";
                break;
            case "obstruction":
                $this->Exit = "Yes";
                break;
            case "oration":
                $this->Exit = "Yes";
                break;
            case "ovation":
                $this->Exit = "Yes";
                break;
            case "exertion":
                $this->Exit = "Yes";
                break;
            case "persecution":
                $this->Exit = "Yes";
                break;
            case "petition":
                $this->Exit = "Yes";
                break;
            case "placation":
                $this->Exit = "Yes";
                break;
            case "planation":
                $this->Exit = "Yes";
                break;
            case "portion":
                $this->Exit = "Yes";
                break;
            case "position":
                $this->Exit = "Yes";
                break;
            case "potion":
                $this->Exit = "Yes";
                break;
            case "preemption":
                $this->Exit = "Yes";
                break;
            case "preterition":
                $this->Exit = "Yes";
                break;
            case "question":
                $this->Exit = "Yes";
                break;
            case "ration":
                $this->Exit = "Yes";
                break;
            case "remotion":
                $this->Exit = "Yes";
                break;
            case "secretion":
                $this->Exit = "Yes";
                break;
            case "section":
                $this->Exit = "Yes";
                break;
            case "situation":
                $this->Exit = "Yes";
                break;
            case "station":
                $this->Exit = "Yes";
                break;
            case "transaction":
                $this->Exit = "Yes";
                break;
            case "transition":
                $this->Exit = "Yes";
                break;
            case "urtication":
                $this->Exit = "Yes";
                break;
            case "veneration":
                $this->Exit = "Yes";
                break;
            case "vituperation":
                $this->Exit = "Yes";
                break;
            case "volution":
                $this->Exit = "Yes";
                break;
            case "abrasion":
                $this->Exit = "Yes";
                break;
            case "accordion":
                $this->Exit = "Yes";
                break;
            case "aggression":
                $this->Exit = "Yes";
                break;
            case "albion":
                $this->Exit = "Yes";
                break;
            case "asterion":
                $this->Exit = "Yes";
                break;
            case "aversion":
                $this->Exit = "Yes";
                break;
            case "billion":
                $this->Exit = "Yes";
                break;
            case "bullion":
                $this->Exit = "Yes";
                break;
            case "bunion":
                $this->Exit = "Yes";
                break;
            case "camion":
                $this->Exit = "Yes";
                break;
            case "campion":
                $this->Exit = "Yes";
                break;
            case "carrion":
                $this->Exit = "Yes";
                break;
            case "centurion":
                $this->Exit = "Yes";
                break;
            case "chorion":
                $this->Exit = "Yes";
                break;
            case "circumcision":
                $this->Exit = "Yes";
                break;
            case "coercion":
                $this->Exit = "Yes";
                break;
            case "compassion":
                $this->Exit = "Yes";
                break;
            case "complexion":
                $this->Exit = "Yes";
                break;
            case "contusion":
                $this->Exit = "Yes";
                break;
            case "convulsion":
                $this->Exit = "Yes";
                break;
            case "cushion":
                $this->Exit = "Yes";
                break;
            case "digression":
                $this->Exit = "Yes";
                break;
            case "dominion":
                $this->Exit = "Yes";
                break;
            case "effusion":
                $this->Exit = "Yes";
                break;
            case "erosion":
                $this->Exit = "Yes";
                break;
            case "eversion":
                $this->Exit = "Yes";
                break;
            case "excision":
                $this->Exit = "Yes";
                break;
            case "fanion":
                $this->Exit = "Yes";
                break;
            case "ganglion":
                $this->Exit = "Yes";
                break;
            case "gonion":
                $this->Exit = "Yes";
                break;
            case "hellion":
                $this->Exit = "Yes";
                break;
            case "immersion":
                $this->Exit = "Yes";
                break;
            case "intension":
                $this->Exit = "Yes";
                break;
            case "inversion":
                $this->Exit = "Yes";
                break;
            case "legion":
                $this->Exit = "Yes";
                break;
            case "logion":
                $this->Exit = "Yes";
                break;
            case "million":
                $this->Exit = "Yes";
                break;
            case "minion":
                $this->Exit = "Yes";
                break;
            case "mission":
                $this->Exit = "Yes";
                break;
            case "morion":
                $this->Exit = "Yes";
                break;
            case "mullion":
                $this->Exit = "Yes";
                break;
            case "passion":
                $this->Exit = "Yes";
                break;
            case "perversion":
                $this->Exit = "Yes";
                break;
            case "pillion":
                $this->Exit = "Yes";
                break;
            case "pinion":
                $this->Exit = "Yes";
                break;
            case "precession":
                $this->Exit = "Yes";
                break;
            case "prevision":
                $this->Exit = "Yes";
                break;
            case "prosodion":
                $this->Exit = "Yes";
                break;
            case "quadrillion":
                $this->Exit = "Yes";
                break;
            case "rampion":
                $this->Exit = "Yes";
                break;
            case "reflexion":
                $this->Exit = "Yes";
                break;
            case "remission":
                $this->Exit = "Yes";
                break;
            case "repercussion":
                $this->Exit = "Yes";
                break;
            case "retroflexion":
                $this->Exit = "Yes";
                break;
            case "rhinion":
                $this->Exit = "Yes";
                break;
            case "scullion":
                $this->Exit = "Yes";
                break;
            case "session":
                $this->Exit = "Yes";
                break;
            case "stallion":
                $this->Exit = "Yes";
                break;
            case "stanchion":
                $this->Exit = "Yes";
                break;
            case "succession":
                $this->Exit = "Yes";
                break;
            case "succussion":
                $this->Exit = "Yes";
                break;
            case "suspension":
                $this->Exit = "Yes";
                break;
            case "tampion":
                $this->Exit = "Yes";
                break;
            case "ternion":
                $this->Exit = "Yes";
                break;
            case "thermion":
                $this->Exit = "Yes";
                break;
            case "trillion":
                $this->Exit = "Yes";
                break;
            case "version":
                $this->Exit = "Yes";
                break;
            case "vision":
                $this->Exit = "Yes";
                break;
            case "zillion":
                $this->Exit = "Yes";
                break;
            case "bury":
                $this->Exit = "Yes";
                break;
            case "vary":
                $this->Exit = "Yes";
                break;
            case "awning":
                $this->Exit = "Yes";
                break;
            case "bantering":
                $this->Exit = "Yes";
                break;
            case "basting":
                $this->Exit = "Yes";
                break;
            case "boding":
                $this->Exit = "Yes";
                break;
            case "bunting":
                $this->Exit = "Yes";
                break;
            case "dating":
                $this->Exit = "Yes";
                break;
            case "dorking":
                $this->Exit = "Yes";
                break;
            case "downing":
                $this->Exit = "Yes";
                break;
            case "goering":
                $this->Exit = "Yes";
                break;
            case "harding":
                $this->Exit = "Yes";
                break;
            case "heming":
                $this->Exit = "Yes";
                break;
            case "herring":
                $this->Exit = "Yes";
                break;
            case "inning":
                $this->Exit = "Yes";
                break;
            case "lessing":
                $this->Exit = "Yes";
                break;
            case "pauling":
                $this->Exit = "Yes";
                break;
            case "scouting":
                $this->Exit = "Yes";
                break;
            case "shilling":
                $this->Exit = "Yes";
                break;
            case "story":
                $this->Exit = "Yes";
                break;
            case "ariled":
                $this->Exit = "Yes";
                break;
            case "bigheaded":
                $this->Exit = "Yes";
                break;
            case "creed":
                $this->Exit = "Yes";
                break;
            case "fired":
                $this->Exit = "Yes";
                break;
            case "lobed":
                $this->Exit = "Yes";
                break;
            case "screed":
                $this->Exit = "Yes";
                break;
            case "walleyed":
                $this->Exit = "Yes";
                break;
            case "chador":
                $this->Exit = "Yes";
                break;
            case "acicular":
                $this->Exit = "Yes";
                break;
            case "altar":
                $this->Exit = "Yes";
                break;
            case "annular":
                $this->Exit = "Yes";
                break;
            case "areolar":
                $this->Exit = "Yes";
                break;
            case "babar":
                $this->Exit = "Yes";
                break;
            case "basilar":
                $this->Exit = "Yes";
                break;
            case "briar":
                $this->Exit = "Yes";
                break;
            case "bursar":
                $this->Exit = "Yes";
                break;
            case "caviar":
                $this->Exit = "Yes";
                break;
            case "cedar":
                $this->Exit = "Yes";
                break;
            case "cellar":
                $this->Exit = "Yes";
                break;
            case "collar":
                $this->Exit = "Yes";
                break;
            case "cottar":
                $this->Exit = "Yes";
                break;
            case "dakar":
                $this->Exit = "Yes";
                break;
            case "dammar":
                $this->Exit = "Yes";
                break;
            case "debar":
                $this->Exit = "Yes";
                break;
            case "dewar":
                $this->Exit = "Yes";
                break;
            case "dinar":
                $this->Exit = "Yes";
                break;
            case "dollar":
                $this->Exit = "Yes";
                break;
            case "donar":
                $this->Exit = "Yes";
                break;
            case "edgar":
                $this->Exit = "Yes";
                break;
            case "eggar":
                $this->Exit = "Yes";
                break;
            case "filar":
                $this->Exit = "Yes";
                break;
            case "fistular":
                $this->Exit = "Yes";
                break;
            case "friar":
                $this->Exit = "Yes";
                break;
            case "gaspar":
                $this->Exit = "Yes";
                break;
            case "gidar":
                $this->Exit = "Yes";
                break;
            case "glomerular":
                $this->Exit = "Yes";
                break;
            case "grammar":
                $this->Exit = "Yes";
                break;
            case "granular":
                $this->Exit = "Yes";
                break;
            case "hangar":
                $this->Exit = "Yes";
                break;
            case "hussar":
                $this->Exit = "Yes";
                break;
            case "instar":
                $this->Exit = "Yes";
                break;
            case "jaffar":
                $this->Exit = "Yes";
                break;
            case "jaguar":
                $this->Exit = "Yes";
                break;
            case "katar":
                $this->Exit = "Yes";
                break;
            case "lacunar":
                $this->Exit = "Yes";
                break;
            case "lahar":
                $this->Exit = "Yes";
                break;
            case "lazar":
                $this->Exit = "Yes";
                break;
            case "lidar":
                $this->Exit = "Yes";
                break;
            case "malar":
                $this->Exit = "Yes";
                break;
            case "microbar":
                $this->Exit = "Yes";
                break;
            case "molar":
                $this->Exit = "Yes";
                break;
            case "neckar":
                $this->Exit = "Yes";
                break;
            case "pandar":
                $this->Exit = "Yes";
                break;
            case "peristylar":
                $this->Exit = "Yes";
                break;
            case "pilar":
                $this->Exit = "Yes";
                break;
            case "pilar":
                $this->Exit = "Yes";
                break;
            case "planar":
                $this->Exit = "Yes";
                break;
            case "plantar":
                $this->Exit = "Yes";
                break;
            case "polar":
                $this->Exit = "Yes";
                break;
            case "qatar":
                $this->Exit = "Yes";
                break;
            case "radar":
                $this->Exit = "Yes";
                break;
            case "reticular":
                $this->Exit = "Yes";
                break;
            case "safar":
                $this->Exit = "Yes";
                break;
            case "sambar":
                $this->Exit = "Yes";
                break;
            case "scapular":
                $this->Exit = "Yes";
                break;
            case "shankar":
                $this->Exit = "Yes";
                break;
            case "similar":
                $this->Exit = "Yes";
                break;
            case "sitar":
                $this->Exit = "Yes";
                break;
            case "solar":
                $this->Exit = "Yes";
                break;
            case "sonar":
                $this->Exit = "Yes";
                break;
            case "stellar":
                $this->Exit = "Yes";
                break;
            case "tartar":
                $this->Exit = "Yes";
                break;
            case "tatar":
                $this->Exit = "Yes";
                break;
            case "thenar":
                $this->Exit = "Yes";
                break;
            case "unclear":
                $this->Exit = "Yes";
                break;
            case "arbor":
                $this->Exit = "Yes";
                break;
            case "bangor":
                $this->Exit = "Yes";
                break;
            case "cantor":
                $this->Exit = "Yes";
                break;
            case "castor":
                $this->Exit = "Yes";
                break;
            case "color":
                $this->Exit = "Yes";
                break;
            case "cursor":
                $this->Exit = "Yes";
                break;
            case "cuspidor":
                $this->Exit = "Yes";
                break;
            case "debitor":
                $this->Exit = "Yes";
                break;
            case "decor":
                $this->Exit = "Yes";
                break;
            case "demeanor":
                $this->Exit = "Yes";
                break;
            case "detractor":
                $this->Exit = "Yes";
                break;
            case "dolor":
                $this->Exit = "Yes";
                break;
            case "donor":
                $this->Exit = "Yes";
                break;
            case "effector":
                $this->Exit = "Yes";
                break;
            case "error":
                $this->Exit = "Yes";
                break;
            case "escalator":
                $this->Exit = "Yes";
                break;
            case "expositor":
                $this->Exit = "Yes";
                break;
            case "fetor":
                $this->Exit = "Yes";
                break;
            case "floor":
                $this->Exit = "Yes";
                break;
            case "fluor":
                $this->Exit = "Yes";
                break;
            case "furor":
                $this->Exit = "Yes";
                break;
            case "gabor":
                $this->Exit = "Yes";
                break;
            case "gator":
                $this->Exit = "Yes";
                break;
            case "humor":
                $this->Exit = "Yes";
                break;
            case "impostor":
                $this->Exit = "Yes";
                break;
            case "incisor":
                $this->Exit = "Yes";
                break;
            case "labor":
                $this->Exit = "Yes";
                break;
            case "luxor":
                $this->Exit = "Yes";
                break;
            case "manor":
                $this->Exit = "Yes";
                break;
            case "mayor":
                $this->Exit = "Yes";
                break;
            case "meteor":
                $this->Exit = "Yes";
                break;
            case "micronor":
                $this->Exit = "Yes";
                break;
            case "minor":
                $this->Exit = "Yes";
                break;
            case "motor":
                $this->Exit = "Yes";
                break;
            case "nestor":
                $this->Exit = "Yes";
                break;
            case "obturator":
                $this->Exit = "Yes";
                break;
            case "outdoor":
                $this->Exit = "Yes";
                break;
            case "pallor":
                $this->Exit = "Yes";
                break;
            case "percussor":
                $this->Exit = "Yes";
                break;
            case "persecutor":
                $this->Exit = "Yes";
                break;
            case "pressor":
                $this->Exit = "Yes";
                break;
            case "protractor":
                $this->Exit = "Yes";
                break;
            case "raptor":
                $this->Exit = "Yes";
                break;
            case "razor":
                $this->Exit = "Yes";
                break;
            case "repressor":
                $this->Exit = "Yes";
                break;
            case "rescriptor":
                $this->Exit = "Yes";
                break;
            case "rigor":
                $this->Exit = "Yes";
                break;
            case "rotor":
                $this->Exit = "Yes";
                break;
            case "rubor":
                $this->Exit = "Yes";
                break;
            case "rumor":
                $this->Exit = "Yes";
                break;
            case "salvage":
                $this->Exit = "Yes";
                break;
            case "senor":
                $this->Exit = "Yes";
                break;
            case "signor":
                $this->Exit = "Yes";
                break;
            case "sopor":
                $this->Exit = "Yes";
                break;
            case "stator":
                $this->Exit = "Yes";
                break;
            case "stentor":
                $this->Exit = "Yes";
                break;
            case "stridor":
                $this->Exit = "Yes";
                break;
            case "stupor":
                $this->Exit = "Yes";
                break;
            case "successor":
                $this->Exit = "Yes";
                break;
            case "suitor":
                $this->Exit = "Yes";
                break;
            case "suspensor":
                $this->Exit = "Yes";
                break;
            case "tabor":
                $this->Exit = "Yes";
                break;
            case "tailor":
                $this->Exit = "Yes";
                break;
            case "tangor":
                $this->Exit = "Yes";
                break;
            case "tenor":
                $this->Exit = "Yes";
                break;
            case "timor":
                $this->Exit = "Yes";
                break;
            case "tractor":
                $this->Exit = "Yes";
                break;
            case "tumor":
                $this->Exit = "Yes";
                break;
            case "velar":
                $this->Exit = "Yes";
                break;
            case "vicar":
                $this->Exit = "Yes";
                break;
            case "volar":
                $this->Exit = "Yes";
                break;
            case "vulpecular":
                $this->Exit = "Yes";
                break;
            case "lather":
                $this->Exit = "Yes";
                break;
            case "abutter":
                $this->Exit = "Yes";
                break;
            case "archer":
                $this->Exit = "Yes";
                break;
            case "banner":
                $this->Exit = "Yes";
                break;
            case "barrier":
                $this->Exit = "Yes";
                break;
            case "barter":
                $this->Exit = "Yes";
                break;
            case "beaker":
                $this->Exit = "Yes";
                break;
            case "bedder":
                $this->Exit = "Yes";
                break;
            case "beecher":
                $this->Exit = "Yes";
                break;
            case "begetter":
                $this->Exit = "Yes";
                break;
            case "bitter":
                $this->Exit = "Yes";
                break;
            case "blither":
                $this->Exit = "Yes";
                break;
            case "boarder":
                $this->Exit = "Yes";
                break;
            case "bobber":
                $this->Exit = "Yes";
                break;
            case "bonesetter":
                $this->Exit = "Yes";
                break;
            case "bother":
                $this->Exit = "Yes";
                break;
            case "bowdler":
                $this->Exit = "Yes";
                break;
            case "bowdlerize":
                $this->Exit = "Yes";
                break;
            case "broker":
                $this->Exit = "Yes";
                break;
            case "brother":
                $this->Exit = "Yes";
                break;
            case "bruiser":
                $this->Exit = "Yes";
                break;
            case "bugger":
                $this->Exit = "Yes";
                break;
            case "bulldozer":
                $this->Exit = "Yes";
                break;
            case "bummer":
                $this->Exit = "Yes";
                break;
            case "burger":
                $this->Exit = "Yes";
                break;
            case "butcher":
                $this->Exit = "Yes";
                break;
            case "butter":
                $this->Exit = "Yes";
                break;
            case "caffer":
                $this->Exit = "Yes";
                break;
            case "canter":
                $this->Exit = "Yes";
                break;
            case "career":
                $this->Exit = "Yes";
                break;
            case "carper":
                $this->Exit = "Yes";
                break;
            case "carter":
                $this->Exit = "Yes";
                break;
            case "center":
                $this->Exit = "Yes";
                break;
            case "charter":
                $this->Exit = "Yes";
                break;
            case "chequer":
                $this->Exit = "Yes";
                break;
            case "chester":
                $this->Exit = "Yes";
                break;
            case "chipper":
                $this->Exit = "Yes";
                break;
            case "chitter":
                $this->Exit = "Yes";
                break;
            case "clanger":
                $this->Exit = "Yes";
                break;
            case "cleaver":
                $this->Exit = "Yes";
                break;
            case "clinker":
                $this->Exit = "Yes";
                break;
            case "clitter":
                $this->Exit = "Yes";
                break;
            case "clover":
                $this->Exit = "Yes";
                break;
            case "cobber":
                $this->Exit = "Yes";
                break;
            case "cobbler":
                $this->Exit = "Yes";
                break;
            case "cocker":
                $this->Exit = "Yes";
                break;
            case "collier":
                $this->Exit = "Yes";
                break;
            case "colter":
                $this->Exit = "Yes";
                break;
            case "conger":
                $this->Exit = "Yes";
                break;
            case "conker":
                $this->Exit = "Yes";
                break;
            case "cooper":
                $this->Exit = "Yes";
                break;
            case "cooter":
                $this->Exit = "Yes";
                break;
            case "copper":
                $this->Exit = "Yes";
                break;
            case "corner":
                $this->Exit = "Yes";
                break;
            case "cosher":
                $this->Exit = "Yes";
                break;
            case "cotter":
                $this->Exit = "Yes";
                break;
            case "coupler":
                $this->Exit = "Yes";
                break;
            case "crater":
                $this->Exit = "Yes";
                break;
            case "critter":
                $this->Exit = "Yes";
                break;
            case "croaker":
                $this->Exit = "Yes";
                break;
            case "croupier":
                $this->Exit = "Yes";
                break;
            case "currier":
                $this->Exit = "Yes";
                break;
            case "dabbler":
                $this->Exit = "Yes";
                break;
            case "dagger":
                $this->Exit = "Yes";
                break;
            case "decker":
                $this->Exit = "Yes";
                break;
            case "demister":
                $this->Exit = "Yes";
                break;
            case "dicker":
                $this->Exit = "Yes";
                break;
            case "dinner":
                $this->Exit = "Yes";
                break;
            case "dodder":
                $this->Exit = "Yes";
                break;
            case "dodger":
                $this->Exit = "Yes";
                break;
            case "domineer":
                $this->Exit = "Yes";
                break;
            case "dormer":
                $this->Exit = "Yes";
                break;
            case "duffer":
                $this->Exit = "Yes";
                break;
            case "emitter":
                $this->Exit = "Yes";
                break;
            case "engineer":
                $this->Exit = "Yes";
                break;
            case "fakeer":
                $this->Exit = "Yes";
                break;
            case "fawner":
                $this->Exit = "Yes";
                break;
            case "fetter":
                $this->Exit = "Yes";
                break;
            case "filler":
                $this->Exit = "Yes";
                break;
            case "flatter":
                $this->Exit = "Yes";
                break;
            case "flower":
                $this->Exit = "Yes";
                break;
            case "fomenter":
                $this->Exit = "Yes";
                break;
            case "former":
                $this->Exit = "Yes";
                break;
            case "forty-niner":
                $this->Exit = "Yes";
                break;
            case "frankfurter":
                $this->Exit = "Yes";
                break;
            case "gander":
                $this->Exit = "Yes";
                break;
            case "gibber":
                $this->Exit = "Yes";
                break;
            case "greaser":
                $this->Exit = "Yes";
                break;
            case "grouper":
                $this->Exit = "Yes";
                break;
            case "guilder":
                $this->Exit = "Yes";
                break;
            case "hamburger":
                $this->Exit = "Yes";
                break;
            case "hammer":
                $this->Exit = "Yes";
                break;
            case "hanker":
                $this->Exit = "Yes";
                break;
            case "headliner":
                $this->Exit = "Yes";
                break;
            case "heller":
                $this->Exit = "Yes";
                break;
            case "hooker":
                $this->Exit = "Yes";
                break;
            case "hunker":
                $this->Exit = "Yes";
                break;
            case "imbiber":
                $this->Exit = "Yes";
                break;
            case "impeller":
                $this->Exit = "Yes";
                break;
            case "imposter":
                $this->Exit = "Yes";
                break;
            case "inciter":
                $this->Exit = "Yes";
                break;
            case "jabber":
                $this->Exit = "Yes";
                break;
            case "jagger":
                $this->Exit = "Yes";
                break;
            case "jigger":
                $this->Exit = "Yes";
                break;
            case "kelter":
                $this->Exit = "Yes";
                break;
            case "kilter":
                $this->Exit = "Yes";
                break;
            case "kingfisher":
                $this->Exit = "Yes";
                break;
            case "kipper":
                $this->Exit = "Yes";
                break;
            case "kissinger":
                $this->Exit = "Yes";
                break;
            case "kitchener":
                $this->Exit = "Yes";
                break;
            case "knacker":
                $this->Exit = "Yes";
                break;
            case "knuckler":
                $this->Exit = "Yes";
                break;
            case "ladder":
                $this->Exit = "Yes";
                break;
            case "latter":
                $this->Exit = "Yes";
                break;
            case "leaker":
                $this->Exit = "Yes";
                break;
            case "ledger":
                $this->Exit = "Yes";
                break;
            case "levanter":
                $this->Exit = "Yes";
                break;
            case "limber":
                $this->Exit = "Yes";
                break;
            case "linger":
                $this->Exit = "Yes";
                break;
            case "litter":
                $this->Exit = "Yes";
                break;
            case "loafer":
                $this->Exit = "Yes";
                break;
            case "looper":
                $this->Exit = "Yes";
                break;
            case "lopper":
                $this->Exit = "Yes";
                break;
            case "lugger":
                $this->Exit = "Yes";
                break;
            case "lumper":
                $this->Exit = "Yes";
                break;
            case "luster":
                $this->Exit = "Yes";
                break;
            case "madder":
                $this->Exit = "Yes";
                break;
            case "manger":
                $this->Exit = "Yes";
                break;
            case "manner":
                $this->Exit = "Yes";
                break;
            case "marcher":
                $this->Exit = "Yes";
                break;
            case "marveller":
                $this->Exit = "Yes";
                break;
            case "master":
                $this->Exit = "Yes";
                break;
            case "matter":
                $this->Exit = "Yes";
                break;
            case "maunder":
                $this->Exit = "Yes";
                break;
            case "milliner":
                $this->Exit = "Yes";
                break;
            case "minder":
                $this->Exit = "Yes";
                break;
            case "minter":
                $this->Exit = "Yes";
                break;
            case "mister":
                $this->Exit = "Yes";
                break;
            case "mother":
                $this->Exit = "Yes";
                break;
            case "muller":
                $this->Exit = "Yes";
                break;
            case "mummer":
                $this->Exit = "Yes";
                break;
            case "musher":
                $this->Exit = "Yes";
                break;
            case "muster":
                $this->Exit = "Yes";
                break;
            case "temper":
                $this->Exit = "Yes";
                break;
            case "register":
                $this->Exit = "Yes";
                break;
            case "lighter":
                $this->Exit = "Yes";
                break;
            case "proper":
                $this->Exit = "Yes";
                break;
            case "quarter":
                $this->Exit = "Yes";
                break;
            case "tender":
                $this->Exit = "Yes";
                break;
            case "mystifier":
                $this->Exit = "Yes";
                break;
            case "acer":
                $this->Exit = "Yes";
                break;
            case "badger":
                $this->Exit = "Yes";
                break;
            case "barretter":
                $this->Exit = "Yes";
                break;
            case "beer":
                $this->Exit = "Yes";
                break;
            case "brier":
                $this->Exit = "Yes";
                break;
            case "cager":
                $this->Exit = "Yes";
                break;
            case "caper":
                $this->Exit = "Yes";
                break;
            case "coffer":
                $this->Exit = "Yes";
                break;
            case "cover":
                $this->Exit = "Yes";
                break;
            case "dimer":
                $this->Exit = "Yes";
                break;
            case "dover":
                $this->Exit = "Yes";
                break;
            case "ever":
                $this->Exit = "Yes";
                break;
            case "ewer":
                $this->Exit = "Yes";
                break;
            case "finer":
                $this->Exit = "Yes";
                break;
            case "fundraiser":
                $this->Exit = "Yes";
                break;
            case "gaffer":
                $this->Exit = "Yes";
                break;
            case "grater":
                $this->Exit = "Yes";
                break;
            case "alter":
                $this->Exit = "Yes";
                break;
            case "anger":
                $this->Exit = "Yes";
                break;
            case "anser":
                $this->Exit = "Yes";
                break;
            case "asper":
                $this->Exit = "Yes";
                break;
            case "auger":
                $this->Exit = "Yes";
                break;
            case "balder":
                $this->Exit = "Yes";
                break;
            case "barber":
                $this->Exit = "Yes";
                break;
            case "baster":
                $this->Exit = "Yes";
                break;
            case "bayer":
                $this->Exit = "Yes";
                break;
            case "beaner":
                $this->Exit = "Yes";
                break;
            case "bloater":
                $this->Exit = "Yes";
                break;
            case "bower":
                $this->Exit = "Yes";
                break;
            case "burgher":
                $this->Exit = "Yes";
                break;
            case "bushwhacker":
                $this->Exit = "Yes";
                break;
            case "bustier":
                $this->Exit = "Yes";
                break;
            case "caber":
                $this->Exit = "Yes";
                break;
            case "canvass":
                $this->Exit = "Yes";
                break;
            case "cater":
                $this->Exit = "Yes";
                break;
            case "chaffer":
                $this->Exit = "Yes";
                break;
            case "cider":
                $this->Exit = "Yes";
                break;
            case "courser":
                $this->Exit = "Yes";
                break;
            case "cower":
                $this->Exit = "Yes";
                break;
            case "customer":
                $this->Exit = "Yes";
                break;
            case "dander":
                $this->Exit = "Yes";
                break;
            case "defer":
                $this->Exit = "Yes";
                break;
            case "drawer":
                $this->Exit = "Yes";
                break;
            case "drooler":
                $this->Exit = "Yes";
                break;
            case "emmer":
                $this->Exit = "Yes";
                break;
            case "ester":
                $this->Exit = "Yes";
                break;
            case "fiber":
                $this->Exit = "Yes";
                break;
            case "gaiter":
                $this->Exit = "Yes";
                break;
            case "girder":
                $this->Exit = "Yes";
                break;
            case "halter":
                $this->Exit = "Yes";
                break;
            case "hobbler":
                $this->Exit = "Yes";
                break;
            case "holler":
                $this->Exit = "Yes";
                break;
            case "inger":
                $this->Exit = "Yes";
                break;
            case "inner":
                $this->Exit = "Yes";
                break;
            case "jenner":
                $this->Exit = "Yes";
                break;
            case "keller":
                $this->Exit = "Yes";
                break;
            case "lager":
                $this->Exit = "Yes";
                break;
            case "larder":
                $this->Exit = "Yes";
                break;
            case "leger":
                $this->Exit = "Yes";
                break;
            case "letter":
                $this->Exit = "Yes";
                break;
            case "lever":
                $this->Exit = "Yes";
                break;
            case "liter":
                $this->Exit = "Yes";
                break;
            case "liver":
                $this->Exit = "Yes";
                break;
            case "mayer":
                $this->Exit = "Yes";
                break;
            case "mazer":
                $this->Exit = "Yes";
                break;
            case "mercer":
                $this->Exit = "Yes";
                break;
            case "meter":
                $this->Exit = "Yes";
                break;
            case "miter":
                $this->Exit = "Yes";
                break;
            case "mutter":
                $this->Exit = "Yes";
                break;
            case "never":
                $this->Exit = "Yes";
                break;
            case "niter":
                $this->Exit = "Yes";
                break;
            case "number":
                $this->Exit = "Yes";
                break;
            case "offer":
                $this->Exit = "Yes";
                break;
            case "oliver":
                $this->Exit = "Yes";
                break;
            case "outgoer":
                $this->Exit = "Yes";
                break;
            case "outrider":
                $this->Exit = "Yes";
                break;
            case "palmer":
                $this->Exit = "Yes";
                break;
            case "paper":
                $this->Exit = "Yes";
                break;
            case "parker":
                $this->Exit = "Yes";
                break;
            case "pater":
                $this->Exit = "Yes";
                break;
            case "patter":
                $this->Exit = "Yes";
                break;
            case "pepper":
                $this->Exit = "Yes";
                break;
            case "pester":
                $this->Exit = "Yes";
                break;
            case "peter":
                $this->Exit = "Yes";
                break;
            case "pilferer":
                $this->Exit = "Yes";
                break;
            case "ponder":
                $this->Exit = "Yes";
                break;
            case "porker":
                $this->Exit = "Yes";
                break;
            case "porter":
                $this->Exit = "Yes";
                break;
            case "power":
                $this->Exit = "Yes";
                break;
            case "premier":
                $this->Exit = "Yes";
                break;
            case "proffer":
                $this->Exit = "Yes";
                break;
            case "pucker":
                $this->Exit = "Yes";
                break;
            case "rainier":
                $this->Exit = "Yes";
                break;
            case "refer":
                $this->Exit = "Yes";
                break;
            case "reiter":
                $this->Exit = "Yes";
                break;
            case "reversion":
                $this->Exit = "Yes";
                break;
            case "river":
                $this->Exit = "Yes";
                break;
            case "rooster":
                $this->Exit = "Yes";
                break;
            case "rover":
                $this->Exit = "Yes";
                break;
            case "rudder":
                $this->Exit = "Yes";
                break;
            case "rummer":
                $this->Exit = "Yes";
                break;
            case "sanger":
                $this->Exit = "Yes";
                break;
            case "saucer":
                $this->Exit = "Yes";
                break;
            case "scamper":
                $this->Exit = "Yes";
                break;
            case "scatter":
                $this->Exit = "Yes";
                break;
            case "scauper":
                $this->Exit = "Yes";
                break;
            case "schnorrer":
                $this->Exit = "Yes";
                break;
            case "scooter":
                $this->Exit = "Yes";
                break;
            case "scorner":
                $this->Exit = "Yes";
                break;
            case "scoter":
                $this->Exit = "Yes";
                break;
            case "scouser":
                $this->Exit = "Yes";
                break;
            case "scupper":
                $this->Exit = "Yes";
                break;
            case "secreter":
                $this->Exit = "Yes";
                break;
            case "serer":
                $this->Exit = "Yes";
                break;
            case "shimmer":
                $this->Exit = "Yes";
                break;
            case "shirer":
                $this->Exit = "Yes";
                break;
            case "shiver":
                $this->Exit = "Yes";
                break;
            case "shower":
                $this->Exit = "Yes";
                break;
            case "signal":
                $this->Exit = "Yes";
                break;
            case "skewer":
                $this->Exit = "Yes";
                break;
            case "skitter":
                $this->Exit = "Yes";
                break;
            case "slaver":
                $this->Exit = "Yes";
                break;
            case "slobber":
                $this->Exit = "Yes";
                break;
            case "snooker":
                $this->Exit = "Yes";
                break;
            case "sober":
                $this->Exit = "Yes";
                break;
            case "solder":
                $this->Exit = "Yes";
                break;
            case "sooner":
                $this->Exit = "Yes";
                break;
            case "spatter":
                $this->Exit = "Yes";
                break;
            case "spelter":
                $this->Exit = "Yes";
                break;
            case "sprigger":
                $this->Exit = "Yes";
                break;
            case "stagger":
                $this->Exit = "Yes";
                break;
            case "sticker":
                $this->Exit = "Yes";
                break;
            case "stover":
                $this->Exit = "Yes";
                break;
            case "stranger":
                $this->Exit = "Yes";
                break;
            case "sumer":
                $this->Exit = "Yes";
                break;
            case "summer":
                $this->Exit = "Yes";
                break;
            case "super":
                $this->Exit = "Yes";
                break;
            case "supper":
                $this->Exit = "Yes";
                break;
            case "swagger":
                $this->Exit = "Yes";
                break;
            case "tater":
                $this->Exit = "Yes";
                break;
            case "tatter":
                $this->Exit = "Yes";
                break;
            case "tenter":
                $this->Exit = "Yes";
                break;
            case "terrier":
                $this->Exit = "Yes";
                break;
            case "tether":
                $this->Exit = "Yes";
                break;
            case "throttler":
                $this->Exit = "Yes";
                break;
            case "tiber":
                $this->Exit = "Yes";
                break;
            case "ticker":
                $this->Exit = "Yes";
                break;
            case "tinker":
                $this->Exit = "Yes";
                break;
            case "titer":
                $this->Exit = "Yes";
                break;
            case "titter":
                $this->Exit = "Yes";
                break;
            case "toner":
                $this->Exit = "Yes";
                break;
            case "totter":
                $this->Exit = "Yes";
                break;
            case "toucher":
                $this->Exit = "Yes";
                break;
            case "tourer":
                $this->Exit = "Yes";
                break;
            case "tower":
                $this->Exit = "Yes";
                break;
            case "trifler":
                $this->Exit = "Yes";
                break;
            case "trigger":
                $this->Exit = "Yes";
                break;
            case "trimer":
                $this->Exit = "Yes";
                break;
            case "tuber":
                $this->Exit = "Yes";
                break;
            case "tweezer":
                $this->Exit = "Yes";
                break;
            case "twitter":
                $this->Exit = "Yes";
                break;
            case "unsolder":
                $this->Exit = "Yes";
                break;
            case "usurper":
                $this->Exit = "Yes";
                break;
            case "vender":
                $this->Exit = "Yes";
                break;
            case "verner":
                $this->Exit = "Yes";
                break;
            case "viper":
                $this->Exit = "Yes";
                break;
            case "voider":
                $this->Exit = "Yes";
                break;
            case "waggoner":
                $this->Exit = "Yes";
                break;
            case "waiver":
                $this->Exit = "Yes";
                break;
            case "waller":
                $this->Exit = "Yes";
                break;
            case "wander":
                $this->Exit = "Yes";
                break;
            case "warder":
                $this->Exit = "Yes";
                break;
            case "waver":
                $this->Exit = "Yes";
                break;
            case "weber":
                $this->Exit = "Yes";
                break;
            case "welcomer":
                $this->Exit = "Yes";
                break;
            case "welter":
                $this->Exit = "Yes";
                break;
            case "whiffer":
                $this->Exit = "Yes";
                break;
            case "whirler":
                $this->Exit = "Yes";
                break;
            case "whisker":
                $this->Exit = "Yes";
                break;
            case "wicker":
                $this->Exit = "Yes";
                break;
            case "wilder":
                $this->Exit = "Yes";
                break;
            case "wither":
                $this->Exit = "Yes";
                break;
            case "yammer":
                $this->Exit = "Yes";
                break;
            case "alterative":
                $this->Exit = "Yes";
                break;
            case "carminative":
                $this->Exit = "Yes";
                break;
            case "connotative":
                $this->Exit = "Yes";
                break;
            case "conservative":
                $this->Exit = "Yes";
                break;
            case "recitative":
                $this->Exit = "Yes";
                break;
            case "sanative":
                $this->Exit = "Yes";
                break;
            case "tentative":
                $this->Exit = "Yes";
                break;
            case "pillar":
                $this->Exit = "Yes";
                break;
            case "layer":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            case "":
                $this->Exit = "Yes";
                break;
            default :
                $this->Exit = "No";
        }
    }
}
