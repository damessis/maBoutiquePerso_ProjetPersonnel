	<?php include("head.php"); ?> 

	<div id="divBandeau"> 
	  <figure>
	    <img src="images/bandeau1.jpg" alt="">
	    <img src="images/bandeau2.jpg" alt="">
	    <img src="images/bandeau0.jpg" alt="">
	    <img src="images/bandeau3.jpg" alt="">
	  </figure>
	</div>

	<table>
	  <tr>
	    <td>
	      <div id="divExplication" style="width: 480px; height: 80px; background-color: white;">
	        <p style="text-align: center; background-color: grey;">Choisissez vos articles</p>
	        <p style="font-size: x-small; color:black">
	          vous pouvez voir l'articles en grand en passant la sousris sur l'image <br>
	          cliquez sur + pour ajouter l'article au panier<br>
	          il n'y a qu'un exemplaire de chaque article vendu
	        </p>
	      </div> 
	      <br>
	      <div id="divArticle" style="width: 480px; height: 200px; background-color: white; overflow:auto;">
	        <?php 
	          $dir = "images/articles";
	          $repo = opendir($dir);
	          
	          while (false !== ($filename = readdir($repo))) {
	            $file[] = $filename;
	          }
	          sort($file);
	          $images = preg_grep('/\.jpg$/i', $file);
	          foreach ($images as $image) {
	            $infos = exif_read_data("$dir/$image", 0, true);
	            $titre = $infos["IFD0"]["Titre"];
	            $objet = $infos["IFD0"]["objet"];
	            $commentaire = $infos["IFD0"]["Commentaires"];
	            echo "<img src='$dir/$image' style='width:40px;height:40px;'>";
	            echo $titre;
	          }
	        ?>
		</div>
				</td>
				<td>
					<div id="divSelection" style=" top:250px;left:500px;width: 190px;height: 220px;background-color: white;">
						<p style="text-align: center;background-color: grey;">Votre sélection</p>
					</div>
				</td>
			</tr>
		</table>
	<?php include("foot.php");
	 ?> 