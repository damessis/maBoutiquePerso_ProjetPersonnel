<?php 
  $bdServeur;
  $bdUser;
  $bdMdp;
  $bdBase;
function connexion(){
	mysql_connect($bdServeur, $bdUser, $bdMdp)   
	or die("Erreur de connexion au serveur");
	mysql_select_db($bdBase)   
	or die("Erreur sur le nom de la base de données");
}
 

 ?>
