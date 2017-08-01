<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=3g;charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO rbs (NOM,BANDE_PASSANTE,ADRESSE_IP,INDOOR_OUTDOOR,DATE_MISE_SERVICE,NOMBRE_CELL) VALUES(?,?,?,?,?,?)');
$req->execute(array($_POST['nom'],$_POST['BP'],$_POST['IP'],$_POST['choix'],$_POST['Date'],$_POST['nb']));

$reponse = $bdd->query('SELECT count(ID) FROM rbs');
$donnees = $reponse->fetch();
$nb=$donnees['count(ID)'];
$req2 =$bdd->exec('UPDATE rnc SET NOMBRE_RBS="'.$nb.'"');

header('Location: fin.html');
?>