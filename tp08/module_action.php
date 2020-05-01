<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once 'Module.class.php'; ?>
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
        $m=new Module("a","a","a","a");
        $m->valide();
        if($m->valide()){
            $m->pageOK();
            echo ($m->sauveTXT()."</br>\n");
            echo ($m->sauveBDR("etudiants"));
        }else{
            $m->pageKO();
        }
        ?>
                </div>
        </div>
            </div>
    </body>
</html>
