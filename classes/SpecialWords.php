<?php

/**
 * Description of SpecialWords
 *
 * @author Hamed Zakeri Rad
 */

class SpecialWords {
    private $Word;
    
    public function SpecialWordsCheck($Word){
        $this->Word = $Word;
        $this->SpecialWord();
        return $this->Word;
    }
    private function SpecialWord(){
        switch ($this->Word) {
            case "likelihood":
                $this->Word = "likely";
                break;
            case "livelihood":
                $this->Word = "lively";
                break;
            case "monkshood":
                $this->Word = "monk";
                break;
            case "neighbour":
                $this->Word = "neighbor";
                break;
            case "unlikelihood":
                $this->Word = "unlikely";
                break;
            case "airwoman":
                $this->Word = "aviator";
                break;
            case "airman":
                $this->Word = "aviator";
                break;
            case "aircraftsman":
                $this->Word = "aircraftman";
                break;
            case "beadsman":
                $this->Word = "bedesman";
                break;
            case "boogeyman":
                $this->Word = "bogeyman";
                break;
            case "chinese":
                $this->Word = "china";
                break;
            case "hit man":
                $this->Word = "hitman";
                break;
            case "hitman":
                $this->Word = "killer";
                break;
            case "iron man":
                $this->Word = "ironman";
                break;
            case "penman":
                $this->Word = "journalist";
                break;
            case "ploughman":
                $this->Word = "plowman";
                break;
            case "pointsman":
                $this->Word = "policeman";
                break;
            case "seaman":
                $this->Word = "sailor";
                break;
            case "straw man":
                $this->Word = "strawman";
                break;
            case "workingman":
                $this->Word = "workman";
                break;
            case "workman":
                $this->Word = "labor";
                break;
            case "babe":
                $this->Word = "baby";
                break;
            case "araxes":
                $this->Word = "aras";
                break;
            case "camassia":
                $this->Word = "camas";
                break;
            case "cebus":
                $this->Word = "cebidae";
                break;
            case "cryptanalysis":
                $this->Word = "cryptanalytic";
                break;
            case "fibreoptic":
                $this->Word = "fiberoptic";
                break;
            case "hysteria":
                $this->Word = "hysteric";
                break;
            case "kinesthesis":
                $this->Word = "kinesthetic";
                break;
            case "lost":
                $this->Word = "loss";
                break;
            case "masses":
                $this->Word = "mass";
                break;
            case "orthopedic":
                $this->Word = "orthopaedic";
                break;
            case "rateable":
                $this->Word = "ratable";
                break;
            case "vapour":
                $this->Word = "vapor";
                break;
            case "amortization":
                $this->Word = "amortize";
                break;
            case "authorization":
                $this->Word = "authorize";
                break;
            case "bowdlerization":
                $this->Word = "bowdlerize";
                break;
            case "colonization":
                $this->Word = "colony";
                break;
            case "colonize":
                $this->Word = "colony";
                break;
            case "glamor":
                $this->Word = "glamour";
                break;
            case "hyaline":
                $this->Word = "hyalin";
                break;
            case "maxim":
                $this->Word = "maximum";
                break;
            case "minim":
                $this->Word = "minimum";
                break;
            case "maximize":
                $this->Word = "maximum";
                break;
            case "minimize":
                $this->Word = "minimum";
                break;
            case "lexical":
                $this->Word = "lexicon";
                break;
            case "barbarization":
                $this->Word = "barbaric";
                break;
            case "barbarize":
                $this->Word = "barbaric";
                break;
            case "communization":
                $this->Word = "community";
                break;
            case "communize":
                $this->Word = "community";
                break;
            case "improvization":
                $this->Word = "improvize";
                break;
            case "sanitization":
                $this->Word = "sanitize";
                break;
            case "sterilization":
                $this->Word = "sterilize";
                break;
            case "subsidization":
                $this->Word = "subsidy";
                break;
            case "agonize":
                $this->Word = "agony";
                break;
            case "analogize":
                $this->Word = "analogy";
                break;
            case "analogize":
                $this->Word = "analogy";
                break;
            case "analogue":
                $this->Word = "analogous";
                break;
            case "animosity":
                $this->Word = "animus";
                break;
            case "animize":
                $this->Word = "animate";
                break;
            case "baronet":
                $this->Word = "baron";
                break;
            case "cocaine":
                $this->Word = "cocain";
                break;
            case "discolour":
                $this->Word = "discolor";
                break;
            case "colour":
                $this->Word = "color";
                break;
            case "ebony":
                $this->Word = "ebon";
                break;
            case "focal":
                $this->Word = "focus";
                break;
            case "prologize":
                $this->Word = "prologue";
                break;
            case "prologize":
                $this->Word = "prologue";
                break;
            case "sodomize":
                $this->Word = "sodomy";
                break;
            case "subsidize":
                $this->Word = "subsidy";
                break;
            case "synchron":
                $this->Word = "sync";
                break;
            case "synchrony":
                $this->Word = "sync";
                break;
            case "armour":
                $this->Word = "armor";
                break;
            case "benedictine":
                $this->Word = "benedict";
                break;
            case "showy":
                $this->Word = "show";
                break;
            case "jerky":
                $this->Word = "jerk";
                break;
            case "obligatory":
                $this->Word = "obligate";
                break;
            case "accessary":
                $this->Word = "accessory";
                break;
            case "seigneur":
                $this->Word = "seignior";
                break;
            case "zonary":
                $this->Word = "zone";
                break;
            case "funny":
                $this->Word = "fun";
                break;
            case "runny":
                $this->Word = "run";
                break;
            case "shinny":
                $this->Word = "shin";
                break;
            case "skinny":
                $this->Word = "skin";
                break;
            case "sonny":
                $this->Word = "son";
                break;
            case "sunny":
                $this->Word = "sun";
                break;
            case "tinny":
                $this->Word = "tin";
                break;
            case "granny":
                $this->Word = "gran";
                break;
            case "acarpellous":
                $this->Word = "acarpelous";
                break;
            case "abranchious":
                $this->Word = "abranchiate";
                break;
            case "androgenesis":
                $this->Word = "androgenous";
                break;
            case "arthropoda":
                $this->Word = "arthropod";
                break;
            case "autogenous":
                $this->Word = "autogenic";
                break;
            case "basidium":
                $this->Word = "basidia";
                break;
            case "basidial":
                $this->Word = "basidia";
                break;
            case "beauteous":
                $this->Word = "beautiful";
                break;
            case "bountiful":
                $this->Word = "bounty";
                break;
            case "censure":
                $this->Word = "censor";
                break;
            case "chelifer":
                $this->Word = "chelonethida";
                break;
            case "dexterous":
                $this->Word = "dexterity";
                break;
            case "dolour":
                $this->Word = "dolor";
                break;
            case "dubious":
                $this->Word = "doubt";
                break;
            case "fibre":
                $this->Word = "fiber";
                break;
            case "centre":
                $this->Word = "center";
                break;
            case "gallous":
                $this->Word = "gallows";
                break;
            case "gymnosperm":
                $this->Word = "gymnospermae";
                break;
            case "humour":
                $this->Word = "humor";
                break;
            case "hymenopteron":
                $this->Word = "hymenoptera";
                break;
            case "hymenopteran":
                $this->Word = "hymenoptera";
                break;
            case "hymenopter":
                $this->Word = "hymenoptera";
                break;
            case "ingenuity":
                $this->Word = "ingenuous";
                break;
            case "malodour":
                $this->Word = "malodor";
                break;
            case "marvellous":
                $this->Word = "marvelous";
                break;
            case "nebulous":
                $this->Word = "nebula";
                break;
            case "piteous":
                $this->Word = "pity";
                break;
            case "polyphonous":
                $this->Word = "polyphony";
                break;
            case "sanious":
                $this->Word = "sanies";
                break;
            case "spermatozoa":
                $this->Word = "sperm";
                break;
            case "spinous":
                $this->Word = "spine";
                break;
            case "stomatal":
                $this->Word = "stomatous";
                break;
            case "sulphur":
                $this->Word = "sulfur";
                break;
            case "umbellifer":
                $this->Word = "umbelliferae";
                break;
            case "variance":
                $this->Word = "vary";
                break;
            case "various":
                $this->Word = "vary";
                break;
            case "victorious":
                $this->Word = "victory";
                break;
            case "virtuous":
                $this->Word = "virtue";
                break;
            case "vivacity":
                $this->Word = "vivacious";
                break;
            case "vulturine":
                $this->Word = "vulturous";
                break;
            case "vultur":
                $this->Word = "vulture";
                break;
            case "communion":
                $this->Word = "communicate";
                break;
            case "deferral":
                $this->Word = "defer";
                break;
            case "entry":
                $this->Word = "enter";
                break;
            case "indicant":
                $this->Word = "indicate";
                break;
            case "euphoriant":
                $this->Word = "euphoria";
                break;
            case "minister":
                $this->Word = "ministry";
                break;
            case "obsolesce":
                $this->Word = "obsolete";
                break;
            case "phosphoresce":
                $this->Word = "phosphorous";
                break;
            case "registry":
                $this->Word = "register";
                break;
            case "agonal":
                $this->Word = "agony";
                break;
            case "amenorrhoea":
                $this->Word = "amenorrhea";
                break;
            case "ancestry":
                $this->Word = "ancestor";
                break;
            case "aneurism":
                $this->Word = "aneurysm";
                break;
            case "annexal":
                $this->Word = "adnexa";
                break;
            case "aquaculture":
                $this->Word = "aquiculture";
                break;
            case "arthropod":
                $this->Word = "arthropoda";
                break;
            case "barony":
                $this->Word = "baron";
                break;
            case "bibliotheca":
                $this->Word = "bibliothec";
                break;
            case "blastemata":
                $this->Word = "blastema";
                break;
            case "botulinus":
                $this->Word = "botulin";
                break;
            case "menstrual":
                $this->Word = "menstruate";
                break;
            case "catamenia":
                $this->Word = "menstruate";
                break;
            case "causal":
                $this->Word = "cause";
                break;
            case "clonal":
                $this->Word = "clone";
                break;
            case "communal":
                $this->Word = "community";
                break;
            case "commune":
                $this->Word = "community";
                break;
            case "diarrhoea":
                $this->Word = "diarrhea";
                break;
            case "diarrheic":
                $this->Word = "diarrhea";
                break;
            case "diarrhetic":
                $this->Word = "diarrhea";
                break;
            case "diarrhoeic":
                $this->Word = "diarrhea";
                break;
            case "diarrhoetic":
                $this->Word = "diarrhea";
                break;
            case "colonial":
                $this->Word = "colony";
                break;
            case "dyspnoea":
                $this->Word = "dyspnea";
                break;
            case "dyspneic":
                $this->Word = "dyspnea";
                break;
            case "dyspnoeic":
                $this->Word = "dyspnea";
                break;
            case "eparchy":
                $this->Word = "eparch";
                break;
            case "denial":
                $this->Word = "deny";
                break;
            case "fetal":
                $this->Word = "fetus";
                break;
            case "habitual":
                $this->Word = "habit";
                break;
            case "hypodermatidae":
                $this->Word = "hypoderma";
                break;
            case "hypodermal":
                $this->Word = "hypodermis";
                break;
            case "indusial":
                $this->Word = "indusium";
                break;
            case "influential":
                $this->Word = "influence";
                break;
            case "malarial":
                $this->Word = "malaria";
                break;
            case "matriarchy":
                $this->Word = "matriarch";
                break;
            case "megalomaniac":
                $this->Word = "megalomania";
                break;
            case "misconstruction":
                $this->Word = "misconstrue";
                break;
            case "monomaniac":
                $this->Word = "monomania";
                break;
            case "mucosa":
                $this->Word = "mucous";
                break;
            case "naval":
                $this->Word = "navy";
                break;
            case "perigonal":
                $this->Word = "perigone";
                break;
            case "pretor":
                $this->Word = "praetor";
                break;
            case "proximal":
                $this->Word = "proximate";
                break;
            case "pursual":
                $this->Word = "pursue";
                break;
            case "racial":
                $this->Word = "races";
                break;
            case "septal":
                $this->Word = "septum";
                break;
            case "spacial":
                $this->Word = "space";
                break;
            case "spinal":
                $this->Word = "spine";
                break;
            case "sternal":
                $this->Word = "sternum";
                break;
            case "vestal":
                $this->Word = "vesta";
                break;
            case "viricide":
                $this->Word = "virucide";
                break;
            case "zonal":
                $this->Word = "zone";
                break;
            case "amply":
                $this->Word = "ample";
                break;
            case "dishonourable":
                $this->Word = "dishonorable";
                break;
            case "fully":
                $this->Word = "full";
                break;
            case "injury":
                $this->Word = "injure";
                break;
            case "marly":
                $this->Word = "marl";
                break;
            case "nobly":
                $this->Word = "noble";
                break;
            case "pearly":
                $this->Word = "pearl";
                break;
            case "roily":
                $this->Word = "roil";
                break;
            case "stably":
                $this->Word = "stable";
                break;
            case "steely":
                $this->Word = "steel";
                break;
            case "unfavourable":
                $this->Word = "unfavorable";
                break;
            case "wilful":
                $this->Word = "willful";
                break;
            case "flavour":
                $this->Word = "flavor";
                break;
            case "dowry":
                $this->Word = "dower";
                break;
            case "donee":
                $this->Word = "donate";
                break;
            case "lessee":
                $this->Word = "lease";
                break;
            case "tutee":
                $this->Word = "tutor";
                break;
            case "algerian":
                $this->Word = "algeria";
                break;
            case "alsatia":
                $this->Word = "alsace";
                break;
            case "arachnidian":
                $this->Word = "arachnidia";
                break;
            case "australian":
                $this->Word = "australia";
                break;
            case "byelorussia":
                $this->Word = "belorussia";
                break;
            case "chippewa":
                $this->Word = "ojibwa";
                break;
            case "chippewaian":
                $this->Word = "chipewyan";
                break;
            case "ojibway":
                $this->Word = "ojibwa";
                break;
            case "dionysia":
                $this->Word = "dionysus";
                break;
            case "electricity":
                $this->Word = "electric";
                break;
            case "esthonia":
                $this->Word = "estonia";
                break;
            case "floridian":
                $this->Word = "florida";
                break;
            case "holothuridae":
                $this->Word = "holothuroidea";
                break;
            case "holothuria":
                $this->Word = "holothuroidea";
                break;
            case "ionian":
                $this->Word = "ionia";
                break;
            case "kalapuya":
                $this->Word = "kalapooia";
                break;
            case "marian":
                $this->Word = "mary";
                break;
            case "martian":
                $this->Word = "mars";
                break;
            case "nestorian":
                $this->Word = "nestorius";
                break;
            case "nigerian":
                $this->Word = "nigeria";
                break;
            case "nubian":
                $this->Word = "nubia";
                break;
            case "paediatric":
                $this->Word = "pediatric";
                break;
            case "planarian":
                $this->Word = "planaria";
                break;
            case "rhodesian":
                $this->Word = "rhodesia";
                break;
            case "romanian":
                $this->Word = "romania";
                break;
            case "rumania":
                $this->Word = "romania";
                break;
            case "roumania":
                $this->Word = "romania";
                break;
            case "salientian":
                $this->Word = "salientia";
                break;
            case "seminary":
                $this->Word = "seminar";
                break;
            case "sicilia":
                $this->Word = "sicily";
                break;
            case "slovenian":
                $this->Word = "slovenia";
                break;
            case "syntactic":
                $this->Word = "syntax";
                break;
            case "tasmanian":
                $this->Word = "tasmania";
                break;
            case "thessalian":
                $this->Word = "thessaly";
                break;
            case "venetia":
                $this->Word = "venice";
                break;
            case "victorian":
                $this->Word = "victoria";
                break;
            case "virginian":
                $this->Word = "virginia";
                break;
            case "albanian":
                $this->Word = "albania";
                break;
            case "apiarian":
                $this->Word = "apiary";
                break;
            case "athenian":
                $this->Word = "athens";
                break;
            case "athene":
                $this->Word = "athena";
                break;
            case "augustinian":
                $this->Word = "augustine";
                break;
            case "carolinian":
                $this->Word = "carolina";
                break;
            case "centenarian":
                $this->Word = "centenary";
                break;
            case "grenadian":
                $this->Word = "grenada";
                break;
            case "lapidarian":
                $this->Word = "lapidary";
                break;
            case "megatherian":
                $this->Word = "megathere";
                break;
            case "ovarian":
                $this->Word = "ovary";
                break;
            case "peloponnesian":
                $this->Word = "peloponnesus";
                break;
            case "arachnidia":
                $this->Word = "arachnida";
                break;
            case "branchy":
                $this->Word = "branch";
                break;
            case "chechnya":
                $this->Word = "chechen";
                break;
            case "therapsida":
                $this->Word = "therapsid";
                break;
            case "haemophile":
                $this->Word = "hemophile";
                break;
            case "holothuridae":
                $this->Word = "holothuroidea";
                break;
            case "holothuroidea":
                $this->Word = "holothuroidea";
                break;
            case "bahrein":
                $this->Word = "bahrain";
                break;
            case "gujerat":
                $this->Word = "gujarat";
                break;
            case "hadj":
                $this->Word = "hajj";
                break;
            case "haj":
                $this->Word = "hajj";
                break;
            case "hindi":
                $this->Word = "india";
                break;
            case "hindustan":
                $this->Word = "hindu";
                break;
            case "irak":
                $this->Word = "iraq";
                break;
            case "katar":
                $this->Word = "qatar";
                break;
            case "malti":
                $this->Word = "malta";
                break;
            case "turkey":
                $this->Word = "turk";
                break;
            case "analysis":
                $this->Word = "analyze";
                break;
            case "analyse":
                $this->Word = "analyze";
                break;
            case "clubbable":
                $this->Word = "club";
                break;
            case "curable":
                $this->Word = "cure";
                break;
            case "datable":
                $this->Word = "date";
                break;
            case "favour":
                $this->Word = "favor";
                break;
            case "finable":
                $this->Word = "fine";
                break;
            case "hydrolysis":
                $this->Word = "hydrolyze";
                break;
            case "hydrolyse":
                $this->Word = "hydrolyze";
                break;
            case "livable":
                $this->Word = "live";
                break;
            case "manoeuvre":
                $this->Word = "maneuver";
                break;
            case "miserable":
                $this->Word = "misery";
                break;
            case "notable":
                $this->Word = "note";
                break;
            case "rateable":
                $this->Word = "rate";
                break;
            case "ratable":
                $this->Word = "rate";
                break;
            case "realizable":
                $this->Word = "realize";
                break;
            case "satiable":
                $this->Word = "sate";
                break;
            case "sell":
                $this->Word = "sale";
                break;
            case "tamable":
                $this->Word = "tame";
                break;
            case "violable":
                $this->Word = "violate";
                break;
            case "bloody":
                $this->Word = "blood";
                break;
            case "cagey":
                $this->Word = "cagy";
                break;
            case "chirpy":
                $this->Word = "chirp";
                break;
            case "cosy":
                $this->Word = "cozy";
                break;
            case "zestily":
                $this->Word = "zest";
                break;
            case "drear":
                $this->Word = "dreary";
                break;
            case "gloomy":
                $this->Word = "gloom";
                break;
            case "grouchy":
                $this->Word = "grouch";
                break;
            case "grumpy":
                $this->Word = "grump";
                break;
            case "guilty":
                $this->Word = "guilt";
                break;
            case "hazy":
                $this->Word = "haze";
                break;
            case "homy":
                $this->Word = "home";
                break;
            case "noisy":
                $this->Word = "noise";
                break;
            case "roomy":
                $this->Word = "room";
                break;
            case "speedy":
                $this->Word = "speed";
                break;
            case "talky":
                $this->Word = "talk";
                break;
            case "wheezy":
                $this->Word = "wheeze";
                break;
            case "windy":
                $this->Word = "wind";
                break;
            case "wordy":
                $this->Word = "word";
                break;
            case "dying":
                $this->Word = "die";
                break;
            case "tying":
                $this->Word = "tie";
                break;
            case "lying":
                $this->Word = "lie";
                break;
            case "subtly":
                $this->Word = "subtle";
                break;
            case "truly":
                $this->Word = "true";
                break;
            case "realisable":
                $this->Word = "realize";
                break;
            case "bony":
                $this->Word = "bone";
                break;
            case "bristliness":
                $this->Word = "bristly";
                break;
            case "buggy":
                $this->Word = "bug";
                break;
            case "bumpy":
                $this->Word = "bump";
                break;
            case "chariness":
                $this->Word = "chary";
                break;
            case "chilliness":
                $this->Word = "chilly";
                break;
            case "chirpiness":
                $this->Word = "chirpy";
                break;
            case "crumble":
                $this->Word = "crumb";
                break;
            case "curly":
                $this->Word = "curl";
                break;
            case "dumpy":
                $this->Word = "dump";
                break;
            case "dusky":
                $this->Word = "dusk";
                break;
            case "dusty":
                $this->Word = "dust";
                break;
            case "eeriness":
                $this->Word = "eerie";
                break;
            case "flaky":
                $this->Word = "flake";
                break;
            case "gaudiness":
                $this->Word = "gaudy";
                break;
            case "hoariness":
                $this->Word = "hoary";
                break;
            case "scaliness":
                $this->Word = "scaly";
                break;
            case "sunniness":
                $this->Word = "sunny";
                break;
            case "ugliness":
                $this->Word = "ugly";
                break;
            case "accessary":
                $this->Word = "accessory";
                break;
            case "clarion":
                $this->Word = "clear";
                break;
            case "clarify":
                $this->Word = "clear";
                break;
            case "clarity":
                $this->Word = "clear";
                break;
            case "braggy":
                $this->Word = "brag";
                break;
            case "braky":
                $this->Word = "bracken";
                break;
            case "cagey":
                $this->Word = "cagy";
                break;
            case "couthie":
                $this->Word = "couthy";
                break;
            case "demagogue":
                $this->Word = "demagog";
                break;
            case "dopey":
                $this->Word = "dopy";
                break;
            case "flukey":
                $this->Word = "fluky";
                break;
            case "flunkey":
                $this->Word = "flunky";
                break;
            case "goonie":
                $this->Word = "goony";
                break;
            case "gooney":
                $this->Word = "goony";
                break;
            case "goosey":
                $this->Word = "goosy";
                break;
            case "grimy":
                $this->Word = "grime";
                break;
            case "honkey":
                $this->Word = "honky";
                break;
            case "honkie":
                $this->Word = "honky";
                break;
            case "kiddy":
                $this->Word = "kid";
                break;
            case "kiddie":
                $this->Word = "kid";
                break;
            case "mangey":
                $this->Word = "mangy";
                break;
            case "middie":
                $this->Word = "middy";
                break;
            case "mazey":
                $this->Word = "mazy";
                break;
            case "mould":
                $this->Word = "mould";
                break;
            case "nookie":
                $this->Word = "nooky";
                break;
            case "paeony":
                $this->Word = "peony";
                break;
            case "phoney":
                $this->Word = "phony";
                break;
            case "plumy":
                $this->Word = "plume";
                break;
            case "pokey":
                $this->Word = "poky";
                break;
            case "rimy":
                $this->Word = "rime";
                break;
            case "shady":
                $this->Word = "shade";
                break;
            case "shinie":
                $this->Word = "shiny";
                break;
            case "slimy":
                $this->Word = "slime";
                break;
            case "spiky":
                $this->Word = "spike";
                break;
            case "spiny":
                $this->Word = "spine";
                break;
            case "stagy":
                $this->Word = "stage";
                break;
            case "stripy":
                $this->Word = "stripe";
                break;
            case "teeny":
                $this->Word = "tiny"; 
                break;
            case "teeth":
                $this->Word = "tooth";
                break;
            case "truth":
                $this->Word = "true";
                break;
            case "webby":
                $this->Word = "web";
                break;
            case "whiny":
                $this->Word = "whine";
                break;
            case "savour":
                $this->Word = "savor";
                break;
            case "balmily":
                $this->Word = "balmy";
                break;
            case "ancestral":
                $this->Word = "ancestor";
                break;
            case "ancestress":
                $this->Word = "ancestor";
                break;
            case "axial":
                $this->Word = "axis";
                break;
            case "antecedence":
                $this->Word = "antecedency";
                break;
            case "candidacy":
                $this->Word = "candidate";
                break;
            case "covalence":
                $this->Word = "covalency";
                break;
            case "diplomacy":
                $this->Word = "diplomacy";
                break;
            case "intimacy":
                $this->Word = "intimate";
                break;
            case "malignancy":
                $this->Word = "malignant";
                break;
            case "pharmaceutical":
                $this->Word = "pharmacy";
                break;
            case "precipitancy":
                $this->Word = "precipitant";
                break;
            case "ultimacy":
                $this->Word = "ultimate";
                break;
            case "brevity":
                $this->Word = "brief";
                break;
            case "comity":
                $this->Word = "comical";
                break;
            case "contrasty":
                $this->Word = "contrast";
                break;
            case "corporeality":
                $this->Word = "corporeal";
                break;
            case "corporality":
                $this->Word = "corporeal";
                break;
            case "crusty":
                $this->Word = "crust";
                break;
            case "hearty":
                $this->Word = "heart";
                break;
            case "minty":
                $this->Word = "mint";
                break;
            case "musty":
                $this->Word = "must";
                break;
            case "pasty":
                $this->Word = "paste";
                break;
            case "peaty":
                $this->Word = "peat";
                break;
            case "porous":
                $this->Word = "pore";
                break;
            case "porose":
                $this->Word = "pore";
                break;
            case "propretie":
                $this->Word = "property";
                break;
            case "runty":
                $this->Word = "runt";
                break;
            case "rusty":
                $this->Word = "rust";
                break;
            case "scanty":
                $this->Word = "scant";
                break;
            case "suety":
                $this->Word = "suet";
                break;
            case "tranquillity":
                $this->Word = "tranquility";
                break;
            case "viscosity":
                $this->Word = "viscous";
                break;
            case "warty":
                $this->Word = "wart";
                break;
            case "electrify":
                $this->Word = "electric";
                break;
            case "beefy":
                $this->Word = "beef";
                break;
            case "chaffy":
                $this->Word = "chaff";
                break;
            case "fluffy":
                $this->Word = "fluff";
                break;
            case "goofy":
                $this->Word = "goof";
                break;
            case "huffy":
                $this->Word = "huff";
                break;
            case "leafy":
                $this->Word = "leaf";
                break;
            case "puffy":
                $this->Word = "puff";
                break;
            case "reefy":
                $this->Word = "reef";
                break;
            case "roofy":
                $this->Word = "roof";
                break;
            case "scruffy":
                $this->Word = "scruff";
                break;
            case "scurfy":
                $this->Word = "scurf";
                break;
            case "shelfy":
                $this->Word = "shelf";
                break;
            case "sniffy":
                $this->Word = "sniff";
                break;
            case "spiffy":
                $this->Word = "spiff";
                break;
            case "toffy":
                $this->Word = "toff";
                break;
            case "bouncy":
                $this->Word = "bounce";
                break;
            case "brilliancy":
                $this->Word = "brilliance";
                break;
            case "aberrancy":
                $this->Word = "aberrance";
                break;
            case "advertency":
                $this->Word = "advertence";
                break;
            case "ambivalency":
                $this->Word = "ambivalence";
                break;
            case "ascendancy":
                $this->Word = "ascendance";
                break;
            case "ascendency":
                $this->Word = "ascendence";
                break;
            case "astringency":
                $this->Word = "astringence";
                break;
            case "belligerency":
                $this->Word = "belligerence";
                break;
            case "cadency":
                $this->Word = "cadence";
                break;
            case "chiromancy":
                $this->Word = "chiromance";
                break;
            case "coalescency":
                $this->Word = "coalescence";
                break;
            case "coherency":
                $this->Word = "coherence";
                break;
            case "competency":
                $this->Word = "competence";
                break;
            case "complacency":
                $this->Word = "complacence";
                break;
            case "compliancy":
                $this->Word = "compliance";
                break;
            case "consistency":
                $this->Word = "consistence";
                break;
            case "contingency":
                $this->Word = "contingence";
                break;
            case "convergency":
                $this->Word = "convergence";
                break;
            case "conversancy":
                $this->Word = "conversance";
                break;
            case "corpulency":
                $this->Word = "corpulence";
                break;
            case "decadency":
                $this->Word = "decadence";
                break;
            case "dependency":
                $this->Word = "dependence";
                break;
            case "despondency":
                $this->Word = "despondence";
                break;
            case "detergency":
                $this->Word = "detergence";
                break;
            case "divergency":
                $this->Word = "divergence";
                break;
            case "emergency":
                $this->Word = "emergence";
                break;
            case "expediency":
                $this->Word = "expedience";
                break;
            case "extravagancy":
                $this->Word = "extravagance";
                break;
            case "flatulency":
                $this->Word = "flatulence";
                break;
            case "fragrancy":
                $this->Word = "fragrance";
                break;
            case "frequency":
                $this->Word = "frequence";
                break;
            case "hesitancy":
                $this->Word = "hesitance";
                break;
            case "immanency":
                $this->Word = "immanence";
                break;
            case "imminency":
                $this->Word = "imminence";
                break;
            case "impendency":
                $this->Word = "impendence";
                break;
            case "impenitency":
                $this->Word = "impenitence";
                break;
            case "impermanency":
                $this->Word = "impermanence";
                break;
            case "impotency":
                $this->Word = "impotence";
                break;
            case "incipiency":
                $this->Word = "incipience";
                break;
            case "incoherency":
                $this->Word = "incoherence";
                break;
            case "incompetency":
                $this->Word = "incompetence";
                break;
            case "incontinency":
                $this->Word = "incontinence";
                break;
            case "independency":
                $this->Word = "independence";
                break;
            case "inexpediency":
                $this->Word = "inexpedience";
                break;
            case "inherency":
                $this->Word = "inherence";
                break;
            case "innocency":
                $this->Word = "innocent";
                break;
            case "innocence":
                $this->Word = "innocent";
                break;
            case "insistency":
                $this->Word = "insistence";
                break;
            case "instancy":
                $this->Word = "instance";
                break;
            case "insurgency":
                $this->Word = "insurgence";
                break;
            case "interdependency":
                $this->Word = "interdependence";
                break;
            case "intermittency":
                $this->Word = "intermittence";
                break;
            case "intimacy":
                $this->Word = "intimace";
                break;
            case "intransigency":
                $this->Word = "intransigence";
                break;
            case "intumescency":
                $this->Word = "intumescence";
                break;
            case "irrelevancy":
                $this->Word = "irrelevance";
                break;
            case "jubilancy":
                $this->Word = "jubilance";
                break;
            case "juicy":
                $this->Word = "juice";
                break;
            case "lacy":
                $this->Word = "lace";
                break;
            case "leniency":
                $this->Word = "lenience";
                break;
            case "malevolency":
                $this->Word = "malevolence";
                break;
            case "malignancy":
                $this->Word = "malignance";
                break;
            case "militancy":
                $this->Word = "militance";
                break;
            case "multivalency":
                $this->Word = "multivalence";
                break;
            case "nascency":
                $this->Word = "nascence";
                break;
            case "oscitancy":
                $this->Word = "oscitance";
                break;
            case "permanency":
                $this->Word = "permanence";
                break;
            case "persistency":
                $this->Word = "persistence";
                break;
            case "pertinency":
                $this->Word = "pertinence";
                break;
            case "piquancy":
                $this->Word = "piquance";
                break;
            case "poignancy":
                $this->Word = "poignance";
                break;
            case "polyvalency":
                $this->Word = "polyvalence";
                break;
            case "potency":
                $this->Word = "potence";
                break;
            case "precedency":
                $this->Word = "precedence";
                break;
            case "pricy":
                $this->Word = "price";
                break;
            case "purulency":
                $this->Word = "purulence";
                break;
            case "quiescency":
                $this->Word = "quiescence";
                break;
            case "racy":
                $this->Word = "race";
                break;
            case "recalcitrancy":
                $this->Word = "recalcitrance";
                break;
            case "redundancy":
                $this->Word = "redundance";
                break;
            case "refulgency":
                $this->Word = "refulgence";
                break;
            case "relevancy":
                $this->Word = "relevance";
                break;
            case "residency":
                $this->Word = "residence";
                break;
            case "resiliency":
                $this->Word = "resilience";
                break;
            case "resplendency":
                $this->Word = "resplendence";
                break;
            case "saliency":
                $this->Word = "salience";
                break;
            case "saucy":
                $this->Word = "sauce";
                break;
            case "stridency":
                $this->Word = "stridence";
                break;
            case "succulency":
                $this->Word = "succulence";
                break;
            case "totipotency":
                $this->Word = "totipotence";
                break;
            case "transcendency":
                $this->Word = "transcendence";
                break;
            case "transiency":
                $this->Word = "transience";
                break;
            case "translucency":
                $this->Word = "translucence";
                break;
            case "transparency":
                $this->Word = "transparence";
                break;
            case "truculency":
                $this->Word = "truculency";
                break;
            case "turbulency":
                $this->Word = "turbulence";
                break;
            case "ultimacy":
                $this->Word = "ultimace";
                break;
            case "virulency":
                $this->Word = "virulence";
                break;
            case "advise":
                $this->Word = "advice";
                break; 
            case "alary":
                $this->Word = "alar";
                break;
            case "ampullary":
                $this->Word = "ampulla";
                break;
            case "ampullar":
                $this->Word = "ampulla";
                break;
            case "ably":
                $this->Word = "able";
                break;
            case "abominably":
                $this->Word = "abominable";
                break;
            case "affably":
                $this->Word = "affable";
                break;
            case "amiably":
                $this->Word = "amiable";
                break;
            case "amicably":
                $this->Word = "amicable";
                break;
            case "amply":
                $this->Word = "ample";
                break;
            case "appreciably":
                $this->Word = "appreciable";
                break;
            case "assembly":
                $this->Word = "assemble";
                break;
            case "balefully":
                $this->Word = "baleful";
                break;
            case "brambly":
                $this->Word = "bramble";
                break;
            case "bristly":
                $this->Word = "bristle";
                break;
            case "bubbly":
                $this->Word = "bubble";
                break;
            case "cackly":
                $this->Word = "cackle";
                break;
            case "capably":
                $this->Word = "capable";
                break;
            case "chilly":
                $this->Word = "chill";
                break;
            case "compatibly":
                $this->Word = "compatible";
                break;
            case "contemptibly":
                $this->Word = "contemptible";
                break;
            case "credibly":
                $this->Word = "credible";
                break;
            case "crinkly":
                $this->Word = "crinkle";
                break;
            case "cuddly":
                $this->Word = "cuddle";
                break;
            case "culpably":
                $this->Word = "culpable";
                break;
            case "damnably":
                $this->Word = "damnable";
                break;
            case "demonstrably":
                $this->Word = "demonstrable";
                break;
            case "despicably":
                $this->Word = "despicable";
                break;
            case "disassembly":
                $this->Word = "disassemble";
                break;
            case "doubly":
                $this->Word = "double";
                break;
            case "acetin":
                $this->Word = "acetic";
                break;
            case "acetate":
                $this->Word = "acetic";
                break;
            case "codify":
                $this->Word = "code";
                break;
            case "daily":
                $this->Word = "day";
                break;
            case "humify":
                $this->Word = "humus";
                break;
            case "jellify":
                $this->Word = "jelly";
                break;
            case "metre":
                $this->Word = "meter";
                break;
            case "minify":
                $this->Word = "minimum";
                break;
            case "mummify":
                $this->Word = "mummy";
                break;
            case "mystery":
                $this->Word = "mystic";
                break;
            case "nitrify":
                $this->Word = "nitrate";
                break;
            case "quantic":
                $this->Word = "quantity";
                break;
            case "syllabic":
                $this->Word = "syllable";
                break;
            case "testimony":
                $this->Word = "testify";
                break;
            case "uglify":
                $this->Word = "ugly";
                break;
            case "horology":
                $this->Word = "horologe";
                break;
            case "garbology":
                $this->Word = "garbage";
                break;
            case "mammalogy":
                $this->Word = "mammal";
                break;
            case "angelology":
                $this->Word = "angel";
                break;
            case "christology":
                $this->Word = "christ";
                break;
            case "dialectology":
                $this->Word = "dialect";
                break;
            case "fossilology":
                $this->Word = "fossil";
                break;
            case "methodology":
                $this->Word = "method";
                break;
            case "musicology":
                $this->Word = "music";
                break;
            case "mythology":
                $this->Word = "myth";
                break;
            case "oceanology":
                $this->Word = "ocean";
                break;
            case "reflexology":
                $this->Word = "reflex";
                break;
            case "defence":
                $this->Word = "defense";
                break;
            case "absence":
                $this->Word = "absent";
                break;
            case "astringence":
                $this->Word = "astringent";
                break;
            case "brisance":
                $this->Word = "brisant";
                break;
            case "cadence":
                $this->Word = "cadent";
                break;
            case "conversance":
                $this->Word = "conversant";
                break;
            case "decadence":
                $this->Word = "decadent";
                break;
            case "deference":
                $this->Word = "deferent";
                break;
            case "defiance":
                $this->Word = "defiant";
                break;
            case "dehiscence":
                $this->Word = "dehiscen";
                break;
            case "detergence":
                $this->Word = "detergent";
                break;
            case "deviance":
                $this->Word = "deviate";
                break;
            case "deviant":
                $this->Word = "deviate";
                break;
            case "dominance":
                $this->Word = "dominant";
                break;
            case "importance":
                $this->Word = "important";
                break;
            case "insolence":
                $this->Word = "insolent";
                break;
            case "interdependence":
                $this->Word = "interdependent";
                break;
            case "negligence":
                $this->Word = "negligent";
                break;
            case "overindulgence":
                $this->Word = "overindulgent";
                break;
            case "recalcitrance":
                $this->Word = "recalcitrant";
                break;
            case "recrudescence":
                $this->Word = "recrudescent";
                break;
            case "repentance":
                $this->Word = "repentant";
                break;
            case "residence":
                $this->Word = "resident";
                break;
            case "resplendence":
                $this->Word = "resplendent";
                break;
            case "superintendence":
                $this->Word = "superintendent";
                break;
            case "tumescence":
                $this->Word = "tumescent";
                break;
            case "valence":
                $this->Word = "valent";
                break;
            case "vigilance":
                $this->Word = "vigilant";
                break;
            case "violence":
                $this->Word = "violent"; 
                break;
            case "anastomosis":
                $this->Word = "anastomose";
                break;
            case "ankylosis":
                $this->Word = "ankylose";
                break;
            case "apsis":
                $this->Word = "apse";
                break;
            case "basis":
                $this->Word = "base";
                break;
            case "catalysis":
                $this->Word = "catalyze";
                break;
            case "catalyse":
                $this->Word = "catalyze";
                break;
            case "diagnosis":
                $this->Word = "diagnose"; 
                break;
            case "dialysis":
                $this->Word = "dialyze";
                break;
            case "dialyse":
                $this->Word = "dialyze"; 
                break;
            case "necrosis":
                $this->Word = "necrose"; 
                break;
            case "paralysis":
                $this->Word = "paralyze";
                break;
            case "paralyse":
                $this->Word = "paralyze";
                break;
            case "paraphrasis":
                $this->Word = "paraphrase";
                break;
            case "psychoanalysis":
                $this->Word = "psychoanalyze";
                break;
            case "psychoanalyse":
                $this->Word = "psychoanalyze";
                break;
            case "psychoanalyze":
                $this->Word = "psychoanalytic";
                break;
            case "synapsis":
                $this->Word = "synapse";
                break;
            case "thrombosis":
                $this->Word = "thrombose";
                break;
            case "varicosis":
                $this->Word = "varicose";
                break;
            case "cryptanalyst":
                $this->Word = "cryptanalysis";
                break;
            case "dosage":
                $this->Word = "dose";
                break;
            case "harbour":
                $this->Word = "harbor";
                break;
            case "linage":
                $this->Word = "line";
                break;
            case "marriage":
                $this->Word = "marry";
                break;
            case "milage":
                $this->Word = "mile";
                break;
            case "pipage":
                $this->Word = "pipe";
                break;
            case "plumage":
                $this->Word = "plume";
                break;
            case "telfer":
                $this->Word = "telpher";
                break;
            case "villainage":
                $this->Word = "villeinage";
                break;
            case "british":
                $this->Word = "britain";
                break;
            case "brutish":
                $this->Word = "brute";
                break;
            case "cornish":
                $this->Word = "cornwall";
                break;
            case "donnish":
                $this->Word = "don";
                break;
            case "hoggish":
                $this->Word = "hog";
                break;
            case "jutish":
                $this->Word = "jute";
                break;
            case "latish":
                $this->Word = "late";
                break;
            case "mannish":
                $this->Word = "man";
                break;
            case "modish":
                $this->Word = "mode";
                break;
            case "orangish":
                $this->Word = "orange";
                break;
            case "palish":
                $this->Word = "pale";
                break;
            case "popish":
                $this->Word = "pope"; 
                break;
            case "romish":
                $this->Word = "rome";
                break;
            case "scottish":
                $this->Word = "scotland";
                break;
            case "slavish":
                $this->Word = "slave";
                break;
            case "spanish":
                $this->Word = "spain";
                break;
            case "thieve":
                $this->Word = "thief";
                break;
            case "theft":
                $this->Word = "thief";
                break;
            case "whitish":
                $this->Word = "white";
                break;
            case "argument":
                $this->Word = "argue";
                break;
            case "acknowledgment":
                $this->Word = "acknowledgement";
                break;
            case "accoutrement":
                $this->Word = "accouterment";
                break;
            case "accoutre":
                $this->Word = "accouter";
                break;
            case "aggrandisement":
                $this->Word = "aggrandizement";
                break;
            case "fulfil":
                $this->Word = "fulfill";
                break;
            case "instalment":
                $this->Word = "installment";
                break;
            case "judgement":
                $this->Word = "judgment";
                break;
            case "prejudgement":
                $this->Word = "prejudgment";
                break;
            case "prejudgment":
                $this->Word = "prejudge";
                break;
            case "earliest":
                $this->Word = "early";
                break;
            case "eldest":
                $this->Word = "oldest";
                break;
            case "oldest":
                $this->Word = "old";
                break;
            case "latest":
                $this->Word = "late";
                break;
            case "preemie":
                $this->Word = "premature";
                break;
            case "bomblet":
                $this->Word = "bomb";
                break;
            case "bookie":
                $this->Word = "bookmaker";
                break;
            case "scottie":
                $this->Word = "scottish";
                break;
            case "scrapie":
                $this->Word = "scrape";
                break;
            case "alpinist":
                $this->Word = "alpinism";
                break;
            case "alienist":
                $this->Word = "alienism";
                break;
            case "amor":
                $this->Word = "amour";
                break;
            case "analogist":
                $this->Word = "analogy";
                break;
            case "animist":
                $this->Word = "animism";
                break;
            case "arty":
                $this->Word = "art";
                break;
            case "bassist":
                $this->Word = "bass";
                break;
            case "encyclopaedism":
                $this->Word = "encyclopaedia";
                break;
            case "encyclopaedic":
                $this->Word = "encyclopaedia";
                break;
            case "fantasist":
                $this->Word = "fantasize";
                break;
            case "fantasia":
                $this->Word = "fantasize";
                break;
            case "gambist":
                $this->Word = "gamba";
                break;
            case "harpist":
                $this->Word = "harp";
                break;
            case "lepidopteran":
                $this->Word = "lepidoptera";
                break;
            case "lepidoptera":
                $this->Word = "lepidoptery";
                break;
            case "orthodontic":
                $this->Word = "orthodontia";
                break;
            case "periodontal":
                $this->Word = "periodontia";
                break;
            case "periodontic":
                $this->Word = "periodontia";
                break;
            case "stockist":
                $this->Word = "stock";
                break;
            case "melanism":
                $this->Word = "melanin";
                break;
            case "buddhism":
                $this->Word = "buddha";
                break;
            case "colonist":
                $this->Word = "colony";
                break;
            case "colonic":
                $this->Word = "colon";
                break;
            case "colonial":
                $this->Word = "colony";
                break;
            case "colonialism":
                $this->Word = "colony";
                break;
            case "colonialist":
                $this->Word = "colony"; 
                break;
            case "colonoscopy":
                $this->Word = "colonoscope";
                break;
            case "colonoscope":
                $this->Word = "colon";
                break;
            case "diplomatist":
                $this->Word = "diplomat";
                break;
            case "finalist":
                $this->Word = "final";
                break;
            case "romanist":
                $this->Word = "roman";
                break;
            case "tsaritsa":
                $this->Word = "tsarina";
                break;
            case "tsar":
                $this->Word = "czar";
                break;
            case "czaritza":
                $this->Word = "czarina";
                break;
            case "czarina":
                $this->Word = "tsarina";
                break;
            case "tzarina":
                $this->Word = "tzar";
                break;
            case "tzar":
                $this->Word = "czar";
                break;
            case "tsarina":
                $this->Word = "czar";
                break;
            case "viola":
                $this->Word = "violin";
                break;
            case "violin":
                $this->Word = "viol";
                break;
            case "ageism":
                $this->Word = "age";
                break;
            case "alpinism":
                $this->Word = "alpine";
                break;
            case "anamorphosis":
                $this->Word = "anamorphism";
                break;
            case "anthropomorphous":
                $this->Word = "anthropomorphic";
                break;
            case "brahmin":
                $this->Word = "brahman";
                break;
            case "cabalism":
                $this->Word = "kabbalah";
                break;
            case "centric":
                $this->Word = "centre";
                break;
            case "dogmatic":
                $this->Word = "dogma";
                break;
            case "encyclopedic":
                $this->Word = "encyclopedia";
                break;
            case "encyclopaedia": 
                $this->Word = "encyclopedia";
                break;
            case "fatism":
                $this->Word = "fattism";
                break;
            case "favorite":
                $this->Word = "favor";
                break;
            case "favourite":
                $this->Word = "favour";
                break;
            case "favour":
                $this->Word = "favor";
                break;
            case "germanism":
                $this->Word = "germany";
                break;
            case "hassid":
                $this->Word = "hasid";
                break;
            case "hebraic":
                $this->Word = "hebrew";
                break;
            case "hemimetaboly":
                $this->Word = "hemimetabola";
                break;
            case "hemimetabolous":
                $this->Word = "hemimetabola";
                break;
            case "hemimetabolic":
                $this->Word = "hemimetabola";
                break;
            case "hermaphroditic":
                $this->Word = "hermaphrodite";
                break;
            case "heterometabolous":
                $this->Word = "heterometabolic";
                break;
            case "heterometaboly":
                $this->Word = "heterometabolic";
                break;
            case "hindoo":
                $this->Word = "hindu";
                break;
            case "holometabolic":
                $this->Word = "holometabola";
                break;
            case "holometabolous":
                $this->Word = "holometabola";
                break;
            case "holometaboly":
                $this->Word = "holometabola"; 
                break;
            case "humane":
                $this->Word = "human";
                break;
            case "hypnotize":
                $this->Word = "hypnosis";
                break;
            case "hypnotic":
                $this->Word = "hypnosis";
                break;
            case "internationalism":
                $this->Word = "international";
                break;
            case "isomorphous":
                $this->Word = "isomorphy";
                break;
            case "isomorphic":
                $this->Word = "isomorphy";
                break;
            case "catabolize":
                $this->Word = "catabolism";
                break;
            case "katabolic":
                $this->Word = "catabolic";
                break;
            case "sise":
                $this->Word = "six";
                break;
            case "mandaean":
                $this->Word = "mandean";
                break;
            case "manichaeism":
                $this->Word = "manichaeanism";
                break;
            case "melanize":
                $this->Word = "melanin";
                break;
            case "metamorphous":
                $this->Word = "metamorphism";
                break;
            case "metamorphic":
                $this->Word = "metamorphosis";
                break;
            case "modernism":
                $this->Word = "modern";
                break;
            case "mohammedan":
                $this->Word = "muhammad";
                break;
            case "muhammedan":
                $this->Word = "muhammad";
                break;
            case "muhammadan":
                $this->Word = "muhammad";
                break;
            case "mohammad":
                $this->Word = "muhammad";
                break;
            case "muhammed":
                $this->Word = "muhammad";
                break;
            case "mongolianism":
                $this->Word = "mongolism";
                break;
            case "moralism":
                $this->Word = "moral";
                break;
            case "nazism":
                $this->Word = "nazi";
                break;
            case "nazify":
                $this->Word = "nazi";
                break;
            case "naturism":
                $this->Word = "naturist";
                break;
            case "naturist":
                $this->Word = "nudism";
                break;
            case "parsi":
                $this->Word = "parsee";
                break;
            case "polymorphous":
                $this->Word = "polymorphic";
                break;
            case "rationalism":
                $this->Word = "rational";
                break;
            case "siva":
                $this->Word = "shiva";
                break;
            case "stigmatize":
                $this->Word = "stigmatist";
                break;
            case "stigmatization":
                $this->Word = "stigmatist";
                break;
            case "stigmatic":
                $this->Word = "stigmata";
                break;
            case "suffragism":
                $this->Word = "suffragette";
                break;
            case "vedic":
                $this->Word = "veda";
                break;
            case "abasic":
                $this->Word = "abasia";
                break;
            case "achondroplasty":
                $this->Word = "achondroplasia";
                break;
            case "acidophilus":
                $this->Word = "acidophil";
                break;
            case "acromegaly":
                $this->Word = "acromegalia";
                break;
            case "allelomorph":
                $this->Word = "allele";
                break;
            case "amphitheatre":
                $this->Word = "amphitheater";
                break;
            case "anapaest":
                $this->Word = "anapest";
                break;
            case "anaphor":
                $this->Word = "anaphora";
                break;
            case "anaplastic":
                $this->Word = "anaplasia";
                break;
            case "archeology":
                $this->Word = "archaeology";
                break;
            case "ataxia":
                $this->Word = "ataxy";
                break;
            case "autotypy":
                $this->Word = "autotype";
                break;
            case "reveller":
                $this->Word = "reveler";
                break;
            case "bacchanalia":
                $this->Word = "bacchanal";
                break;
            case "bacchanalian":
                $this->Word = "bacchanal";
                break;
            case "bacteriostasis":
                $this->Word = "bacteriostat";
                break;
            case "basic":
                $this->Word = "base";
                break;
            case "batholith":
                $this->Word = "batholitic";
                break;
            case "behaviour":
                $this->Word = "behavior";
                break;
            case "blastocoelic":
                $this->Word = "blastocoele";
                break;
            case "cathectic":
                $this->Word = "cathexis";
                break;
            case "centre":
                $this->Word = "center";
                break;
            case "chiasma":
                $this->Word = "chiasm";
                break;
            case "conic":
                $this->Word = "conie";
                break;
            case "cosmogeny":
                $this->Word = "cosmogony";
                break;
            case "cubic":
                $this->Word = "cube";
                break;
            case "demagogue":
                $this->Word = "demagog";
                break;
            case "clarinettist":
                $this->Word = "clarinet";
                break;
            case "diplomatist":
                $this->Word = "diplomat";
                break;
            case "dramatist":
                $this->Word = "drama";
                break;
            case "egotist":
                $this->Word = "ego";
                break;
            case "egotism":
                $this->Word = "ego";
                break;
            case "embryonic":
                $this->Word = "embryo";
                break;
            case "euphoria":
                $this->Word = "euphory";
                break;
            case "exegete":
                $this->Word = "exegesis";
                break;
            case "genetic":
                $this->Word = "gene";
                break;
            case "genic":
                $this->Word = "gene";
                break;
            case "geodetic":
                $this->Word = "geodesy";
                break;
            case "grammatic":
                $this->Word = "grammar";
                break;
            case "hemophilia":
                $this->Word = "hemophile";
                break;
            case "haemorrhage":
                $this->Word = "hemorrhage";
                break;
            case "homoiotherm":
                $this->Word = "homeotherm";
                break;
            case "homotherm":
                $this->Word = "homeotherm";
                break;
            case "horrify":
                $this->Word = "horror";
                break;
            case "hydrocephalus":
                $this->Word = "hydrocephaly";
                break;
            case "hyperbolic":
                $this->Word = "hyperbola";
                break;
            case "hyperopia":
                $this->Word = "hyperope";
                break;
            case "ideogram":
                $this->Word = "ideograph";
                break;
            case "koran":
                $this->Word = "quran";
                break;
            case "limbic":
                $this->Word = "limbus";
                break;
            case "hydrocephalus":
                $this->Word = "macrocephaly";
                break;
            case "mesmeric":
                $this->Word = "mesmerize";
                break;
            case "metacentre":
                $this->Word = "metacenter";
                break;
            case "miasma":
                $this->Word = "miasm";
                break;
            case "micrometeorite":
                $this->Word = "micrometeor";
                break;
            case "mimetic":
                $this->Word = "mimesis";
                break;
            case "mongolia":
                $this->Word = "mongol";
                break;
            case "mutagen":
                $this->Word = "mutation";
                break;
            case "myopia":
                $this->Word = "myope";
                break;
            case "nephritis":
                $this->Word = "nephritic";
                break;
            case "nephritic":
                $this->Word = "nephron";
                break;
            case "neuralgia":
                $this->Word = "neuralgy";
                break;
            case "paederast":
                $this->Word = "pederast";
                break;
            case "presbyopia":
                $this->Word = "presbyope";
                break;
            case "procaryote":
                $this->Word = "prokaryote";
                break;
            case "rhombus":
                $this->Word = "rhomb";
                break;
            case "runic":
                $this->Word = "rune";
                break;
            case "sabbatic":
                $this->Word = "sabbath";
                break;
            case "scalic":
                $this->Word = "scale";
                break;
            case "sophists":
                $this->Word = "sophistic";
                break;
            case "technophilia":
                $this->Word = "technophile";
                break;
            case "technophobia":
                $this->Word = "technophobe";
                break;
            case "viscometry":
                $this->Word = "viscosity";
                break;
            case "viscosimetry":
                $this->Word = "viscosity";
                break;
            case "curate":
                $this->Word = "cure";
                break;
            case "emotive":
                $this->Word = "emotion";
                break;
            case "erosive":
                $this->Word = "erode";
                break;
            case "expansive":
                $this->Word = "expand";
                break;
            case "expressive":
                $this->Word = "expression";
                break;
            case "legislative":
                $this->Word = "legislation";
                break;
            case "oppositive":
                $this->Word = "opposition";
                break;
            case "overactive":
                $this->Word = "active";
                break;
            case "overprotective":
                $this->Word = "protective";
                break;
            case "percept":
                $this->Word = "perceive";
                break;
            case "percussive":
                $this->Word = "percussion";
                break;
            case "summate":
                $this->Word = "sum";
                break;
            case "suppuration":
                $this->Word = "suppurate";
                break;
            case "tractive":
                $this->Word = "traction";
                break;
            case "bromate":
                $this->Word = "bromine";
                break;
            case "foliate":
                $this->Word = "foil";
                break;
            case "chrome":
                $this->Word = "chromium";
                break;
            case "gradate":
                $this->Word = "grade";
                break;
            case "granular":
                $this->Word = "granule";
                break;
            case "iodine":
                $this->Word = "iodin";
                break;
            case "lobate":
                $this->Word = "lobe";
                break;
            case "medicate":
                $this->Word = "medicine";
                break;
            case "notate":
                $this->Word = "note";
                break;
            case "plumate":
                $this->Word = "plume";
                break;
            case "reactivate":
                $this->Word = "activate";
                break;
            case "reiterate":
                $this->Word = "iterate";
                break;
            case "restate":
                $this->Word = "state";
                break;
            case "mayoress":
                $this->Word = "mayor";
                break;
            case "peeress":
                $this->Word = "peerage";
                break;
            case "proprietress":
                $this->Word = "proprietor";
                break;
            case "repress":
                $this->Word = "press";
                break;
            case "traitress":
                $this->Word = "traitor";
                break;
            case "wardress":
                $this->Word = "warder";
                break;
            case "appellate":
                $this->Word = "appeals";
                break;
            case "automation":
                $this->Word = "automatic";
                break;
            case "bombilate":
                $this->Word = "bombinate";
                break;
            case "canulate":
                $this->Word = "cannulate";
                break;
            case "coaction":
                $this->Word = "action";
                break;
            case "crenelation":
                $this->Word = "crenellation";
                break;
            case "fecalith":
                $this->Word = "fecal";
                break;
            case "fecal":
                $this->Word = "feces";
                break;
            case "definite":
                $this->Word = "define";
                break;
            case "effectuate":
                $this->Word = "effectuate";
                break;
            case "formation":
                $this->Word = "form";
                break;
            case "gemmation":
                $this->Word = "gemma";
                break;
            case "luminous":
                $this->Word = "illumine";
                break;
            case "magnification":
                $this->Word = "magnify";
                break;
            case "misconstruction":
                $this->Word = "misconstruct";
                break;
            case "orchestrate":
                $this->Word = "orchestra";
                break;
            case "ostentatiously":
                $this->Word = "ostentate";
                break;
            case "overexertion":
                $this->Word = "exertion";
                break;
            case "ovulation":
                $this->Word = "ovule";
                break;
            case "recondition":
                $this->Word = "condition";
                break;
            case "reelection":
                $this->Word = "election";
                break;
            case "reelect":
                $this->Word = "elect";
                break;
            case "rededicate":
                $this->Word = "dedicate";
                break;
            case "redeposit":
                $this->Word = "deposit";
                break;
            case "redistribute":
                $this->Word = "distribute";
                break;
            case "reevaluate":
                $this->Word = "evaluate";
                break;
            case "regenerate":
                $this->Word = "generate";
                break;
            case "reposition":
                $this->Word = "position";
                break;
            case "salivate":
                $this->Word = "saliva";
                break;
            case "septate":
                $this->Word = "septum";
                break;
            case "sibilant":
                $this->Word = "sibilate";
                break;
            case "tittivate":
                $this->Word = "titivate";
                break;
            case "variate":
                $this->Word = "vary";
                break;
            case "variegate":
                $this->Word = "vary";
                break;
            case "vesication":
                $this->Word = "vesiculation";
                break;
            case "conclusion":
                $this->Word = "conclude";
                break;
            case "possession":
                $this->Word = "possess";
                break;
            case "crucifix":
                $this->Word = "crucify";
                break;
            case "diversion":
                $this->Word = "divert";
                break;
            case "expansion":
                $this->Word = "expand";
                break;
            case "proceed":
                $this->Word = "process";
                break;
            case "assuring":
                $this->Word = "assure";
                break;
            case "baring":
                $this->Word = "bare";
                break;
            case "biting":
                $this->Word = "bite";
                break;
            case "bragging":
                $this->Word = "brag";
                break;
            case "caning":
                $this->Word = "cane";
                break;
            case "caring":
                $this->Word = "care";
                break;
            case "cloning":
                $this->Word = "clone";
                break;
            case "clothing":
                $this->Word = "clothe";
                break;
            case "coding":
                $this->Word = "code";
                break;
            case "coping":
                $this->Word = "cope";
                break;
            case "curing":
                $this->Word = "cure";
                break;
            case "dining":
                $this->Word = "dine";
                break;
            case "doting":
                $this->Word = "dote";
                break;
            case "easing":
                $this->Word = "ease";
                break;
            case "fading":
                $this->Word = "fade";
                break;
            case "firing":
                $this->Word = "fire";
                break;
            case "gaming":
                $this->Word = "game";
                break;
            case "gaping":
                $this->Word = "gape";
                break;
            case "grading":
                $this->Word = "grade";
                break;
            case "grazing":
                $this->Word = "graze";
                break;
            case "griping":
                $this->Word = "gripe";
                break;
            case "gruelling":
                $this->Word = "grueling";
                break;
            case "labour":
                $this->Word = "labor";
                break;
            case "lacing":
                $this->Word = "lace";
                break;
            case "lading":
                $this->Word = "lade";
                break;
            case "lapping":
                $this->Word = "lap";
                break;
            case "lining":
                $this->Word = "line";
                break;
            case "living":
                $this->Word = "live";
                break;
            case "luging":
                $this->Word = "luge";
                break;
            case "making":
                $this->Word = "make";
                break;
            case "mating":
                $this->Word = "mate";
                break;
            case "matting":
                $this->Word = "mat";
                break;
            case "mining":
                $this->Word = "mine";
                break;
            case "musing":
                $this->Word = "muse";
                break;
            case "netting":
                $this->Word = "net";
                break;
            case "pacing":
                $this->Word = "pace";
                break;
            case "paling":
                $this->Word = "pale";
                break;
            case "pining":
                $this->Word = "pine";
                break;
            case "piping":
                $this->Word = "pipe";
                break;
            case "pitting":
                $this->Word = "pit";
                break;
            case "priming":
                $this->Word = "prime";
                break;
            case "raging":
                $this->Word = "rage";
                break;
            case "rating":
                $this->Word = "rate";
                break;
            case "riding":
                $this->Word = "ride";
                break;
            case "riming":
                $this->Word = "rime";
                break;
            case "rousing":
                $this->Word = "rouse";
                break;
            case "sensing":
                $this->Word = "sense";
                break;
            case "setting":
                $this->Word = "set";
                break;
            case "shining":
                $this->Word = "shine";
                break;
            case "slating":
                $this->Word = "slate";
                break;
            case "sloping":
                $this->Word = "slope";
                break;
            case "sparing":
                $this->Word = "spare";
                break;
            case "staging":
                $this->Word = "stage";
                break;
            case "staring":
                $this->Word = "stare";
                break;
            case "starring":
                $this->Word = "star";
                break;
            case "striping":
                $this->Word = "stripe";
                break;
            case "swathing":
                $this->Word = "swathe";
                break;
            case "taping":
                $this->Word = "tape";
                break;
            case "trading":
                $this->Word = "trade";
                break;
            case "tubing":
                $this->Word = "tube";
                break;
            case "tuning":
                $this->Word = "tune";
                break;
            case "wading":
                $this->Word = "wade";
                break;
            case "waning":
                $this->Word = "wane";
                break;
            case "webbing":
                $this->Word = "web";
                break;
            case "whiting":
                $this->Word = "white";
                break;
            case "writing":
                $this->Word = "write";
                break;
            case "appal":
                $this->Word = "appall";
                break;
            case "assured":
                $this->Word = "assure";
                break;
            case "bared":
                $this->Word = "bare";
                break;
            case "bated":
                $this->Word = "bate";
                break;
            case "bistre":
                $this->Word = "bister";
                break;
            case "breathed":
                $this->Word = "breathe";
                break;
            case "burked":
                $this->Word = "burke";
                break;
            case "calycled":
                $this->Word = "calyculus";
                break;
            case "citify":
                $this->Word = "city";
                break;
            case "clothed":
                $this->Word = "clothe";
                break;
            case "dated":
                $this->Word = "date";
                break;
            case "dosed":
                $this->Word = "dose";
                break;
            case "eased":
                $this->Word = "ease";
                break;
            case "faded":
                $this->Word = "fade";
                break;
            case "fated":
                $this->Word = "fate";
                break;
            case "fried":
                $this->Word = "fry";
                break;
            case "graded":
                $this->Word = "grade";
                break;
            case "grazed":
                $this->Word = "graze";
                break;
            case "hated":
                $this->Word = "hate";
                break;
            case "hogged":
                $this->Word = "hog";
                break;
            case "laced":
                $this->Word = "lace";
                break;
            case "lined":
                $this->Word = "line";
                break;
            case "manned":
                $this->Word = "man";
                break;
            case "mined":
                $this->Word = "mine";
                break;
            case "moped":
                $this->Word = "mope";
                break;
            case "netted":
                $this->Word = "net";
                break;
            case "noted":
                $this->Word = "note";
                break;
            case "pasted":
                $this->Word = "paste";
                break;
            case "plumed":
                $this->Word = "plume";
                break;
            case "primed":
                $this->Word = "prime";
                break;
            case "raped":
                $this->Word = "rape";
                break;
            case "rimed":
                $this->Word = "rime";
                break;
            case "robed":
                $this->Word = "robe";
                break;
            case "scared":
                $this->Word = "scare";
                break;
            case "sensed":
                $this->Word = "sense";
                break;
            case "shaded":
                $this->Word = "shade";
                break;
            case "shamed":
                $this->Word = "shame";
                break;
            case "slimed":
                $this->Word = "slime";
                break;
            case "sloped":
                $this->Word = "slope";
                break;
            case "soled":
                $this->Word = "sole";
                break;
            case "spiked":
                $this->Word = "spike";
                break;
            case "staged":
                $this->Word = "stage";
                break;
            case "starred":
                $this->Word = "star";
                break;
            case "striped":
                $this->Word = "stripe";
                break;
            case "tamed":
                $this->Word = "tame";
                break;
            case "taped":
                $this->Word = "tape";
                break;
            case "tined":
                $this->Word = "tine";
                break;
            case "toned":
                $this->Word = "tone";
                break;
            case "toupeed":
                $this->Word = "toupee";
                break;
            case "tubed":
                $this->Word = "tube";
                break;
            case "united":
                $this->Word = "unite";
                break;
            case "vaned":
                $this->Word = "vane";
                break;
            case "vulcanised":
                $this->Word = "vulcanized";
                break;
            case "webbed":
                $this->Word = "web";
                break;
            case "arteriolar":
                $this->Word = "arteriole";
                break;
            case "astragalar":
                $this->Word = "astragalus";
                break;
            case "astragal":
                $this->Word = "astragalus";
                break;
            case "auricular":
                $this->Word = "auricula";
                break;
            case "campanular":
                $this->Word = "campana";
                break;
            case "caruncula":
                $this->Word = "caruncle";
                break;
            case "chadar":
                $this->Word = "chador";
                break;
            case "chaddar":
                $this->Word = "chador";
                break;
            case "damar":
                $this->Word = "dammar";
                break;
            case "laminate":
                $this->Word = "lamina";
                break;
            case "lobar":
                $this->Word = "lobe";
                break;
            case "tubule":
                $this->Word = "tube";
                break;
            case "valvula":
                $this->Word = "valve";
                break;
            case "elder":
                $this->Word = "old";
                break;
            case "authorise":
                $this->Word = "authorize";
                break;
            case "balladeer":
                $this->Word = "ballad";
                break;
            case "blender":
                $this->Word = "blend";
                break;
            case "caster":
                $this->Word = "cast";
                break;
            case "chanter":
                $this->Word = "chant";
                break;
            case "chiromancer":
                $this->Word = "chiromancy";
                break;
            case "conjury":
                $this->Word = "conjure";
                break;
            case "cooker":
                $this->Word = "cook";
                break;
            case "debaucher":
                $this->Word = "debauch";
                break;
            case "dialyse":
                $this->Word = "dialyze";
                break;
            case "dialysis":
                $this->Word = "dialyze";
                break;
            case "doer":
                $this->Word = "do";
                break;
            case "fryer":
                $this->Word = "fry";
                break;
            case "garrotte":
                $this->Word = "garrote";
                break;
            case "grieve":
                $this->Word = "grief";
                break;
            case "censor":
                $this->Word = "censure";
                break;
            case "clamor":
                $this->Word = "clamour";
                break;
            case "lessor":
                $this->Word = "lease";
                break;
            case "locomotor":
                $this->Word = "locomotion";
                break;
            case "misdemeanor":
                $this->Word = "demeanor";
                break;
            case "pollinate":
                $this->Word = "pollen";
                break;
            case "salvor":
                $this->Word = "salvage";
                break;
            case "secretor":
                $this->Word = "secrete";
                break;
            case "sensor":
                $this->Word = "sense";
                break;
            case "visor":
                $this->Word = "vizor";
                break;
            case "angry":
                $this->Word = "anger";
                break;
            case "bidder":
                $this->Word = "bid";
                break;
            case "biter":
                $this->Word = "bite";
                break;
            case "bragger":
                $this->Word = "brag";
                break;
            case "breathalyse":
                $this->Word = "breathalyze";
                break;
            case "catalogue":
                $this->Word = "catalog";
                break;
            case "changer":
                $this->Word = "change";
                break;
            case "chopper":
                $this->Word = "chop";
                break;
            case "coder":
                $this->Word = "code";
                break;
            case "diner":
                $this->Word = "dine";
                break;
            case "frier":
                $this->Word = "fry";
                break;
            case "grader":
                $this->Word = "grade";
                break;
            case "gunner":
                $this->Word = "gun";
                break;
            case "hater":
                $this->Word = "hate";
                break;
            case "highjack":
                $this->Word = "hijack";
                break;
            case "hoder":
                $this->Word = "hode";
                break;
            case "hoper":
                $this->Word = "hope";
                break;
            case "lacer":
                $this->Word = "lace";
                break;
            case "later":
                $this->Word = "late";
                break;
            case "laver":
                $this->Word = "lave";
                break;
            case "letterer":
                $this->Word = "letter";
                break;
            case "libber":
                $this->Word = "lib";
                break;
            case "liner":
                $this->Word = "line";
                break;
            case "luger":
                $this->Word = "luge";
                break;
            case "lunger":
                $this->Word = "lunge";
                break;
            case "macer":
                $this->Word = "mace";
                break;
            case "mainer":
                $this->Word = "maine";
                break;
            case "maker":
                $this->Word = "make";
                break;
            case "mater":
                $this->Word = "mate";
                break;
            case "miler":
                $this->Word = "mile";
                break;
            case "miner":
                $this->Word = "mine";
                break;
            case "mitre":
                $this->Word = "miter";
                break;
            case "muser":
                $this->Word = "muse";
                break;
            case "nitre":
                $this->Word = "niter";
                break;
            case "pacer":
                $this->Word = "pace";
                break;
            case "parer":
                $this->Word = "pare";
                break;
            case "paster":
                $this->Word = "paste";
                break;
            case "phoner":
                $this->Word = "phone";
                break;
            case "piper":
                $this->Word = "bagpipe";
                break;
            case "planer":
                $this->Word = "plane";
                break;
            case "plater":
                $this->Word = "plate";
                break;
            case "poler":
                $this->Word = "pole";
                break;
            case "prater":
                $this->Word = "prate";
                break;
            case "primer":
                $this->Word = "prime";
                break;
            case "programmer":
                $this->Word = "program";
                break;
            case "raper":
                $this->Word = "rape";
                break;
            case "rider":
                $this->Word = "ride";
                break;
            case "rouser":
                $this->Word = "rouse";
                break;
            case "router":
                $this->Word = "route";
                break;
            case "rugger":
                $this->Word = "rugby";
                break;
            case "scarer":
                $this->Word = "scare";
                break;
            case "scraper":
                $this->Word = "scrape";
                break;
            case "setter":
                $this->Word = "set";
                break;
            case "shiner":
                $this->Word = "shine";
                break;
            case "shnorrer":
                $this->Word = "shnor";
                break;
            case "slater":
                $this->Word = "slate";
                break;
            case "sniper":
                $this->Word = "snipe";
                break;
            case "sparer":
                $this->Word = "spare";
                break;
            case "stager":
                $this->Word = "stage";
                break;
            case "starer":
                $this->Word = "stare";
                break;
            case "stepper":
                $this->Word = "step";
                break;
            case "striper":
                $this->Word = "stripe";
                break;
            case "synthesize":
                $this->Word = "synthesis";
                break;
            case "tamer":
                $this->Word = "tame";
                break;
            case "taper":
                $this->Word = "tape";
                break;
            case "thresh":
                $this->Word = "thrash";
                break;
            case "titre":
                $this->Word = "titer";
                break;
            case "toper":
                $this->Word = "tope";
                break;
            case "toter":
                $this->Word = "tote";
                break;
            case "trader":
                $this->Word = "trade";
                break;
            case "tranquillize":
                $this->Word = "tranquilize";
                break;
            case "tuner":
                $this->Word = "tune";
                break;
            case "twiner":
                $this->Word = "twine";
                break;
            case "wader":
                $this->Word = "wade";
                break;
            case "wager":
                $this->Word = "wage";
                break;
            case "whiner":
                $this->Word = "whine";
                break;
            case "writer":
                $this->Word = "write";
                break;
            case "canulisation":
                $this->Word = "canulization";
                break;
            case "overutilisation":
                $this->Word = "overutilization";
                break;
            case "solmisation":
                $this->Word = "solmization";
                break;
            case "tribalisation":
                $this->Word = "tribalization";
                break;
            case "admirability":
                $this->Word = "admirable";
                break;
            case "ablative":
                $this->Word = "ablate";
                break;
            case "combative":
                $this->Word = "combat";
                break;
            case "combinative":
                $this->Word = "combination";
                break;
            case "cooperative":
                $this->Word = "cooperate";
                break;
            case "creative":
                $this->Word = "create";
                break;
            case "curative":
                $this->Word = "cure";
                break;
            case "debilitative":
                $this->Word = "debilitation";
                break;
            case "decorative":
                $this->Word = "decorate";
                break;
            case "educative":
                $this->Word = "education";
                break;
            case "gustative":
                $this->Word = "gustation";
                break;
            case "illative":
                $this->Word = "illation";
                break;
            case "indicative":
                $this->Word = "indicate";
                break;
            case "laxative":
                $this->Word = "laxation";
                break;
            case "macerative":
                $this->Word = "macerate";
                break;
            case "medicative":
                $this->Word = "medicate";
                break;
            case "mutative":
                $this->Word = "mutate";
                break;
            case "optative":
                $this->Word = "option";
                break;
            case "placative":
                $this->Word = "placate";
                break;
            case "probative":
                $this->Word = "probate";
                break;
            case "reiterative":
                $this->Word = "iteration";
                break;
            case "relative":
                $this->Word = "relate";
                break;
            case "sanatarium":
                $this->Word = "sanatorium";
                break;
            case "violative":
                $this->Word = "violate";
                break;
            case "accelerative":
                $this->Word = "accelerate";
                break;
            case "absorption":
                $this->Word = "absorb";
                break;
            case "absorptance":
                $this->Word = "absorb";
                break;
            case "absorptive":
                $this->Word = "absorb";
                break;
            case "absorptivity":
                $this->Word = "absorb";
                break;
            case "spiritual":
                $this->Word = "spirit";
                break;
            case "heating":
                $this->Word = "heat";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            case "":
                $this->Word = "";
                break;
            
        }
    }
}
