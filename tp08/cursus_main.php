<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once 'Module.class.php';
require 'Cursus.class.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $m1=new Module("lo07", "Technologies du Web", "TM", "140");
        $m2=new Module("lo09", "Construction d'applications reparties", "TM", "24");
        $c=new Cursus();
        $c->addModule($m1);
        $c->addModule($m2);
        echo ("<h1>Definition des modules</h1>");
        echo "$c";
        echo "<h1>Definition d'un cursus</h1>";
        echo  $c->affiche();
        ?>
    </body>
</html>
