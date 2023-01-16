<?php
include("php/init.php");
?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="DAMESSI SAMUEL">
  <meta name="keywords" content="boutique, t-shirt">
  <meta name="description" content="Vente de t-shirts et objets de collection">
  <meta name="date" content="2009-08-01T12:10:15+01:00">
  <script type="text/javascript" src="maboutique.js"></script>
  <noscript>
    Activez le JavaScript pour visualiser ce site
  </noscript>
  <link rel="stylesheet" type="text/css" href="principal.css">
  <link rel="alternate" type="application/rss+xml" title="news de ma boutique" href="rss.xml">
  <link rel="shortcut icon" type="image/x-icon" href="images/boutiqueIcon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Ma Boutique Personnelle</title>
</head>

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
  </div>
</body>
