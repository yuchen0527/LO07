<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <style>
            .container{
                padding-top: 20px;
                background-color: lemonchiffon;
                width: 90%;
            }
        </style>
        <title><?php echo $titre; ?></title>
    </head>
    <?php
require ('tp06_biblio_formulaire_bt.php');

$titre = "Formulaire pour le planning des soutenance";
?>

    <body>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $titre; ?></h3>
                </div>
            </div> 
            
            <?php
            form_begin("lo07", "get", "tp06_planning_action.php");
            form_select("JourLabel", "jourlabel", "multiple", 5, listeJourLabel());
            form_select("JourIndice", "jourIndice", "multiple", 5, listeJourIndice());
            form_select("Mois", "mois", "multiple", 3, listeMois());
            form_select("Séance", "seance[]", "multiple", 6, listeSeance());
            echo '</br>';
            form_input_reset("effacer");
            echo '    ';
            form_input_submit("envoyer");
            form_end();
            ?>
        </div>

    </body>
</html>
<?php
function listeJourLabel(){
    $jour=array("lundi","mardi","mercredi","jeudi","vendredi");
    return $jour;
}
function listeJourIndice(){
    $list=array();
    for($i=1;$i<=31;$i++){
        array_push($list, $i);
    }
    return $list;
}
function listeMois(){
    $mois=array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
    return $mois;
    
}
function listeSeance(){
    $liste=array();
    for($i=8;$i<=17;$i++){
        $j=1;
        for($j=1;$j<=3;$j++){
            if($j==1){
                array_push($liste,$i."h00");
            }
            elseif($j==2){
                array_push($liste, $i."h20");
            }
            else{
                array_push($liste, $i."h40");
            }
        }
    }
    return $liste;
    
}
?>