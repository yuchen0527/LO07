<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
class Cursus2{
    var $listeModules;
    var $SESSION_cursus;
    function __construct() {
       if(!isset($_SESSION["cursus"])){
           $_SESSION["cursus"]=array_merge($_SESSION["cursus"], $this->listeModules);
       }
        $this->listeModules=array();
        
    }
    function addModule($module){
       
        $sigle=$module->getSigle();
        $this->listeModules["$sigle"]=$module;
        $_SESSION["cursus"]=array_merge($_SESSION["cursus"], $this->listeModules);
    }
    
        function __toString() {
        $result="";
        foreach($this->listeModules as $key=>$valeur){
            $result=$result."Module(".$valeur->getSigle().",".$valeur->getLabel().",".$valeur->getCategorie().",".$valeur->getEffectif().")"."<br>";
        }
        return $result;
    }
    function affiche(){
        $result="";
        foreach($this->listeModules as $key=>$valeur){
            $result=$result.$key.":=: Module (".$valeur->getSigle().",".$valeur->getLabel().",".$valeur->getCategorie().",".$valeur->getEffectif().")"."<br>";
        }
        echo $result;
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}