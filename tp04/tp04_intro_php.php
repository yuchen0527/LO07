<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        a:link{
            color: white;
        }
        
        
      .container{
    padding-top: 60px;
    background-color: lemonchiffon;
    width: 90%;
  }
        .ul{
            list-style-type:none;
           /*margin:100px auto无效,不能使ul左右居中*/
            font-size:14px;
        }
        .barre{
            float:left;/*改动的地方*/
            width:120px;
            padding:10px;
        }
    </style>
</head>
<body>
   <div>
        <!--导航栏部分-->
        <ul class="navbar-fixed-top navbar-inverse ul">
            
            <li class="barre" style="color: darkgray;">Web 04</li>
            <li class="barre"><a href="#1">Exercice 1</a></li>
            <li class="barre"><a href="#2">Exercice 2</a></li>
            <li class="barre"><a href="#3">Exercice 3</a></li>
            <li class="barre"><a href="#4">Exercice 4</a></li>
            <li class="barre"><a href="#5">Exercice 5</a></li>
        </ul>

    </div>
    
    
    
    <?php
    $nom="YU";$prenom="Chen";$age=20;$ingenieur=1;?>
<div class="container">
     <a name="#1"></a>
    <div class="panel panel-success">
      <div class="panel-heading">Exercice 1: validation de la configuration div-isi</div>
      <div class="panel-body"><?php echo "Bonjour a tous" ?></div>
  </div>
      <a name="#2"></a>
     <div class="panel panel-primary">
       
      <div class="panel-heading">Exercice 2</div>
      <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item">Nom:<?php echo($nom)?></li>
            <li class="list-group-item">Prenom:<?php echo($prenom)?></li>
            <li class="list-group-item">Age:<?php echo($age)?></li>
            <li class="list-group-item">ingenieur:<?php echo($ingenieur) ?></li>
          </ul>
      </div>
    </div>
    
    <?php
      $capitalesAfrique=array("Alger","Bamako","Conakry","Cotonou","hhh","Freetown","Kampala","Lome","Nairobi","Yamoussoukro");
      array_push($capitalesAfrique, "Maputo");
      unset($capitalesAfrique[4]);
    ?>

       <a name="#3"></a>
    <div class="panel panel-success">
      <div class="panel-heading">Exercice 3: tableau des capitables d'afrique</div>
      <h3 style="padding-left:5px;color: #3399ff">Print_r</h3>
      <div class="panel-body"><pre><?php print_r($capitalesAfrique) ?></pre></div>
      <br>
       <div style="padding: 10px;">
             <h3>foreach</h3>
       <ul class="list-group">
        <?php 
            foreach ($capitalesAfrique as $val){
                echo  '<li class="list-group-item">'.$val.'</li>';
            }
        ?>
        </ul> 
        <h3>Implode</h3>
         <div class="panel panel-warning">
             <div class="panel-heading"><?php echo implode(",", $capitalesAfrique); ?></div>
         </div>
        <h3>Acces aux donnees</h3>
        
        <div class="panel panel-danger">
            <div class="panel-body">Nombre d'elements=<?php echo count($capitalesAfrique); ?></div>
      
            <div class="panel-heading">Tableau trie=<?php sort($capitalesAfrique);
              echo implode(",", $capitalesAfrique);?></div>
          
        </div>
        </div>
<?php
    $capitalesEurope=array("France"=>"Paris","Italie"=>"Rome","Belgique"=>"Bruxelles","Espagne"=>"Madrid","Allemagne"=>"Berlin","Portugal"=>"Lisbonne");
 
?>

    
  </div>
    <?php
    $capitalesEurope=array("France"=>"Troyes")+$capitalesEurope;
    ?>
     <a name="#4"></a>
    <div class="panel panel-success">
    <div class="panel-heading">EX04</div>
   
        
       <div class="panel-body">
           <?php echo "La capitale d'Allemagne est ",$capitalesEurope["Allemagne"]; ?>
           <br>
           
           <pre><?php foreach ($capitalesEurope as $key=>$value)
    {
     echo $key."=>".$value."<br>";
    }
        
        ?> </pre>
           <h4>Liste d'Cle</h4>
           <ul class="list-group">
               <?php   makeListCle($capitalesEurope);  ?>
           </ul>
           <h4>Liste de Valeur</h4>
           <ul class="list-group">
               <?php makeListValeur($capitalesEurope);  ?>
           </ul>
    </div>
    
</div>
      <a name="#5"></a>
    <div class="panel panel-success">
        <div class="panel-heading">Exercice 5:fonctions</div>
        <div class="panel_body">
            <div style="padding: 10px;">
                    <?php echo badge_danger("web", "aaaaaa");
                           echo '<br>';
                             foreach ($capitalesAfrique as $val){
                                 echo badge_danger($val, $val);
     
                                  }  
                    ?>
            </div>
          
    
        </div>
    </div>
   
  
</div>
  
    <?php
    function badge_danger($label,$compteur){
        $a= strlen($compteur);
        return "<button type='button' class='btn btn-danger'>".$label."<span class='badge'>".$a."</span></button>";
    }
    ?>
    
    <?php
    function makeListCle($table){
        foreach($table as $key=>$value){
           echo "<li class='list-group-item'>".$key."</li>";
        }
    }
     function makeListValeur($table){
        foreach($table as $key=>$value){
          echo  "<li class='list-group-item'>".$value."</li>";
        }
    }
    
    ?>
    
</body>
</html>