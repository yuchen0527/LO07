<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'tp06_biblio_formulaire_bt.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.css" rel="stylesheet" >
        <style>
            .container{
    padding-top: 80px;
    background-color: lemonchiffon;
    width: 90%;
  }
        </style>
    </head>
    <body>
        <?php
        $nombre=$_GET["nombre"];
        ?>
        <div class="container">
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Data</h3>
                </div>
                 <div class="panel-body">
                     
                     <?php
                     form_begin("lo12", "get","tp06_tournoi_action" );
                     for($i=1;$i<=$nombre;$i++){
                         form_input_text("nom_$i", "nom_$i", "15", "Nom");
                         form_input_text("prenom_$i", "prenom_$i", "15", "Prenom");
                         form_input_text("email_$i", "email_$i", "15", "Email");
                     }
                     form_input_submit("Submit");
                     form_end();
                     ?>
                 </div>
                 
            </div>
            
            
            
        </div>
    </body>
</html>
<?php

?>