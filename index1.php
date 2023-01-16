    <!DOCTYPE html> 
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

    <?php 
        include ("head.php");
    ?>

    <body>
        <div id="divPrincipal">
            <div id="divTitre">
                <?php
                    echo date("d F Y"); // Affiche la date du jour
                ?> 
            </div>
            
            <div id="divMenus">
                <a href="index.php">|&nbsp;<i class="fa fa-home" aria-hidden="true"></i>accueil&nbsp;&nbsp;</a>
                <a href="t-shirt.php">|&nbsp;<i class="fa fa-clone" aria-hidden="true"></i>t-shirt personnalisés &nbsp;|&nbsp;</a>
                <a href="boutique.php">&nbsp;<i class="fa fa-shopping-bag" aria-hidden="true"></i>boutique &nbsp;|&nbsp;</a>
                <a href="panier.php">&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>panier&nbsp;|</a>
                <a href="perso.php">&nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i>votre espace perso&nbsp;|&nbsp;</a>
                <a href="mailto:damessisam@yahoo.com">&nbsp;<i class="fa fa-phone" aria-hidden="true"></i>contact&nbsp;|&nbsp;</a>
            </div>
            
            <div id="divBandeau"> 
                 <figure>
                    <img src="images/bandeau1.jpg" alt="">
                    <img src="images/bandeau2.jpg" alt="">
                    <img src="images/bandeau0.jpg" alt="">
                    <img src="images/bandeau3.jpg" alt="">
                </figure>
            </div>
            <div id="divPostits">
                <a href="tee-shirt.php">
                    <div id="divPostit1" class="divPostit petitTitre"><img src="images/menu1.png" alt="t-shirt personnalisé">t-shirt personnalisé</div>
                </a>
                <a href="boutique-maboutiqueperso.php">
                    <div id="divPostit2" class="divPostit petitTitre"><img src="images/menu2.png" alt="boutique">boutique</div>
                </a>

                <a href="panier-maboutiqueperso.php">
                    <div id="divPostit3" class="divPostit petitTitre"><img src="images/menu3.png" alt="panier">panier</div>
                </a>
                <a href="personnelle-maboutiqueperso.php">
                    <div id="divPostit4" class="divPostit petitTitre"><img src="images/menu4.png" alt="votre espace perso">votre espace perso</div>
                </a>
            </div>

            <div id="divIdent">
                <div id="divTextIdent">
                    <div class="petitTitre">déjà client</div><br>
                    <div class="petitTexte">
                      <form method="post"  action="serveur.php">
                        Nom:<input name="nom-login" id="nom-login" type="text" maxlength="20" size="10" class="petitTexte" /> <br>
                        Mot de passe:<input name="password-login" id="password-login" type="password" maxlength="20" size="4" class="petitTexte"/>
                        <input id="cmdOk" type="submit" class="petitTexte" size="2" value="ok" />
                        
                      </form>
                    </div>
                </div>
                <div id="divTextBienvenu">
                    <div class="petitTitre">bienvenue</div><br>
                    <div class="petitTexte">
                        bonjour <label id="lblLogin"></label><br /><br />
                        <a href="#" id="aDeconnecter">se déconnecter</a>
                    </div>
                </div>
            </div>

            <div id="divNews">
                <div id="divImgNews"></div>
                <div id="divTextNews" class="petitTexte">
                <?php 
                $lesnews = new XMLReader();
                $lesnews->open("xml/news.xml");
                $message = "";
                while ($lesnews->read()) {
                    if ($lesnews->nodeType == XMLReader::ELEMENT) {
                        switch ($lesnews->localName) {
                                case 'item':
                                   $message = "";
                                   echo "$message";
                                                
                                   break;
                                case 'title':
                                    $message .= "<strong>" . $lesnews->readInnerXML() . "</strong><br />";

                                    break;
                                case 'description':
                                    $message .= $lesnews->readInnerXML() . "<br /><br/>";
                                                

                                    break;
                                case 'pubDate':
                                    $message = $lesnews->readInnerXML() . ":" . $message;
                                    echo "$message";

    					 		  	break;
    					 		  			
    					 		default:
    					 		  	# code...
                                    break;
                        }
                    }
                }
    					 		  		
    					 		  		$lesnews->close();


    					 		  ?>
                    
                </div>
            </div>
            <div id="divLiens">
      <img src="images/lien.png" alt="Liens" class="imageLiens">
      <div id="divTextLiens">
        <div class="divLienTitre">MES LIENS FAVORIS</div>
        <br>
        <div class="divLiensText">
          <a href="http://www.meteofrance.com/">Météo France: les meilleurs prévisions</a>
          <br>
          <a href="http://www.horlogeparlante.com/">Horloge parlante: soyez à l'heure</a>
        </div>
      </div>
    </div>

    <?php include("foot.php"); ?>
    </html>