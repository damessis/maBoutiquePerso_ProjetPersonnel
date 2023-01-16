<?php include("head.php");
 ?> 
<div id="divPerso" style="width: 300px;height: 300px;background-color: white;">
 	<?php 
 	connexion();
    $curseur = mysql_query('select * from client') ;
    $ligne = mysql_fetch_assoc($curseur) ;
    $contenuChamps = $ligne[$nomChamp] ;
    mysql_close() ; ?>
 </div> 
 
 <?php include("foot.php");
 ?> 
