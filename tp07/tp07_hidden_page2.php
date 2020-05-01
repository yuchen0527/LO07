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
        <a href="<?php 
        $url="analyse_superglobales.php?";
        
        foreach ($_GET as $key => $value) {
            if($key!="UTT"&&$key!="UTC"&&$key!="UTBM"){
                  $url=$url.$key."=".$value."&";
            }
        }
        echo $url;
        ?>">Pour <?php bt()  ?></a>
    </body>
</html>
<?php
function bt(){
    if(isset($_GET['UTT'])){
        echo ('UTT');
    }
    elseif(isset ($_GET['UTC'])){
        echo ('UTC');
    }
    else{
        echo 'UTBM';
    }
}
?>