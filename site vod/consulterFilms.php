<!DOCTYPE html>
<?php

?>
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
        <br />
        <br />
        <?php



        ?>
        <table>
            <tr>
            	<td>
            		Numero Film
            	</td>
                <td>
                    Titre Film
                </td>
                <td>
                    Année de sotie
                </td>
                <td>
                    Nom réalisateur
                </td>
    	<?php
    		try {
			$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
			$sql = 'select * from Film' ;
			$resultat = $bd->query( $sql ) ;
			$lignes = $resultat->fetchAll( PDO::FETCH_ASSOC ) ;
			foreach ($lignes as $key => $uneLigne) {
				echo "<tr>";
				foreach ($uneLigne as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";			
			}
			unset( $bd ) ;
			} catch ( PDOException $e ) {
				die( 'Erreur : ' . $e->getMessage() ) ;
			}




            
    		
            /*foreach($lignes as $n => $ligne){
                $film = explode(":", $ligne);
                
        }*/
    	?>
        </table>
		
		
	</body>
</html>
