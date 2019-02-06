<?php

class Thesaurus
{
    private $thesaurus;

    function Thesaurus(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) 
    {
        if(!empty($this->thesaurus[$word]))
        {
            $synonyms['word'] = $word; 
          $synonyms['synonyms'] = $this->thesaurus[$word];
          // $test =  array_unshift($synonyms,$word);
          $synonyms = json_encode($synonyms);
           return $synonyms;
        }
        else
        {
            $synonyms['word'] = $word;
            $synonyms['synonyms'] =[];
            $synonyms = json_encode($synonyms);
            return $synonyms;
        }
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]
);

print_r($thesaurus->getSynonyms("big"));

echo "\n";
print_r($thesaurus->getSynonyms("agelast"));