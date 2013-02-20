<?php 

require_once(dirname(__FILE__) . "/libraries/imdb.php");

$imdb = new imdb();

$post=$_POST;
$title=$post['search'];
$year=$post['movie-year']; ?>


<?php
		// Search
		$imdb->search($title, $year);

		// Look if movie exists
		if($imdb->exists())
		{
			// Listing all available vars
			echo "<h4>" . $imdb->title . "</h4>";
			$url_img = "'".$imdb->poster."'";
			echo "<img src=".$url_img." />";
			echo "<strong>Año: </strong>" . $imdb->year . "</br>";
			echo "<strong>Restricción: </strong>" . $imdb->rated . "<br>";
			echo "<strong>Fecha de lanzamiento: </strong>" . $imdb->released . "<br>";
			echo "<strong>Duración: </strong>" . $imdb->runtime . "<br>";
			echo "<strong>Género: </strong>" . $imdb->genre . "<br>";
			echo "<strong>Director: </strong>" . $imdb->director . "<br>";
			echo "<strong>Guión: </strong>" . $imdb->writer . "<br>";
			echo "<p><strong>Actores principales: </strong>" . $imdb->actors . "</p>";
			echo "<p><strong>Sinopsis: </strong>" . $imdb->plot . "</p>";
			echo "<a id='single_image' href=".$url_img.">Ver el poster de la película</a>";
			
		}
		else
		{
			echo "No existe una película con ese nombre. Por favor, intenta con una nueva palabra. </br> Para resultados más exactos utiliza la casilla Año.";
		}

?>