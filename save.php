<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=2g;charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

//restriction sur la forme avec les expressions régulières
$constraint1=eregi("([1-31])([1-12])([[:digit:]]{4})",$_POST['datedemiseenservice']);
//restriction type de configuration

//spécification de toutes les variables booléennes
if($_POST['typemic']=="Ligne")
{
	if ($_POST['exta']!=NULL && $_POST['extb']!=NULL && $_POST['nec']!=NULL && $_POST['tel']==NULL && $_POST['postrans']==NULL && $_POST['posdist']==NULL && $_POST['posreg']==NULL)
	{$bool1=true;}
	else{$bool1=false;}
}else if($_POST['typemic']=="FH")
{
	if ($_POST['exta']!=NULL && $_POST['extb']!=NULL && $_POST['nec']!=NULL && $_POST['tel']==NULL && $_POST['postrans']==NULL && $_POST['posdist']==NULL && $_POST['posreg']==NULL)
	{$bool1=false;}
	else{$bool1=true;}
}else{
	if ($_POST['exta']!=NULL || $_POST['extb']!=NULL || $_POST['nec']!=NULL || $_POST['tel']!=NULL || $_POST['postrans']!=NULL || $_POST['posdist']!=NULL || $_POST['posreg']!=NULL)
	{
		$bool1=false;
	}else{$bool1=true;}
}

$nb=1;
if($_POST['nomcellule2']!=NULL || $_POST['cgi2']!=NULL)
{
	$nb=2;
}
if($_POST['nomcellule3']!=NULL || $_POST['cgi3']!=NULL)
{
	$nb=3;
}

if($_POST['choix']!=$nb){$bool2=false;}else{$bool2=true;}

if($_POST['nom']==NULL && $_POST['idtg']==NULL && $_POST['datedemiseenservice']==NULL || $_POST['nomcellule1']==NULL || $_POST['cgi1']==NULL || $_POST['rbit']==NULL || $_POST['nomreg']==NULL || $_POST['posamo']==NULL || $_POST['pospaire']==NULL)
{
	$bool3=false;
}else{$bool3=true;}

//les requêtes sql (manque les conditions déjà initialisées)
if($constraint1)
{
	$req = $bdd->prepare('INSERT INTO bts (NOM,ID_TG,NOMBRE_CELL,DATE_MISE_SERVICE,TYPE_CONFIG,INDOOR_OUTDOOR,BANDE_PASSANTE,NOM_BSC) VALUES(?,?,?,?,?,?,?,?)');
	$req->execute(array($_POST['nom'],$_POST['idtg'],$_POST['choix'],$_POST['datedemiseenservice'],$_POST['typedubts'],$_POST['inout'],$_POST['bp'],$_POST['choixdubsc']));
	$reponse = $bdd->query('SELECT count(ID) FROM bts WHERE NOM_BSC="'.$_POST['choixdubsc'].'"');
	$donnees = $reponse->fetch();
	$nb=$donnees['count(ID)'];
	$req6 =$bdd->exec('UPDATE bsc SET NOMBRE_STATIONS="'.$nb.'" WHERE NOM="'.$_POST['choixdubsc'].'"');

	if ($_POST['nomcellule1']!= NULL)
	{
	$req1 = $bdd->prepare('INSERT INTO cell (ID_BTS,NOM_CELL,CGI) VALUES(?,?,?)');
	$req1->execute(array($_POST['nom'],$_POST['nomcellule1'],$_POST['cgi1']));
	}
	if ($_POST['nomcellule2']!= NULL)
	{
		$req4 = $bdd->prepare('INSERT INTO cell (ID_BTS,NOM_CELL,CGI) VALUES(?,?,?)');
		$req4->execute(array($_POST['nom'],$_POST['nomcellule2'],$_POST['cgi2']));
	}

	if ($_POST['nomcellule3']!= NULL)
	{
		$req5 = $bdd->prepare('INSERT INTO cell (ID_BTS,NOM_CELL,CGI) VALUES(?,?,?)');
		$req5->execute(array($_POST['nom'],$_POST['nomcellule3'],$_POST['cgi3']));
	}
	$req3= $bdd->prepare('INSERT INTO liaison_mic (ID_TG,RBIT,NOM_REGLETTE_BSC,NUMERO_AMORCE,NUMERO_PAIRE,TYPE,EXTA_FH,EXTB_FH,NOM_JON_NEC_FH,NUM_TEL,POSITION_TRANSPORT,POSITION_DISTRIBUTEUR,POSITION_REGLETTE) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)');
	$req3->execute(array($_POST['idtg'],$_POST['rbit'],$_POST['nomreg'],$_POST['posamo'],$_POST['pospaire'],$_POST['typemic'],$_POST['exta'],$_POST['extb'],$_POST['nec'],$_POST['tel'],$_POST['postrans'],$_POST['posdist'],$_POST['posreg']));

	// Redirection du visiteur vers la page de fin
header('Location: fin.html');
	}
else{
		// Redirection du visiteur vers la page de fin
header('Location: fin1.html');
}

?>