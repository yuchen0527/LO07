<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $_SESSION['isi']="informatique et système d'information";
        $_SESSION['liste']=array("ISI","RT","GI","GM","MTE");
        ?>
        <a href="analyse_superglobales">hello</a>
    </body>
</html>
