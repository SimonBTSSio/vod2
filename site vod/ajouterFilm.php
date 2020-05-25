<!DOCTYPE html>

<html lang="fr">
    <head>
    	<link rel="stylesheet" href="style/vod.css" />	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
            <a href="consulterFilms.php">
                Consulter les films
            </a>
            <a href="saisieTitreRecherche.html">
                Rechercher un Film
            </a>
            <a href="SaisieFilm.html">
                Ajouter un film
            </a>
            <a href="saisieTitreSuppression.html">
                Supprimer un film
            </a>
            <a href="vod.html">
                Accueil
            </a>
        <div>
        <br />
        <br />
        <?php
            $bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
            $nomf =  "'" . $_GET['nomF'] . "'";
            $annee = $_GET['annee']; 
            $real = "'" . $_GET['real'] . "'";
            $sql = 'select * from Film' ; 
            $resultat = $bd->query( $sql ) ;
            $lignes = $resultat->fetchAll( PDO::FETCH_ASSOC ) ;
            $numF = $lignes[count($lignes) - 1]['numFilm'] + 1;  
            if($_GET['nomF'] != "" && $_GET['annee'] != "" && $_GET['real'] != ""){
                $sql2 = "insert into Film values(" . $numF . "," . $nomf . "," .  $annee . "," . $real . ")" ;
                $bd->exec( $sql2 );
                echo "Film ajouté.";
                $test = false;
            }
            if($test){
                echo "Une information est manquante, merci de remplire le formulaire correctement !";
            }

        ?>
    	
		
		
	</body>
</html>