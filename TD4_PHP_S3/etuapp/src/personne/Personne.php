<?php
namespace src\personne;

abstract class Personne{
    protected $nom, $prenom, $age, $adress, $ville, $code, $postal, $mail, $tel, $mobile, $idSkype;
    
    public function __construct($n){
        $this->nom=$n;
    }
    
    public function __toString(){
        return "{ \"age\" :".$this->age. ", \"prenom\" :".$this->prenom.", \"nom\" :".$this->nom."}";
    }
    
    public function afficherAge(){
        printf("<br>");
        for($i = 1 ; $i<=$this->age;$i++){
            print $i . " ,";
        }
    }
    
    public function __get($att){
        if(property_exists($this,$att)){
            return $this->$att;
        }else throw new Exception("$att : n'éxiste pas");
    }
    
    public function __set($att,$val){
        if(property_exists($this,$att)){
            $this->$att = $val;
            return $this->$att;
        } else throw new Exception("$att : n'éxiste pas");
    }
}