<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> RBS 3G </title>
</head>
<style>
	form
	{
		text-align:center;
		text-align:justify;
	}
</style>
<body>
<h1 align="center"> <font color="CC66FF"> ajout d'un nouveau RBS pour 3G </font> </h1>
<form action="save1.php" method="post">
<h3> <font color="6699FF"> Informations détaillées du RBS </font> </h3>
<label for="nom">Nom</label> : <input type="text" name="nom" id="nom" /><br />
<label for="BP">Bande Passante</label> : <input type="text" name="BP" id="BP" /><br />
<label for="IP">Adresse IP</label> : <input type="text" name="IP" id="IP" /><br />
<label for="Date">Date de mise en service</label> : <input type="text" name="Date" id="Date" /><br />
Indoor/Outdoor:
<select name="choix">
<option value="IN" selected="selected">Indoor</option>
<option value="EXT">Outdoor</option>
</select>
<label for="nb">Nombre de cellules</label> : <input type="text" name="nb" id="nb" /><br />
<input type="submit" value="envoyer">
</form>
</body>
</html>