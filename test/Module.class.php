<?php
require_once 'WebBean.interface.php';
require_once 'WebBean';

class Module{
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
}
function getSigle(){
    echo $this->sigle . PHP_EOL;
}
function getLabel(){
    echo $this->label . PHP_EOL;
}
function getCategorie(){
    echo $this->categorie . PHP_EOL;
}
function getEffectif(){
    echo $this->effectif . PHP_EOL;
}
function setSigle($value){
    $this->sigle = $value;
}
function setLabel($value){
    $this->label = $value;
}
function setCategorie($value){
    $this->categorie = $value;
}
function setEffectif($value){
    $this->effectif = $value;
}
function __construct($sigle, $label, $categorie, $effectif){
    $this->setSigle($sigle);
    $this->setLabel($label);
    $this->setCategorie($categorie);
    $this->setEffectif($effectif);
}
function __toString(){
    return "Module($this->sigle,$this->;label,$this->categorie,$this->effectif)<br/>\n";
}

?>