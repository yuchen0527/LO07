<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php require_once 'Module.class.php';
require 'Cursus.class.php';
require_once 'Cursus2.class.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title></title>
         <style>
    .container{
    padding-top: 30px;
    background-color: lemonchiffon;
    width: 90%;
  }
  </style>
    </head>
    <body>
        <div class="container">
        <div class="panel panel-success">
        <div class="panel-heading">
        <h3 class="panel-title">Les WebBean Modules</h3>
        </div>
            <div class="panel-body">
                <?php
                $c=new Cursus2();
                ?>
      
                <?php
                $m=new Module("a","a","a","a");
                $m->valide();
                $c->addModule($m);
                if($m->valide()){
                    $m->pageOK();
                    echo result($m);
                }else{
                    $m->pageKO();
                }
                ?>
                <?php
                echo '<br>';
                echo '<h2>Visualisation des modules</h2>';
                
                foreach ($_SESSION["cursus"] as $key => $value) {
                      $result=$key.":=: Module (";
                      $result.=$value->getSigle().",".$value->getLabel().",".$value->getCategorie().",".$value->getEffectif().")";
                      echo $result;
                      echo '<br>';
                }
                
                echo '<pre>';
                print_r($_SESSION["cursus"]);
                echo '</pre>';
                
                ?>
                
              
            </div>
        </div>
        </div>
    </body>
</html>
<?php
function result($m){
    $result="Creation d'un cursus et ajout d'un module ".$m->getSigle();
    $result.=":=: Module(".$m->getSigle().",".$m->getLabel().",".$m->getCategorie().",".$m->getEffectif().")";
    return $result;
    
}

?>