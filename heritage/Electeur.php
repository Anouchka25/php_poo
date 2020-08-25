<?php
//Classe electeur
class Electeur extends Personne {
 
    public $bureau_de_vote;
    public $vote;
 
function __construct($nom,$prenom,$bureau_de_vote) {
 
    parent::__construct($nom, $prenom);
    $this->setBureauDeVote($bureau_de_vote);
 
}
 
//setter
public function setBureauDeVote($bureau_de_vote){
    $this->bureau_de_vote = $bureau_de_vote;
}
 
//getter
 
public function getBureaudeVote() {
    return $this->bureau_de_vote;
}
 
//methode boolean definissant si un electeur a voté
public function aVoter() {
    $this->vote=TRUE; 
}
 
public function isVoter(){
 
    if($this->vote){
    echo "L'électeur ".$this->getNom(). " ". $this->getPrenom(). " a voté dans le bureau ".$this->getBureauDeVote() ."<br>";
}
else {
    echo "L'électeur ".$this->getNom(). " ". $this->getPrenom(). " est bien inscrit dans le bureau ".$this->getBureauDeVote() .", mais il n'a pas voté <br>";
 
}
}
 
}
