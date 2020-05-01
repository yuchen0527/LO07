<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once 'tp06_biblio_formulaire_bt.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
        <meta charset="UTF-8">
        <title>hello</title>
    </head>
    <body>
       
        
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Module</h3>
                </div>
            </div> 
            
            <?php
        form_begin("Module","get", "module_action.php");
        form_input_text("Sigle", "sigle", "10", "");
        form_input_text("Label", "label", "10", "");
        $liste=array("CS","TM","EC","ME","CT");
        form_select("Categorie", "categorie", "multiple", "5", $liste);
        form_input_text("Effectif", "effectif", "10", "");
        form_input_submit("submit");
        form_end();
        ?>
        </div>

    </body>
</html>
