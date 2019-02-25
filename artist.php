<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/boostrap.php");
// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

use App\Models\Artist;
use App\Models\Album;
use App\Models\Tracks;

/**
 * - Hämta ut info om artisten och alla hens album
 * - För varje album, skriv ut albumets namn och ha en länk till albumets sida
 * - (Länk för att skapa ett nytt album för den här artisten)
*/

$artist = Artist::find($_REQUEST['artist_id']);
$albums = Album::where('artist_id', $_REQUEST['artist_id'])->get();

?>
<h2><?php echo $artist->name;?></h2>
<p><i style='color:rgb(240,240,240)';>Birthday:</i></p><?php echo $artist->birthday;?></p>

<h3 style='color:red';>Albums</h3>
<ol>
	<?php
		foreach ($albums as $album) {
			?>
				<li>
			
				<?php echo $album->name; ?><br>
				<h3 style='color:red';>Genre</h3>
				<?php echo $album->genre;?>
				<h3 style='color:red';>Year</h3>
				<?php echo $album->year;?><hr>
				</li>
			<?php
		}
	?>
</ol>
<style>
body{
	background-color: rgb(170,170,170);
}
</style>

<a href="index.php">&laquo; Tillbaka</a>

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");