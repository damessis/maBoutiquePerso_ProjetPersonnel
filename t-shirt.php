		<html>
		<head>
		  <?php include("head.php");?>
		</head>
		<body>
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
		      <td width="400">
		        <div id="divInt" style=" top:180px;left:0px;background-color: white;">
		          <p style="background-color: grey;text-align: center;">Créez votre propre t-shirt personnalisé</p> 
		          <p style="font-size: x-small;color:black;">Selectionnez une image pour l'ajout sur le t-shirt<br>
		          positionnez et redimensionnez l'image (double clique pour supprimer)</p>
		        </div>
		      </td>
		      <td>
		        <div id="divPallette" style="top:200px;width: 60px;height: 60px;background-color:white; cursor: pointer;">
		          <?php 
		          $dir = "images/palette";
		          $repo= opendir($dir);
		          while (false!==($filename=readdir($repo))) {
		            $file[]=$filename;
		          }
		          sort($file);
		          $images=preg_grep('/\.jpg$/i',$file);
		          foreach ($images as $image) {
		            echo "<img src='$dir/$image' id='$image'>";
		          }
		          ?>
		        </div>
		      </td>
		    </tr>
		    <tr>
		      <td width="100">
		        <div id="divTshirt">
		          <script type="text/javascript" src="teeshirt.js"></script>
		        </div>
		        <div id="divAjoutSurShirt" style="visibility:hidden;">
		        </div>
		      </td>
		      <td>
		        <div id="divAjout" style="top:280px;left:320px;width: 200px;height: 190px; background-color: white;overflow: auto;cursor:pointer;">	
		          <?php 
		          $dir = "images/ajouts";
		          $repo= opendir($dir);
		          while (false!==($filename=readdir($repo))) {
		            $file[]=$filename;
		          }
		          sort($file);
		          $images=preg_grep('/\.png$/i',$file);
		          $k=0;
		          foreach ($images as $image) {
		            echo "<img src='$dir/$image' id='$image' style ='width:60px;height:60px;'>";
		            $k++;
		          }
		          ?>
		        </div>
		        <div id="divVisuel" style="visibility:hidden;">
		        </div>
		      </td>
		      <td>

				<div id="divSelc" style=" top:230px;left:540px;width: 150px;height: 340px; background-color: white;">
					<p style="background-color: grey; text-align: center;">Votre choix</p>
					<div class="petitTexte">Couleur:<label id="lblCouleur"></label><br><br><br><br><br><br>
		                <p id="pElements">Element:<label id="lblElement"></label></p>
					</div>
					
				</div>
			</td>
				</tr>	
				</td>
			
		</table>
	</body>
		<?php include("foot.php");?>
	</html>
