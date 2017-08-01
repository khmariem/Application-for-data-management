<?php
if ($_POST['choix']=="BTS")
{
	header('Location: formulaire.php');
}
else if ($_POST['choix']=="3G")
{
	header('Location: formulaire1.php');
}
else if ($_POST['choix']=="4G")
{	
	header('Location: formulaire2.php');
}
else{
	header('Location: contact.php4');
}
?>