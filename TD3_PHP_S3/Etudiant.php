<?php
class Etudiant extends Personne{
    protected $numEtu, $ref, $formation, $groupe; 
    
    public function __construct($n, $num, $r){
        parent::__construct($n);
        $this->numEtu=$num;
        $this->ref=$r;
    }
    
    public function punition($p , $n){
        for($i =1 ; $i<=$n;$i++){
            printf($i . ") ".$p . "<br>");
        }
    } 
    
    
    
}