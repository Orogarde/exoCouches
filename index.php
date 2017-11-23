<?php include_once ("DataAccess/connexion.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="vues\bootstrap\css\bootstrap.css" >
    <script src="vues\bootstrap\js\bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-md-center">
    <div class="jumbotron">
  <h1 class="display-3">Les Commentaires</h1>
  
    
  
</div>
    </div>
   
    </div>

    <div class="row justify-content-md-center">
    <form id="form1" name="form1" action="index.php" method="POST" enctype="multipart/form-data" >
						<table border="1">
            <tr>
								<td><label for="commentaire">Votre commentaire : </label></td>
								<td>
									<textarea id="cmt" name="commentaire" rows="10" cols="30" placeholder="Saisissez votre commentaire ici..." >
									</textarea>
								</td>
							</tr>
            </table>
            </div>
            <div class="row justify-content-md-center">
            <input type="submit" id="smbt" name="ok" value=" ENVOYER "/>
            </div>
            <?php
				
						if (isset($_POST['ok'])&& isset ($_POST['commentaire'])) {
							ajoutercom($_POST['commentaire']);
						}
					?>
          <div class="form-group">
    <label for="exampleFormControlSelect1">Commentaires précédents:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option> 
      <?php 
      $result=Lirecom();
      foreach ($result as $row) {
        echo $row["commentaire"];
      }
      
      ?>
      </option>
     
    </select>
  </div>


</body>
</html>
