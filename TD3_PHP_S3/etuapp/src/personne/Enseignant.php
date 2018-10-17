<?php
namespace src\personne;

class Enseignant extends Personne{
    protected $code_discipline, $composante, $bureau;
    
    public function __construct($n, $ncode, $compo){
        parent::__construct($n);
        $this->code_discipline=$ncode;
        $this->composante=$compo;
    }
    
    
}