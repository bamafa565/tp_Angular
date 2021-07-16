<link rel="stylesheet" href="css/bootstrap.css">
<?php
include('connexion.php');
$sql="SELECT * from qcm";
if($data=$bdd->query($sql)){
echo"
<table class='table'> 
   <thead>
   <th>id</th>
    <th>Qyestion</th>
    <th>Reponse</th>
    <th>Note</th>
   </thead>";
   
   while($lis=$data->fetch(PDO::FETCH_NUM)){

    echo "<tbody><tr><td>".$lis["0"]."</td><td>".$lis['1']."</td><td>".$lis['2']."</td><td>".$lis['3']."</td></tr></tbody"; 
}
echo "</table>";
}
?>

