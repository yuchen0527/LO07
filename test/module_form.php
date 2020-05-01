<?php
include ('tp06_biblio_formulaire_bt.php');
$titre="TP08";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title>TP08</title>
    </head>
    <body>
         <div class="container" style="background-color:#FFFAD0">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $titre ?></h3>
                </div>
            </div> 
        <?php
            form_begin("tp08", "get", "module_action.php");
            form_input_text("Sigle", "sigle", 10, "sigle");
            form_input_text("Label", "label", 10, "label");
            form_select("Catégorie", "categorie", "multiple", 4, array("CS","TM","EC","ME","CT"));
            form_input_text("Effectif", "effectif", 10, "effectif");
            form_input_submit("envoyer");
            form_end();
        ?>
         </div>
    </body>
</html>
