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
            $film = array();
            $test = true;
            $leFilm = $_GET['nomF'];
            $bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
            $sql = 'select * from Film' ;
            $resultat = $bd->query( $sql ) ;
            $lignes = $resultat->fetchAll( PDO::FETCH_ASSOC ) ;
            foreach ($lignes as $key => $uneLigne) {
                foreach ($uneLigne as $value) {

                    if($value == $leFilm){
                    echo "<h1>" . $uneLigne['titre'] . "</h1>";
                    echo "Disponible en vod <br />";
                    echo "Sortie en " . $uneLigne['annee'] . "<br />";
                    echo "Réalisé par  " . $uneLigne['realisateur'] . "<br />";
                    $test = false;
                    }
                }
            }
            if($test){
                echo "Le film " . $leFilm . " n'est pas dans la base de donnée";
            }
            unset( $bd ) ;
	    

        ?>
    	
		
		
	</body>
</html>
