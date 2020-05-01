<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    <meta charset="UTF-8">
    <link href="bootstrap.css" rel="stylesheet" type="text/css"/>

    <title>module feedback</title>
</head>
<body style="background-color: #FFFDE4">
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">Module Feedback</div>
            <div class="panel-body">Liste des parametres reçus</div>
        </div>
        <table class="table-bordered" width="940"  align="center" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>name</th>
                    <th>valeur(s)</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: white">
                    <td>Sigle</td>
                    <td><?php
                        if (isset($_GET["sigle"])) {
                            echo $_GET["sigle"];
                        }
                        ?></td>
                </tr>
                <tr>
                    <td>Label</td>
                    <td><?php
                        if (isset($_GET["label"])) {
                            echo $_GET["label"];
                        }
                        ?></td>
                </tr>
                <tr style="background-color: white">
                    <td>Catégorie</td>
                    <td><?php
                        if (isset($_GET["categorie"])) {
                            
                            echo implode(";",$array);
                        }
                        ?></td>
                </tr>
                <tr>
                    <td>Effectif</td>
                    <td><?php
                        if (isset($_GET["effectif"])) {
                            echo $_GET["effectif"];
                        }
                        ?></td>
                </tr>
                
                <?php
                 var_dump($_GET["categorie"]); 
                ?>