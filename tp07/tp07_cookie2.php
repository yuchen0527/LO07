<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $datelimite=time()+3600;
        ?>
        <?php
        // put your code here
          setcookie("utt", "Troyes",$datelimite);
          setcookie("utseus", "Shanghai",$datelimite);
        ?>
        <a href="analyse_superglobales">hello</a>
    </body>
</html>
