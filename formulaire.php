<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title> BTS </title>
	</head>
	<style>
	form
	{
		text-align:justify;
	}
	</style>
	<body>
		<h1 align="center"> <font color="CC66FF"> Ajout d'un nouveau BTS </font> </h1>
		<form action="save.php" method="post">

		<input type="radio" name="choixdubsc" value="BSC2" id="BSC2" checked="checked" /> <label
		for="BSC2">BSC2</label>
		<input type="radio" name="choixdubsc" value="BSC3" id="BSC3" /> <label for="BSC3">BSC3</label>
		<hr/>
		<p> <font color="6699FF"> Informations détaillées du BTS </font> </p>
		<label for="nom">Nom</label> : <input type="text" name="nom" id="nom" /><br />

		<label for="idtg">Identifiant TG</label> : <input type="text" name="idtg" id="idtg" /><br />

		Nombre de cellules:
		<input type="radio" name="choix" value="1" id="1" checked="checked" /> <label
		for="1">1</label>
		<input type="radio" name="choix" value="2" id="2" /> <label
		for="2">2</label>
		<input type="radio" name="choix" value="3" id="3" /> <label
		for="3">3</label>

		
		<p> Type de configuration: </p> <input type="radio" name="typedubts" value="S44" id="S44" checked="checked" /> <label
		for="S44">S44</label>
		<input type="radio" name="typedubts" value="S444" id="S444" /> <label
		for="S444">S444</label>
		
		<p> INDOOR/OUTDOOR: </p> <input type="radio" name="inout" value="INDOOR" id="INDOOR" checked="checked" /> <label
		for="INDOOR">INDOOR</label>
		<input type="radio" name="inout" value="OUTDOOR" id="OUTDOOR" /> <label
		for="OUTDOOR">OUTDOOR</label>
		
		<p> Bande Passante: </p> <input type="radio" name="bp" value="bp900" id="bp900" checked="checked" /> <label
		for="bp900">BP900</label>
		<input type="radio" name="bp" value="bp1800" id="bp1800" /> <label
		for="bp1800">BP1800</label>

		<p> <label for="datedemiseenservice">Date de mise en service(jj/mm/aaaa)</label> : <input type="text" name="datedemiseenservice" id="datedemiseenservice" /> <br /> </p> 
		<hr/>
		<p> <font color="6699FF"> Informations détaillées de la cellule 1: </font> </p>
		<label for="nomcellule1">Nom de cellule</label> : <input type="text" name="nomcellule1" id="nomcellule1" /><br />
		<label for="cgi1">CGI</label> : <input type="text" name="cgi1" id="cgi1" /><br />

		<p> <font color="6699FF"> Informations détaillées de la cellule 2*: </font> </p>
		<label for="nomcellule2">Nom de cellule</label> : <input type="text" name="nomcellule2" id="nomcellule2" /><br />

		<label for="cgi2">CGI</label> : <input type="text" name="cgi2" id="cgi2" /><br />
		<p> <font color="6699FF"> Informations détaillées de la cellule 3*: </font> </p>
		<label for="nomcellule3">Nom de cellule</label> : <input type="text" name="nomcellule3" id="nomcellule3" /><br />

		<label for="cgi3">CGI</label> : <input type="text" name="cgi3" id="cgi3" /><br />
		<hr/>
		<p> <font color="6699FF"> Informations détaillées de la liaison MIC: </font> </p>

		<label for="rbit">RBIT</label> : <input type="text" name="rbit" id="rbit" /><br />
		
		<label for="nomreg">Nom de la réglette BSC</label> : <input type="text" name="nomreg" id="nomreg" /><br />

		<label for="posamo">Numéro amorce</label> : <input type="text" name="posamo" id="posamo" /><br />

		<label for="pospaire">Numéro paire</label> : <input type="text" name="pospaire" id="pospaire" /><br />

		Type de la liaison:
		<input type="radio" name="typemic" value="FH" id="FH" checked="checked" /> <label
		for="FH">FH</label>
		<input type="radio" name="typemic" value="Fibre" id="Fibre" /> <label
		for="Fibre">Fibre</label>
		<input type="radio" name="typemic" value="Ligne" id="Ligne" /> <label
		for="Ligne">Ligne</label>
		
	
		<p> <font color="6699FF"> Informations détaillées de la position de la réglette dans le cas d'une liaison MIC de type <i> ligne**:<br /> </i> </font> </p>
		<label for="tel">Numéro téléphone</label> : <input type="text" name="tel" id="tel" /><br />
		<label for="postrans">Position transport</label> : <input type="text" name="postrans" id="postrans" /><br />
		<label for="posdist">Position distribution</label> : <input type="text" name="posdist" id="posdist" /><br />
		<label for="posreg">Position réglette</label> : <input type="text" name="posreg" id="posreg" /><br />
		<p> <font color="6699FF"> Informations détaillées de la position de la réglette dans le cas d'une liaison MIC de type <i> FH***:<br /> </i> </font> </p>
		<label for="exta">Extrémité A</label> : <input type="text" name="exta" id="exta" /><br />
		<label for="extb">Extrémité B</label> : <input type="text" name="extb" id="extb" /><br />		
		<label for="nec">Nom de jonction NEC</label> : <input type="text" name="nec" id="nec" /><br />
		<input type="submit" value="Enregistrer" />
		
		<h6> *à remplir si et seulement si il y a deux ou trois cellules, sinon à laisser vide.
		**à remplir si et seulement si la liaison MIC est de type ligne, sinon à laisser vide.
			              ***à remplir si et seulement si la liaison MIC est de type FH, sinon à laisser vide. </h6>
		</form>
	</body>
</html>