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
            $nom = "'" . $_GET['nomF'] . "'";
            $bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
            $sql = 'select * from Film' ; 
            $resultat = $bd->query( $sql ) ;
            $lignes = $resultat->fetchAll( PDO::FETCH_ASSOC ) ;
            $sql2 = "delete from Film where titre = " . $nom;
            $bd->exec( $sql2 );
            echo "Film Supprimé";
        ?>
    	
		
		
	</body>
</html>