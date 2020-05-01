<?php

require_once 'Charte.class.php';
require_once 'WebBean.interface.php';

       class Module implements WebBean{
    //put your code here
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    private $listeErreurs=array();
    
    
    function __construct($sigle,$label,$categorie,$effectif) {
        $this->setSigle($sigle);
        $this->setLable($label);
        $this->setCategorie($categorie);
        $this->setEffectif($effectif);
    }
    function __toString() {
        return 'Sigle: '.$this->sigle.'<br>'.
                'Label: '.$this->label.'<br>'.
                'Categorie: '.$this->categorie.'<br>'.
                'Effectif: '.$this->effectif;
    }

    
    
    public function getSigle(){
        return $this->sigle;
    }
    public function setSigle($s){
        $this->sigle=$s;
    }
    public function getLabel() {
        return $this->label;
}
    public function setLable($l){
        $this->label=$l;
    }
    public function getCategorie(){
        return $this->categorie;
    }
    function setCategorie($c){
        $this->categorie=$c;
    }
    function getEffectif(){
        return $this->effectif;
    }
    function setEffectif($e){
        $this->effectif=$e;
    }

    public function createTable($table) {

        $res = "create table $table ( ";

        $res .= "  sigle varchar(6) not null, ";

        $res .= "  categorie varchar(2) check categorie in ('CS', 'TM', 'EC', 'ME', 'CT'), ";

        $res .= "  label varchar(40) not null, ";

        $res .= "  effectif integer, ";

        $res .= "  primary key (sigle)";

        $res .= ");";

        return $res;

    }

    public function pageKO() {
        Charte::html_head_bootstrap("hello");
        echo ("<h2>Votre formulaire n'est pas correct</h2>");
        foreach($this->listeErreurs as $key =>$value){
            echo ("$key=>$value</br>\n");
        }
        Charte::html_foot_bootstrap();
    }

    public function pageOK() {
        Charte::html_head_bootstrap("hello");
        echo ("<h1>Votre formulaire est correct</h1>");
        foreach ($_GET as $key=>$value){
            echo ("$key=>$value</br>\n");
        }
        Charte::html_foot_bootstrap();
    }

    public function sauveBDR($table) {
        $resultat="insert into ".$table." values(";
        $resultat.="'".$this->sigle."',";
        $resultat.="'".$this->label."',";
        $resultat.="'".$this->categorie."',";
        $resultat.="'".$this->effectif."')";
        return $resultat;
    }

    public function sauveTXT() {
        $resultat= $this->sigle.";";
        $resultat.= $this->label.";";
        $resultat.= $this->categorie.";";
        $resultat.= $this->effectif.";";
        return $resultat;
    }

    public function sauveXML($file) {
        return "xml";
    }

    public function valide() {
        $resultat=TRUE;

        $this->sigle= filter_input(INPUT_GET,"sigle", FILTER_SANITIZE_STRING);
        $this->label= filter_input(INPUT_GET,"label", FILTER_SANITIZE_STRING);
        $this->categorie= filter_input(INPUT_GET,"categorie", FILTER_SANITIZE_STRING);
        $this->effectif= filter_input(INPUT_GET,"effectif", FILTER_SANITIZE_STRING);
        if(strlen( $this->sigle)==0){
            $resultat=FALSE;
            $this->listeErreurs["sigle"]="Sigle n'est pas defini.";
        }
         if(strlen( $this->label)==0){
            $resultat=FALSE;
            $this->listeErreurs["label"]="Label n'est pas defini.";
        }
         if(strlen( $this->categorie)==0){
            $resultat=FALSE;
            $this->listeErreurs["categorie"]="Categorie n'est pas defini.";
        }
         if(strlen( $this->effectif)==0){
            $resultat=FALSE;
            $this->listeErreurs["effectif"]="Effectif n'est pas defini.";
        }
        return $resultat;
    }

}

