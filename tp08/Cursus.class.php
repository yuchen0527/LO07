<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cursus{
    private $listeModules;
    function __construct() {
        $this->listeModules=array();
    }
    function addModule($module){
        $sigle=$module->getSigle();
        $this->listeModules["$sigle"]=$module;
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
            $result=$result."addmodoule:"."Module(".$valeur->getSigle().",".$valeur->getLabel().",".$valeur->getCategorie().",".$valeur->getEffectif().")"."<br>";
        }
        echo $result;
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}