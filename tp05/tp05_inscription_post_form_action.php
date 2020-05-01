<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <style>
    .container{
    padding-top: 80px;
    background-color: lemonchiffon;
    width: 90%;
  }
    .table-striped tbody tr:nth-child(odd) td,
    .table-striped tbody tr:nth-child(odd) th {
        background-color: whitesmoke;
    }
    </style>
  
    <title>Document</title>
</head>

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$sex='';
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    if(isset($_POST['sex'])){$sex=test_input($_POST['sex']);}

    }



?>


<body>
    <div class="container">
    <div class="panel panel-danger">
      <div class="panel-heading">Utilisation de tableaux</div>
      <div class="panel-body">Liste des parametres recus</div>
    </div>
        
    <table class="table table-bordered  table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>valeur(s)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>nom</td>
        <td><?php echo $_POST['nom']; ?></td>
      </tr>
       <tr>
        <td>prenom</td>
        <td><?php echo $_POST['prenom']; ?></td>
      </tr>
       <tr>
        <td>email</td>
        <td><?php echo $_POST['email']; ?></td>
      </tr>
       <tr>
        <td>date_nassance</td>
        <td><?php echo $_POST['date']; ?></td>
      </tr>
       <tr>
        <td>sexe</td>
        <td><?php echo $sex;  ?></td>
      </tr>
       <tr>
        <td>origine</td>
        <td><?php echo $_POST['origine'];  ?></td>
      </tr>
       <tr>
        <td>ST07</td>
        <td><?php  if(isset($_POST['ST07'])) {echo 'oui';}
        else {echo 'non';}
        ?></td>
      </tr>
       <tr>
        <td>ST09</td>
        <td><?php  if(isset($_POST['ST09'])) {echo 'oui';}
        else {echo 'non';}
        ?></td>
      </tr>
       <tr>
        <td>ST10</td>
        <td><?php  if(isset($_POST['ST10'])) {echo 'oui';}
        else {echo 'non';}
        ?></td>
      </tr>
       <tr>
        <td>SE</td>
        <td><?php  if(isset($_POST['SE'])) {echo 'oui';}
        else {echo 'non';}
        ?></td>
      </tr>
       <tr>
        <td>modules</td>
        <td><?php $q = isset($_POST['moudules'])? $_POST['moudules'] : NULL;
               foreach ($q as $a) {
                   
                   if($a != end($q)) { 
                                 echo $a.', ';
                             } else {
                                   echo $a;
                      }
                      }
      
        ?></td>
      </tr>
      <tr>
        <td>textarea</td>
        <td><?php if(isset($_POST['comment'])) {echo $_POST['textarea'];} ?></td>
      </tr>
    </tbody>
    </table>
        
        
        
    </div>
  
</body>
</html>