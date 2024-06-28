<?php


$pdo = new PDO('mysql:host=localhost;dbname=validation', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/validation/src/view/CSS/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 
    
    <script>
   $(document).ready(function () {

	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});

	$('.scrollup').click(function () {
		$("html, body").animate({
			scrollTop: 0
			}, 0);
		return false;
	});


});

    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['compte'])) {
                            $identification=$_SESSION['compte'];
                            ?>
                            
                        <a class="nav-link" href="disconnect.php">déconnexion</a>
                        <?php }else{$identification='';  ?>
                        <a class="nav-link" href="connexion.php">Connexion</a>
                        <?php }  ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addAdmin.php">Ajouter un admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addClient.php">Ajouter un Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientList.php">Liste des Clients</a>
                    </li>
                    <li class="nav-item">
                       
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    