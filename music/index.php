<?php

// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

use \App\Controllers\ArtistController;

/**
 * - Hämta ut alla artister och loopa över dem
 * - För varje artist skriva ut artistens namn och ha en länk till en enskild artists sida
 * - (Länk för att skapa en artist)
*/

$artistController = new ArtistController($dbh);
$artists = $artistController->getArtists();

?>

<h2>Artister</h2>
<ol>
	<?php
		foreach ($artists as $artist) {
			?>
				<li>
					<a href="artist.php?artist_id=<?php echo $artist->getId(); ?>">
						<?php echo $artist->getName(); ?>
					</a>
				</li>
			<?php
		}
	?>
</ol>

<!--
<a href="create_artist.php">Skapa ny artist</a>
-->

<?php

// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
