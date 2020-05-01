<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    
    <div class="container">
        <?php
        if($_GET){
        ?>
   <div class="panel panel-default">
  <div class="panel-heading">Panel pour GET</div>
  <div class="panel-body">

      
      
          
      <table class="table table-bordered  table-striped">
       <thead>
      <tr>
        <th>name</th>
        <th>valeur(s)</th>
      </tr>
      </thead>
      
      <?php
      
      
      
      
        foreach ($_GET as $key=>$val){
            echo '<tr>';
          echo '<td>'.$key.'</td>';
          if(is_array($val)){
              echo '<td>';
              foreach ($val as $a){
                  echo $a.' ';
              }
               echo '</td>';
          }
      
          else{
           if($key=="ST07")
          {
              echo '<td>oui</td>';
          }
           elseif($key=="ST10")
          {
              echo '<td>oui</td>';
          }
           elseif($key=="ST09")
          {
              echo '<td>oui</td>';
          }
           elseif($key=="SE")
          {
              echo '<td>oui</td>';
          }
          else
              {echo '<td>'.$val.'</td>';}
          
          }
          echo '</tr>';
      }
      
      
      ?>
      
      </table>
      
      <?php
      echo  '</div></div>';

        }
 else {}
      ?>
      
  </div>
 
        <div class="container">

        <?php
        if($_POST){
        ?>
   <div class="panel panel-default">
  <div class="panel-heading">Panel pour POST</div>
  <div class="panel-body">
      
      
      
          
      <table class="table table-bordered  table-striped">
       <thead>
      <tr>
        <th>name</th>
        <th>valeur(s)</th>
      </tr>
      </thead>
      
      <?php
      
      
      
      
        foreach ($_POST as $key=>$val){
            echo '<tr>';
          echo '<td>'.$key.'</td>';
          if(is_array($val)){
              echo '<td>';
              foreach ($val as $a){
                  echo $a.' ';
              }
               echo '</td>';
          }
      
          else{
           if($key=="ST07")
          {
              echo '<td>oui</td>';
          }
           elseif($key=="ST10")
          {
              echo '<td>oui</td>';
          }
           elseif($key=="ST09")
          {
              echo '<td>oui</td>';
          }
           elseif($key=="SE")
          {
              echo '<td>oui</td>';
          }
          else
              {echo '<td>'.$val.'</td>';}
          
          }
          echo '</tr>';
      }
      
      
      ?>
      
      </table>
      
      <?php
      echo  '</div></div>';

        }
 else {}
      ?>

    </div>
  
  <div class="container">
        <?php
        if($_COOKIE){
        ?>
       <div class="panel panel-danger">
       <div class="panel-heading">SuperGlobale COOKIE</div>
       <div class="panel-body">
            <table class="table table-bordered  table-striped">
       <thead>
      <tr>
        <th>name</th>
        <th>valeur(s)</th>
      </tr>
      </thead>
           <?php
                   foreach ($_COOKIE as $key=>$val){
                        echo '<tr>';
                        echo '<td>'.$key.'</td>';
                        echo '<td>'.$val.'</td>';
                        echo '</tr>';
                   }
                   echo '</table>';
                   
           ?>
       </div>
       </div>
      <?php
        }
        else{}
      ?>
  </div>
   
          <div class="container">

        <?php
        if(isset($_SESSION)){
        ?>
   <div class="panel panel-danger">
  <div class="panel-heading">SuperGlobale SESSION</div>
  <div class="panel-body">
      
      
      
          
      <table class="table table-bordered  table-striped">
       <thead>
      <tr>
        <th>name</th>
        <th>valeur(s)</th>
      </tr>
      </thead>
      
      <?php
      
      
      
      
        foreach ($_SESSION as $key=>$val){
            echo '<tr>';
          echo '<td>'.$key.'</td>';
          if(is_array($val)){
              echo '<td>';
              foreach ($val as $a){
                  echo $a.' ';
              }
               echo '</td>';
          }
      
          else{
           echo '<td>'.$val.'</td>';
          }
          echo '</tr>';
      }
      
      
      ?>
      
      </table>
      
      <?php
      echo  '</div></div>';

        }
 else {}
      ?>

    </div>
  
</body>
</html>