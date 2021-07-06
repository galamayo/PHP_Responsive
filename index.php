<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" type="image" href="images/daria_logo3.png" />
   <link rel="stylesheet" type="text/css" href="css/accueil.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript">
	function sayHello() {alert("Hello World")}</script>
   <title>DariaDrive</title>
 </head>
 <body>
   <div id ="page" class="container-fluid">
	 <?php include("pages/menu.php");?>
	 <?php

  // On définit le tableau contenant les pages autorisées
  // ----------------------------------------------------
    $pageOK = array('connexion' => 'pages/connexion.php',
                  'accueil' => 'pages/accueil.php',
				  'presentation' => 'pages/presentation.php',);

  // On teste que le paramètre d'url existe et qu'il est bien autorisé
  // -----------------------------------------------------------------
  if ( (isset($_GET['page'])) && (isset($pageOK[$_GET['page']])) ) {
    include($pageOK[$_GET['page']]);   // Nous appelons le contenu central de la page
  } else {
    include('pages/accueil.php');   // Page par défaut quant elle n'existe pas dans le tableau
  }

?>
	
	 <?php include("pages/footer.php");?>  
  </div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </body>
</html>